@extends('layouts.adminMasterPage')
@section('content')
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> ویرایش خبر{{$inputs->id}}
                        <small class="text-muted">خوش امدید</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-left m-r-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-left">
                        <li class="breadcrumb-item float-right"><a href="{{route('dashboard')}}"><i
                                    class="zmdi zmdi-home"></i> خانه</a></li>
                        <li class="breadcrumb-item active float-right"> ویرایش خبر {{$inputs->id}} </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-9 col-md-9 col-sm-9">
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
                            <form action="/admin/news/{{$inputs->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row clearfix">
                                    <div class="col-sm-6"><b>عنوان خبر</b>
                                        <div class="form-group">
                                            <input type="text" name="title" value="{{$inputs->title}}"
                                                   class="form-control" placeholder="عنوان خبر">
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><b>نویسنده خبر</b>
                                        <div class="form-group">
                                            <input type="text" name="writer" value="{{$inputs->writer}}"
                                                   class="form-control" placeholder="نویسنده خبر">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6"><b>عکاس</b>
                                        <div class="form-group">
                                            <input type="text" name="photographer" value="{{$inputs->photographer}}"
                                                   class="form-control" placeholder="عکاس">
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><b>اینستاگرام</b>
                                        <div class="form-group">
                                            <input type="text" name="instagram" value="{{$inputs->instagram}}"
                                                   class="form-control" placeholder="اینستاگرام">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6"><b>آپلود تصویر</b>
                                        <div class="form-group">
                                            <input type="file" name="images[]" value="{{$inputs->facebook}}"
                                                   class="form-control" placeholder="آپلود تصویر" multiple>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><b>محتوای خبر</b>
                                        <div class="form-group">
                                            <textarea class="form-control" name="body" value=""
                                                      placeholder="محتوای خبر">{{$inputs->body}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <p>images:</p>
                    @foreach($inputs->images as $image)
                        <form action="/admin/deleteImage/{{$image->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn text-danger text-center" type="submit">X</button>
                        </form>
                        <img src="/images/{{$image->image}}" class="img-responsive"
                             style="max-width: 200px; max-height: 200px" alt="">

                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
