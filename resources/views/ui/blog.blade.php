<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @foreach(App\Models\metas::where('page_name','blog')->get() as $meta)
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
	 
		@foreach(App\Models\bigbanners::where('title','Blog')->get() as $banner)
	    <div class="header-title white" style="background-image:url('/storage/homepage/{{ $banner->banner }}');background-position:cover;">
	        <div class="container">
	            <div class="title-base">
	                <!--<hr class="anima" />-->
	                <h1 style="display:none;">{{ $banner->title }}</h1>
	                {{-- <p>Lorem Ipsum is simply dummy text of the printing.</p> --}}
	            </div>
	        </div>
	    </div>
		
		@endforeach
	    <div class="footer-parallax-container">
	        <div class="container content">
	            <div class="row">
	                <div class="col-md-2">
	                </div>
	                <div class="col-md-8">
	                    <div class="grid-list one-row-list">
	                        <div class="grid-box">
								@foreach(App\Models\blog::all() as $blog)
	                            <div class="grid-item">
	                                <div class="advs-box niche-box-blog">
	                                    <div class="block-top">
	                                        <div class="block-infos">
	                                            <div class="block-data">
	                                                <p class="bd-day">{{ $blog->date }}</p>
	                                                <p class="bd-month">{{ $blog->month }} &nbsp;{{ $blog->year }}</p>
	                                            </div>
	                                            <a class="block-comment" href="#">{{ $blog->comments }} <i class="fa fa-comment-o"></i></a>
	                                        </div>
	                                        <div class="block-title">
	                                            <h2><a href="javascript:void(0)">{{ $blog->Heading }}</a></h2>
	                                            <div class="tag-row">
	                                                <span><i class="fa fa-bookmark"></i> <a href="#">Travel</a>, <a href="#">Motors</a></span>
	                                                <span><i class="fa fa-pencil"></i>Admin</span>
	                                                <div class="social-group-button">
	                                                    <div class="social-button" data-anima="pulse-vertical" data-trigger="hover">
	                                                        <i class="fa fa-share-alt"></i>
	                                                    </div>
	                                                    <div class="btn-group social-group">
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-facebook" class="fa fa-facebook circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-twitter" class="fa fa-twitter circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-google" class="fa fa-google circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-linkedin" class="fa fa-linkedin circle"></i>
	                                                        </a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <a class="img-box img-scale-rotate" href="javascript:void(0)">
	                                        <img src="/storage/homepage/{{ $blog->image_two }}" alt="">
	                                    </a>
	                                    <p class="excerpt">
											{!! $blog->content !!}

	                                    </p>
	                                    <!--<a class="anima-button circle-button btn-sm btn" href="javascript:void(0)"><i class="fa fa-long-arrow-right"></i>Read more ... </a>-->
	                                </div>
	                                <hr class="space m" />
	                            </div>
								@endforeach
	                            <!-- <div class="grid-item">
	                                <div class="advs-box niche-box-blog">
	                                    <div class="block-top">
	                                        <div class="block-infos">
	                                            <div class="block-data">
	                                                <p class="bd-day">25</p>
	                                                <p class="bd-month">July 2015</p>
	                                            </div>
	                                            <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
	                                        </div>
	                                        <div class="block-title">
	                                            <h2><a href="javascript:void(0)">Elvis on New York Theater</a></h2>
	                                            <div class="tag-row">
	                                                <span><i class="fa fa-bookmark"></i> <a href="#">Travel</a>, <a href="#">Motors</a></span>
	                                                <span><i class="fa fa-pencil"></i>Admin</span>
	                                                <div class="social-group-button">
	                                                    <div class="social-button" data-anima="pulse-vertical" data-trigger="hover">
	                                                        <i class="fa fa-share-alt"></i>
	                                                    </div>
	                                                    <div class="btn-group social-group">
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-facebook" class="fa fa-facebook circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-twitter" class="fa fa-twitter circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-google" class="fa fa-google circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-linkedin" class="fa fa-linkedin circle"></i>
	                                                        </a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="flexslider slider nav-inner">
	                                        <ul class="slides">
	                                            <li>
	                                                <img src="images/gallery/image_1.jpg" alt="" />
	                                            </li>
	                                            <li>
	                                                <img src="images/gallery/image_2.jpg" alt="" />
	                                            </li>
	                                        </ul>
	                                    </div>
	                                    <p class="excerpt">
	                                        L'orem ipsum dolor, consectetur adipisicing elit, sed
	                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
	                                        nisi ut aliquip ex ea coSed ut perspiciatis unde omnis iste natus error
	                                        sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaqueipsa
	                                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
	                                    </p>
	                                    <a class="anima-button circle-button btn-sm btn" href="javascript:void(0)"><i class="fa fa-long-arrow-right"></i>Read more ... </a>
	                                </div>
	                                <hr class="space m" />
	                            </div>
	                            <div class="grid-item">
	                                <div class="advs-box niche-box-blog">
	                                    <div class="block-top">
	                                        <div class="block-infos">
	                                            <div class="block-data">
	                                                <p class="bd-day">25</p>
	                                                <p class="bd-month">July 2015</p>
	                                            </div>
	                                            <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
	                                        </div>
	                                        <div class="block-title">
	                                            <h2><a href="javascript:void(0)">The new eco-system of nature</a></h2>
	                                            <div class="tag-row">
	                                                <span><i class="fa fa-bookmark"></i> <a href="#">Travel</a>, <a href="#">Motors</a></span>
	                                                <span><i class="fa fa-pencil"></i>Admin</span>
	                                                <div class="social-group-button">
	                                                    <div class="social-button" data-anima="pulse-vertical" data-trigger="hover">
	                                                        <i class="fa fa-share-alt"></i>
	                                                    </div>
	                                                    <div class="btn-group social-group">
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-facebook" class="fa fa-facebook circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-twitter" class="fa fa-twitter circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-google" class="fa fa-google circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-linkedin" class="fa fa-linkedin circle"></i>
	                                                        </a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <iframe src="https://www.youtube.com/embed/bpqhStV2_rc?showinfo=0&controls=0"></iframe>
	                                    <p class="excerpt">
	                                        L'orem ipsum dolor, consectetur adipisicing elit, sed
	                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
	                                        nisi ut aliquip ex ea coSed ut perspiciatis unde omnis iste natus error
	                                        sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaqueipsa
	                                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
	                                    </p>
	                                    <a class="anima-button circle-button btn-sm btn" href="javascript:void(0)"><i class="fa fa-long-arrow-right"></i>Read more ... </a>
	                                </div>
	                                <hr class="space m" />
	                            </div>
	                            <div class="grid-item">
	                                <div class="advs-box niche-box-blog">
	                                    <div class="block-top">
	                                        <div class="block-infos">
	                                            <div class="block-data">
	                                                <p class="bd-day">25</p>
	                                                <p class="bd-month">July 2015</p>
	                                            </div>
	                                            <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
	                                        </div>
	                                        <div class="block-title">
	                                            <h2><a href="javascript:void(0)">Future and past of tecnology</a></h2>
	                                            <div class="tag-row">
	                                                <span><i class="fa fa-bookmark"></i> <a href="#">Travel</a>, <a href="#">Motors</a></span>
	                                                <span><i class="fa fa-pencil"></i>Admin</span>
	                                                <div class="social-group-button">
	                                                    <div class="social-button" data-anima="pulse-vertical" data-trigger="hover">
	                                                        <i class="fa fa-share-alt"></i>
	                                                    </div>
	                                                    <div class="btn-group social-group">
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-facebook" class="fa fa-facebook circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-twitter" class="fa fa-twitter circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-google" class="fa fa-google circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-linkedin" class="fa fa-linkedin circle"></i>
	                                                        </a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <a class="img-box img-scale-rotate" href="javascript:void(0)">
	                                        <img src="images/gallery/image_4.jpg" alt="">
	                                    </a>
	                                    <p class="excerpt">
	                                        L'orem ipsum dolor, consectetur adipisicing elit, sed
	                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
	                                        nisi ut aliquip ex ea coSed ut perspiciatis unde omnis iste natus error
	                                        sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaqueipsa
	                                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
	                                    </p>
	                                    <a class="anima-button circle-button btn-sm btn" href="javascript:void(0)"><i class="fa fa-long-arrow-right"></i>Read more ... </a>
	                                </div>
	                                <hr class="space m" />
	                            </div>
	                            <div class="grid-item">
	                                <div class="advs-box niche-box-blog">
	                                    <div class="block-top">
	                                        <div class="block-infos">
	                                            <div class="block-data">
	                                                <p class="bd-day">25</p>
	                                                <p class="bd-month">July 2015</p>
	                                            </div>
	                                            <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
	                                        </div>
	                                        <div class="block-title">
	                                            <h2><a href="javascript:void(0)">Elvis on New York Theater</a></h2>
	                                            <div class="tag-row">
	                                                <span><i class="fa fa-bookmark"></i> <a href="#">Travel</a>, <a href="#">Motors</a></span>
	                                                <span><i class="fa fa-pencil"></i>Admin</span>
	                                                <div class="social-group-button">
	                                                    <div class="social-button" data-anima="pulse-vertical" data-trigger="hover">
	                                                        <i class="fa fa-share-alt"></i>
	                                                    </div>
	                                                    <div class="btn-group social-group">
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-facebook" class="fa fa-facebook circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-twitter" class="fa fa-twitter circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-google" class="fa fa-google circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-linkedin" class="fa fa-linkedin circle"></i>
	                                                        </a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <a class="img-box img-scale-rotate" href="javascript:void(0)">
	                                        <img src="images/gallery/image_5.jpg" alt="">
	                                    </a>
	                                    <p class="excerpt">
	                                        L'orem ipsum dolor, consectetur adipisicing elit, sed
	                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
	                                        nisi ut aliquip ex ea coSed ut perspiciatis unde omnis iste natus error
	                                        sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaqueipsa
	                                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
	                                    </p>
	                                    <a class="anima-button circle-button btn-sm btn" href="javascript:void(0)"><i class="fa fa-long-arrow-right"></i>Read more ... </a>
	                                </div>
	                                <hr class="space m" />
	                            </div>
	                            <div class="grid-item">
	                                <div class="advs-box niche-box-blog">
	                                    <div class="block-top">
	                                        <div class="block-infos">
	                                            <div class="block-data">
	                                                <p class="bd-day">25</p>
	                                                <p class="bd-month">July 2015</p>
	                                            </div>
	                                            <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
	                                        </div>
	                                        <div class="block-title">
	                                            <h2><a href="javascript:void(0)">Elvis on New York Theater</a></h2>
	                                            <div class="tag-row">
	                                                <span><i class="fa fa-bookmark"></i> <a href="#">Travel</a>, <a href="#">Motors</a></span>
	                                                <span><i class="fa fa-pencil"></i>Admin</span>
	                                                <div class="social-group-button">
	                                                    <div class="social-button" data-anima="pulse-vertical" data-trigger="hover">
	                                                        <i class="fa fa-share-alt"></i>
	                                                    </div>
	                                                    <div class="btn-group social-group">
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-facebook" class="fa fa-facebook circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-twitter" class="fa fa-twitter circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-google" class="fa fa-google circle"></i>
	                                                        </a>
	                                                        <a target="_blank" href="#">
	                                                            <i data-social="share-linkedin" class="fa fa-linkedin circle"></i>
	                                                        </a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <a class="img-box img-scale-rotate" href="javascript:void(0)">
	                                        <img src="images/gallery/image_4.jpg" alt="">
	                                    </a>
	                                    <p class="excerpt">
	                                        L'orem ipsum dolor, consectetur adipisicing elit, sed
	                                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
	                                        nisi ut aliquip ex ea coSed ut perspiciatis unde omnis iste natus error
	                                        sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaqueipsa
	                                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
	                                    </p>
	                                    <a class="anima-button circle-button btn-sm btn" href="javascript:void(0)"><i class="fa fa-long-arrow-right"></i>Read more ... </a>
	                                </div>
	                                <hr class="space m" />
	                            </div> -->
	                        </div>
	                        <div class="list-nav">
	                            <ul class="pagination-sm pagination-grid" data-page-items="4" data-pagination-anima="show-scale" data-options="scrollTop:true"></ul>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-2">
	                </div>
	            </div>
	        </div>
	    </div>
	</div>




	



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
                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-youtube"></i></a>
                            {{-- <a target="_blank" href="https://www.tripadvisor.in/Hotel_Review-g304555-d8596386-Reviews-Hotel_Park_Ocean-Jaipur_Jaipur_District_Rajasthan.html" title="Trip Advisior">
                                <img src="images/trip_advisior.png" style="width: 25px;margin-top: -28px;margin-left: 10px;">
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
        <script type="text/javascript" src="js/jquery.spritely.min.js"></script>
        <script type="text/javascript" src="js/datepicker.min.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>
        <script type="text/javascript" src="js/jquery.flipster.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/jquery.twbsPagination.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/parallax.min.js"></script>
        <script type="text/javascript" src='js/jquery.slimscroll.min.js'></script>
    </footer>
</body>
</html>
