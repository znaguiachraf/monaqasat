 <!-- Header
    ================================================== -->
    <header class="dashboard-header">
        <div class="container">
            <div class="sixteen columns">

                <!-- Logo -->
                <div id="logo">
                    <h1><a href="{{ route('home') }}"><img src="images/logo.png" alt="Work Scout" /></a></h1>
                </div>

                <!-- Menu -->
                <nav id="navigation" class="menu">
                    <ul id="responsive">

                        <li><a id="current" href="{{ route('home') }}">الرئسية</a>

                        </li>

                        <li><a href="{{ route('home') }}#section1" >عن عطاءات</a>

                        </li>

                        <li><a href="{{ route('home') }}#target1">مجال عملنا</a>


                        </li>

                        <li><a href="{{ route('home') }}#target2">مشروعات عطاءات</a>

                        </li>
                        <li><a href="#">كيفية عملنا</a>

                        </li>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#target4">تواصل معنا</a>
                        </li>

                        {{-- <li style="float: left;"><a href="dashboard.html"><i class="fa fa-cog " ></i> Dashboard</a></li>
                        <li style="float: left;"><a href="index.html"><i class="fa fa-lock"></i> Log Out</a></li> --}}
                    </ul>

                </nav>

                <!-- Navigation -->
                <div id="mobile-navigation">
                    <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i></a>
                </div>

            </div>
        </div>
    </header>

