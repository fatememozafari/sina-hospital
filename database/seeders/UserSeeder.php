<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'=> 'super',
            'family'=> 'admin',
            'melli_code'=> '0000000000',
            'mobile'=> '09181230001',
            'email'=> 'superadmin@gmail.com',
            'password'=> '$2y$10$1yx/Qp/617G9rrvSGdFaeeKixbaPMXt4DTJNxfptAqay3v1mvn4wu',
            'password_confirmation'=> '12345678',
            'avatar_path'=> '/assets/images/doctors/member6.png',
            'address'=> 'اراک ',
            'birthday'=> '1369/01/11',
            'job'=> 'superadmin',
            'job_code'=>'0000',
            'born_in'=>'arak',
            'personnel_number'=>'0000',
            'rate'=> '0',
            'gender'=> 'MALE',

        ]);
        User::create([
            'name'=> 'admin',
            'family'=> 'admin',
            'melli_code'=> '1111111111',
            'mobile'=> '09181230002',
            'email'=> 'admin@gmail.com',
            'password'=> '$2y$10$1yx/Qp/617G9rrvSGdFaeeKixbaPMXt4DTJNxfptAqay3v1mvn4wu',
            'password_confirmation'=> '12345678',
            'avatar_path'=> '/assets/images/doctors/member5.png',
            'address'=> 'اراک ',
            'birthday'=> '1369/01/11',
            'job'=> 'admin',
            'job_code'=>'0000',
            'born_in'=>'arak',
            'personnel_number'=>'0000',
            'rate'=> '0',
            'gender'=> 'MALE',

        ]);
        User::create([
            'name'=> 'فاطمه',
            'family'=> 'مظفری',
            'melli_code'=> '0520184033',
            'mobile'=> '09186424052',
            'email'=> 'fa.mozaffarii111@gmail.com',
            'password'=> '$2y$10$1yx/Qp/617G9rrvSGdFaeeKixbaPMXt4DTJNxfptAqay3v1mvn4wu',
            'password_confirmation'=> '12345678',
            'avatar_path'=> '/images/fatememozafari.jpg',
            'address'=> 'اراک بلوار انجفی کوچه اتحاد11',
            'birthday'=> '1369/01/11',
            'job'=> 'برنامه نویس وب',
            'job_code'=>'0000',
            'born_in'=>'arak',
            'personnel_number'=>'0000',
            'rate'=> '0',
            'gender'=> 'FEMALE',

        ]);
    }
}
