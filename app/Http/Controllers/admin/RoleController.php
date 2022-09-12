<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    public function index()
    {


//        $titleCard = 'لیست';
//        $th = ['شناسه', 'name',  'operation'];
        $query = Role::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.roles.index',
            [
                'roles' => $query,
//                'th' => $th,
//                'titleCard' => $titleCard,
            ]
        );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $gaurd_name='web';
        $inputs= $request->only('name',$gaurd_name);

        $result = \Spatie\Permission\Models\Role::create($inputs);
        if ($result) {
            return redirect('/admin/roles')->with('success', 'با موفقیت ارسال شد');
        } else {
            return back()->with('error');
        }

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
        $query = Role::find($id);
        return view('admin.roles.show', ['item' => $query]);
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
        $query = Role::where('id', $id)->first();
        return view('admin.roles.edit', ['item' => $query]);
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
        $query = $request->only('name', 'title');
        Role::where('id', $id)->update($query);
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
        Role::query()->where('id', $id)->delete();
        return back();
    }

    public function syncPermission(Request $request)
    {

        $role = Role::where('name', $request->get('role'))->first();

        $role->syncPermissions($request->get('permissions'));

        return back()->withSuccess('همه چیز اوکیه');

    }


    public function asignPermissionForm(Request $request)
    {

        $roles = \Spatie\Permission\Models\Role::all();

        $permissions = Permission::all();

        return view('roles.asign')->with([
            'roles' => $roles,
            'permissions' => $permissions
        ]);

    }
}
