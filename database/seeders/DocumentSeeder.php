<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::create([
            'title'=>'دوره شماره1',
            'slug'=>'document1',
            'type'=>'SPECIALISED',
            'start_at'=>'2021/10/01',
            'description'=>'----',
            'file'=>'/assets/images/image4.jpg',
            'duration'=>'2',
            'teacher'=>'--',
            'user_id'=>'1'
        ]);

        Document::create([
            'title'=>'دوره شماره2',
            'slug'=>'document2',
            'type'=>'SEMI_SPECIALISED',
            'start_at'=>'2020/10/01',
            'description'=>'----',
            'file'=>'/assets/images/image4.jpg',
            'duration'=>'2',
            'teacher'=>'--',
            'user_id'=>'1'
        ]);

        Document::create([
            'title'=>'دوره شماره3',
            'slug'=>'document3',
            'type'=>'GENERAL',
            'start_at'=>'2021/02/01',
            'description'=>'----',
            'file'=>'/assets/images/image4.jpg',
            'duration'=>'2',
            'teacher'=>'--',
            'user_id'=>'1'
        ]);

        Document::create([
            'title'=>'دوره شماره4',
            'slug'=>'document4',
            'type'=>'SPECIALISED',
            'start_at'=>'2020/05/01',
            'description'=>'----',
            'file'=>'/assets/images/image4.jpg',
            'duration'=>'2',
            'teacher'=>'--',
            'user_id'=>'1'
        ]);

        Document::create([
            'title'=>'دوره شماره5',
            'slug'=>'document5',
            'type'=>'GENERAL',
            'start_at'=>'2020/03/01',
            'description'=>'----',
            'file'=>'/assets/images/image4.jpg',
            'duration'=>'2',
            'teacher'=>'--',
            'user_id'=>'1'
        ]);
    }
}
