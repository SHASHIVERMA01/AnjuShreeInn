<!doctype html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@yield('meta')

<head>
    <meta charset="utf-8" />
    <!-- <title>MAHIMA GROUP</title> -->
    <link rel="stylesheet" type="" href="/fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="/mahima/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/mahima/assets/css/custom.css">
    <link rel="stylesheet" href="/mahima/assets/css/media_query.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jquery plugin -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>



    <script src="/jquery plugin/incrementalNumber/incrementalNumber.js"></script>
    <!-- geo location  -->
    <!-- <script src="/mahima/assets/js/geo-loaction.js"></script> -->
    <!-- Latest compiled JavaScript -->
    <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="13a9c7350da20585c9b7a8e5-|49"></script>
    <link rel="stylesheet" href="/mahima/assets/css/theme.css" />
</head>


<body id="home-page">
    <header class="header" id="header">
        <div class="container custom-container">
            <div class="row justify-content-between align-items-center mobile-menu">
                <div class="col-md-4 col-sm-4 menu-wrapper mobile-menu-item">
                    <a href="javascript:" class="d-flex align-items-center">
                        <span class="d-none d-md-block">MENU</span>
                        <div class="menu-bar ml-2" onclick="sidebar()">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <!--    <a href="/">
                            <img src="/wp-content/themes/sobha/images/logonew m.png" class="img-fluid logo normal-logo" />
                            <img src="/wp-content/themes/sobha/images/logosmall (1).png" class="img-fluid logo sticky-logo" style="max-width: 40%;" /> -->
                    <a href="/">
                        <img src="/wp-content/themes/sobha/images/logonew m.png" class="img-fluid logo normal-logo" />
                        <img src="/wp-content/themes/sobha/images/logosmall (1).png" class="img-fluid logo sticky-logo"
                            style="max-width: 40%;" />
                    </a>
                </div>

                <style>
                .whatsapp-color {
                    color: #fff;
                }

                .whatsapp-color:hover {
                    color: rgb(0, 203, 0);
                }
                </style>
                <div class="col-md-4 col-sm-4 text-right mobile-menu-item">
                    @if(request()->segment(1) == '')

                    <ui class="strick-on"
                        style="display:flex;grid-gap:25px;list-style-type: none;color: #fff;font-size: 15px;float: right;display:none">
                        <a href="{{route('project','residential')}}">
                            <li style="color: #fff;">Residential</li>
                        </a>
                        <a href="{{route('project','commercial')}}">
                            <li style="color: #fff;">Commercial</li>
                        </a>
                        <a href="{{route('project','rental')}}">
                            <li style="color: #fff;">Rental</li>
                        </a>
                        <img class="" src="/mahima/search.svg" width="20" height="20"
                            class="img-fluid" style="max-width: 20px; cursor: pointer;" onclick="searchPropeties()" />
                        <a href="https://api.whatsapp.com/send?phone=+911414050643&text=Hi Mahima Group, I have a query regarding Latest Property. Please Help!"><span class="fa fa-whatsapp whatsapp-color"
                            style="font-size: 22px;    margin-left: -13px; cursor: pointer;color:#fff"></span></a>
                    </ui>

                    <!-- for mobile device -->
                    <ui class="strick-on-mobile"
                        style="display:flex;grid-gap:25px;list-style-type: none;color: #fff;font-size: 15px;float: right;display:none">
                        <img class="" src="/mahima/search.svg" width="20" height="20"
                            class="img-fluid" style="max-width: 20px; cursor: pointer;" onclick="searchPropeties()" />
                            <a href="https://api.whatsapp.com/send?phone=+911414050643&text=Hi Mahima Group, I have a query regarding Latest Property. Please Help!"
                                target="_blank"><span class="fa fa-whatsapp" style="font-size: 22px;    margin-left: -13px;color:#fff"></span></a>
                    </ui>
                    @endif
                    @if(request()->segment(1) != '')
                    <img class="strick-top-without-home" src="/mahima/search.svg" width="20"
                        height="20" class="img-fluid" onclick="searchPropeties()"
                        style="max-width: 20px;display:none;cursor: pointer;" />
                        <a href="https://api.whatsapp.com/send?phone=+911414050643&text=Hi Mahima Group, I have a query regarding Latest Property. Please Help!"
                                target="_blank"><span class="fa fa-whatsapp strick-top-without-home whatsapp-color"
                        style="font-size: 22px;transform: translateY(4px);margin-left: 14px;display:none"></span></a>
                    @endif
                    <img class="strick-top " src="/mahima/search.svg" width="20" height="20"
                        class="img-fluid" style="max-width: 20px; cursor: pointer;" onclick="searchPropeties()" />
                        <a href="https://api.whatsapp.com/send?phone=+911414050643&text=Hi Mahima Group, I have a query regarding Latest Property. Please Help!"
                                target="_blank"><span class="fa fa-whatsapp strick-top whatsapp-color"
                        style="font-size: 22px;transform: translateY(4px);margin-left: 14px; cursor: pointer;"></span></a>
                </div>
            </div>
            <!-- <section id="search" class="search-wrapper">
                <div class="search-wrap">
                    <form id="f1" name="f1" class="w-100" method="get" action="/search">
                        <input type="text" id="" class="form-control" name="ss" placeholder="Search in SOBHA" />
                    </form>

                    <svg class="close" width="40px" height="40px">
                        <use xlink:href="wp-content/themes/sobha/images/icons.svg#close" />
                    </svg>
                </div>
            </section> -->
        </div>
        <div class="menu-container">
            <div class="bg-wrappers">
                <a href="javascript:" class="close-nav" onclick="sidebarclosemenu()" style="transition: all .4s ease;">
                    <img src="/wp-content/themes/sobha/images/close.svg" class="img-fluid d-none d-block" alt="" />
                    <!-- <img width="30" height="30" src="/wp-content/themes/sobha/images/close.png"
                        class="img-fluid d-block d-md-none" /> -->
                </a>
            </div>
            <div class="navigation">
                <div class="first-part">
                    <ul class="padding-wrapper">
                        <li>
                            <a href="/" class="first active">Home</a>

                        </li>
                        <li>
                            <a href="/about" class="first active">About</a>

                        </li>
                        <li><a href="{{route('project','residential')}}" class="first active">Residential</a></li>
                        <li><a href="{{route('project','commercial')}}" class="first active">Commercial</a></li>
                        <li><a href="{{route('project','rental')}}">Rental</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="/career">Work With Us</a></li>
                        <li><a href="/contact">Contact Us</a></li>

                       
                        <ul style="display: flex;
    grid-gap: 30px;" id="social-icon">

                            <a href="https://www.facebook.com/MahimaGroupOnline/" target="_blank">
                                <li><i class="fa fa-facebook" style=""></i></li>
                            </a>
                            <a href="https://twitter.com/MahimaGroup" target="_blank">
                                <li><i class="fa fa-twitter" style=""></i></li>
                            </a>
                            <a href="https://www.instagram.com/mahima_group/" target="_blank">
                                <li><i class="fa fa-instagram" style=""></i></li>
                            </a>
                            <a href="https://www.linkedin.com/company/mahima-group/" target="_blank">
                                <li><i class="fa fa-linkedin" style=""></i></li>
                            </a>
                            <a href="https://www.youtube.com/channel/UCJ96pOMAdRlURL1179xH3Lg" target="_blank">
                                <li><i class="fa fa-youtube" style=""></i></li>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=+911414050643&text=Hi Mahima Group, I have a query regarding Latest Property. Please Help!"
                                target="_blank">
                                <li><i class="fa fa-whatsapp"></i></li>
                            </a>
                        </ul>
                    </ul>
                </div>

            </div>
        </div>

        <span class="arrow arrow-bar"></span>
        <div class="background-wrap"></div>
        <script>
        function sidebar() {
            console.log('sidebar');
            $('.menu-container').toggleClass('active');
            $('.background-wrap').css('display', 'block').fadeTo("slow", 0.8);
			 $('html, body').css({
            overflow: 'hidden',
            //height: '100%'
        });
        }

        function sidebarclosemenu() {
            console.log('sidebar');
            $('.menu-container').removeClass('active');
            $('.background-wrap').css('display', 'none');
			 $('html, body').css({
            overflow: 'auto',
           // height: 'auto'
        });
        }
        </script>
      
    </header>

    @yield('body')

    <footer class="wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.1s" style="background: #000;"
        style="background-image:url('mahima/footer-background.png')">
        <div class="container custom-container footer-wrapper">
            <div class="row">
                <div class="col-md-2 mb-5 mb-md-0 text-center ">
                    <a href="/">
                        <img src="/wp-content/themes/sobha/images/logonew m.png" class="img-fluid logo normal-logo" />
                    </a>
                    <!-- <img src="/mahima/footer.png" class="img-fluid logo normal-logo" /> -->

                </div>
                <div class="col-md-10">
                    <div class="desktop-nav d-md-block d-none">
                        <div class="row navigation justify-content-end">
                            <div class="col-md-3  text-transform">
                                <ul>
                                    <!-- <li><a href="#">Sitemap</a></li> -->
                                    <li><a href="/project">All Properties</a></li>
                                    <li><a href="/project/residential">Residential Properties</a></li>
                                    <li><a href="/project/commercial">Commercial Properties</a></li>
                                    <li><a href="/project/rental">Rental Properties </a></li>
                                    <li><a href="/properties-in-jaipur">Properties in Jaipur</a></li>
                                    <li><a href="/Properties-at-Mansarover">Properties at Mansarover </a></li>
                                    <li><a href="/Properties-at-Jagatpura">Properties at Jagatpura</a></li>
                                    <li><a href="/Properties-on-Tonk-Road">Properties on Tonk Road</a></li>
                                    <li><a href="/Properties-on-Ajmer-Road">Properties on Ajmer Road</a></li>
                                    <li><a href="/villas-in-jaipur">Villas in Jaipur</a></li>
                                    <li><a href="/apartments-in-jaipur">Apartments in Jaipur</a></li>
                                    <li><a href="/Studio-Apartment-in-Jaipur">Studio Apartment in Jaipur</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3  text-transform">
                                <ul>
                                    <li><a href="/properties-under-25-lakhs">Properties under 25 lakhs</a></li>
                                    <li><a href="/properties-under-50-lakhs">Properties under 50 lakhs</a></li>
                                    <li><a href="/properties-under-80-lakhs">Properties under 80 lakhs</a></li>
                                    <li><a href="/properties-under-1.5-cr">Properties under 1.5 cr</a></li>
                                    <li><a href="/properties-under-3-cr">Properties under 3 cr</a></li>
                                    <li><a href="#">&nbsp</a></li>
                                    <!-- <br>
                                        <br> -->
                                    <li><a href="/1-BHK-properties-in-jaipur">1 BHK Properties in Jaipur</a></li>
                                    <li><a href="/2-BHK-properties-in-jaipur">2 BHK Properties in Jaipur</a></li>
                                    <li><a href="/3-BHK-properties-in-jaipur">3 BHK Properties in Jaipur</a></li>
                                    <li><a href="/4-BHK-properties-in-jaipur">4 BHK Properties in Jaipur</a></li>
                                    <li><a href="#">&nbsp</a></li>
                                    <li><a href="/properties-move-in">Properties Ready to move in</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3  text-transform">
                                <ul>
                                    <li><a href="/csr">CSR</a></li>
                                    <li><a href="/facility-management">Facility Mangement</a></li>
                                    <li><a href="/become-our-channel-partner">Become our Channel Partner</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3 pl-lg-5 mb-4 text-md-left text-center d-md-block d-none">
                                <div class="social-wrapper  text-center mb-md-3 mb-4 pb-md-0 pb-2 d-flex">

                                    <a href="https://www.facebook.com/MahimaGroupOnline/" target="_blank"><img
                                            src="/wp-content/themes/sobha/images/facebook.svg" width="23" height="23"
                                            class="img-fluid" alt="" /></a>
                                    <a href="https://www.youtube.com/channel/UCJ96pOMAdRlURL1179xH3Lg"
                                        target="_blank"><img src="/wp-content/themes/sobha/images/youtube.svg" width="23"
                                            height="23" class="img-fluid" alt="" /></a>
                                    <a href="https://twitter.com/MahimaGroup" target="_blank"><img
                                            src="/wp-content/themes/sobha/images/twitter.svg" width="23" height="23"
                                            class="img-fluid" alt="" /></a>
                                    <a href="https://www.instagram.com/mahima_group/" target="_blank"><img
                                            src="/wp-content/themes/sobha/images/instagram.svg" width="23" height="23"
                                            class="img-fluid" alt="" /></a>
                                    <a href="https://www.linkedin.com/company/mahima-group/" target="_blank"><img
                                            src="/wp-content/themes/sobha/images/linkedin.svg" width="23" height="23"
                                            class="img-fluid" alt="" /></a>
                                    <a href="https://api.whatsapp.com/send?phone=+911414050643&text=Hi Mahima Group, I have a query regarding Latest Property. Please Help!" target="_blank"><span class="fa fa-whatsapp"
                                            style="font-size: 29px;color: #fff;" width="23" height="23"></span></a>

                                </div>
                                <br>

                                <h5 class="mb-3">SUBSCRIBE TO OUR BLOG</h5>
                                <ul class="mb-5">
                                    <div class="alert alert-success subscribe-blog" style="display:none">
                                        Thank You.
                                    </div>
                                    <div class="alert alert-danger subscribe-error" style="display:none">
                                        
                                    </div>
                                <form method="post" id="newslter">
                                    <li>
                                        <div class="form-group">
                                            <input type="email" class="form-control"  id="subscribe" placeholder="Enter Email"
                                                style="padding: 18px;" required> 
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <button type="submit" class="btn  mb-3" id="subscribeblog" style="width: 100%;
    background: #1a73c0;color:#fff">SUBSCRIBE</button>
                                        </div>
                                    </li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-nav d-md-none d-block">
                        <div class="row navigation">
                            <div class="col-md-auto pl-lg-5 mb-5">
                                <ul>
                                    <li><a href="/project">All Properties</a></li>
                                    <li><a href="/project/residential">Residential Properties</a></li>
                                    <li><a href="/project/commercial">Commercial Properties</a></li>
                                    <li><a href="/project/rental">Rental Properties </a></li>
                                    <li><a href="/properties-in-jaipur">Properties in Jaipur</a></li>
                                    <li><a href="/Properties-at-Mansarover">Properties at Mansarover </a></li>
                                    <li><a href="/Properties-at-Jagatpura">Properties at Jagatpura</a></li>
                                    <li><a href="/Properties-on-Tonk-Road">Properties on Tonk Road</a></li>
                                    <li><a href="/Properties-on-Ajmer-Road">Properties on Ajmer Road</a></li>
                                    <li><a href="/villas-in-jaipur">Villas in Jaipur</a></li>
                                    <li><a href="/apartments-in-jaipur">Apartments in Jaipur</a></li>
                                    <li><a href="/Studio-Apartment-in-Jaipur">Studio Apartment in Jaipur</a></li>
                                    <li><a href="/properties-under-25-lakhs">Properties under 25 lakhs</a></li>
                                    <li><a href="/properties-under-50-lakhs">Properties under 50 lakhs</a></li>
                                    <li><a href="/properties-under-80-lakhs">Properties under 80 lakhs</a></li>
                                    <li><a href="/properties-under-1.5-cr">Properties under 1.5 cr</a></li>
                                    <li><a href="/properties-under-3-cr">Properties under 3 cr</a></li>
                                    <li><a href="/1-BHK-properties-in-jaipur">1 BHK Properties in Jaipur</a></li>
                                    <li><a href="/2-BHK-properties-in-jaipur">2 BHK Properties in Jaipur</a></li>
                                    <li><a href="/3-BHK-properties-in-jaipur">3 BHK Properties in Jaipur</a></li>
                                    <li><a href="/4-BHK-properties-in-jaipur">4 BHK Properties in Jaipur</a></li>
                                    <li><a href="/properties-move-in">Properties Ready to move in</a></li>
                                    <li><a href="/csr">CSR</a></li>
                                    <li><a href="/facility-management">Facility Mangement</a></li>
                                    <li><a href="/become-our-channel-partner">Become our Channel Partner</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <h6 class="mb-3 text-center">GET IN TOUCH</h6>
                       
                    </div>
                </div>
            </div>



            <div class="social-wrapper  text-sm-center ">
                <ul class="mb-5 text-md-left-footer">
                    <li><a href="tel:+918046464500" class="mb-1">+91-141-4050606</a></li>
                    <li>
                        <a href="mailto:marketing@mahimagroup.org">
                            <span>marketing@mahimagroup.org</span>
                        </a>
                    </li>
                </ul>
            </div>


<div class="row mobile-social-footer">
<div class="social-wrapper  mb-md-3 mb-4 pb-md-0 pb-2  text-sm-center ">
<a href="https://www.facebook.com/MahimaGroupOnline/" target="_blank"><img
        src="/wp-content/themes/sobha/images/facebook.svg" width="23" height="23"
        class="img-fluid" alt=""></a>
<a href="https://www.youtube.com/channel/UCJ96pOMAdRlURL1179xH3Lg" target="_blank"><img
        src="/wp-content/themes/sobha/images/youtube.svg" width="23" height="23"
        class="img-fluid" alt=""></a>
<a href="https://twitter.com/MahimaGroup" target="_blank"><img
        src="/wp-content/themes/sobha/images/twitter.svg" width="23" height="23"
        class="img-fluid" alt=""></a>
<a href="https://www.instagram.com/mahima_group/" target="_blank"><img
        src="/wp-content/themes/sobha/images/instagram.svg" width="23" height="23"
        class="img-fluid" alt=""></a>
<a href="https://www.linkedin.com/company/mahima-group/" target="_blank"><img
        src="/wp-content/themes/sobha/images/linkedin.svg" width="23" height="23"
        class="img-fluid" alt=""></a>
<a href="https://api.whatsapp.com/send?phone=+911414050643&text=Hi Mahima Group, I have a query regarding Latest Property. Please Help!" target="_blank"><span class="fa fa-whatsapp mobile-social-footer-whatsapp" style="font-size: 29px;color: #fff;"
        width="23" height="23"></span></a>

</div>
</div>





            <div class="row">
                <div class="col-md-6 text-md-left text-sm-center mb-md-0 mb-4 pb-md-0 pb-2">
                    <p class="m-0">© Copyright 2021 Mahima Real Estate Pvt. Ltd. All Right Reserved</p>
                </div>
                <div class="col-md-6 text-md-right text-sm-center p-0">
                    <p class="m-0 ">
                        <a href="/about" class="mx-2">About Us</a> | <a href="/sitemap" class="mx-2">Sitemap</a> |
                        <a href="{{route('term')}}" class="mx-2">T&C / Disclaimer</a> | <a href="{{route('privacyPolicy')}}" class="mx-2">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

<script src="/mahima/assets/js/custom-scroll.js">
    
</script>

    <script src="/wp-content/themes/sobha/js/wow.min50df.js?ver=c907cccc7fe88ec1e614ed7c2db57384" id="wowmin-js" defer
        type="13a9c7350da20585c9b7a8e5-text/javascript"></script>
    <script src="/wp-content/themes/sobha/js/owl.carousel.min50df.js?ver=c907cccc7fe88ec1e614ed7c2db57384"
        id="owlcaro-js" defer type="13a9c7350da20585c9b7a8e5-text/javascript"></script>

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="13a9c7350da20585c9b7a8e5-|49" defer=""></script>

    <script type="13a9c7350da20585c9b7a8e5-text/javascript">
    $(document).ready(function($) {

        $('.go-down').click(function(event) {
            $('html, body').animate({
                scrollTop: $('#carousel').offset().top
            }, 1000);
        });

        if ($(window).width() < 768) {
            $("#we-do .row,#more .row").addClass("owl-carousel");
            $("#we-do .row,#more .row").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoplay: false,
                smartSpeed: 900,
                autoWidth: true,
                autoplay: true,
                autoplayHoverPause: true,
                autoplayTimeout: 3000,
                dots: true,
                margin: 20,
            });
        }
        $('#home-carousel,#home-carousel1').owlCarousel({
            items: 1,
            lazyLoad: true,
            autoplay: false,
            smartSpeed: 900,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            dots: false,
            margin: 0,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
        });

        $('#location-carousel').owlCarousel({
            items: 3,
            lazyLoad: true,
            autoplay: false,
            smartSpeed: 900,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            dots: false,
            nav: true,
            navText: [
                '<svg><use xlink:href="/wp-content/themes/sobha/images/icons.svg#chevron"></use></svg>',
                '<svg><use xlink:href="wp-content/themes/sobha/images/icons.svg#chevron"></use></svg>'
            ],
            margin: 20,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3
                }
            }
        });

        $('#hotel-carousel,#hotel-carousel1').owlCarousel({
            items: 1,
            lazyLoad: true,
            autoplay: false,
            //   rtl:true,
            smartSpeed: 900,
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            dots: true,
            nav: true,
            navText: [
                '<svg><use xlink:href="/wp-content/themes/sobha/images/icons.svg#chevron"></use></svg>',
                '<svg><use xlink:href="wp-content/themes/sobha/images/icons.svg#chevron"></use></svg>'
            ],
            margin: 0,
        }).on("dragged.owl.carousel", function(event) {
            $('#hotel-carousel,#hotel-carousel1').owlCarousel({
                items: 1,
                lazyLoad: true,
                autoplay: false,
                //   rtl:true,
                smartSpeed: 900,
                autoplay: true,
                autoplayHoverPause: true,
                autoplayTimeout: 3000,
                dots: true,
                margin: 0,
            });
        });

        $(document).on('click', '.spotlight-wrapper .next-btn', function(event) {
            $('#hotel-carousel,#hotel-carousel1').trigger('next.owl.carousel');
        });

        $('#living-carousel').owlCarousel({
            items: 2,
            lazyLoad: true,
            autoplay: false,
            autoWidth: true,
            smartSpeed: 900,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            dots: true,
            margin: 40
        });



        $(document).on('click', '#living .prev', function(event) {
            $("#living svg").removeClass('active');
            $(this).addClass('active');
            $('#living-carousel').trigger('prev.owl.carousel');
        });

        $(document).on('click', '#living .next', function(event) {
            $("#living svg").removeClass('active');
            $(this).addClass('active');
            $('#living-carousel').trigger('next.owl.carousel');
        });



        $("#location #link-button").click(function() {
            $('select#selection,select#project').val('');
        })

        $("#location .select-wrapper select#project").on("change", function() {
            var project = $(this).val();
            $("#link-button").attr('href', $("#location .select-wrapper select#project option:selected")
                .attr("name"));
        });
    });

    webengage.track("Page Visit", {
        "Button Name": "Explore Now",
        "Page URL Visited": "/",
        "Button Text": "Explore Now",
    });
    </script>




    <a id="button" class="show" style="border-radius: 50%;left: 11px;"></a>


    <!-- sidebar style -->
    <style>
    /* sidrbar css */

    @media only screen and (min-width:721px) {
        .sidebar11 {
            position: fixed;
            right: 0px;
            z-index: 99999;
            bottom: 155px;
        }

        .sidebar2 {
            position: fixed;
            right: 0px;
            z-index: 99999;
            bottom: 97px;
        }

        .sidebar3 {
            position: fixed;
            right: 0px;
            z-index: 99999;
            bottom: 38px;
        }

        #enquiry {
            background-color: rgba(19, 36, 36, .68);
            padding: 12px 55px 12px 15px;
            border-bottom: 1px solid #fff;
            transition: all 0.25s ease-in-out;
            transform: translate(296px);
        }


        #quickcall {
            background-color: rgba(19, 36, 36, .68);
            padding: 12px 55px 12px 15px;
            border-bottom: 1px solid #fff;
            transition: all 0.25s ease-in-out;
            transform: translate(301px);
        }

        #chat {
            background-color: rgba(19, 36, 36, .68);
            padding: 12px 55px 12px 15px;
            border-bottom: 1px solid #fff;
            transition: all 0.25s ease-in-out;
            transform: translate(271px);
        }

        .sidebar-form-btn {
            padding: 3px 10px;
            font-weight: 600;
        }
    }

    @media only screen and (max-width:720px) {

        .sidebar11,
        .sidebar2,
        .sidebar3 {
            display: none;
        }
    }
    </style>
    <!-- sidebar style -->

    <!-- right side social media  -->
    <!-- <ul id="sidebar"> -->
    <div id="quickcall" class="sidebar11 row" style="cursor: pointer;">
        <!-- <div class="row"> -->
        <div class="col-md-3" onclick="form('quick')">
            <span class="icofont-headphone-alt-2" style="color:#fff;
    font-size: 19px;"></span>
            <span style="font-size:10px;font-size: 10px;
    color: #fff;">Quick CallBack</span>
        </div>
        <div class="col-md-8 quickcall-quickcall" id="quickenquery1" style="height:7px">
            <div class="ext_wrapper">
                <div class="extruder-content">
                    <div class="text">
                        <div id="quickcll" style="height:65px; color:#000;">
                        <p class="mssg" style="color:#fff"></p>
                            <form method="post"  id="quickc">
                     
                                <div class="form-group">
                               
                                 <input type="hidden" class="form-control input" value="sidebar-quickcallback" placeholder="Name" name="sidebar-quickcallback" required="required"
                                        style="margin-bottom: 6px;">
                                    <input type="text" id="name" class="form-control input" placeholder="Name" required="required"
                                        name="name" style="margin-bottom: 6px;">
                                    <input type="text" id="mobile" pattern="[789][0-9]{9}" class="form-control input"
                                        placeholder="Mobile" required="required" name="mobile">
                                </div>
                                <div class="row m-0">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" id="" value="Submit" class="sidebar-form-btn sidesubmit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-1" style="padding: 0px 10px 0px 0px;">
            <i class="fa fa-close" onclick="sideiconclose('quick')" style="font-size: 20px;color: #fff;"></i>
        </div>
    </div>

    <div id="enquiry" class="sidebar2 row" style="cursor: pointer;">
        <!-- <div class="row"> -->
        <div class="col-md-3" onclick="form('enquiry')">
            <span class="icofont-law-document" style="color:#fff;
            font-size: 19px;"></span>
            <span style="font-size:10px;    font-size: 10px;
            color: #fff;">Book Site Vist</span>
        </div>

        <div class="col-md-8 enquiry-enquiry" style="height: 7px" >
        <p class="mssg" style="color:#fff"></p>
            <form method="post"    id="sitevis">
           
            <div class="form-group">
  
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control input"  placeholder="Name" value="sidebar-bookvisitFrom" required="required" name="sidebar-bookvisitFrom">
                </div>
                <div class="form-group">
                    <input type="text" style="text-transform:none;" id="names" class="form-control input"  placeholder="Name" required="required" name="name">
                </div>
                <div class="form-group">
                    <input type="text" style="text-transform:none;" id="email" class="form-control input" placeholder="EMAIL"
                        required="required" name="email" required>
                </div>
                <div class="form-group">
                    <input type="text"  style="text-transform:none;" id="mobiles" class="form-control input" placeholder="Mobile"
                        required="required" name="mobile" required>
                </div>
                <div class="form-group">
                    <select name="project" id="project" class="form-control select" required>
                        <option value="">Select project</option>
                        <option value="1">Mahima Group</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control textarea" id="message" name="message" placeholder="Message" required></textarea>
                </div>
                <div class="row m-0">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" id="" value="Submit" class="sidebar-form-btn sidesubmit">
                        </div>
                    </div>

                </div>
            </form>
           
        </div>
        <div class="col-md-1" style="padding: 0px 10px 0px 0px;">
            <i class="fa fa-close" onclick="sideiconclose('quick')" style="font-size: 20px;color: #fff;"></i>
        </div>
        <!-- </div> -->
        <!-- </a> -->
    </div>


    <div id="chat" class="sidebar3 row" style="cursor: pointer;">
        <!-- <div class="row"> -->
        <div class="col-md-3" onclick="form('chat')">
            <span class="icofont-chat" style="color:#fff;
            font-size: 19px;"></span>

            <span style="font-size:10px;    font-size: 10px;
            color: #fff;">Live Chat</span>
        </div>

        <div class="col-md-8 chat-chat" style="height:7px">
            <form method="post">
                <div class="row m-0">
                    <div class="form-group">
                        <textarea class="form-control textarea" name="message" placeholder="Message"></textarea>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Submit" class="sidebar-form-btn">
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-md-1" style="padding: 0px 10px 0px 0px;">
            <i class="fa fa-close" onclick="sideiconclose('quick')" style="font-size: 20px;color: #fff;"></i>
        </div>

        <!-- </div> -->
        <!-- </a> -->
    </div>
    <!-- </ul> -->
    <!-- bottom to top button -->

    <script>
    function form(pram) {
        if (pram === 'quick') {
            console.log(pram, 'quick');
            $('#enquiry').hide();
            $('#chat').hide();
            $('.chat-chat').css("height", "7px");
            $('.enquiry-enquiry').css("height", "7px");
            $('.quickcall-quickcall').css("height", "auto");
            $('#quickcall').css("transform", "translate(51px,0)");
        }


        if (pram === 'enquiry') {
            console.log(pram);
            $('#chat').hide();
            $('#quickcall').hide();
            $('.chat-chat').css("height", "7px");
            $('.enquiry-enquiry').css("height", "auto");
            $('.quickcall-quickcall').css("height", "7px");
            $('#enquiry').css("transform", "translate(51px,0)");
        }

        if (pram === 'chat') {
            console.log(pram);
            $('#enquiry').hide();
            $('#quickcall').hide();
            $('.chat-chat').css("height", "auto");
            $('.enquiry-enquiry').css("height", "7px");
            $('.quickcall-quickcall').css("height", "7px");
            $('#chat').css("transform", "translate(51px,0)");
        }
    }

    //    sidebar click 

    function sideiconclose(item) {
        if (item == 'quick') {
            console.log(item, 'sideiconclose');
            $('.chat-chat').css("height", "7px");
            $('.enquiry-enquiry').css("height", "7px");
            $('.quickcall-quickcall').css("height", "7px");
            $('#enquiry').css({
                "display": "block",
                "transform": "translate(296px,0)"
            });
            $('#chat').css({
                "display": "block",
                "transform": "translate(271px,0)"
            });
            $('#quickcall').css({
                "display": "block",
                "transform": "translate(301px,0)"
            });
        } else if (item == 'booksite') {
            console.log(item, 'sideiconclose');
            $('.chat-chat').css("height", "7px");
            $('.enquiry-enquiry').css("height", "7px");
            $('.quickcall-quickcall').css("height", "7px");
            $('#enquiry').css({
                "display": "block",
                "transform": "translate(296px,0)"
            });
            $('#chat').css({
                "display": "block",
                "transform": "translate(271px,0)"
            });
            $('#quickcall').css({
                "display": "block",
                "transform": "translate(301px,0)"
            });

        } else if (item == 'chat') {
            console.log(item, 'sideiconclose');
            $('.chat-chat').css("height", "7px");
            $('.enquiry-enquiry').css("height", "7px");
            $('.quickcall-quickcall').css("height", "7px");
            $('#enquiry').css({
                "display": "block",
                "transform": "translate(296px,0)"
            });
            $('#chat').css({
                "display": "block",
                "transform": "translate(271px,0)"
            });
            $('#quickcall').css({
                "display": "block",
                "transform": "translate(301px,0)"
            });
            // $('#searchPropeties').removeClass('searchPropeties');

        } else if (item == 'sidemenu') {

            console.log(item, 'sideiconclose');
            $('#searchPropeties').removeClass('searchPropeties');
            $('.chat-chat').css("height", "7px");
            $('.enquiry-enquiry').css("height", "7px");
            $('.quickcall-quickcall').css("height", "7px");
            $('#enquiry').css({
                "display": "block",
                "transform": "translate(296px,0)"
            });
            $('#chat').css({
                "display": "block",
                "transform": "translate(271px,0)"
            });
            $('#quickcall').css({
                "display": "block",
                "transform": "translate(301px,0)"
            });


        }

    }

    </script>





    <!-- header strick -->
    <script>
    window.onscroll = function() {
        myFunctions()
    };

    var headers = document.getElementById("header");
    var stickys = headers.offsetTop;


    function myFunctions() {
        if (window.pageYOffset > stickys) {
            headers.classList.add("header-sticky");
            $('.strick-top').hide();
            $('.strick-top-without-home').show();
            if ($(window).width() >= 768) {
                $('.strick-on').css({
                    "display": "block",
                    "display": "flex"
                });
            }
            if ($(window).width() <= 768) {
                $('.strick-on-mobile').css({
                    "display": "block",
                    "display": "flex"
                });
            }


            $('#landing-page-form').css('margin-top', '13%');


        } else {
            headers.classList.remove("header-sticky");
            $('.strick-on').hide();
            $('.strick-top-without-home').hide();
            $('.strick-top').show();
            $('#landing-page-form').css('margin-top', '4%');
            $('#searchPropeties').removeClass('searchPropeties');
            if ($(window).width() <= 768) {
                $('.strick-on-mobile').css({
                    "display": "none",
                });
            }
        }

        //   counter on index page
        if (window.pageYOffset < 180) {
            console.log(window.pageYOffset, 'sticky');
            incrementalNumber();
        }
    }



    // bottom to top scroll
    var btn = $('#button');
    $(window).scroll(function() {

        if ($(window).scrollTop() > 300 && $(window).scrollTop() < 740) {
            console.log($(window).scrollTop(), 560, 'heg');
            btn.addClass('show');
            $('.landing-form-fixed').show();
            $('.landing-form-fixed').css({
                'border-radius': '5px',
                'margin-right': '51px',
                'padding': '20px 10px',
                'box-shadow': '0px 0px 10px rgb(0 0 0 / 25%)'
            });
        } else {
            if ($(window).scrollTop() > 740) {
                console.log($(window).scrollTop(), 560, 'else');
                $('.landing-form-fixed').hide();
            } else {
                btn.removeClass('show');
                $('.landing-form-fixed').css({
                    'border-radius': '0px',
                    'margin-right': 'unset',
                    'box-shadow': 'none'
                });
            }
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

    </script>
    @php 
    $text =App\Models\HomePage::first();

    @endphp
    
       <script>
    // text remove and add effect

    $(function() {
  
        // const words = ["Jagatpura", "Ajmer Road", "Mansarovar", "Tonk Road"];
        const words = [{!! $text->project_lcation !!}];
        let i = 0;
        let timer;

        function typingEffect() {
            let word = words[i].split("");
            var loopTyping = function() {
                if (word.length > 0) {
                    document.getElementById('word').innerHTML += word.shift();
                } else {
                    deletingEffect();
                    return false;
                };
                timer = setTimeout(loopTyping, 300);
            };
            loopTyping();
        };


        function deletingEffect() {
            let word = words[i].split("");
            var loopDeleting = function() {
                if (word.length > 0) {
                    word.pop();
                    document.getElementById('word').innerHTML = word.join("");
                } else {
                    if (words.length > (i + 1)) {
                        i++;
                    } else {
                        i = 0;
                    };
                    typingEffect();
                    return false;
                };
                // timer = setTimeout(loopDeleting, 100);
                timer = setTimeout(loopDeleting, 200);
            };
            loopDeleting();
        };

        typingEffect();
    })
    </script>




    <!-- // image slide popup -->

    <!-- image-viewer-smooth-animations -->


    <div id="image-viewer">
        <span class="imageviewerclose">&times;</span>
        <img class="modal-contents zoomimage" id="full-image">

    </div>


    <!----------- model for enquiy-------->

    <div class="modal" id="enquiryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="top: 90px;">
        <div class="modal-dialog modal-lg" role="document" style="width: 952px;">
            <div class="modal-content">
                <!-- <div class="modal-header" style="border-bottom:0px">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div> -->
                <div class="modal-body" style="padding: 0px;">
                    <div class="row">
                        <div class="col-md-8 pl-0">
                            <img src="/mahima/enquiry.png" alt="..." style="width:100%;height: 500px;">
                            <h1
                                style="position: absolute;color: #e8e8e8;left: 26%;top: 39%;font-weight: 600;text-transform: uppercase;text-shadow: 1px 2px 5px black;">
                                Mahima Group<br>
                                Enquiry Model
                            </h1>
                        </div>
                        <div class="col-md-4" style="margin-left: -15px;">
                            <button type="button" class="close enquiry-close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="font-size: 24px;">&times;</span>
                            </button>

                            <div class="" style="margin-top:60px">
                                <div class="">
                                    <h5 class="card-title mb-4" style="font-size: 20px;
    font-weight: 400;"><i class="fa icofont-fountain-pen mr-2 text-color"></i>Book A Site Visit</h5>
                                </div>
                                <form action="/contact-store" method="post">
                                    @csrf
                                    <input type="hidden" name="formtype" value="{{request()->url()}}" class="input-field" placeholder="Full Name *">
                                    <div class="form-group mb-4">
                                        <input type="text" class="input-field" placeholder="Full Name *" name="name">

                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="email" class="input-field" placeholder="Email" name="name">
                                    </div>
                                    <div class="form-group mb-4 d-flex">
                                        <div class="input-group-prepend">
                                            <div class="input-group-textt">

                                                <select class="input-field" style="width: auto;
    border: none;    font-size: 17px;" >
                                                   @include('ui.country_code.country_code')
                                                </select>

                                            </div>
                                        </div>
                                        <input type="tel" class="input-field" placeholder="Mobile Number *" name="mobile">
                                    </div>
                                    <div class="form-group mb-4 d-flex">
                                        <div class="input-group-prepend">
                                            <div class="input-group-textt">

                                                <select class="input-field" style="width: auto;
    border: none; font-size: 17px;" name="">
                                                   @include('ui.country_code.country_code')
                                                </select>


                                            </div>
                                        </div>
                                        <input type="tel" class="input-field" placeholder="Alternate Mobile Number " name="	alternate_mobile">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="text" class="input-field" placeholder="Entrt Your City " name="city">

                                    </div>


                                    <div class="fieldRow">
                                        <ul class="my-4">
                                            <li>
                                                <input name="whatsapp" type="checkbox" value="1" id="whatsapp"
                                                    checked="">
                                                <label for="whatsapp">Receive updates on Whatsapp</label>
                                                <input type="hidden"  id="country-code" value="+91">
                                            </li>
                                        </ul>
                                    </div>

                                    <style>
                                    .phone {
                                        border-radius: 50px;
                                        padding: 3px;
                                        box-shadow: 0 0 0 rgba(204, 169, 44, 0.4);
                                        animation: pulse 1.2s infinite;
                                        cursor: pointer;
                                    }

                                    @-webkit-keyframes pulse {
                                        0% {
                                            -webkit-box-shadow: 0 0 0 0 rgba(44, 93, 204, 0.4);
                                        }

                                        70% {
                                            -webkit-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
                                        }

                                        100% {
                                            -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
                                        }
                                    }

                                    @keyframes pulse {
                                        0% {
                                            -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
                                            box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
                                        }

                                        70% {
                                            -moz-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
                                            box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
                                        }

                                        100% {
                                            -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
                                            box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
                                        }
                                    }

                                    </style>
                                
                                <div class="buttonWrap d-flex">
                                    <button class="btn btn-mahima">Submit</button>
                                    <a href="tel:01414050606"
                                        style="color: #343434;text-decoration: none;color: #343434;display: flex;text-decoration: none;">
                                        <div style="font-size: 24px;    margin-left: 10px;">
                                            <i class="fa fa-phone phone mr-1" style="transform: rotate(42deg);"></i>
                                        </div>
                                        <div style="transform: translateY(4px);">
                                            <span style="font-size:18px;">0141-4050606</span>
                                        </div>
                                    </a>
                                </div>
                                @if(session()->has('message'))
                        <div class="alert alert-success mt-4">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
           
         </div> -->
            </div>
        </div>
    </div>

    <!-----------End model for enquiy-------->



    <script>
    $(".Gallery").click(function() {
        $("#full-image").attr("src", $(this).attr("src"));
        $('#image-viewer').show();
        $('html, body').css({
            overflow: 'hidden',
           // height: '100%'
        });
    });

    $("#full-image").click(function() {
        $(this).toggleClass('zoom');
    });

    $("#image-viewer .imageviewerclose").click(function() {
        $('#image-viewer').hide();
        $('html, body').css({
            overflow: 'auto',
          //  height: 'auto'
        });
    });
    </script>

    <style>
    .zoom {
        zoom: 160%;
    }

    #image-viewer {
        display: none;
        position: fixed;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 999;
        overflow: hidden;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
        z-index: 99999;

    }

    .modal-contents {
        margin: auto;
        display: block;

        width: 80%;
        max-width: 700px;
    }

    .modal-contents {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    #image-viewer .imageviewerclose {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    #image-viewer .imageviewerclose:hover,
    #image-viewer .imageviewerclose:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    @media only screen and (max-width: 700px) {
        .modal-contents {
            width: 100%;
        }
    }
    </style>




    <!-- side menu search  -->
    <div class="" id="searchPropeties" style="position: fixed;
;background-color:rgba(19,36,36,.68);height:100%;width:335px; right:0;top: 70px;z-index: 999;display:none">
        <div class="row my-5">
            <div class="col-md-12 col-sm-12 d-flex">
                <div class="col-md-1 col-sm-1"></div>
                <div class="col-md-9 col-sm-9">
                    <h2 class="" style="margin-bottom: 9px;color: #fff;border-bottom: 2px solid;text-align: center;">
                        Search
                        Here</span></h2>
                </div>
                <div class="col-md-1 col-sm-1">
                   <!-- <span class="fa fa-close" onclick="sideiconclose('sidemenu')" -->
					 <span class="fa fa-close" onclick="searchPropeties()"
                        style="margin-top: 20px;  font-size: 20px;color: #fff;"></span>
                </div>


            </div>


            <div class="col-md-12 text-center">
                <h3 style="color: #fff;font-size: 18px !important;">Search With Location</h3>

                <style>
                .selectfield {
                    background-color: #17231f;
                }

                .selectfield>option {
                    color: #000;
                    /* background: #12121200; */
                    background: rgba(0, 0, 0, 18%);

                }
                </style>
                <!-- <i onclick="getLocation();" class="icofont-google-map" style="color: #fff;font-size: 30px !important;"></i>  -->
                <form action="{{route('search')}}" method="get">
             
                <div class="form-group mb-4">
                    <select class="input-field selectfield" name="location"
                        style="background-color: #12121200;color: #ffff;" required>
                        <option value="">Select Location</option>
                        <option value="Ajmer-Road">Ajmer Road</option>
                        <option value="Tonk-Road">Tonk Road</option>
                        <option value="Jagatpura">Jagatpura</option>
                        <option value="Mansarovar">Mansarovar</option>
                    </select>
                </div>

                <h3 style="color: #fff;font-size: 18px !important;">Typology</h3>
                <div class="col-md-2"></div>
                <div class="row" id="typlogy">
                <div class="col-md-4">
                    <div class="form-group d-flex">
                        <input type="checkbox" class="" checked name="type" value="Flat" style="margin: 13px 0 0;">
                        <h4 class="text-white ml-2">Flat</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group d-flex">
                        <input type="checkbox" class="" checked name="type" value="Villa" style="margin: 13px 0 0;">
                        <h4 class="text-white ml-2">Villa</h4>
                    </div>
                </div>
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-12">
                    <button class="btn btn-mahima" style="border-color: #ffffff;">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function searchPropeties() {
        if ($("header").hasClass("header-sticky")) {
            $('#searchPropeties').toggleClass('searchPropeties');
        } else {
            console.log('else');
            $('#searchPropeties').toggleClass('searchPropeties');
            $('header').toggleClass('header-sticky');
        }
    }
    </script>
    <!-- side menu  search-->

             
<script>

$(document).ready(function(){
$('.sidesubmit').click(function(event){
    event.preventDefault();
    $('.sidesubmit').val('Wait..');
    if($('#names').val()){
        console.log('ffff');
        var data = {
            name: $('#names').val(),
            email: $('#email').val(),
            mobile: $('#mobiles').val(),
            sidebar: 'Book Site Vist',
            message: $('#message').val(),
            form_type:"{{Request::url()}}",
            _token:"{{csrf_token()}}"
            }
    }
    if($('#name').val()){
        console.log('aaaaaa');
        var data = {
        name:$('#name').val(),
        mobile : $('#mobile').val(),
        sidebar: 'Quick Call',
        form_type:"{{Request::url()}}",
        _token:"{{csrf_token()}}",
        }
    }

    $.ajax({
         url:'/form-sidebar',
         type:'POST',
         data:data,
         success:function(data){   
            $(".mssg").text('Thank You.');  
             setTimeout(() => {
                $(".mssg").empty(); 
             }, 2000);
            $('form').each(function() { this.reset() });
            $('.sidesubmit').val('submit');
         }
    })
});
});


// subscribeblog

$(document).ready(function(){
$('#subscribeblog').click(function(e){
    e.preventDefault();
    if($('#subscribe').val() == ''){
        $('.subscribe-error').show().text('Enter Email Address');
        setTimeout(() => {
                $(".subscribe-error").hide(); 
             }, 2000);
        return;        
    }

    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if ($('#subscribe').val().match(validRegex)) {

    $('.subscribe-error').hide();
    $('#subscribeblog').text('Wait..');
        var datas = {
            email: $('#subscribe').val(),
            source_url:"{{Request::url()}}",
            _token:"{{csrf_token()}}"
            }

    $.ajax({
         url:'/news-letter',
         type:'POST',
         data:datas,
         success:function(res){   
            $(".subscribe-blog").show();  
             setTimeout(() => {
                $(".subscribe-blog").hide(); 
             }, 2000);
            $('#newslter')[0].reset();
            $('#subscribeblog').text('SUBSCRIBE');
         }
    })
    }else{
        $('.subscribe-error').show().text("Invalid email address!");
        
             setTimeout(() => {
                $(".subscribe-error").hide(); 
             }, 2000);
    }
});
});


	  $('data-target="#enquiryModal"').click(function() {
        console.log('hhhhh');
        $('html, body').css({
            "overflow":'hidden'
        })
    })

</script>
</body>

</html>