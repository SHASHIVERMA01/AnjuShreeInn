<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @foreach(App\Models\metas::where('page_name','dining')->get() as $meta)
    <title>{{ $meta->meta_heading }}</title>
    <meta name="description" content="{{ $meta->meta_content }}" />
    <meta name="keywords" content="{{ $meta->meta_keyword }}" />
    @endforeach
    <meta name="copyright" content="All coding copyright Hotelparkocean, all rights reserved." />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href='css/jquery.flipster.min.css'>
    <link rel="stylesheet" href='css/magnific-popup.css'>
    <link rel="stylesheet" href='css/image-box.css'>
    <link rel="stylesheet" href='css/content-box.css'>
    <link rel="stylesheet" href='css/contact-form.css'>
    <link rel="stylesheet" href='css/flexslider.css'>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="icon" href="images/favicon.ico">
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-77909154-1', 'auto');
        ga('send', 'pageview');

    </script>
      <style>

        .ulb:hover{
          border-bottom: 2px solid #00529C;
          /* text-decoration: underline; */
        }
          </style>
        
</head>

<body id="bodys">
    <div id="preloader"></div>
    <div class="overlay-content">
        <header class="fixed-top scroll-change" data-menu-anima="fade-bottom">
            <div class="navbar navbar-default icon-menu navbar-fixed-top" role="navigation">
                <div class="navbar-mini scroll-hide">   
                    <div class="container-fluid">
                        <div class="nav navbar-nav navbar-left" style="font-size:12px;">
                            <span>Welcome to our Hotel Anju Shree Inn Jaipur, Rajasthan</span>
                            <hr />
                            <span><i class="fa fa-phone"></i> +91 7412963888 , +91 9829655254 , 0141 4871485</span>
                            <hr />
                            <span><i class="fa fa-envelope-o"></i>hotelanjushreeinnjpr@gmail.com</span>
                        </div>
                        {{-- <div class="nav navbar-nav navbar-right">
                            <div class="minisocial-group">
                                <a target="_blank" href="https://www.facebook.com/ParkOceanJaipur/"><i
                                        class="fa fa-facebook"></i></a>
                                <a target="_blank" href="https://twitter.com/hotelparkocean"><i
                                        class="fa fa-twitter"></i></a>
                                <a target="_blank"
                                    href="https://www.instagram.com/accounts/login/?next=/hotelparkocean/"><i
                                        class="fa fa-instagram"></i></a>
                                <a target="_blank" href="https://www.linkedin.com/in/parkocean"><i
                                        class="fa fa-linkedin"></i></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCGkxkMymvCXCa7WkCk6dXLw"><i
                                        class="fa fa-youtube"></i></a>
                                <a target="_blank"
                                    href="https://www.tripadvisor.in/Hotel_Review-g304555-d8596386-Reviews-Hotel_Park_Ocean-Jaipur_Jaipur_District_Rajasthan.html"
                                    title="Trip Advisior">
                                    <img src="images/trip_advisior.png" style="width: 25px;margin-left: 10px;">
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>   <hr style="margin: 5px 0px">
                <div class="navbar navbar-main">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="/" id="onethousandlogo"><img src="{{asset('/images/HotelLogo.svg')}}" alt="logo"
                                style="height:80px ; width:90px ; transform :scale(1.6,1.5)"></a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="/about-us"><i class="onlycover"
                                           ></i><span  class="ulb">About
                                            Us</span></a>
                                </li>
                                <li>
                                    <a href="/accommodations">
                                        <i class="onlycover"></i>
                                        <span  class="ulb">Accommodations </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dining">
                                        <i class="onlycover"
                                        ></i>
                                        <span  class="ulb">Dining</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/eventbanquet">
                                        <i class="onlycover" ></i>
                                        <span  class="ulb">Meeting and Banquets</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/specialoffers">
                                        <i class="onlycover" ></i>
                                        <span  class="ulb">Special Offers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/gallery">
                                        <i class="onlycover" ></i>
                                        <span  class="ulb">Gallery</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/blog">
                                        <i class="onlycover" ></i>
                                        <span  class="ulb">Blog</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact">
                                        <i class="onlycover" ></i>
                                        <span  class="ulb">Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="nav navbar-nav navbar-right">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <style>
            @media screen and (min-width: 1170px) and (max-width: 1310px) {
                .onlycover {
                    width: 25px !important;
                }

            }

            @media screen and (min-width: 1000px) and (max-width: 1169px) {
                .onlycover {
                    width: 22px !important;
                }

                #bodys {
                    font-size: 13px !important;
                }

                #onethousandlogo {
                    margin-left: -5px !important;
                }
            }
        </style>



    @foreach(App\Models\bigbanners::where('title','Dine In')->get() as $banner)
    <div class="header-title white" style="background-image:url('/storage/homepage/{{$banner->banner}}');">
        <div class="container">
            <div class="title-base">
                <!--<hr class="anima" />-->
                <h1>{{ $banner->title }}</h1>
                <p style="font-size:22px;"><i></i></p>

            </div>
        </div>
    </div>
    @endforeach


    <div class="section-empty" style="background: #ffffff !important;">
        <div class="container content">
            <div class="row">
                <div class="col-md-12 portfolio-details">

                    <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                        <h2><span style="color: #00529c; font-size: 28px;">Welcome to Culinary Delights at HOTEL Anju
                                SHREE Inn</span> </h2>
                        <hr class="anima" /><br>
                        <p>Indulge your senses in a symphony of flavors at our exquisite dining establishments. At HOTEL
                            ANJU SHREE INN,<br /> we take pride in offering a culinary experience that transcends the
                            ordinary.
                            Step into a world where every dish tells a story, and every bite is a journey.</b> <br> <br>
                        </p>


                        <p><span style="color: #00529c; font-size: 28px;">A Culinary Voyage: <br> </span>

                            Embark on a gastronomic adventure with our diverse menu curated by our skilled chefs. From
                            locally inspired dishes to international delights, our menu is a celebration of taste and
                            innovation. Savor the freshest ingredients, expertly prepared to tantalize your palate. <br>
                            <br>
                        </p>


                        <p><span style="color: #00529c; font-size: 28px;">Elegant Ambiance: <br> </span>

                            Immerse yourself in the warm and welcoming ambiance of our dining spaces. Whether you prefer
                            an
                            intimate dinner for two or a lively gathering with friends and family, our restaurant
                            provides
                            the perfect setting for any occasion. Enjoy the stylish decor and attentive service that
                            create
                            an atmosphere of sophistication and comfort.. <br> <br></p>



                        <p><span style="color: #00529c; font-size: 28px;">Seasonal Specials: <br> </span>

                            At HOTEL ANJU SHREE INN, we believe in the beauty of seasonal ingredients. Our chefs
                            continuously
                            craft special menus that showcase the best of each season. Explore unique flavors and
                            delightful
                            combinations that reflect the spirit of the time of year. <br> <br></p>


                        <p><span style="color: #00529c; font-size: 28px;">Unforgettable Culinary Events: <br> </span>

                            Join us for special culinary events that go beyond the ordinary. From wine tastings to
                            themed dinners, we create memorable experiences that elevate your time with us. <br> <br>
                        </p>


                        <p><span style="color: #00529c; font-size: 28px;">Reservations: <br> </span>

                            Secure your spot at our dining haven by making a reservation. Whether it's a casual brunch,
                            a
                            romantic dinner, or a group celebration, we look forward to serving you with the utmost care
                            and
                            attention to detail.</p>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="section-empty">
        <div class="container content">
            <div class="grid-list gallery">
                <div class="grid-box row" data-lightbox-anima="show-scale">

                    <div class="grid-item col-md-3">
                        <a class="img-box i-center img-scale-rotate" href="/images/d1.jpg" style="height:185px;">
                            <i class="fa fa-camera"></i>
                            <img alt="" src="/images/d1.jpg">
                        </a>
                    </div>
                    <div class="grid-item col-md-3">
                        <a class="img-box i-center img-scale-rotate" href="/images/d2.jpg" style="height:185px;">
                            <i class="fa fa-camera"></i>
                            <img alt="" src="/images/d2.jpg">
                        </a>
                    </div>
                    <div class="grid-item col-md-3">
                        <a class="img-box i-center img-scale-rotate" href="/images/d3.jpg" style="height:185px;">
                            <i class="fa fa-camera"></i>
                            <img alt="" src="/images/d3.jpg">
                        </a>
                    </div>
                    <div class="grid-item col-md-3">
                        <a class="img-box i-center img-scale-rotate" href="/images/d4.jpg" style="height:185px;">
                            <i class="fa fa-camera"></i>
                            <img alt="" src="/images/d4.jpg" style="">
                        </a>
                    </div>


                </div>
                <div class="list-nav">
                    <ul class="pagination-sm pagination-grid" data-page-items="8" data-pagination-anima="show-scale">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <style>
        .mfp-img {
            max-height: 300px !important;
        }
    </style>


<footer class="footer-center footer-minimal">
    <div class="content">
        <div class="container">
            <div class="row footer-main">
                <p class="footer-title">CONTACT US</p>
                <p> Plot No. 1B , Shop No. 6/7 , Kalyan Nagar 3rd , Sanganer , Tonk Road , Jaipur - 302029</p>
                <div class="tag-row icon-row">
                    <span><a href="mailto:hotelanjushreeinnjpr@gmail.com">hotelanjushreeinnjpr@gmail.com</a></span>
                    <span>+91 7412963888 , +91 9829655254 , 0141 4871485</span>
                </div>
                <hr class="space xs" />
                <div class="btn-group navbar-social">
                    <div class="btn-group social-group">
                        <a target="_blank" href=""><i
                                class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#"><i
                                class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i
                                class="fa fa-instagram"></i></a>
                        <a target="_blank" href="#"><i
                                class="fa fa-linkedin"></i></a>
                        <a target="_blank" href="#"><i
                                class="fa fa-youtube"></i></a>
                        {{-- <a target="_blank"
                            href="https://www.tripadvisor.in/Hotel_Review-g304555-d8596386-Reviews-Hotel_Park_Ocean-Jaipur_Jaipur_District_Rajasthan.html"
                            title="Trip Advisior">
                            <img src="images/trip_advisior.png"
                                style="width: 25px;margin-top: -28px;margin-left: 10px;">
                        </a> --}}
                    </div>
                </div>
            </div>
            <div class="row copy-row">
                <div class="col-md-12 copy-text">
                    <div class="tag-row">
                        <span>© ALL RIGHTS RESERVED</span>
                        <span>Hotel Anju Shree Inn</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link property="" rel="stylesheet" href="css/font-awesome.min.css">
    <script type="text/javascript" async src="js/bootstrap.min.js"></script>
    <link property="" rel="stylesheet" href="css/animations.css">
    <script type="text/javascript" src="js/imagesloaded.min.js"></script>
    <script type="text/javascript" src='js/jquery.magnific-popup.min.js'></script>
    <script type="text/javascript" src='js/jquery.twbsPagination.min.js'></script>
</footer>
</body>

</html>