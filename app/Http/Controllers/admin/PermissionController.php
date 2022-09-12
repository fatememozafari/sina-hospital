<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        //

//        $titleCard = 'لیست';
//        $th = ['شناسه', 'name', 'operation'];
        $query = \Spatie\Permission\Models\Permission::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.permissions.index',
            [
                'permissions' => $query,
//                'th' => $th,
//                'titleCard' => $titleCard,
            ]
        );

//
//        $query=Post::get();
//        return view('admin.posts.index',['items'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $permission_id=$request->get('permission_id');
        $role_id =  $request->get('role_id');

        $role=Role::find($role_id);
        $permission=\Spatie\Permission\Models\Permission::find($permission_id);

        $role->givePermissionTo($permission);

        return back()->with('success','با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $query = \Spatie\Permission\Models\Permission::find($id);
        return view('admin.permissions.show', ['item' => $query]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $query = \Spatie\Permission\Models\Permission::where('id', $id)->first();
        return view('admin.permissions.edit', ['item' => $query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $query = $request->only('name');
        \Spatie\Permission\Models\Permission::where('id', $id)->update($query);
        return back()->with('success', 'ویرایش با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        \Spatie\Permission\Models\Permission::query()->where('id', $id)->delete();
        return back();
    }
}
