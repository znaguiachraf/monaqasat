<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Login</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors.css">



</head>

<body>
    <div id="wrapper">


        <!-- Header
================================================== -->
        @include('FrontEnd.header')

        <div class="clearfix"></div>


        <!-- Titlebar
================================================== -->
        <div id="titlebar" class="single">
            <div class="container">

                <div class="sixteen columns" style="text-align: right;">
                    <h2>تسجيل الدخول </h2>
                    <nav id="breadcrumbs">

                    </nav>
                </div>

            </div>
        </div>


        <!-- Content
================================================== -->

        <!-- Container -->
        <div class="container">

            <div class="my-account" style="text-align: right;">

                <div class="tabs-container">
                    <!-- Login -->
                    <div class="tab-content" id="tab1" style="display: none;">
                        <form method="POST" class="login" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Address -->
                            <p class="form-row form-row-wide">
                                <label for="username"> : البريد الإكتروني
                                    <i class="ln ln-icon-Male"></i>

                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </label>
                            </p>
                            <!-- Password -->
                            <p class="form-row form-row-wide">
                                <label for="password">:كلمة المرور
                                    <i class="ln ln-icon-Lock-2"></i>

                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </label>
                            </p>

                            <p class="form-row">
                                <input type="submit" class="button border fw margin-top-10" name="login"
                                    value="دخول" />

                                <label for="rememberme" class="rememberme">
                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"
                                        style="text-align: left;" /> تذكر بيانات دخول الحساب</label>

                            </p>

                            <p class="lost_password">
                                <a href="#">نسيت كلمة المرور ؟</a>
                            </p>

                        </form>
                    </div>


                </div>
            </div>
        </div>



        <!-- Footer
================================================== -->
        <div class="margin-top-30"></div>

        @include('FrontEnd.footer')

        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>

    </div>
    <!-- Wrapper / End -->


    <!-- Scripts
================================================== -->
    <script src="scripts/jquery-3.6.0.min.js"></script>
    <script src="scripts/jquery-migrate-3.3.2.min.js"></script>
    <script src="scripts/custom.js"></script>
    <script src="scripts/jquery.superfish.js"></script>
    <script src="scripts/jquery.themepunch.tools.min.js"></script>
    <script src="scripts/jquery.themepunch.revolution.min.js"></script>
    <script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
    <script src="scripts/jquery.flexslider-min.js"></script>
    <script src="scripts/chosen.jquery.min.js"></script>
    <script src="scripts/jquery.magnific-popup.min.js"></script>
    <script src="scripts/waypoints.min.js"></script>
    <script src="scripts/jquery.counterup.min.js"></script>
    <script src="scripts/jquery.jpanelmenu.js"></script>
    <script src="scripts/stacktable.js"></script>
    <script src="scripts/slick.min.js"></script>
    <script src="scripts/headroom.min.js"></script>






</body>

</html>
