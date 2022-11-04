@extends('front.layout.masterPage')
@section('content')
    <section class="content home container" style="width: 80%;">
        <div class="block-header flex-column ">
            <div class="row d-flex justify-content-between">
                <div class="col">
                </div>
                <div class="col text-center">
                    <p><strong>به نام خدا</strong></p>
                    <p>کارنامه آموزشی</p>
                </div>
                <div class="col text-left">
                    <img src="/assets/logo-removebg-preview.png" width="100px" height="100px" alt="">
                </div>
            </div>
        </div>

        <div class="container" style="width: 90%">
        <div class="row flex-column text-right">

            <p class="text-right">
                <strong> گواهی میشود:</strong>
            </p>
            <div class="d-flex justify-content-between">
                <p>  خانم/اقا {{$user->name}} {{$user->family}} </p>
                <p>{{$user->melli_code}} به شماره ملی:</p>
                <p> صادره از: {{$user->name}}</p>

            </div>
            <div class="d-flex justify-content-between ">
                <p>به شماره پرسنلی:</p>
                <p> پست سازمانی:</p>
                <p> کد شغل:</p>

            </div>
            <div class="d-flex justify-content-between">
                <p> محل خدمت: بیمارستان سینا اراک</p>

            </div>
            <div>
                <p> دوره های آموزشی مشروحه زیر را در سال با موفقیت طی نموده است.</p>
            </div>


        </div>
        <br>
        <table class="table table-bordered text-center">
            <thead>
            <tr>
                <th style="width: 133.7031px;">کد دوره</th>
                <th style="width: 133.7031px;">نام دوره آموزشی</th>
                <th style="width: 133.7031px;">نوع دوره</th>
                <th style="width: 133.7031px;">تاریخ برگزاری</th>
                <th style="width: 33.7031px;">مدت دوره به ساعت</th>
                <th style="width: 33.7031px;">امتیاز آزمون پایان دوره</th>

            </tr>
            </thead>
            <tbody>
            @foreach($courses as $item)
                <tr>
                    <td>{{$item->id_code}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->start_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->score}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <table class="table table-bordered text-center">
            خلاصه وضعیت آموزشی شاغل

            <thead>
            <tr>
                <th>نوع دوره</th>
                <th>تعداد دوره</th>
                <th>ساعت دوره</th>
                <th>امتیاز اموزشی</th>


            </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">تخصصی</th>
                    <td>{{$sp}}</td>
                    <td></td>
                    <td>{{$sp}}</td>
                </tr>
                <tr>
                    <th scope="row">نیمه تخصصی</th>

                    <td>{{$semi}}</td>
                    <td></td>
                    <td>{{$semi}}</td>
                </tr>
                <tr>
                    <th scope="row">عمومی</th>
                    <td>{{$gn}}</td>
                    <td></td>
                    <td>{{$gn}}</td>
                </tr>
                <tr>
                    <th scope="row">مجموع</th>
                    <td>{{$gn+$semi+$sp}}</td>
                    <td></td>
                    <td>{{$gn+$semi+$sp}}</td>
                </tr>
            </tbody>
        </table>
</div>
    </section>
@endsection
