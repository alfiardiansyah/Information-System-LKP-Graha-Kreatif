<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Program;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Create default admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Graha Kreatif',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'is_approved' => true,
                'approved_at' => now(),
                'email_verified_at' => now(),
            ]
        );

        // Create approved sample user
        $john = User::firstOrCreate(
            ['email' => 'john@example.com'],
            [
                'name' => 'John Doe',
                'password' => Hash::make('password'),
                'role' => 'user',
                'tanggal_lahir' => '2000-01-15',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'is_approved' => true,
                'approved_at' => now(),
                'approved_by' => $admin->id,
                'email_verified_at' => now(),
            ]
        );

        // Create pending sample user (for demoing admin approval workflow)
        $jane = User::firstOrCreate(
            ['email' => 'jane@example.com'],
            [
                'name' => 'Jane Smith',
                'password' => Hash::make('password'),
                'role' => 'user',
                'tanggal_lahir' => '2001-05-20',
                'alamat' => 'Jl. Sudirman No. 45, Bandung',
                'is_approved' => false,
                'email_verified_at' => now(),
            ]
        );

        // Enroll John Doe in a program if not already enrolled
        $webProgram = Program::where('category', 'Programming')->first();
        if ($webProgram && !DB::table('user_programs')->where('user_id', $john->id)->where('program_id', $webProgram->id)->exists()) {
            DB::table('user_programs')->insert([
                'user_id' => $john->id,
                'program_id' => $webProgram->id,
                'enrolled_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}