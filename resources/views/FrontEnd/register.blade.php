<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Register</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/colors.css">

    <style>
        .righttext {
            text-align: right;
        }

        .center-container1 {
            display: flex;
            justify-content: center;
        }

        .center-list1 {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
    </style>

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

            <div class="my-account righttext">

                <ul class="tabs-nav">
                    <li class=""><a href="#tab1">عميل</a></li>
                    <li><a href="#tab2">شركة</a></li>
                </ul>

                <div class="tabs-container">
                    <!-- Register Client -->
                    <div class="tab-content" id="tab1" style="display: none;">
                        <form method="POST" class="register" action="{{ route('register') }}">
                            @csrf
                            <!-- Contry  -->
                            <p class="form-row form-row-wide">
                                <label for="country">:الدولة
                                    <i class="ln ln-icon-Location-2"></i>
                                    <input type="text" class="input-text righttext" name="adresse" id="adresse"
                                        value="Qatar" readonly />
                                </label>
                            </p>
                            <!-- Phone -->
                            <p class="form-row form-row-wide">
                                <label for="phone">:رقم الهاتف
                                    <i class="ln ln-icon-Phone-2"></i>
                                    <input type="text" class="input-text righttext" name="phone" id="phone"
                                        value="" pattern="[0-9]{10}" required placeholder="+974" />
                                </label>
                            </p>
                            <!-- Name -->
                            <p class="form-row form-row-wide">
                                <label for="name">:الإسم
                                    <i class="ln ln-icon-Male"></i>
                                    <input type="text" class="input-text" name="name" id="name"
                                        value="" autocomplete="name" required />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </label>
                            </p>
                            <!-- Email -->
                            <p class="form-row form-row-wide">
                                <label for="email2">: البريد الإكتروني
                                    <i class="ln ln-icon-Mail"></i>
                                    <input type="text" class="input-text" name="email" id="email"
                                        value="" required autocomplete="email" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </label>
                            </p>
                            <!-- userType -->
                            <div class="mt-4" hidden>
                                <x-input-label for="usertype" :value="__('usertype')" />
                                <x-text-input id="usertype" class="block mt-1 w-full" type="text" name="usertype"
                                    value="U" />
                                <x-input-error :messages="$errors->get('usertype')" class="mt-2" />
                            </div>
                            <!-- Password -->
                            <p class="form-row form-row-wide">
                                <label for="password1">:كلمة المرور
                                    <i class="ln ln-icon-Lock-2"></i>
                                    <input class="input-text" type="password" name="password" id="password"
                                        autocomplete="new-password" required />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </label>
                            </p>

                            <!-- Password Confirmation-->
                            <p class="form-row form-row-wide">
                                <label for="password2"> : تأكيد كلمة المرور
                                    <i class="ln ln-icon-Lock-2"></i>
                                    <input class="input-text" type="password" name="password_confirmation"
                                        id="password_confirmation" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </label>
                            </p>

                            <p class="form-row">
                                <input type="submit" class="button border fw margin-top-10" name="register"
                                    value="إرسال" {{ __('Register') }} />
                            </p>
                            <p class="lost_password">
                                <a href="{{ route('login') }}">أنت بالفعل لديك حساب ؟</a>
                            </p>
                        </form>
                    </div>
                    <!-- Register Company -->
                    <div class="tab-content" id="tab2" style="display: none;">

                        <form method="POST" class="register" action="{{ route('register') }}">
                            @csrf
                            <p class="form-row form-row-wide">
                                <label for="name">: إسم الشركة
                                    <i class="ln ln-icon-Male"></i>
                                    <input type="text" class="input-text" name="name" id="name"
                                        value="" />
                                </label>
                            </p>

                            <p class="form-row form-row-wide">
                                <label for="adresse">: العنوان
                                    <i class="ln ln-icon-Location-2"></i>
                                    <input type="text" class="input-text" name="adresse" id="adresse"
                                        value="" />
                                </label>
                            </p>

                            <p class="form-row form-row-wide">
                                <label for="comregister">: السجل التجاري
                                    <i class="ln ln-icon-Folder-Bookmark"></i>
                                    <input type="text" class="input-text" name="comregister" id="comregister"
                                        value="" />
                                </label>
                            </p>

                            <p class="form-row form-row-wide">
                                <label for="phone">:رقم الهاتف
                                    <i class="ln ln-icon-Phone-2"></i>
                                    <input type="text" class="input-text righttext" name="phone" id="phone"
                                        value="" pattern="[0-9]{10}" required placeholder="+974" />
                                </label>
                            </p>
                            <!-- userType -->
                            <div class="mt-4" hidden>
                                <x-input-label for="usertype" :value="__('usertype')" />
                                <x-text-input id="usertype" class="block mt-1 w-full" type="text" name="usertype"
                                    value="C" />
                                <x-input-error :messages="$errors->get('usertype')" class="mt-2" />
                            </div>

                             <!-- Email -->
                             <p class="form-row form-row-wide">
                                <label for="email2">: البريد الإكتروني
                                    <i class="ln ln-icon-Mail"></i>
                                    <input type="text" class="input-text" name="email" id="email"
                                        value="" required autocomplete="email" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </label>
                            </p>

                            <!-- Password -->
                            <p class="form-row form-row-wide">
                                <label for="password1">:كلمة المرور
                                    <i class="ln ln-icon-Lock-2"></i>
                                    <input class="input-text" type="password" name="password" id="password"
                                        autocomplete="new-password" required />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </label>
                            </p>

                            <!-- Password Confirmation-->
                            <p class="form-row form-row-wide">
                                <label for="password2"> : تأكيد كلمة المرور
                                    <i class="ln ln-icon-Lock-2"></i>
                                    <input class="input-text" type="password" name="password_confirmation"
                                        id="password_confirmation" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </label>
                            </p>

                            <p class="form-row">
                                <input type="submit" class="button border fw margin-top-10" name="register"
                                    value="إرسال" />
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
