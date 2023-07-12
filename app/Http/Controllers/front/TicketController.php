<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Ticket;
use App\Models\TicketCategory;
use App\Models\TicketFile;
use App\Models\TicketPriority;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
//        $tickets = auth()->user()->tickets()->where('ticket_id', null)->get();
        $tickets=Ticket::query()->where('user_id', auth()->id())->where('ticket_id', null)->get();
        return view('front.tickets.index', compact('tickets'));
    }

    public function show(Ticket $ticket)
    {
        return view('front.tickets.show', compact('ticket'));
    }

    public function change(Ticket $ticket)
    {
        $ticket->status = $ticket->status == 0 ? 1 : 0;
        $result = $ticket->save();
        return redirect()->back()->with('swal-success', 'تغییر شما با موفقیت انجام شد');
    }

    public function answer(Request $request, Ticket $ticket)
    {

        $inputs = $request->all();
        $inputs['subject'] = $ticket->subject;
        $inputs['description'] = $request->description;
        $inputs['seen'] = 0;
        $inputs['reference_id'] = $ticket->reference_id;
        $inputs['user_id'] = auth()->user()->id;
        $inputs['category_id'] = $ticket->category_id;
        $inputs['priority_id'] = $ticket->priority_id;
        $inputs['ticket_id'] = $ticket->id;
        $ticket = Ticket::create($inputs);
        return redirect()->back()->with('swal-success', '  پاسخ شما با موفقیت ثبت شد');
    }

    public function create()
    {
        $ticketCategories = TicketCategory::all();
        $ticketPriorities = TicketPriority::all();
        return view('front.tickets.create', compact('ticketCategories', 'ticketPriorities'));
    }

    public function store(Request $request)
    {

        //ticket body
        $inputs = $request->all();
        $inputs['reference_id'] = 8; //ticket admin
        $inputs['user_id'] = auth()->user()->id;
        $ticket = Ticket::create($inputs);

        //ticket file
//        if ($request->hasFile('file')) {
//            $fileService->setExclusiveDirectory('files' . DIRECTORY_SEPARATOR . 'ticket-files');
//            $fileService->setFileSize($request->file('file'));
//            $fileSize = $fileService->getFileSize();
//            $result = $fileService->moveToPublic($request->file('file'));
//            // $result = $fileService->moveToStorage($request->file('file'));
//            $fileFormat = $fileService->getFileFormat();
//        }
//        if ($result === false) {
//            return redirect()->back()->with('swal-error', 'آپلود فایل با خطا مواجه شد');
//        }
//        $inputs['ticket_id'] = $ticket->id;
//        $inputs['file_path'] = $result;
//        $inputs['file_size'] = $fileSize;
//        $inputs['file_type'] = $fileFormat;
//        $inputs['user_id'] = auth()->user()->id;
//        $file = TicketFile::create($inputs);

        if ($request->hasFile('file')) {
            // upload send image image file
            $Filename = $this->uploadFile($request->file('file'), 'uploads/tickets');
            // create file object
            $file = File::create(['file' =>  $Filename]);

            // attach file to email obj
            $ticket->file()->save($file);
        }

        return to_route('front.tickets.index')->with('swal-success', '  تیکت شما با موفقیت ثبت شد');
    }


    public function changeStatus(Ticket $ticket){
        $ticket->status = $ticket->status == 0 ? 1 : 0;
        $result = $ticket->save();
        return redirect()->route('front.tickets.index')->with('swal-success', 'تغییر شما با موفقیت حذف شد');
    }
}
