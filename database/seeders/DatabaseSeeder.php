<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
//         \App\Models\Document::factory(10)->create();
//         \App\Models\Teacher::factory(10)->create();
//         \App\Models\Course::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            TeacherSeeder::class,
            CourseSeeder::class,
            DocumentSeeder::class,
            OfflineCourseSeeder::class,
            RoleSeeder::class,
            NewsSeeder::class,
            QuestionSeeder::class,
            PermissionSeeder::class,
            AsignPermissionSeeder::class,
            AsignRoleSeeder::class,

        ]);
    }
}
