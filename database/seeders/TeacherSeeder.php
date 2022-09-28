<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'name'=>'مدرس ',
            'family'=>'شماره1',
            'melli_code'=>'2222222222',
            'gender'=>'MALE',
            'mobile'=>'09121230001',
            'email'=>'teacher1@gmail.com',
            'birthday'=>'1980/01/01',
            'password'=>'$2y$10$1yx/Qp/617G9rrvSGdFaeeKixbaPMXt4DTJNxfptAqay3v1mvn4wu',
            'password_confirmation'=>'12345678',
            'address'=>'بیمارستان سینا',
            'avatar_path'=>'/assets/images/doctors/member1.png',
            'job'=>'doctor',
            'job_code'=>'0001',
            'born_in'=>'tehran',
            'personnel_number'=>'1000',
            'rate'=>'0',

        ]);

        Teacher::create([
            'name'=>'مدرس ',
            'family'=>'شماره2',
            'melli_code'=>'3333333333',
            'gender'=>'MALE',
            'mobile'=>'09121230002',
            'email'=>'teacher2@gmail.com',
            'birthday'=>'1980/01/01',
            'password'=>'$2y$10$1yx/Qp/617G9rrvSGdFaeeKixbaPMXt4DTJNxfptAqay3v1mvn4wu',
            'password_confirmation'=>'12345678',
            'address'=>'بیمارستان سینا',
            'avatar_path'=>'/assets/images/doctors/member1.png',
            'job'=>'doctor',
            'job_code'=>'0002',
            'born_in'=>'tehran',
            'personnel_number'=>'2000',
            'rate'=>'0',

        ]);

        Teacher::create([
            'name'=>'مدرس ',
            'family'=>'شماره3',
            'melli_code'=>'4444444444',
            'gender'=>'FEMALE',
            'mobile'=>'09121230003',
            'email'=>'teacher3@gmail.com',
            'birthday'=>'1980/01/01',
            'password'=>'$2y$10$1yx/Qp/617G9rrvSGdFaeeKixbaPMXt4DTJNxfptAqay3v1mvn4wu',
            'password_confirmation'=>'12345678',
            'address'=>'بیمارستان سینا',
            'avatar_path'=>'/assets/images/doctors/member2.png',
            'job'=>'doctor',
            'job_code'=>'0003',
            'born_in'=>'tehran',
            'personnel_number'=>'3000',
            'rate'=>'0',

        ]);
    }
}
