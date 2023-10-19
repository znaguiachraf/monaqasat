<header class="sticky-header">
    <div class="container">
        <div class="sixteen columns">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="index.html"><img src="images/logo.png" alt="Work Scout" /></a></h1>
            </div>

            <!-- Menu -->
            <nav id="navigation" class="menu">
                <ul id="responsive">

                    <li><a id="current" href="index.html">الرئسية</a>

                    </li>

                    <li><a href="#target">عن عطاءات</a>

                    </li>

                    <li><a href="#target1">مجال عملنا</a>


                    </li>

                    <li><a href="#target2">مشروعات عطاءات</a>

                    </li>
                    <li><a href="#">كيفية عملنا</a>

                    </li>
                    </li>
                    <li>
                        <a href="#">تواصل معنا</a>
                    </li>
                </ul>


                <ul class="responsive float-right">
                    {{-- <li><a href="{{ route('page1') }}"><i class="fa fa-user"></i> تسجيل</a></li> --}}
                    {{-- <li><a href="my-account.html"><i class="fa fa-lock"></i> دخول</a></li> --}}
                    @if (Route::has('login'))
                        @auth
                            <li><a href="#"><i class="fa fa-user"></i> الملف الشخصي</a></li>
                            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> لوحة التحكم</a></li>
                        @else
                            <li><a href="{{ route('login') }}"><i class="fa fa-user"></i> تسجيل</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}"><i class="fa fa-lock"></i> دخول</a></li>
                            @endif
                        @endauth

                    @endif
                </ul>

            </nav>

            <!-- Navigation -->
            <div id="mobile-navigation">
                <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i></a>
            </div>

        </div>
    </div>
</header>
