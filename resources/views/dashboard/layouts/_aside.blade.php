 <!-- BEGIN: Header-->
 <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">




                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">Mohamed</span></div><span><img class="round" src="{{asset('dashboard_files/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="feather icon-power"></i> Logout</a>
                            <form id="logout-form" action="#" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- END: Header-->

   <!-- BEGIN: Main Menu-->
   <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template-semi-dark/index.html">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Vuexy</h2>
                </a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" nav-item"><a href="{{url('/')}}"><i class="feather icon-home"></i><span class="menu-title">الصفحة الرئيسية للموقع</span></a>
            </li>

            <li class=" nav-item"><a href="{{url('dashboard/home')}}"><i class="feather icon-home"></i><span class="menu-title">لوحة التحكم</span></a>
            </li>


            <li class="nav-item"><a href="{{url('dashboard/company_info')}}"><i class="feather icon-list"></i><span class="menu-title">بيانات الشركات</span></a>
            </li>



            <li class="nav-item"><a href="{{ url('dashboard/region')}}"><i class="fa fa-th"></i></i><span class="menu-title">المنطقة</span></a>
            </li>



            <li class="nav-item"><a href="{{url('dashboard/activity_types')}}"><i class="fa fa-th"></i><span class="menu-title">أنواع النشاط</span></a>
            </li>

            <li class="nav-item"><a href="{{url('dashboard/company_sector_specialist')}}"><i class="fa fa-th"></i><span class="menu-title">متخصص بقطاع الشركة</span></a>
            </li>


            <li class="nav-item"><a href="{{url('dashboard/clients')}}"><i class="feather icon-users"></i><span class="menu-title">العملاء</span></a>
            </li>

            <li class="nav-item"><a href="{{url('dashboard/services')}}"><i class="fa fa-th"></i><span class="menu-title">الخدمات</span></a>
            </li>

            <li class="nav-item"><a href="{{url('dashboard/settings')}}"><i class="fa fa-th"></i><span class="menu-title">الاعدادات</span></a>
            </li>

            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
