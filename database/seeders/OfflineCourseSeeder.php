<?php

namespace Database\Seeders;

use App\Models\OfflineCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfflineCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OfflineCourse::create([
            'id_code'=>'0001',
            'title'=>'دوره غیرحضوری شماره1',
            'slug'=>'offline course1',
            'type'=>'SPECIALISED',
            'start_at'=>'2022/12/01',
            'description'=>'---',
            'file'=>'/assets/images/image4.jpg',
            'rate'=>'0',
            'file_type'=>'pdf',
            'teacher_id'=>'1',
            'user_id'=>'1',

        ]);

        OfflineCourse::create([
            'id_code'=>'0002',
            'title'=>'دوره غیرحضوری شماره2',
            'slug'=>'offline course2',
            'type'=>'SEMI_SPECIALISED',
            'start_at'=>'2022/12/01',
            'description'=>'---',
            'file'=>'/assets/images/image4.jpg',
            'rate'=>'0',
            'file_type'=>'video',
            'teacher_id'=>'1',
            'user_id'=>'1',

        ]);

        OfflineCourse::create([
            'id_code'=>'0003',
            'title'=>'3',
            'slug'=>'offline course3',
            'type'=>'GENERAL',
            'start_at'=>'2022/12/01',
            'description'=>'---',
            'file'=>'/assets/images/image4.jpg',
            'rate'=>'0',
            'file_type'=>'pdf',
            'teacher_id'=>'1',
            'user_id'=>'1',

        ]);

        OfflineCourse::create([
            'id_code'=>'0004',
            'title'=>'دوره غیرحضوری شماره4',
            'slug'=>'offline course4',
            'type'=>'SPECIALISED',
            'start_at'=>'2022/12/01',
            'description'=>'---',
            'file'=>'/assets/images/image4.jpg',
            'rate'=>'0',
            'file_type'=>'video',
            'teacher_id'=>'1',
            'user_id'=>'1',

        ]);

        OfflineCourse::create([
            'id_code'=>'0005',
            'title'=>'دوره غیرحضوری شماره5',
            'slug'=>'offline course5',
            'type'=>'GENERAL',
            'start_at'=>'2022/12/01',
            'description'=>'---',
            'file'=>'/assets/images/image4.jpg',
            'rate'=>'0',
            'file_type'=>'pdf',
            'teacher_id'=>'1',
            'user_id'=>'1',

        ]);
    }
}
