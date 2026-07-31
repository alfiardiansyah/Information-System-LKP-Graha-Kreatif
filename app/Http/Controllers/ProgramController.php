<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProgramController extends Controller
{
    public function public()
    {
        // Ambil semua program untuk tampilan public
        $programs = Program::all();
        
        return view('programs.public', compact('programs'));
    }
    
    public function index()
    {
        $user = Auth::user();
        
        // Get programs the user is enrolled in
        $enrolledPrograms = $user->programs;

        Log::info('Enrolled programs count: ' . $enrolledPrograms->count());
        
        // Get all available categories first
        $allCategories = Program::select('category')->distinct()->pluck('category');
        Log::info('All available categories: ' . $allCategories);

        $interestedCategories = $enrolledPrograms->count() > 0 ? 
            $enrolledPrograms->pluck('category')->unique() : 
            $allCategories;

         Log::info('Interested categories: ' . $interestedCategories);    

        // Get suggested programs
        if ($enrolledPrograms->count() > 0) {
            // Get programs in the same categories, but not already enrolled
            $suggestedPrograms = Program::whereIn('category', $interestedCategories)
                ->whereNotIn('id', $enrolledPrograms->pluck('id'))
                ->get();
                
            // If nothing found, get some random programs as suggestions
            if ($suggestedPrograms->isEmpty()) {
                $suggestedPrograms = Program::whereNotIn('id', $enrolledPrograms->pluck('id'))
                    ->inRandomOrder()
                    ->limit(3)
                    ->get();
            }
        } else {
            // If user hasn't enrolled in any programs, show all available programs
            $suggestedPrograms = Program::inRandomOrder()->limit(6)->get();
        }
        
        Log::info('Suggested programs count: ' . $suggestedPrograms->count());
        
        return view('programs', compact('enrolledPrograms', 'suggestedPrograms'));
    }

    public function enroll(Request $request, $slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $user = Auth::user();

        if ($user->programs()->where('program_id', $program->id)->exists()) {
            return redirect()->back()->with('error', 'Anda sudah terdaftar dalam program ini.');
        }

        $user->programs()->attach($program->id, ['enrolled_at' => now()]);

        return redirect()->route('programs.index')->with('success', 'Berhasil mendaftar program.');
    }

    public function unenroll(Request $request, $slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        $user = Auth::user();

        if (!$user->programs()->where('program_id', $program->id)->exists()) {
            return redirect()->back()->with('error', 'Anda tidak terdaftar dalam program ini.');
        }

        $user->programs()->detach($program->id);

        return redirect()->route('programs.index')->with('success', 'Berhasil membatalkan pendaftaran program.');
    }
}

