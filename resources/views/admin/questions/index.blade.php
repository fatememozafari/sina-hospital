@extends('admin.layout.masterPage')
@section('content')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>لیست سوالات
                        <small class="text-muted"> خوش آمدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> داشبورد</a></li>
                        <li class="breadcrumb-item float-right"><a href="javascript:void(0);">صفحات</a></li>
                        <li class="breadcrumb-item active float-right">لیست سوالات</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @include('alert')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="جستجو...">
                                <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
                            </div>
                            <div class="">
                                <p>جستجو های محبوب :</p>
                                <span class="badge badge-default">جدیدترین سوالات</span>
                                <span class="badge badge-primary">جلسه</span>
                                <span class="badge badge-success">فعالیت های جدول زمانی</span>
                                <span class="badge badge-info">اطلاعات</span>
                                <span class="badge badge-warning">پروژه جدید</span>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="">
                    <li class="">
                        <a class="btn btn-info" href="{{route('question.create')}}">ایجاد خبر جدید</a>
                    </li>
                </ul>
                <div class="col-md-12">
                    @foreach($question as $item)
                        <div class="card">
                            <div class="body">
                                <h6 class="m-t-0"><a href="javascript:void(0);"> {{$item->question}} </a></h6>
                                <p class="text-justify">{{$item->answer}}</p>
                                <br>
                                @if(isset($item->avatar_path))
                                <a href="{{$item->avatar_path }}"> <img src="{{$item->avatar_path }}" alt="{{$item->title}}" height="300px" width="500px"></a>
                                @endif
                            </div>
                            <a href="/admin/questions/{{$item->id}}/edit" title="ویرایش مطلب" class="btn btn-round btn-info"> ویرایش مطلب </a>
                            <form action="/admin/questions/{{$item->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-default btn-round btn-simple">
                                    حذف
                                </button>
                            </form>

                        </div>
                    @endforeach
                </div>
{{--                <span class="clearfix" style="padding: 0 20%;">--}}
{{--								 {{$question->links()}}--}}
{{--								</span>--}}
            </div>
        </div>
    </section>

@endsection
