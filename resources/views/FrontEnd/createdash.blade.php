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

    <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */

        body {
            font-family: "Poppins", sans-serif;
        }

        .step-wizard {
            /* background-color: #21d4fd; */
            /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
            /* height: 100vh;
            width: 100%; */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5%;
        }

        .step-wizard-list {
            background: #fff;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            color: #333;
            list-style-type: none;
            border-radius: 10px;
            display: flex;
            padding: 20px 10px;
            position: relative;
            z-index: 10;
        }

        .step-wizard-item {
            padding: 0 20px;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            text-align: center;
            /* min-width: 170px; */

            position: relative;
        }

        .step-wizard-item+.step-wizard-item:after {
            content: "";
            position: absolute;
            left: 0;
            top: 19px;
            background: #21d4fd;
            width: 100%;
            height: 2px;
            transform: translateX(-50%);
            z-index: -10;
        }

        .progress-count {
            height: 40px;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: 600;
            margin: 0 auto;
            position: relative;
            z-index: 10;
            color: transparent;
        }

        .progress-count:after {
            content: "";
            height: 40px;
            width: 40px;
            background: #21d4fd;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: -10;
        }

        .progress-count:before {
            content: "";
            height: 10px;
            width: 20px;
            border-left: 3px solid #fff;
            border-bottom: 3px solid #fff;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -60%) rotate(-45deg);
            transform-origin: center center;
        }

        .progress-label {
            font-size: 14px;
            font-weight: 600;
            margin-top: 10px;
        }

        .current-item .progress-count:before,
        .current-item~.step-wizard-item .progress-count:before {
            display: none;
        }

        .current-item~.step-wizard-item .progress-count:after {
            height: 10px;
            width: 10px;
        }

        .current-item~.step-wizard-item .progress-label {
            opacity: 0.5;
        }

        .current-item .progress-count:after {
            background: #fff;
            border: 2px solid #21d4fd;
        }

        .current-item .progress-count {
            color: #21d4fd;
        }

        /* @media (max-width: 600px) {
	.step-wizard  .step-wizard-list { width: 80%; }
} */

@media only screen and (min-width: 768px) and (max-width: 990px) {
    /* .step-wizard  .step-wizard-list .step-wizard-item { padding: 0; } */
    .step-wizard  .step-wizard-list .step-wizard-item .progress-count { width: 100%; }
}
@media only screen and (max-width: 420px) {
    .step-wizard  .step-wizard-list .step-wizard-item { padding: 20px; }
    .step-wizard  .step-wizard-list .step-wizard-item .progress-count { width: 100%; }
}
    </style>
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
                                <li>مناقصة جديدة </li>
                                <li><a href="#">الرئسية</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>




            <div class="row">

                <!-- Table-->
                {{-- <div class="col-lg-12 col-md-12"> --}}
                <div class="eight columns">
                    <div class="dashboard-list-box margin-top-0">
                        <h4>مناقصة جديدة </h4>
                        <div class="dashboard-list-box-content">
                            <section class="step-wizard">
                                <ul class="step-wizard-list">
                                    <li class="step-wizard-item ">
                                        <span class="progress-count">1</span>
                                        <span class="progress-label">Billing Info</span>
                                    </li>
                                    <li class="step-wizard-item current-item">
                                        <span class="progress-count">2</span>
                                        <span class="progress-label">Payment Method</span>
                                    </li>
                                    <li class="step-wizard-item ">
                                        <span class="progress-count">3</span>
                                        <span class="progress-label">Checkout</span>
                                    </li>
                                    <li class="step-wizard-item ">
                                        <span class="progress-count">4</span>
                                        <span class="progress-label">Success</span>
                                    </li>
                                </ul>
                            </section>
                            <div class="submit-page" style="text-align: right;">

                                <!-- هل لديك تصميم -->

                                <div class="form">
                                    <h5>هل لديك تصميم ؟</h5>
                                    <!-- Rate/Hr -->
                                    <div class="widget">

                                        <ul class="checkboxes">
                                            <li>
                                                <input id="check-6" type="checkbox" name="check" value="check-6">
                                                <label for="check-6">نعم يوجد لدي تصميم</label>
                                            </li>
                                            <li>
                                                <input id="check-7" type="checkbox" name="check" value="check-7"
                                                    checked>
                                                <label for="check-7">أريد تصميم من مناقصات </label>
                                            </li>

                                        </ul>

                                    </div>

                                </div>

                                <!-- نوع المناقصة -->
                                <div class="form">
                                    <h5>:نوع المناقصة</h5>
                                    <!-- Sort by -->
                                    <div class="widget">
                                        <!-- Select -->
                                        <select data-placeholder="Choose Category" class="chosen-select-no-single">
                                            <option selected="selected" value="recent">تصميم</option>
                                            <option value="">إستشارة</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- المساحة -->
                                <div class="form">
                                    <h5>المساحة</h5>
                                    <!-- Sort by -->
                                    <div class="widget">

                                        <!-- Select -->
                                        <select data-placeholder="Choose Category" class="chosen-select-no-single">
                                            <option selected="selected" value="recent">المكان بأكمله</option>
                                            <option value="">المجلس</option>
                                            <option value="">الصالة</option>
                                            <option value="">المطبخ</option>
                                            <option value="">وغرفة الطعام</option>
                                            <option value="">الحمامات</option>
                                            <option value="">أخرى</option>
                                        </select>

                                    </div>
                                </div>

                                <!-- Location -->
                                <div class="form">
                                    <h5>مكان التصميم</h5>

                                    <ul class="checkboxes">
                                        <li>
                                            <input id="check-01" type="checkbox" name="check" value="check-01"
                                                checked>
                                            <label for="check-01">فيلا</label>
                                        </li>
                                        <li>
                                            <input id="check-02" type="checkbox" name="check" value="check-02">
                                            <label for="check-02">شركة</label>
                                        </li>
                                        <li>
                                            <input id="check-03" type="checkbox" name="check" value="check-03">
                                            <label for="check-03">عمارة</label>
                                        </li>
                                        <li>
                                            <input id="check-04" type="checkbox" name="check" value="check-04">
                                            <label for="check-04">أخرى</label>
                                        </li>
                                    </ul>
                                </div>

                                <!-- نوع التصميم -->
                                <div class="form">
                                    <h5>نوع التصميم <span>(إختياري)</span></h5>
                                    <!-- Sort by -->
                                    <div class="widget">
                                        <!-- Select -->
                                        <select data-placeholder="Choose Category" class="chosen-select-no-single">
                                            <option selected="selected" value="recent">تراثي قديم</option>
                                            <option value="">حديث</option>
                                            <option value="">شرقي</option>
                                            <option value="">أخرى</option>
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <!-- segunda pagina -->


                        </div>




                        <a href="#" class="button margin-top-30">Preview <i
                                class="fa fa-arrow-circle-right"></i></a>

                    </div>

                    <!-- Copyrights -->
                    <div class="col-md-12">
                        <div class="copyrights">© 2019 WorkScout. All Rights Reserved.</div>
                    </div>
                </div>

            </div>
            <!-- Content / End -->


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

    {{-- <script src="scripts/multistepjs.js"></script> --}}
</body>

</html>
