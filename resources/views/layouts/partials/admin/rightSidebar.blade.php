<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        @can('users_read')
            <ul class="list">
                <li>
                    <div class="user-info">
                        <div class="image">
                            <a href="#">
                                <img
                                    src="{{asset('/profile/image/'.\Illuminate\Support\Facades\Auth::user()->avatar_path) ?? asset('assets/images/avatar-profile2.png')}}"
                                    alt="کاربر">
                            </a>
                        </div>
                        <div class="detail">
                            <h4>{{\Illuminate\Support\Facades\Auth::user()->fullName}}</h4>
                        </div>
                        <a href="#" title="رویدادها"><i class="zmdi zmdi-calendar"></i></a>
                        <a href="#" title="صندوق ورودی"><i class="zmdi zmdi-email"></i></a>
                        <a href="#" title="لیست مخاطبین"><i class="zmdi zmdi-account-box-phone"></i></a>
                        <a href="#" title="برنامه چت"><i class="zmdi zmdi-comments"></i></a>
                        <a href="{{route('logout')}}" title="خروج از سیستم"><i class="zmdi zmdi-power"></i></a>
                    </div>
                </li>
                <li class="active open"><a href="{{route('admin.dashboard')}}"><i
                            class="zmdi zmdi-home"></i><span>داشبورد</span></a>
                </li>

                <li><a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-account-o"></i><span>مدیریت فروشگاه</span> </a>
                    <ul class="ml-menu">
{{--                        <li><a href="{{route('admin.enroll-course-list')}}">ثبت نام در دوره</a></li>--}}
{{--                        <li><a href="{{route('admin.scores.index')}}">نمره دهی</a></li>--}}
{{--                        <li><a href="{{route('admin.results.index')}}">کارنامه</a></li>--}}
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>مدیریت تیکت ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('admin.tickets.index')}}">همه ی تیکت ها</a></li>
                        <li><a href="{{route('admin.tickets.newTicket')}}">تیکت های جدید</a></li>
                        <li><a href="{{route('admin.tickets.openTicket')}}">تیکت های باز</a></li>
                        <li><a href="{{route('admin.tickets.closeTicket')}}">تیکت های بسته</a></li>
                        <li><a href="{{route('admin.tickets.admins.index')}}">ادمین تیکت ها</a></li>
                        <li><a href="{{route('admin.tickets.categories.index')}}">دسته بندی تیکت ها</a></li>
                        <li><a href="{{route('admin.tickets.priorities.index')}}">اولویت بندی تیکت ها</a></li>
                    </ul>
                </li>
                @can('roles_read')
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>مدیریت دسترسی ها</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('admin.roles.index')}}"> نقش ها</a></li>
                            @can('roles_create')
                                <li><a href="{{route('admin.roles.create')}}">افزودن نقش جدید</a></li>
                            @endcan
                            @can('permissions_read')
                                <li><a href="{{route('admin.permissions.index')}}">لیست اختیارات</a></li>
                            @endcan
                            @can('permissions_create')
                                <li><a href="{{route('admin.permissions.create')}}">افزودن اختیارات جدید به نقش</a></li>
                            @endcan
                            @can('asigns_read')
                                <li><a href="{{route('admin.assign.index')}}">لیست تخصیصات</a></li>
                            @endcan
                            @can('asigns_create')
                                <li><a href="{{route('admin.assign.create')}}"> تخصیص نقش جدید به کاربر</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                <li class="active"><a href="javascript:void(0);"><span>مدیریت آموزشگاه</span></a>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-account-add"></i><span>مدیریت کاربران</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('admin.teachers.index')}}"> مدرسین</a></li>
                        <li><a href="{{route('admin.users.index')}}"> کاربران</a></li>
                        <li><a href="#"> ادمین ها</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>مدیریت دوره ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('admin.courses.index')}}"> دوره های حضوری</a></li>
                        <li><a href="{{route('admin.offline-courses.index')}}"> دوره های غیرحضوری </a></li>
                        <li><a href="{{route('admin.documents.index')}}">لیست دوره هایی که کاربر قبلا گذرانده </a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><span>امور دانش اموزان</span> </a>
                    <ul class="ml-menu">
                        <li><a href="{{route('admin.enroll-course-list')}}">ثبت نام در دوره</a></li>
                        <li><a href="{{route('admin.scores.index')}}">نمره دهی</a></li>
                        <li><a href="{{route('admin.results.index')}}">کارنامه</a></li>
                        <li><a href="javascript:void(0);" class="menu-toggle">آزمون آنلاین</a>
                            <ul class="ml-menu">
                                <li><a href="{{route('admin.online_exams.index')}}"> آزمونهای آنلاین </a></li>
                                <li><a href="{{route('admin.online_exams.create')}}">افزودن آزمون آنلاین</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="active"><a href="javascript:void(0);"><span>اطلاع رسانی ها</span></a>
                </li>
                @can('asigns_read')
                    <li><a href="{{route('admin.email.index')}}" ><i class="zmdi zmdi-account-o"></i><span>اطلاعیه های ایمیلی</span>
                        </a>

                    </li>
                    <li><a href="{{route('admin.sms.index')}}" ><i class="zmdi zmdi-account-o"></i><span>اطلاعیه های پیامکی</span>
                        </a>

                    </li>
                @endcan
{{--                <li><a href="javascript:void(0);" class="menu-toggle"><i--}}
{{--                            class="zmdi zmdi-copy"></i><span>صفحات عمومی</span> </a>--}}
{{--                    <ul class="ml-menu">--}}
                <li class="active"><a href="javascript:void(0);"><span>صفحات عمومی</span></a>
                </li>
                        <li><a href="{{route('admin.gallery.index')}}" ><span> گالری تصاویر </span> </a>
{{--                            <ul class="ml-menu">--}}
{{--                                <li><a href="{{route('admin.gallery.index')}}">لیست تصاویر </a></li>--}}
{{--                                <li><a href="{{route('admin.gallery.create')}}">افزودن تصویر جدید</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li><a href="{{route('admin.about.index')}}" ><span> درباره ما </span> </a>
{{--                            <ul class="ml-menu">--}}
{{--                                <li><a href="{{route('admin.about.index')}}">نمایش درباره ما </a></li>--}}
{{--                                <li><a href="{{route('admin.about.create')}}">ویرایش درباره ما</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li><a href="{{route('admin.contacts.index')}}" ><span> تماس با ما </span> </a>
{{--                            <ul class="ml-menu">--}}
{{--                                <li><a href="{{route('admin.contacts.index')}}">لیست پیام های ارسال شده </a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li><a href="{{route('admin.questions.index')}}"><span> سوالات متداول </span> </a>
{{--                            <ul class="ml-menu">--}}
{{--                                <li><a href="{{route('admin.questions.index')}}">لیست سوالات </a></li>--}}
{{--                                <li><a href="{{route('admin.questions.create')}}">افزودن سوال جدید</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li><a href="{{route('admin.news.index')}}" ><span> اخبار </span> </a>
{{--                            <ul class="ml-menu">--}}
{{--                                <li><a href="{{route('admin.news.index')}}">لیست اخبار </a></li>--}}
{{--                                <li><a href="{{route('admin.news.create')}}">افزودن خبر جدید</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li><a href="{{route('admin.newsletters.index')}};" ><span> خبرنامه </span> </a>
{{--                            <ul class="ml-menu">--}}
{{--                                <li><a href="{{route('admin.newsletters.index')}}">لیست اعضای خبرنامه </a></li>--}}
{{--                                <li><a href="{{route('admin.newsletters.index')}}">ارسال پیام به اعضا</a></li>--}}
{{--                            </ul>--}}
                        </li>
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>
        @endcan
    </div>
</aside>
