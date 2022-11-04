<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        @can('users_read')
            <ul class="list">
                <li>
                    <div class="user-info">
                        <div class="image">
                            <a href="#">
                                <img
                                    src="{{\Illuminate\Support\Facades\Auth::user()->avatar_path ?? asset('assets/images/avatar-profile2.png')}}"
                                    alt="کاربر">
                            </a>
                        </div>
                        <div class="detail">
                            <h4>{{\Illuminate\Support\Facades\Auth::user()->name}} {{\Illuminate\Support\Facades\Auth::user()->family}}</h4>
                        </div>
                        <a href="#" title="رویدادها"><i class="zmdi zmdi-calendar"></i></a>
                        <a href="#" title="صندوق ورودی"><i class="zmdi zmdi-email"></i></a>
                        <a href="#" title="لیست مخاطبین"><i class="zmdi zmdi-account-box-phone"></i></a>
                        <a href="#" title="برنامه چت"><i class="zmdi zmdi-comments"></i></a>
                        <a href="{{route('logout')}}" title="خروج از سیستم"><i class="zmdi zmdi-power"></i></a>
                    </div>
                </li>
                <li class="header">اصلی</li>
                <li class="active open"><a href="{{route('dashboard')}}"><i
                            class="zmdi zmdi-home"></i><span>داشبورد</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-account-add"></i><span>مدرسان</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('teachers.list')}}">لیست مدرس</a></li>
                        <li><a href="/admin/teachers/create">افزودن مدرس</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-account-o"></i><span>کاربران</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('user.list')}}">تمامی کاربران</a></li>
                        <li><a href="{{route('user.create')}}">افزودن کاربر جدید</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-account-o"></i><span>امور مربوط به کاربران</span> </a>
                    <ul class="ml-menu">

                        <li><a href="{{route('enroll-course-list')}}">ثبت نام در دوره</a></li>
                        <li><a href="{{route('score.list')}}">نمره دهی</a></li>
                        <li><a href="{{route('result.list')}}">کارنامه</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>دوره های حضوری</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('course.list')}}">لیست دوره های حضوری</a></li>
                        <li><a href="{{route('course.create')}}">افزودن دوره حضوری جدید</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>دوره های غیرحضوری</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('offline.list')}}">لیست دوره های غیرحضوری </a></li>
                        <li><a href="{{route('offline.create')}}">افزودن دوره ی جدید غیرحضوری</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>دوره هایی که کاربر قبلا گذرانده</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('document.list')}}">لیست دوره هایی که کاربر قبلا گذرانده </a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>آزمون آنلاین</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('online_exam.list')}}">لیست آزمونهای آنلاین </a></li>
                        <li><a href="{{route('online_exam.create')}}">افزودن آزمون آنلاین</a></li>
                    </ul>
                </li>
                @can('roles_read')
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>rolesنقش ها</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('role.list')}}">لیست نقش ها</a></li>
                            @can('roles_create')
                                <li><a href="{{route('role.create')}}">افزودن نقش جدید</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('permissions_read')
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>permissionاختیارات</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('permission.list')}}">لیست اختیارات</a></li>
                            @can('permissions_create')
                                <li><a href="{{route('permission.create')}}">افزودن اختیارات جدید به نقش</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('asigns_read')
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>asignتخصیص</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('asign.list')}}">لیست تخصیصات</a></li>
                            @can('asigns_create')
                                <li><a href="{{route('asign.create')}}"> تخصیص نقش جدید به کاربر</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                <li><a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-copy"></i><span>صفحات دیگر</span> </a>
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
                        <li><a href="javascript:void(0);" class="menu-toggle"><span> خبرنامه </span> </a>
                            <ul class="ml-menu">
                                <li><a href="{{route('newsletter.list')}}">لیست اعضای خبرنامه </a></li>
                                <li><a href="/admin/newsletters/create">ارسال پیام به اعضا</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="header">بیشتر</li>
                <li>
                    <div class="progress-container progress-primary m-t-10">
                        <span class="progress-badge">ترافیک این ماه</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                                <span class="progress-value">67%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container progress-info">
                        <span class="progress-badge">بار سرور</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86%</span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        @endcan
    </div>
</aside>
