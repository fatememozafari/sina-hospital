<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'id_code'=>'0001',
            'title'=>'دوره شماره1',
            'slug'=>'course1',
            'type'=>'SPECIALISED',
            'start_at'=>'2022/12/01',
            'description'=>'---',
            'teacher_id'=>'1',
            'user_id'=>'1',
            'rate'=>'0',
            'duration'=>'2',

        ]);

        Course::create([
            'id_code'=>'0002',
            'title'=>'دوره شماره2',
            'slug'=>'course2',
            'type'=>'SEMI_SPECIALISED',
            'start_at'=>'2022/11/01',
            'description'=>'---',
            'teacher_id'=>'1',
            'user_id'=>'1',
            'rate'=>'0',
            'duration'=>'2',


        ]);

        Course::create([
            'id_code'=>'0003',
            'title'=>'دوره شماره3',
            'slug'=>'course3',
            'type'=>'GENERAL',
            'start_at'=>'2022/10/01',
            'description'=>'---',
            'teacher_id'=>'1',
            'user_id'=>'1',
            'rate'=>'0',
            'duration'=>'2',


        ]);

        Course::create([
            'id_code'=>'0004',
            'title'=>'دوره شماره4',
            'slug'=>'course4',
            'type'=>'SPECIALISED',
            'start_at'=>'2022/09/01',
            'description'=>'---',
            'teacher_id'=>'1',
            'user_id'=>'1',
            'rate'=>'0',
            'duration'=>'2',


        ]);
    }
}
