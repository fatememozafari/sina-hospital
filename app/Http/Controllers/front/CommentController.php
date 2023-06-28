<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Course $course)
    {

        if (Auth::id()) {

            $request->validate([
                'comment' => 'required'
            ], [
                'comment.required' => ' وارد کردن متن الزامی است.'
            ]);
            $comment = Course::find($course->id)->comments()->create(
                [
                    'name' => \auth()->user()->fullName,
                    'user_id' => Auth::id(),
                    'comment' => \request('comment'),
                ]);
            if ($comment) {
                return redirect()->back()->with('success', 'با موفقیت ارسال شد.');
            } else {
                return redirect()->back()->with('error', 'با خطا مواجه شد.');

            }
        } else {
            return redirect('login');
        }


    }

    public function ajaxDelete($id)
    {
        $comment = Comment::find($id);

        if ($comment['user_id'] == Auth::id()) {

            $comment->delete();

            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        }
        return 'not allowed';
    }
}
