<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TicketAdmin;
use App\Models\User;
use Illuminate\Http\Request;

class TicketAdminController extends Controller
{
    public function index()
    {
        $admins = User::query()->role('admin')->get();
        return view('admin.tickets.admins.index', compact('admins'));
    }


    public function set(User $admin)
    {
        TicketAdmin::where('user_id', $admin->id)->first() ? TicketAdmin::where(['user_id' => $admin->id])->forceDelete() : TicketAdmin::create(['user_id' => $admin->id]);
        return redirect()->route('admin.tickets.admins.index')->with('swal-success', 'تغییر شما با موفقیت حذف شد');
    }
}
