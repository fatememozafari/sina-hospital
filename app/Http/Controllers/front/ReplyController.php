<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function store(Request $request, Course $course, Comment $comment)
    {
        if (Auth::id()) {

            $request->validate([
                'reply' => 'required'
            ], [
                'reply.required' => ' وارد کردن متن الزامی است.'
            ]);
            $reply = Comment::find($request->commentId)->replys()->create(
                [
                    'name' => \auth()->user()->fullName,
                    'user_id' => Auth::id(),
                    'replyable_id' => $request->commentId,
                    'reply' => \request('reply'),
                ]);
            if ($reply) {
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
        $reply = Reply::find($id);

        if ($reply['user_id'] == Auth::id()) {

            $reply->delete();

            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        }
        return 'not allowed';

    }
}
