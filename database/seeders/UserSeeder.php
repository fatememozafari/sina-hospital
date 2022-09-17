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
          'name'=> 'فاطمه',
          'family'=> 'مظفری',
          'melli_code'=> '0520180000',
          'mobile'=> '09186424052',
          'email'=> 'fa.mozaffarii111@gmail.com',
          'password'=> '$2y$10$1yx/Qp/617G9rrvSGdFaeeKixbaPMXt4DTJNxfptAqay3v1mvn4wu',
          'password_confirmation'=> '12345678',
          'avatar_path'=> '/images/fatememozafari.jpg',
          'address'=> 'اراک بلوار انجفی کوچه اتحاد11',
          'birthday'=> '1369/01/11',
          'job'=> 'برنامه نویس وب',
          'rate'=> '0',
          'gender'=> 'FEMALE',

      ]);
    }
}
