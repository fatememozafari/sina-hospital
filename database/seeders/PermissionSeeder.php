<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_about_create = Permission::create(['name' => 'about_create']);
        $permission_about_read = Permission::create(['name' => 'about_read']);
        $permission_about_update = Permission::create(['name' => 'about_update']);
        $permission_about_delete = Permission::create(['name' => 'about_delete']);

        $permission_contacts_create = Permission::create(['name' => 'contacts_create']);
        $permission_contacts_read = Permission::create(['name' => 'contacts_read']);
        $permission_contacts_update = Permission::create(['name' => 'contacts_update']);
        $permission_contacts_delete = Permission::create(['name' => 'contacts_delete']);

        $permission_courses_create = Permission::create(['name' => 'courses_create']);
        $permission_courses_read = Permission::create(['name' => 'courses_read']);
        $permission_courses_update = Permission::create(['name' => 'courses_update']);
        $permission_courses_delete = Permission::create(['name' => 'courses_delete']);

        $permission_documents_create = Permission::create(['name' => 'documents_create']);
        $permission_documents_read = Permission::create(['name' => 'documents_read']);
        $permission_documents_update = Permission::create(['name' => 'documents_update']);
        $permission_documents_delete = Permission::create(['name' => 'documents_delete']);

        $permission_galleries_create = Permission::create(['name' => 'galleries_create']);
        $permission_galleries_read = Permission::create(['name' => 'galleries_read']);
        $permission_galleries_update = Permission::create(['name' => 'galleries_update']);
        $permission_galleries_delete = Permission::create(['name' => 'galleries_delete']);

        $permission_news_create = Permission::create(['name' => 'news_create']);
        $permission_news_read = Permission::create(['name' => 'news_read']);
        $permission_news_update = Permission::create(['name' => 'news_update']);
        $permission_news_delete = Permission::create(['name' => 'news_delete']);

        $permission_onlineExams_create = Permission::create(['name' => 'onlineExams_create']);
        $permission_onlineExams_read = Permission::create(['name' => 'onlineExams_read']);
        $permission_onlineExams_update = Permission::create(['name' => 'onlineExams_update']);
        $permission_onlineExams_delete = Permission::create(['name' => 'onlineExams_delete']);

        $permission_questions_create = Permission::create(['name' => 'questions_create']);
        $permission_questions_read = Permission::create(['name' => 'questions_read']);
        $permission_questions_update = Permission::create(['name' => 'questions_update']);
        $permission_questions_delete = Permission::create(['name' => 'questions_delete']);

        $permission_results_create = Permission::create(['name' => 'scores_create']);
        $permission_results_read = Permission::create(['name' => 'scores_read']);
        $permission_results_update = Permission::create(['name' => 'scores_update']);
        $permission_results_delete = Permission::create(['name' => 'scores_delete']);

        $permission_teachers_create = Permission::create(['name' => 'teachers_create']);
        $permission_teachers_read = Permission::create(['name' => 'teachers_read']);
        $permission_teachers_update = Permission::create(['name' => 'teachers_update']);
        $permission_teachers_delete = Permission::create(['name' => 'teachers_delete']);

        $permission_users_create = Permission::create(['name' => 'users_create']);
        $permission_users_read = Permission::create(['name' => 'users_read']);
        $permission_users_update = Permission::create(['name' => 'users_update']);
        $permission_users_delete = Permission::create(['name' => 'users_delete']);

        $permission_newsletters_create = Permission::create(['name' => 'newsletters_create']);
        $permission_newsletters_read = Permission::create(['name' => 'newsletters_read']);
        $permission_newsletters_update = Permission::create(['name' => 'newsletters_update']);
        $permission_newsletters_delete = Permission::create(['name' => 'newsletters_delete']);

        $permission_courseRegisters_create = Permission::create(['name' => 'enrolls_create']);
        $permission_courseRegisters_read = Permission::create(['name' => 'enrolls_read']);
        $permission_courseRegisters_update = Permission::create(['name' => 'enrolls_update']);
        $permission_courseRegisters_delete = Permission::create(['name' => 'enrolls_delete']);

        $permission_variables_create = Permission::create(['name' => 'variables_create']);
        $permission_variables_read = Permission::create(['name' => 'variables_read']);
        $permission_variables_update = Permission::create(['name' => 'variables_update']);
        $permission_variables_delete = Permission::create(['name' => 'variables_delete']);

        $permission_menus_create = Permission::create(['name' => 'menus_create']);
        $permission_menus_read = Permission::create(['name' => 'menus_read']);
        $permission_menus_update = Permission::create(['name' => 'menus_update']);
        $permission_menus_delete = Permission::create(['name' => 'menus_delete']);

        $permission_permissions_create = Permission::create(['name' => 'permissions_create']);
        $permission_permissions_read = Permission::create(['name' => 'permissions_read']);
        $permission_permissions_update = Permission::create(['name' => 'permissions_update']);
        $permission_permissions_delete = Permission::create(['name' => 'permissions_delete']);

        $permission_roles_create = Permission::create(['name' => 'roles_create']);
        $permission_roles_read = Permission::create(['name' => 'roles_read']);
        $permission_roles_update = Permission::create(['name' => 'roles_update']);
        $permission_roles_delete = Permission::create(['name' => 'roles_delete']);



        $role_admin = Role::where('name','ADMIN')->first();

    }
}
