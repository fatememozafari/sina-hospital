<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AsignPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::where('name', 'ADMIN ')->first();
        $roleAdmin->givePermissionTo([
            'users_create',
            'users_read',
            'users_update',

            'about_read',
            'about_create',
            'about_update',

            'contacts_read',

            'courses_read',
            'courses_create',
            'courses_update',


            'documents_read',
            'documents_create',
            'documents_update',
            'documents_delete',

            'galleries_update',
            'galleries_create',
            'galleries_delete',

            'news_read',
            'news_update',
            'news_create',
            'news_delete',

            'onlineExams_read',
            'onlineExams_update',
            'onlineExams_create',
            'onlineExams_delete',

            'questions_read',
            'questions_update',
            'questions_create',
            'questions_delete',

            'scores_read',
            'scores_update',
            'scores_create',
            'scores_delete',

            'teachers_read',
            'teachers_update',
            'teachers_create',

//            'newsletters_read',
//            'newsletters_update',
//            'newsletters_create',
//            'newsletters_delete',
//
//            'enrolls_read',
//            'enrolls_update',
//            'enrolls_create',
//            'enrolls_delete',
//
//            'variables_read',
//            'variables_update',
//            'variables_create',
//            'variables_delete',
//
//            'menus_read',
//            'menus_update',
//            'menus_create',
//            'menus_delete',

            'roles_read',
            'permissions_read',

        ]);

    }
}
