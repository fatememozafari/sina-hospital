<?php

namespace App\Http\Controllers\admin\Notify;

use App\Http\Controllers\Controller;
use App\Models\Notify\Email;
use App\Models\Notify\EmailFile;
use Illuminate\Http\Request;

class EmailFileController extends Controller
{
    public function index(Email $email)
    {

        $emailFiles = $email->mailFiles;
        return view('admin.notify.email.email-file.index', compact('emailFiles'));
    }

    public function destroy(EmailFile $emailFile)
    {

        $emailFile->delete();
        return back()->with('succecc','با موفقیت حذف شد');
    }
}
