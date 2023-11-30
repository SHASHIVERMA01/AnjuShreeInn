<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @foreach(App\Models\metas::where('page_name','/')->get() as $meta)
  <title>{{ $meta->meta_heading }}</title>
  <meta name="description" content="{{ $meta->meta_content }}" />
  <meta name="keywords" content="{{ $meta->meta_keyword }}" />
  @endforeach
  <meta name="copyright" content="All coding copyright HotelAnjuShreeInn, all rights reserved." />
  <script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/jquery.flipster.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('/css/content-box.css')}}">
  <link rel="stylesheet" href="{{asset('/css/contact-form.css')}}">
  <link rel="stylesheet" href="{{asset('/css/flexslider.css')}}">
  <script type="text/javascript" src="{{asset('/js/script.js')}}"></script>
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

<body id="bodys">
  <div id="preloader"></div>
  <header class="fixed-top scroll-change" data-menu-anima="fade-bottom">
    <div class="navbar navbar-default icon-menu navbar-fixed-top" role="navigation">
      <div class="navbar-mini ">
        <div class="container-fluid ">
          <div class="nav navbar-nav navbar-left" style="font-size:12px;">
           
              <span>Welcome to our Hotel Anju Shree Inn Jaipur, Rajasthan</span>
              <hr />
              <span><i class="fa fa-phone"></i> +91 7412963888 , +91 9829655254 , +91 9772722276 , 0141 4871485</span>
              <hr />
              <span><i class="fa fa-envelope-o"></i>hotelanjushreeinnjpr@gmail.com , Gm@hotelanjushree.in</span>
          
          </div>
          {{-- <div class="nav navbar-nav navbar-right">
            <div class="minisocial-group">
              <a target="_blank" href="https://www.facebook.com/ParkOceanJaipur/"><i class="fa fa-facebook"></i></a>
              <a target="_blank" href="https://twitter.com/hotelparkocean"><i class="fa fa-twitter"></i></a>
              <a target="_blank" href="https://www.instagram.com/accounts/login/?next=/hotelparkocean/"><i
                  class="fa fa-instagram"></i></a>
              <a target="_blank" href="https://www.linkedin.com/in/parkocean"><i class="fa fa-linkedin"></i></a>
              <a target="_blank" href="https://www.youtube.com/channel/UCGkxkMymvCXCa7WkCk6dXLw"><i
                  class="fa fa-youtube"></i></a>
              <a target="_blank"
                href="https://www.tripadvisor.in/Hotel_Review-g304555-d8596386-Reviews-Hotel_Park_Ocean-Jaipur_Jaipur_District_Rajasthan.html"
                title="Trip Advisior">
                <img src="{{asset('/images/trip_advisior.png')}}" style="width: 25px;margin-left: 10px;">
              </a>
            </div>
          </div> --}}
        </div>

      </div>
      <hr style="margin: 5px 0px">
      <div class="navbar navbar-main">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/" id="onethousandlogo"><img src="{{asset('/images/HotelLogo.svg')}}"
                alt="logo" style="height:100px ; width:100px ; transform :scale(1.6,1.5)"></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav" style="">
              <li>
                <a href="/about-us"><i class="onlycover"></i>
                  <span  class="ulb">About Us </span></a>
              </li>
              <li>
                <a href="/accommodations">
                  <i class="onlycover"></i>
                  <span class="ulb">Accommodations </span>
                </a>
              </li>
              <li>
                <a href="/dining">
                  <i class="onlycover"></i>
                  <span class="ulb">Dining</span>
                </a>
              </li>
              <li>
                <a href="/eventbanquet">
                  <i class="onlycover"></i>
                  <span class="ulb">Meeting and Banquets</span>
                </a>
              </li>
              <li>
                <a href="/specialoffers">
                  <i class="onlycover"></i>
                  <span class="ulb">Special Offers</span>
                </a>
              </li>
              <li>
                <a href="/gallery">
                  <i class="onlycover"></i>
                  <span class="ulb">Gallery</span>
                </a>
              </li>
              <li>
                <a href="/blog">
                  <i class="onlycover"></i>
                  <span class="ulb">Blog</span>
                </a>
              </li>
              <li>
                <a href="/contact">
                  <i class="onlycover"></i>
                  <span class="ulb">Contact Us</span>
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


  <!--Side Form -->


  <div class="sidebar-contact">
    <div class="toggle">Enquire</div>
    <h2>Enquire</h2>
    <div class="scroll">
      @if(session()->has('message'))
      <div class="alert alert-success">
        {{ session()->get('message') }}
      </div>
      @endif
      <form method="post" action="{{ route('contactstore') }}" id="conform">
        @csrf
        <input type="text" name="name" class="in" placeholder="Name">
        <input type="email" name="email" class="in" placeholder="Email">
        <input type="rel" name="mobile" class="in" placeholder="Phone Number">
        <input type="rel" name="subject" class="in" placeholder="Subject">
        <textarea name="message" class="in" placeholder="Message here.."></textarea>
        <input type="submit" name="" value="send" style="background-color: #00529C"
          onclick="return document.getElementById('conform').submit();">
      </form>
    </div>
  </div>

  <style>
    .in:hover {
      transition-property: all;
      transition-duration: 1s;
      border-radius: 6px;
      border: 1px solid #00529C;
    }

    .sidebar-contact {
      position: fixed;
      top: 50%;
      left: -350px;
      transform: translateY(-50%);
      width: 350px;
      height: auto;
      padding: 40px;
      background: #fff;
      box-shadow: 0 20px 50px rgba(0, 0, 0, .5);
      box-sizing: border-box;
      transition: 0.5s;
      z-index: 9;
    }

    .sidebar-contact.active {
      left: 0;
    }

    .sidebar-contact input,
    .sidebar-contact textarea {
      width: 100%;
      height: 36px;
      padding: 5px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid rgba(0, 0, 0, .5);
      outline: none;
    }

    .sidebar-contact h2 {
      margin: 0 0 20px;
      padding: 0;
    }

    .sidebar-contact textarea {
      height: 60px;
      resize: none;
    }

    .sidebar-contact input[type="submit"] {
      background: #00bcd4;
      color: #fff;
      cursor: pointer;
      border: none;
      font-size: 18px;
    }

    .toggle {
      background: #000000b3;
      border-radius: 0 0 5px 5px;
      cursor: pointer;
      display: block;
      font-size: 18px;
      font-weight: 700;
      left: 109%;
      letter-spacing: 1px;
      margin-left: -1px;
      padding: 10px 25px;
      position: absolute;
      text-align: center;
      top: 180px;
      transform: rotate(-90deg);
      transform-origin: left center 0;
      color: #fff;
      */
    }

    @media(max-width:768px) {
      .sidebar-contact {
        width: 100%;
        height: 100%;
        left: -100%;
      }

      .sidebar-contact .toggle {
        top: 50%;

        transition: 0.5s;
      }

      .sidebar-contact.active .toggle {
        top: 0;
        right: 0;
        transform: translateY(0);
        position: absolute;
        margin-left: -132px;
        width: 100px;
      }

      .scroll {
        width: 100%;
        height: 100%;
        overflow-y: auto;
      }

      .content {
        padding: 50px 50px;
      }
    }
  </style>

  <script>
    $(document).ready(function(){
  $('.toggle').click(function(){
    $('.sidebar-contact').toggleClass('active')
    $('.toggle').toggleClass('active')
  })
})
  </script>




  @yield('body')

  <!--Start of Tawk.to Script-->
  <!--<script type="text/javascript">-->
  <!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
  <!--(function(){-->
  <!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
  <!--s1.async=true;-->
  <!--s1.src='https://embed.tawk.to/62f5e73b54f06e12d88e3293/1ga88ugm0';-->
  <!--s1.charset='UTF-8';-->
  <!--s1.setAttribute('crossorigin','*');-->
  <!--s0.parentNode.insertBefore(s1,s0);-->
  <!--})();-->
  <!--</script>-->
  <!--End of Tawk.to Script-->

  <footer class="footer-center footer-minimal">
    <div class="content">
      <div class="container">
        <div class="row footer-main">
          <p class="footer-title">CONTACT US</p>
          <p>Plot No. 1B , Shop No. 6/7 , Kalyan Nagar 3rd , Sanganer , Tonk Road , Jaipur - 302029 </p>
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
    <link property="" rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <script type="text/javascript" async src="{{ asset('/js/bootstrap.min.js')}}"></script>
    <link property="" rel="stylesheet" href="{{ asset('/css/animations.css')}}">
    <script type="text/javascript" src="{{ asset('/js/imagesloaded.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.spritely.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/contact-form.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.flipster.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/parallax.min.js')}}"></script>
  </footer>
</body>

</html>