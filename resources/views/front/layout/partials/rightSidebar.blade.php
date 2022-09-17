<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="{{\Illuminate\Support\Facades\Auth::user()->avatar_path ?? asset('assets/images/profile_av.jpg')}}" alt="کاربر"></a></div>
                    <div class="detail">
                        <h4>{{\Illuminate\Support\Facades\Auth::user()->name}} {{\Illuminate\Support\Facades\Auth::user()->family}}</h4>
{{--                        <small>جراح قلب</small>--}}
                    </div>
                    <a href="events.html" title="رویدادها"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="mail-inbox.html" title="صندوق ورودی"><i class="zmdi zmdi-email"></i></a>
                    <a href="contact.html" title="لیست مخاطبین"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="chat.html" title="برنامه چت"><i class="zmdi zmdi-comments"></i></a>
                    <a href="{{route('logout')}}" title="خروج از سیستم"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="header">اصلی</li>
            <li class="active open"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i><span>داشبورد</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>برنامه آموزشی</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('event')}}">برنامه آموزشی</a></li>
                    <li><a href="book-appointment.html">برنامه مدرس</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>مدرسان</span> </a>
                <ul class="ml-menu">
{{--                    <li><a href="{{route('front.teacher.list')}}">لیست مدرس</a></li>--}}
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>پروفایل</span> </a>
                <ul class="ml-menu">
{{--                    <li><a href="{{route('front.user.show')}}">نمایش پروفایل</a></li>--}}
{{--                    <li><a href="{{route('front.user.edit')}}">ویرایش پروفایل</a></li>--}}
{{--                    <li><a href="{{route('front.user.event')}}">برنامه آموزشی</a></li>--}}

                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>دوره های حضوری</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('front.course.list')}}">لیست دوره های حضوری</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>دوره های غیرحضوری</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('front.document.list')}}">لیست دوره های غیرحضوری </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>کارنامه</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('front.result.list')}}">نتایج آزمون</a></li>
                    <li><a href="{{route('front.result.create')}}">چاپ کارنامه</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>آزمون آنلاین</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('front.online_exam.list')}}">لیست آزمونهای آنلاین </a></li>
                </ul>
            </li>


            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>صفحات دیگر</span> </a>
                <ul class="ml-menu">
                    <li><a href="javascript:void(0);" class="menu-toggle"><span> گالری تصاویر </span> </a>
                        <ul class="ml-menu">
{{--                            <li><a href="{{route('front.gallery.list')}}">لیست تصاویر </a></li>--}}
{{--                            <li><a href="{{route('gallery.create')}}">افزودن تصویر جدید</a></li>--}}
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><a href="{{route('front.about.list')}}"><span> درباره ما </span></a> </a>
{{--                        <ul class="ml-menu">--}}
{{--                            <li><a href="{{route('front.about.list')}}"> درباره ما </a></li>--}}
{{--                        </ul>--}}
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><a href="{{route('front.contact.create')}}"><span> تماس با ما </span></a> </a>
{{--                        <ul class="ml-menu">--}}
{{--                            <li><a href="{{route('front.contact.create')}}">ارسال پیام</a></li>--}}
{{--                        </ul>--}}
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><a href="{{route('front.question.list')}}"><span> سوالات متداول </span></a> </a>
{{--                        <ul class="ml-menu">--}}
{{--                            <li><a href="{{route('front.question.list')}}">لیست سوالات </a></li>--}}
{{--                        </ul>--}}
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><a href="{{route('front.news.list')}}"><span> اخبار </span></a> </a>
{{--                        <ul class="ml-menu">--}}
{{--                            <li><a href="{{route('front.news.list')}}">لیست اخبار </a></li>--}}
{{--                        </ul>--}}
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><a href="{{route('front.newsletter.create')}}"><span> خبرنامه </span></a> </a>

                    </li>
                </ul>
            </li>
            <li class="header">بیشتر</li>
            <li>
                <div class="progress-container progress-primary m-t-10">
                    <span class="progress-badge">ترافیک این ماه</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                            <span class="progress-value">67%</span>
                        </div>
                    </div>
                </div>
                <div class="progress-container progress-info">
                    <span class="progress-badge">بار سرور</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                            <span class="progress-value">86%</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
