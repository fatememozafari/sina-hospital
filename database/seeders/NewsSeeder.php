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
            'feedback'=> '3',
            'instagram'=> 'sina hospital',
            'facebook'=> 'sina hospital',
            'twitter'=> 'sina hospital',
        ]);
    }
}
