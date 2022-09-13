<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title'=> 'راه اندازی سایت آموزشی بیمارستان سینا',
            'body'=> 'به تازگی بیمارستان سینا اقدام به راه اندازی سایت آموزشی به منظور ارتقاء سطح علمی کارکنان کرده است.',
            'writer'=> 'فاطمه مظفری',
            'photographer'=> 'فاطمه مظفری',
            'feedback'=> '',
            'avatar_path1'=> '/assets/images/blog/blog-page-1.jpg',
            'avatar_path2'=> '/assets/images/blog/blog-page-2.jpg',
            'avatar_path3'=> '/assets/images/blog/blog-page-3.jpg',
            'instagram'=> 'sina hospital',
            'facebook'=> 'sina hospital',
            'twitter'=> 'sina hospital',
        ]);
    }
}
