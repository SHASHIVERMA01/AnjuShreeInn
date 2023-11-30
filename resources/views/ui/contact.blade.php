<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @foreach(App\Models\metas::where('page_name','contact')->get() as $meta)
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
    <link rel="icon" href="{{asset('/images/favicon.png')}}">
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


<div class="floating_btn">
    <a target="_blank" href="https://api.whatsapp.com/send?phone=919829655254">
        <div class="contact_icon"> <span style="font-size: 15px ; padding:0px 10px;color:white;" id="mySpan1"> Contact Us </span>
            <i class="fa fa-whatsapp my-float" style="color: #fff"></i>
        </div>
    </a>

</div>

<div class="floating_btn2">
    <a target="_blank" href="tel: 9829655254">
        <div class="contact_icon"> 
            <i class="fa fa-phone" aria-hidden="true" style="color: #fff"></i> <span style="font-size: 15px ; padding:0px 10px;color:white;"  id="mySpan1"> Call Us </span>
        </div>
    </a>

</div>
<style>

.floating_btn {
        position: fixed;
        bottom: 0px;
        right: 50px;
        width: 100px;
        height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }
    .floating_btn2 {
        position: fixed;
        bottom: 50px;
        right: 50px;
        width: 100px;
        height: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    .contact_icon {
        background-color: rgba(37, 211, 102, 0.62);
        /* color: #fff !important; */
        width: 155px;
        height: 45px;
        font-size: 30px;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translatey(0px);
        animation: pulse 1.5s infinite;
        box-shadow: 0 0 0 0 #42db87;
        -webkit-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        -moz-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        -ms-animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        animation: pulsing 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        font-weight: normal;
        font-family: sans-serif;
        text-decoration: none !important;
        transition: all 300ms ease-in-out;
    }

    @media screen and (max-width: 600px) {
  #mySpan1 {
    display: none;
  }
  .floating_btn, .floating_btn2{
  
    right:0px;
  }
  .contact_icon{
    width: 45px;
  }
}
</style>
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
                            <span><i class="fa fa-phone"></i> +91 7412963888 , +91 9829655254 , +91 9772722276 , 0141 4871485</span>
                            <hr />
                            <span><i class="fa fa-envelope-o"></i>hotelanjushreeinnjpr@gmail.com , Gm@hotelanjushree.in</span>
                        
                        </div>
                 
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
	    
    
    <div class="header-video white">
        <div class="videobox" >
            {{-- <video autoplay loop muted poster="images/video-1-poster.jpg">
                <source src="images/video-1.mp4" type="video/mp4">
            </video> --}}
            <img src="{{asset('/images/contact-us.jpg')}}" style="height:100%">
        </div>
        <div class="overlaybox">
            <div class="container">
                <div class="title-base">
                    <!--<hr class="anima" />-->
                    <center>
                    <h1>CONTACT US</h1> </center>
                    {{-- <p>We are avilable for 24 X 7 into 365 Days</p> --}}
                   
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-8">
                    <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                        <h2>CONTACT US FROM HERE</h2>
                        <hr class="anima">
                    </div>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form method="post" action="{{ route('contactstore') }}"  id="conform" class="form-box form-ajax">
                        @csrf 
                        <h3>SEND A MESSAGGE</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Name</p>
                                <input id="name" name="name" placeholder="name" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="email" type="email" class="form-control form-value" required>
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-6">
                                <p>Phone</p>
                                <input type="text" class="form-control" name="mobile" placeholder="phone">
                            </div>
                            <div class="col-md-6">
                                <p>Subject</p>
                                <input type="text" class="form-control" name="subject" placeholder="subject">
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-12">
                                <p>Messagge</p>
                                <textarea id="messagge" name="message" class="form-control form-value" required></textarea>
                                <hr class="space s" />
                                <button class="anima-button circle-button btn-sm btn" type="submit" onclick="return document.getElementById('conform').submit();">Send messagge</button>
                            </div>
                        </div>
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                        <h2>INFORMATIONS AND BOOKING</h2>
                        <hr class="anima">
                    </div>
                    <table class="table">
                        <tbody>

                            <tr>
                                
                                <td><b style="display: none;">Address</b></td>
                                <td style="font-size: 17px; padding-top: 25px;">
                                    Hotel Anju Shree Inn
                                   
                                </td>
                            </tr>
                            <tr>
                                <td><b>Address</b></td>
                                <td>
                                    Plot No. 1B , Shop No. 6/7 , Kalyan Nagar
                                    <br />
                                    3rd ,  Sanganer , Tonk Road , Jaipur -302029
                                </td>
                           

                               

                            </tr>
                            <tr>
                                <td><b>Telephone</b></td>
                                <td> 0141 4871485</td>
                            </tr>
                            <tr>
                                <td><b>Mobile</b></td>
                                <td>+91 7412963888 , +91 9829655254 , <br> +91 9772722276 </td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>
                                    <a href="mailto:hotelanjushreeinnjpr@gmail.com">hotelanjushreeinnjpr@gmail.com</a>, 
                                    <a href="mailto:Gm@hotelanjushree.in">Gm@hotelanjushree.in</a> 
                                  
                                </td>
                            </tr><br><br>
                     
                        </tbody>
                    </table>
                    <br><br>
                </div>
                
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3560.4416377965485!2d75.7921729754364!3d26.82590207669911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjbCsDQ5JzMzLjMiTiA3NcKwNDcnNDEuMSJF!5e0!3m2!1sen!2sin!4v1699630304498!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                 

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
                        <span><a href="mailto:hotelanjushreeinnjpr@gmail.com">hotelanjushreeinnjpr@gmail.com </a> , 
                          <a href="mailto:Gm@hotelanjushree.in">Gm@hotelanjushree.in</a></span>
                        <span>+91 7412963888 , +91 9829655254 , +91 9772722276 , 0141 4871485</span>
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
        <script type="text/javascript" src="js/imagesloaded.min.js"></script>
        <script type="text/javascript" src='js/datepicker.min.js'></script>
        <script type="text/javascript" src='js/contact-form.js'></script>
    </footer>
</body>
</html>

