<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TicketPriority;
use Illuminate\Http\Request;

class TicketPriorityController extends Controller
{

    public function index()
    {
        $ticketPriorities = TicketPriority::all();
        return view('admin.tickets.priority.index', compact('ticketPriorities'));
    }


    public function create()
    {
        return view('admin.tickets.priority.create');

    }


    public function store(Request $request)
    {
        $inputs = $request->all();
        $ticketPriority = TicketPriority::create($inputs);
        return redirect()->route('admin.tickets.priorities.index')->with('swal-success', 'اولویت  جدید شما با موفقیت ثبت شد');
    }


    public function edit(TicketPriority $ticketPriority)
    {
        return view('admin.tickets.priority.edit', compact('ticketPriority'));

    }


    public function update(Request $request, TicketPriority $ticketPriority)
    {
        $inputs = $request->all();
        $ticketPriority->update($inputs);
        return redirect()->route('admin.tickets.priorities.index')->with('swal-success', 'اولویت شما با موفقیت ویرایش شد');
    }


    public function destroy(TicketPriority $ticketPriority)
    {
        $result = $ticketPriority->delete();
        return redirect()->route('admin.tickets.priorities.index')->with('swal-success', 'اولویت شما با موفقیت حذف شد');
    }




}
