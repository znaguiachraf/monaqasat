<!DOCTYPE html>
<html lang="ar">

<head>


    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>create monaqasa</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="css/colors.css">
    {{-- <link rel="stylesheet" href="css/multistep.css"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">



</head>

<body>


    <div id="wrapper">

        <!-- Header
================================================== -->
        @include('FrontEnd.dashheader')

        <div class="clearfix"></div>



    </div>
    <!-- Wrapper / End -->


    <!-- Titlebar
    ================================================== -->

    <!-- Dashboard -->
    <div id="dashboard">

        @include('FrontEnd.dashnavi')


        <!-- Content
        ================================================== -->
        <div class="dashboard-content">

            <!-- Titlebar -->
            <div id="titlebar">
                <div class="row">
                    <div class="col-md-12">
                        <h2>مرحبا </h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li>الملف الشخصي</li>
                                <li><a href="#">الرئسية</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>



            <div class="row">
                <!-- Profile -->
                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-list-box margin-top-0">
                        <h4 class="gray">الملف الشخصي</h4>
                        <div class="dashboard-list-box-static">

                            <!-- Avatar -->
                            {{-- <div class="edit-profile-photo"> --}}
                                <div class="image_div">
                                <img src="images/LogoG.jpg" alt="">
                                </div>
                                {{-- <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload" />
                                    </div>
                                </div> --}}
                            {{-- </div> --}}

                            <!-- Details -->
                            <div class="my-profile">

                                <label>إسم المستخدم</label>
                                <input value="Tom Perrin" type="text">

                                <label>الهاتف</label>
                                <input value="(123) 123-456" type="text">

                                <label>البريد الإلكتروني</label>
                                <input value="tom@example.com" type="text">

                                <label>الدولة</label>
                                  <select data-placeholder="Choose Category" class="chosen-select-no-single">
                                    <option selected="selected" value="recent">قطر</option>
                                    <option value="">الأردن</option>
                                    <option value="">الإمارات</option>
                                    <option value="">السعودية</option>
                                </select>


                                <label><i class="fa fa-twitter"></i> Twitter</label>
                                <input placeholder="https://www.twitter.com/" type="text">

                                <label><i class="fa fa-facebook-square"></i> Facebook</label>
                                <input placeholder="https://www.facebook.com/" type="text">

                                <label><i class="fa fa-google-plus"></i> Google+</label>
                                <input placeholder="https://www.google.com/" type="text">
                            </div>

                            <button class="button margin-top-15">حفظ التعديلات</button>

                        </div>
                    </div>
                </div>

                <!-- Change Password -->
                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-list-box margin-top-0">
                        <h4 class="gray">تغير كلمة المرور</h4>
                        <div class="dashboard-list-box-static">

                            <!-- Change Password -->
                            <div class="my-profile">
                                <label class="margin-top-0">كلمة المرور الحالية</label>
                                <input type="password">

                                <label>كلمة المرور الجديدة</label>
                                <input type="password">

                                <label>تأكيد كلمة المرور</label>
                                <input type="password">

                                <button class="button margin-top-15">تغير كلمة المرور </button>
                            </div>

                        </div>
                    </div>
                </div>



                <!-- Copyrights -->
                <div class="col-md-12">
                    <div class="copyrights">© 2019 WorkScout. All Rights Reserved.</div>
                </div>
            </div>



        </div>
        <!-- Dashboard / End -->


    </div>




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
