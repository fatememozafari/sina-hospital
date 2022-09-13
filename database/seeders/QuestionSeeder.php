<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     Question::create([
         'question'=> 'چطور از امکانات سایت استفاده کنم؟',
         'answer'=> 'برای هرکاری ابتدا باید در سایت ثبتنام کرده و سپس از قسمت login وارد شوید',
         'avatar_path'=> '/assets/images/blog/1.jpg',
     ]);
    }
}
