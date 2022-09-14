<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="{{asset('assets/images/profile_av.jpg')}}" alt="کاربر"></a></div>
                    <div class="detail">
                        <h4>دکتر حمید محمدی</h4>
                        <small>جراح قلب</small>
                    </div>
                    <a href="events.html" title="رویدادها"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="mail-inbox.html" title="صندوق ورودی"><i class="zmdi zmdi-email"></i></a>
                    <a href="contact.html" title="لیست مخاطبین"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="chat.html" title="برنامه چت"><i class="zmdi zmdi-comments"></i></a>
                    <a href="sign-in.html" title="خروج از سیستم"><i class="zmdi zmdi-power"></i></a>
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
                    <li><a href="{{route('teachers.list')}}">لیست مدرس</a></li>
                    <li><a href="/admin/teachers/create">افزودن مدرس</a></li>
{{--                    <li><a href="{{route('teachers.event')}}">برنامه آموزشی</a></li>--}}

                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>کاربران</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('user.list')}}">تمامی کاربران</a></li>
                    <li><a href="{{route('user.create')}}">افزودن کاربر جدید</a></li>
{{--                    <li><a href="{{route('user.event')}}">برنامه آموزشی</a></li>--}}

                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>دوره های حضوری</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('course.list')}}">لیست دوره های حضوری</a></li>
                    <li><a href="{{route('course.create')}}">افزودن دوره حضوری جدید</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>دوره های غیرحضوری</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('document.list')}}">لیست دوره های غیرحضوری </a></li>
                    <li><a href="{{route('document.create')}}">افزودن دوره ی جدید غیرحضوری</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>کارنامه</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('score.list')}}">نتایج آزمون</a></li>
                    <li><a href="{{route('score.create')}}">چاپ کارنامه</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>آزمون آنلاین</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('online_exam.list')}}">لیست آزمونهای آنلاین </a></li>
                    <li><a href="{{route('online_exam.create')}}">افزودن آزمون آنلاین</a></li>
                </ul>
            </li>

{{--            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span> احراز هویت </span> </a>--}}
{{--                <ul class="ml-menu">--}}
{{--                    <li><a href="{{route('login')}}">ورود</a> </li>--}}
{{--                    <li><a href="{{route('register')}}">ثبت نام</a> </li>--}}
{{--                    <li><a href="{{route('forgetpassword')}}">فراموشی رمز عبور</a> </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>rolesنقش ها</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('role.list')}}">لیست نقش ها</a></li>
                    <li><a href="{{route('role.create')}}">افزودن نقش  جدید</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>permissionاختیارات</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('permission.list')}}">لیست اختیارات</a></li>
                    <li><a href="{{route('permission.create')}}">افزودن اختیارات جدید به نقش</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>asignتخصیص</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('asign.list')}}">لیست تخصیصات</a></li>
                    <li><a href="{{route('asign.create')}}"> تخصیص نقش جدید به کاربر</a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>صفحات دیگر</span> </a>
                <ul class="ml-menu">
                    <li><a href="javascript:void(0);" class="menu-toggle"><span> گالری تصاویر </span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('gallery.list')}}">لیست تصاویر </a></li>
                            <li><a href="{{route('gallery.create')}}">افزودن تصویر جدید</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><span> درباره ما </span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('about.list')}}">نمایش درباره ما </a></li>
                            <li><a href="{{route('about.create')}}">ویرایش درباره ما</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><span> تماس با ما </span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('contacts.list')}}">لیست پیام های ارسال شده </a></li>
{{--                            <li><a href="{{route('gallery.create')}}">افزودن تصویر جدید</a></li>--}}
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><span> سوالات متداول </span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('question.list')}}">لیست سوالات </a></li>
                            <li><a href="{{route('question.create')}}">افزودن سوال جدید</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><span> اخبار </span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('news.list')}}">لیست اخبار </a></li>
                            <li><a href="/admin/news/create">افزودن خبر جدید</a></li>
                        </ul>
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
