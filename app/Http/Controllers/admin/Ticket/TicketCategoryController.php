<?php

namespace App\Http\Controllers\admin\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket\TicketCategory;
use Illuminate\Http\Request;

class TicketCategoryController extends Controller
{

    public function index()
    {
        $ticketCategories = TicketCategory::all();
        return view('admin.tickets.category.index', compact('ticketCategories'));
    }


    public function create()
    {
        return view('admin.tickets.category.create');
    }


    public function store(Request $request)
    {
        $inputs = $request->all();
        $ticketCategory = TicketCategory::create($inputs);
        return redirect()->route('admin.tickets.categories.index')->with('swal-success', 'دسته بندی جدید شما با موفقیت ثبت شد');
    }


    public function edit(TicketCategory $ticketCategory)
    {
        return view('admin.tickets.category.edit', compact('ticketCategory'));

    }


    public function update(Request $request, TicketCategory $ticketCategory)
    {
        $inputs = $request->all();
        $ticketCategory->update($inputs);
        return redirect()->route('admin.tickets.categories.index')->with('swal-success', 'دسته بندی شما با موفقیت ویرایش شد');
    }


    public function destroy(TicketCategory $ticketCategory)
    {
        $result = $ticketCategory->delete();
        return redirect()->route('admin.tickets.categories.index')->with('swal-success', 'دسته بندی شما با موفقیت حذف شد');
    }


}
