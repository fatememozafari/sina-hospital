<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AsignController extends Controller
{
    public function assignRole($id)
    {
        $roleSuperadmin = \Spatie\Permission\Models\Role::where('name', 'SUPERADMIN')->first();
        $roleAdmin = Role::where('name', 'ADMIN')->first();
        $roleUser = Role::where('name', 'USER')->first();

    }

    public function index()
    {

//        $titleCard = 'لیست';
//        $th = ['شناسه', 'name', 'title', 'operation'];
        $query = \Spatie\Permission\Models\Role::query()
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.asigns.index',
            [
                'items' => $query,
//                'th' => $th,
//                'titleCard' => $titleCard,
            ]
        );
    }

    public function create()
    {
        return view('admin.asigns.create');
    }

    public function store(Request $request)
    {


        $user_id = $request->get('user_id');
        $role_id = $request->get('role_id');

        $user=User::find($user_id);
        $role=\Spatie\Permission\Models\Role::find($role_id);

        $result= $user->assignRole($role);
        return back()->with('success','با موفقیت ثبت شد');


    }
}
