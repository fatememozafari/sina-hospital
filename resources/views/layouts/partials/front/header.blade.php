<nav class="navbar">
    <div class="col-12">
        {{--        <div class="navbar-header">--}}
        {{--            <a href="javascript:void(0);" class="bars"></a>--}}
        {{--            <a class="navbar-brand" href="index.html"><img src="{{asset('assets/images/logo.svg')}}" width="30" alt=""><span class="m-r-10">  سینا</span></a>--}}
        {{--        </div>--}}
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a>
            </li>
            <li class="hidden-sm-down">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" style="border-color: #E3E3E3 !important;"
                           placeholder="جستجو...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-search"></i>
                    </span>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-left">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    دوره ها
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" target="" href="{{route('front.courses.index')}}">لیست دوره های حضوری</a>
                    <a class="dropdown-item" target="" href="{{route('front.offline-courses.index')}}">لیست دوره های غیرحضوری</a>
                    <a class="dropdown-item" target="" href="{{route('front.documents.index')}}">لیست دوره هایی که قبلا
                        گذرانده اید </a>

                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    نتایج دوره
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" target="" href="{{route('front.results.index')}}">کارنامه</a>
                    <a class="dropdown-item" target="" href="">چاپ کارنامه</a>
                    <a class="dropdown-item" target="" href="{{route('front.online_exams.create')}}">لیست آزمونهای
                        آنلاین </a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    مدیریت پروفایل
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" target="" href="/users/{{\Illuminate\Support\Facades\Auth::id()}}"> نمایش
                        پروفایل</a>
                    <a class="dropdown-item" target="" href="/users/{{\Illuminate\Support\Facades\Auth::id()}}/edit">ویرایش
                        پروفایل</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" target="" href="{{route('front.about.index')}}"> درباره ما </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" target="" href="{{route('front.contacts.create')}}"> تماس با ما </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" target="" href="{{route('front.questions.index')}}">سوالات متداول</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" target="" href="{{route('front.news.index')}}">اخبار </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" target="" href="{{route('front.newsletters.create')}}">عضویت در
                    خبرنامه</a>
            </li>

            <li class="nav-item dropdown">
                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                    {{\Illuminate\Support\Facades\Auth::user()->family}}
            </li>

{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown"--}}
{{--                   aria-haspopup="true" aria-expanded="false">--}}
{{--                    صفحات دیگر--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu">--}}
{{--                    <a class="dropdown-item" target="" href="{{route('front.about.list')}}"> درباره ما </a>--}}
{{--                    <a class="dropdown-item" target="" href="{{route('front.contact.create')}}"> تماس با ما </a>--}}
{{--                    <a class="dropdown-item" target="" href="{{route('front.question.list')}}">سوالات متداول</a>--}}
{{--                    <a class="dropdown-item" target="" href="{{route('front.news.list')}}">اخبار </a>--}}
{{--                    <a class="dropdown-item" target="" href="{{route('front.newsletter.create')}}">عضویت در خبرنامه</a>--}}
{{--                    <a class="dropdown-item" target="" href="../html/form-upload.html"> گالری تصاویر </a>--}}
{{--                </div>--}}
{{--            </li>--}}



            <li><a href="{{route('logout')}}" class="mega-menu" data-close="true" title="logout"><i class="zmdi zmdi-power"></i></a>
            </li>
            <li class=""><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i
                        class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>
