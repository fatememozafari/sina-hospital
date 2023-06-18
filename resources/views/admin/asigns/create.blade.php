@extends('layouts.adminMasterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> تخصیص نقش به کاربر(assign)
                        <small class="text-muted">خوش امدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('admin.dashboard')}}"><i
                                    class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> تخصیص نقش به کاربر(assign)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong></strong> <small></small></h2>
                            <ul class="header-dropdown">
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="/admin/asigns" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="mb-3 col-sm-12">
                                        <label class="form-label" for="name">کاربر</label>
                                        <br>
                                        <select name="user_id" id="" class="form-control show-tick">
                                            @foreach(\App\Models\User::all(['id','name','family']) as $item)
                                                <option value="{{$item->id}}">{{$item->id}}
                                                    -{{$item->name}} {{$item->family}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="row clearfix">
                                    <div class="mb-3 col-sm-12">
                                        <label class="form-label" for="name">نقش ها</label>
                                        <br>
                                        <select name="role_id" id="" class="form-control show-tick">
                                            @foreach(\Spatie\Permission\Models\Role::all(['id','name']) as $item)
                                                <option value="{{$item->id}}">{{$item->id}}-{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">ارسال</button>
                                    <button type="reset" class="btn btn-default btn-round btn-simple">لغو</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
