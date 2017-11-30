<!DOCTYPE html>
<html style="" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="manifest" href="https://www.uniagents.com/manifest.json">
        <script type="text/javascript" async="" src="js/ga.js"></script><script src="js/OneSignalSDK.js" async=""></script>
        <script>
            var OneSignal = window.OneSignal || [];
            OneSignal.push(["init", {
                    appId: "4e70e6df-4d33-4bed-ab42-fd19bf3c9064",
                    autoRegister: true,
                    notifyButton: {
                        enable: false /* Set to false to hide */
                    }
                }]);
        </script>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=Edge">

        <title>Studying Abroad made Easy | JWS EduConsult</title>

        <meta name="description" content="">

        <meta name="keywords" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="images/logo_icon.png" type="image/png">

        <link rel="icon" href="images/logo_icon.png" type="image/pngn">

        <link rel="stylesheet" type="text/css" href="css/style_nz.css">

        <!-- jquery library -->

        <script type="text/javascript" src="js/jquery-1.js"></script>

        <!-- jquery library -->

        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

        <!--<link rel="stylesheet" type="text/css" href="https://www.uniagents.com/css/animate.css">-->

        <link rel="stylesheet" href="css/slicknav.css">



        <!-- facebox -->

        <link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css">

        <script src="js/facebox.js" type="text/javascript"></script>



        <script type="text/javascript">

            $(document).ready(function () {



                $('a[rel*=facebox]').facebox();

                $('a[rel*=prettyPhoto]').facebox();

            });

        </script>

        <!-- facebox -->



        <!-- responsive menu -->

        <script src="js/modernizr.js"></script>

        <script src="js/jquery.js"></script>

        <script>

            $(function () {

                $('#menu').slicknav();

            });

        </script>

        <!-- responsive menu -->

        <script>

            $(document).ready(function () {





                $('#sign').click(function () {

                    $('.toggle-register').hide();

                    $('.toggle-sign').slideToggle(500);

                });



                $('#register').click(function () {

                    $('.toggle-sign').hide();

                    $('.toggle-register').slideToggle(500);

                });





            });

        </script>

        <!-- slider -->

        <!--<link rel='stylesheet' id='camera-css'  href='https://www.uniagents.com/css/camera.css' type='text/css' media='all'>
        
         slider -->



        <!-- Include js plugin -->

        <link rel="stylesheet" type="text/css" href="css/responsive-slides.css">

        <script src="js/jquery_002.js"></script>

        <script src="js/test.js"></script>

<!--<script src="slider/jquery.min.js"></script>-->

        <script src="js/responsiveslides.js"></script>

        <script>



            function show_hide_div(id_clicked, id_to_show) {





                if ($('#' + id_clicked).is(':checked')) {

                    $('#' + id_to_show).slideDown(1000);

                } else {
                    $('#' + id_to_show).slideUp(1000);
                }



            }





            $(document).ready(function () {

                //$('ul.rslides a.prev').html('<i class="fa fa-user"></i>');

                $(".rslides").responsiveSlides({
                    pager: true,
                    nav: true,
                    prevText: "<i class='fa fa-angle-left'></i>", // String: Text for the "previous" button

                    nextText: "<i class='fa fa-angle-right'></i>",
                    timeout: 6000,
                    speed: 1000,
                });



                $(".rslides1").responsiveSlides({
                    pager: false,
                    //nav: true,

                    //prevText: "<i class='fa fa-angle-left'></i>",   // String: Text for the "previous" button

                    //nextText: "<i class='fa fa-angle-right'></i>",

                    timeout: 6000,
                    speed: 1000,
                });





            });





            function sortDropDownListByText() {

                // Loop for each select element on the page.

                $("select.sort_alphabet").each(function () {



                    // Keep track of the selected option.

                    var selectedValue = $(this).val();



                    // Sort all the options by text. I could easily sort these by val.

                    $(this).html($("option", $(this)).sort(function (a, b) {

                        if (a.value != '')
                            return a.text == b.text ? 0 : a.text < b.text ? -1 : 1





                    }));

                    // }

                    // Select one option.

                    $(this).val(selectedValue);

                });





            }



            $(document).ready(sortDropDownListByText);

        </script>



    </head>



    <body>
        <!-- header -->
        <header>
            <div class="top-header">
                <div class="wrapper">
                    <!-- social -->

                    <div class="social">
                        <a href="https://www.facebook.com/jws" target="_blank" title="Join Uniagents &gt; on Facebook "><i class="fa fa-facebook"></i></a> 
                        <a title="Join JWS Consult &gt; on Twitter " href="https://twitter.com/JwsConsult" target="_blank"><i class="fa fa-twitter"></i></a> 
                        <a title="Join Uniagents &gt; on You Tube" href="https://www.youtube.com/channel/jwsConsult" target="_blank"><i class="fa fa-youtube"></i></a> 
                        <a title="Join Uniagents &gt; on Linkdin" href="https://www.linkedin.com/company/jwsConsult" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>

                    <!-- social -->

                    <!-- top-right-menu -->

                    <div class="top-right">

                        <div class="nav-container1">

                            <ul class="clearfix" style="">
                                <li><a title="JWS Consult Home" href="index.php"> Home </a></li>
                                <li><a title="About JWS Consult" href="about-us.php"> About us </a></li>
                                <li><a title="Contact JWS Consult" href="contact-us.php"> Contact Us </a></li>
                                <li class="highlight"><a href="javascript:void(0);">Register</a>

                                    <ul>

                                        <li><a href="register-agent.php">As Consultant</a></li>

                                        <li><a href="student-registeration.php">As Student</a></li>

                                    </ul>

                                </li>


                            </ul>

                        </div>

                    </div>

                    <!-- top-right-menu -->

                    <div class="clearfix"></div>

                </div>

            </div>

        </header>

        <!-- header -->

        <!-- logo & navigation -->

        <div class="wrapper">

            <!-- logo -->

            <div class="logo"><a title="JWS Consult" href="index.php"><img src="images/uniagents.png"></a></div>

            <!-- logo -->



            <!-- navigation -->

            <div class="nav-container">
                <nav>
                    <ul id="menu">
                        <li><a href="#">Student Services</a>
                            <ul rolle="menuitem">
                                <li><a href="services.php#underGraduate">UnderGraduate Studies</a></li>
                                <li><a href="services.php#postGraduate">Post Graduate Studies</a></li>
                                <li><a href="services.php#skilledProgramme">Skilled Workers Programme</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Visa Information</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="institutions.php">Institutions</a></li>
                    </ul>
                </nav>
            </div>

            <!-- navigation -->

            <div class="clearfix"></div>

        </div>

        <!-- logo & navigation -->
        <style>
            .banner-container{background:url(images/india-event-video-bg.jpg) 100% center;max-height:560px;background-size:100%;overflow:hidden;position:relative;}
            .video-left, .video-right{display:block;width:50%;float:left;}
            .video-left .video{width:80%;margin:61px auto;border-radius:10px;overflow:hidden;}
            .video-right p{color:#fff;line-height:30px;}
            .video-right p.head{font-size:44px;padding-top:160px;margin-bottom:20px;}
            a.video-more{display:inline-block;background:#09C;color:#fff;padding:8px 20px;margin-top:15px;text-transform:uppercase;}
            #video{/*margin-top:-8%;*/}
            .video-btn-container{position:absolute;width:100%;text-align:right;bottom:100px;right:30px;z-index:20;}
            .video-button{display:inline-block;background:#09C;color:#fff;padding:8px 20px;margin-top:15px;text-transform:uppercase;font-size: 20px;}
            #mobile{display:none;}
            .video-button:hover{background:#ff9900;color:#fff;}
            .banner-info .rslides{position:absolute;height:100%;}
            .banner-info .rslides li{position:absolute;width:355px;height:100%;background:rgba(0, 67, 120, 0.9)/*rgba(255, 153, 0, 0.8)*/;left:5%;padding:50px;box-sizing:border-box;color:#fff;z-index:1;}
            .banner-info{}
            .banner-info .rslides li:nth-child(even){background:rgba(0, 176, 196, 0.9);}
            .banner-info .event-name{text-transform:uppercase;font-weight:bold;font-size:20px;margin-top:30px;}
            .banner-info .event-name span{font-size:13px;font-style:italic;display:block;text-transform:none;line-height:18px;font-weight:normal;padding-top:10px;color:#ff9900;}
            .banner-info .rslides li:nth-child(even) .event-name span{color:#002d59;/*text-shadow:1px 1px 1px #333;*/font-weight:bold;}
            .banner-info .date-container{border-top:1px solid #fff;border-bottom:1px solid #fff;margin:40px 0;}
            .banner-info .date{display:inline-block;padding:35px 0;width:58%;vertical-align:middle;}
            .banner-info .details{display:inline-block;border-radius:5px;font-size:16px;text-align:center;padding:7px 20px;box-sizing:border-box;color:#fff;border:1px solid #fff;}
            .banner-info .details:hover{background:#ff9900;border:1px solid #ff9900;}
            .banner-info small{display:block;font-size:16px;}
            .banner-info .big-head{font-size:40px;text-align:center;font-weight:bold;}
            sup{font-size:11px;vertical-align:text-top;font-weight:normal;}
            .banner-info .location{line-height:25px;}
            .banner-info .time{display:block;font-size:14px;color:#fff;margin-top:15px;}
            .search-box{z-index:2;}
            input[id="mobile"]{display:block !important;}
            .banner-info .prev, .banner-info .next{display:none;}
            .banner-info .rslides_tabs li a{background:#fff !important;border-radius:100%;height:10px;width:10px;display:inline-block;padding:2px;}
            .banner-info .rslides_tabs{position:absolute;width:356px;left:5%;}
            .banner-info .rslides_tabs .rslides_here a{background:#ff9900 !important;}
            @media screen and (min-width:320px) and (max-width:640px){
                .banner-container{min-height:0;background:#ff9900;}
                video{display:none;}
                .video-btn-container{bottom:15px;right:10px;}
                .video-button{font-size:12px;}
                #mobile{display:block;}
                input[id="mobile"]{display:block !important;}
            }
            @media screen and (min-width:320px) and (max-width:1000px) {
                .banner-info {display:none;}
            }

        </style>
        <!-- slider container -->
        <style>
            .banner-container{/*max-height:538px;*/}
        </style>