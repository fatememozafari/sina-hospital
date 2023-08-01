@extends('layouts.frontMasterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> پاسخ به تیکت

                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="http://127.0.0.1:8000/admin/dashboard"><i
                                    class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> پاسخ به تیکت</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>عنوان تیکت:</strong> <p> {{$ticket->subject}}</p></h2>
                            <ul class="header-dropdown">
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12"><b>نویسنده تیکت : </b> <b>{{$ticket->user->fullName}}</b></div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                <div class="col-sm-12"><b>متن تیکت : </b>
                                    <div class="form-group">
                                        <p>{{$ticket->description}}</p>
                                    </div>
                                </div>
                            </div>
                            @isset($ticket->file)
{{--                            @if($ticket->file->count() > 0)--}}
                            <div>
                                <a href="{{asset('uploads/tickets/'.$ticket->file->file)}}" class="btn btn-primary" download="download">فایل ضمیمه</a>
                            </div>
{{--                            @endif--}}
                            @endisset
                            <hr>
                            @foreach($ticket->children as $child)
                                <div class="mx-5 my-2" style="border: 1px solid #bababa">
                                    <div class="row clearfix m-2">
                                        <div class="col-sm-6 d-flex"><p class="ml-5"><b>{{$child->user->fullName}}</b></p>
                                            <p>{{\Morilog\Jalali\Jalalian::forge($child->created_at)->format('Y-m-d H:i:s')}}</p></div>
                                    </div>
                                    <br>
                                    <div class="row clearfix mx-2">
                                        <div class="col-sm-12"><b>متن تیکت : </b>
                                            <div class="form-group">
                                                <p>{{$child->description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            <hr>
                            <form action="{{route('front.tickets.answer',$ticket)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                    <div class="col-sm-12"><b>پاسخ*</b>
                                        <div class="form-group">
                                            <textarea type="text" rows="5" name="description" value=""
                                                      class="form-control" placeholder="پاسخ"></textarea>
                                        </div>
                                    </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">ارسال</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
