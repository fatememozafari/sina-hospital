
<div>
    @if(count($comments)>0)
        @isset($comments)
            @foreach($comments as $comment)
                <div class="row my-3" id="commentCard{{$comment->id}}">
                    <div class="col-md-1 my-3">
                        <img
                            src="/profile/image/{{\Illuminate\Support\Facades\Auth::user()->avatar_path}}"
                            width="75px" class="rounded-circle avatar">
                    </div>
                    <div class="col-md-11 my-3">
                        <div class="table-bordered px-5"
                             style="border: #d3d3d3 solid 1px; padding: 1%">
                            <div class="d-flex justify-content-between">
                                <b>{{$comment->name}}</b>
                                <p><span>ارسال شده در </span>
                                    {{ Morilog\Jalali\Jalalian::forge($comment->created_at)->format('Y/m/d') }}
                                </p>
                                <button type="button" class="deleteComment btn btn-warning btn-round btn-simple" data-token="{{ csrf_token() }}"
                                        data-id="{{ $comment->id }}">حذف پیام
                                </button>
                            </div>
                            <pre>{{$comment->comment}}</pre>
                            <a href="javascript:void(0);" style="color: #0000cc;"
                               onclick="reply(this);"
                               data-Commentid="{{$comment->id}}">reply</a>
                            <br>
                            @isset($replys)
                                @foreach($comment->replys as $rep)
                                    <div class="row my-3" id="replyCard{{$rep->id}}">
                                        <div class="col-md-2">
                                            <img
                                                src="/profile/image/{{\Illuminate\Support\Facades\Auth::user()->avatar_path}}"
                                                width="75px"
                                                class="rounded-circle avatar">
                                        </div>
                                        <div class="col-md-10">
                                            <div
                                                style="padding-right: 4%; padding-bottom: 10px; padding-top: 10px;background-color: #eeeeee; border-radius: 10px; ">
                                                <div
                                                    class="d-flex justify-content-between">
                                                    <b>{{$rep->name}}</b>
                                                    <p>
                                                        <span>ارسال شده در </span>{{ Morilog\Jalali\Jalalian::forge($rep->created_at)->format('Y/m/d') }}
                                                    </p>
                                                    <button type="button" class="deleteReply btn btn-primary btn-round btn-simple" data-token="{{ csrf_token() }}"
                                                            data-id="{{ $rep->id }}">حذف پیام
                                                    </button>

                                                </div>
                                                <pre>{{$rep->reply}}</pre>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            @endforeach
        @endisset
    @endif
    <div class="row">
        <div class="col">

            <div class="replyDiv" style="display: none;">
                <form
                    action="{{route('front.replys.store',$course)}}"
                    method="post">
                    @csrf
                    <input type="hidden" id="commentId"
                           name="commentId">
                    <textarea name="reply" id="" class="w-100 p-2"
                              rows="6"
                              placeholder="نظر خود را وارد نمایید..."
                              style="background-color:#eeeeee; border-radius: 10px "></textarea>
                    <br>
                    <button type="submit"
                            class="btn btn-primary btn-round">
                        reply
                    </button>
                    <button type="button"
                            class="btn btn-simple btn-round"
                            onclick="reply_close(this)">close
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
