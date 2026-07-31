<x-layout>
    <section style="color: white; background-image: url('/img/lkp1.png'); background-size: cover; background-position: center;">
        <div style="background-color: rgba(55, 65, 81, 0.7); width: 100%; height: 100%;">
            <div style="max-width: 1200px; margin: 0 auto; padding: 5rem 1rem 8rem 1rem; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <div style="width: 100%; max-width: 50%; margin-bottom: 2.5rem; margin-left: 1.25rem;">
                    <h1 style="font-size: 2.25rem; font-weight: bold; line-height: 1.25; margin-bottom: 1rem;">Unlock Your Potential with Professional IT Training</h1>
                    <p style="font-size: 1.25rem; margin-bottom: 2rem;">Master programming skills and Microsoft Excel with LKP Graha Raya's expert-led courses designed for success in today's digital world.</p>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <a href="#courses" style="background-color: white; color: #1D4ED8; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 500; text-align: center; text-decoration: none; transition: background-color 0.3s;">Explore Courses</a>
                        <a href="https://wa.me/6281224885762" style="border: 2px solid white; color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 500; text-align: center; text-decoration: none; transition: background-color 0.3s;">Contact Us</a>
                    </div>
                </div>
                <div style="width: 100%; max-width: 50%; display: flex; justify-content: center;">
                    <img src="/img/profile/4.jpg" alt="Students learning programming" style="border-radius: 0.5rem; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3); width: 24rem; height: auto;" onerror="this.src='/api/placeholder/600/400'; this.alt='Programming training placeholder image'">
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 4rem 0; background-color: white;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="font-size: 1.875rem; font-weight: bold; color: #1E3A8A; margin-bottom: 1rem;">Welcome to LKP Graha Raya</h2>
                <p style="color: #4B5563; max-width: 640px; margin: 0 auto;">Your gateway to mastering programming and data analysis skills. Join us to enhance your career prospects and become a tech leader.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Comprehensive Curriculum</h3>
                    <p style="color: #4B5563;">Our courses cover a wide range of topics, from web development to data analysis, ensuring you gain the skills needed for today's job market.</p>
                </div>
                <div style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Expert Instructors</h3>
                    <p style="color: #4B5563;">Learn from industry professionals with years of experience who are dedicated to helping you succeed in your career.</p>
                </div>
                <div style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 1.25rem; font-weight: bold; color: #111827; margin-bottom: 1rem;">Flexible Learning Options</h3>
                    <p style="color: #4B5563;">Choose from online or in-person classes that fit your schedule, allowing you to learn at your own pace.</p>
                </div>
            </div>
        </div>

        <section id="courses" style="padding: 4rem 0; background-color: #F9FAFB;">
            <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
                <div style="text-align: center; margin-bottom: 3rem;">
                    <h2 style="font-size: 1.875rem; font-weight: bold; color: #1E3A8A; margin-bottom: 1rem;">Our Featured Courses</h2>
                    <p style="color: #4B5563; max-width: 640px; margin: 0 auto;">Comprehensive training programs designed to build your skills from the ground up</p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    <x-course-card 
                        image="/img/profile/1.jpg"
                        alt="Programming Course"
                        category="Programming"
                        title="Web Development Fundamentals"
                        description="Learn HTML, CSS, JavaScript and PHP to build modern, responsive websites from scratch."
                        price="FREE"
                        duration="12 weeks"
                        link="#"
                    />

                    <x-course-card 
                        image="/img/profile/2.jpg"
                        alt="Excel Course"
                        category="Microsoft Office"
                        title="Advanced Excel for Professionals"
                        description="Master complex formulas, pivot tables, macros, and data analysis tools in Microsoft Excel."
                        price="FREE"
                        duration="8 weeks"
                        link="#"
                    />

                    <x-course-card 
                        image="/img/profile/3.jpg"
                        alt="Laravel Course"
                        category="Framework"
                        title="Laravel Application Development"
                        description="Build robust web applications using Laravel, the popular PHP framework with MVC architecture."
                        price="FREE"
                        duration="16 weeks"
                        link="#"
                    />
                </div>

                <div style="text-align: center; margin-top: 3rem;">
                    <a href="/programs" style="display: inline-block; border: 2px solid #2563EB; color: #2563EB; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 500; text-decoration: none; transition: background-color 0.3s, color 0.3s;">View All Courses</a>
                </div>
            </div>
        </section>
    </section>
</x-layout>
