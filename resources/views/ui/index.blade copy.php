    @extends('layouts.master') @section('body')
    @section('meta')
@if($datas)
                      {!! $datas->meta !!}
                           
                    @endif
                    @endsection
                    
    <section id="home-page" class="section-container" >
        <div id="banner" class="banner-wrapper section-wrapper wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.1s">
       @if($datas)
            <div id="home-carousel" class="owl-carousel text-center">
                <div class="inner-item">
                    <div class="item d-flex align-items-center align-items-md-end even-img justify-content-center"
                        style="position: relative; z-index: 99; background: url(/storage/homepage/{{$datas->banner}}) no-repeat; min-height: 100vh; background-size: cover;">
                    </div>

                    <div class="content text-center">
                        <div class="logo-img mb-4">
                            <a href="#">

                                <!-- <img width="300" height="180" src="wp-content/uploads/2021/09/shubhbillay.png" class="img-fluid mb-0 mx-auto" style="max-width: 300px;" /> -->
                            </a>
                        </div>
                        <!-- <a href="/shubhnilay" class="btn white-btn mb-0 mb-md-4">Detail Now</a> -->


                        <a href="#" class="mouse-icon">
                            <div class="mouse-wheel"><span class="fa fa-arrow-down" style="font-size: 35px;"></span></div>
                        </a>


                    </div>
                </div>
            </div>
            @endif
        </div>


        <div id="passion" class="section-wrapper wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.1s">
            <div class="container custom-container">
           @if($datas)
                <div class="row">

                    <div class="col-md-6 mb-md-0 mb-4 px-md-5  text-md-left position-relative ">
                        <h5 class="mb-md-2 mb-9px">Mahima Group</h5>
                        <h2 class="mb-md-4 mb-9px">{{$datas->title}} </h2>
                        <div style="text-align: justify;">
                            <p>
                                {!! $datas->about_disc !!}
                                <!-- <a href="/about" style="color:#0651a5">Read More..</a> -->
                            </p>

                        </div>
                        <!-- <a href="#" class="btn transparent-btn bottom-position">READ MORE</a> -->
                    </div>

                    <div class="col-md-6 mb-md-0 pl-5">
                        <div class="img-wrapper about-hide">


                            <ul class="hppy home_line"
                                style="display:flex;list-style-type: none;color:#000;height: 297px;margin-top:37px">
                                <li class="down_counter_top"><span class="counter one" style="font-size:100px"><span
                                            class="incrementalNumber" big-number="1" set-time="4000"
                                            data-value="{{$datas->counter}}"></span></span><br>
                                    <span style="" class="text-counter-size"> {{$datas->count_title}} <br>{{$datas->count_title2}}

                                    </span>

                                </li>
                                <li>
                                    <hr class=""
                                        style="margin-top: 116px;border-top: 1px solid #0651a5;width: 114px;transform: rotate(280deg);">
                                </li>

                                <li class="down_counter down_count_align">
                                    <span class="counter two" style="font-size:100px">
                                        <span class="incrementalNumber" big-number="1" set-time="4000" data-value="{{$datas->sec_counter}}"></span>
                                        </span>
                                        <span style="" class="text-counter-size">{{$datas->sec_counter_title}} <br> {{$datas->sec_counter_title2}}d</span>
                                        <!-- <br>
                                    <span style="" class="text-counter-size"> </span> -->
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>


        <style>
        

        .text-center-properties {
            position: absolute;
            bottom: 0px;
            background-color: rgba(255, 255, 255, 0.8);
            width: 100%;
            height: 0px;

            /* transform: scaleY(0); */
            /* transform-origin: bottom center; */
            z-index: 1;
            transition: height, padding;
            transition-duration: 1.8s, 1.8s;
            /* transition: transform 0.9s; */
            visibility: hidden;
        }

        .button-wrapper:hover .text-center-properties {
            visibility: visible;
            padding: 25px;
            height: 80px;

            /* transform: scaleY(1.2); */
        }
        </style>

        <div id="location" class="section-wrapper wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.1s">
            <div class="container custom-container">
                <h2 class="mb-3 text-center"></h2>
                <div class="mb-3 text-center">
                  
                </div>
                <br>
               @if($datas)
                <div class="row">
                    <div class="col-md-4">
                        <a href="/{{$datas->pro_link}}"><h2 class="mb-md-4 mb-9px text-center" style="">{{$datas->pro_title}}</h2></a>
                        <div class="button-wrapper mb-4 text-center">
                            <a href="/{{$datas->pro_link}}">
                                <img src="/storage/homepage/{{$datas->pro_img}}" class="img-responsives" />
                                <h2 class="text-center-properties" style=""><span class="text-transform: none;">{{$datas->pro_img_text}}</span></h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="/{{$datas->pro_link2}}"><h2 class="mb-md-4 mb-9px text-center">{{$datas->pro_title2}}</h2></a>
                        <div class="button-wrapper mb-4 text-center">
                            <a href="/{{$datas->pro_link2}}">
                                <img src="/storage/homepage/{{$datas->pro_img2}}" class="img-responsives" />
                                <h2 class="text-center-properties "><span class="text-transform: none;">{{$datas->pro_img_text2}}</span></h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="/{{$datas->pro_link3}}"><h2 class="mb-md-4 mb-9px text-center">{{$datas->pro_title3}}</h2></a>
                        <div class="button-wrapper mb-4 text-center">

                            <a href="/{{$datas->pro_link3}}">
                                <img src="/storage/homepage/{{$datas->pro_img3}}" class="img-responsives" />
                                <h2 class="text-center-properties"><span class="text-transform: none;">{{$datas->pro_img_text3}}</span></h2>
                            </a>

                        </div>
                    </div>

                </div>
                @endif
               
                <div class="button-wrapper mb-4 text-center">
                    <!-- <a href="#" class="btn transparent-btn">ALL LOCATIONS</a> -->
                </div>
            </div>
        </div>




        <div id="location" class="section-wrapper wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.1s">
            <div class="container custom-container ">
                <h2 class="mb-3">
                    <style>


                    </style>
                    <div class="container" style="
        text-align: center;
    ">


                        <span onclick="searchPropeties()">
                        <i class="icofont-search" style="color: #0d0d0d;font-size: 30px !important;"
                            ></i>
                            <span class="search-text"> <span
                            style="text-transform: capitalize;font-size: 27px;">Search Projects on </span>
                        <span style="text-transform: capitalize;color: #6274ca;font-size: 27px;" class="textContainer location-text-border-mob"
                            id="word"></span>
                            </span>
                            </span>

                    </div>
                </h2>
                <br>
                <div class="mb-3 text-center">
                </div>
            </div>

            <div class="button-wrapper mb-4 text-center">
                <!-- <a href="#" class="btn transparent-btn">ALL LOCATIONS</a> -->
            </div>
        </div>
        </div>




        <div id="carousel" class="carousel-wrapper wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.1s">
            <div class="container custom-container px-4">
                <div class="row ">
                    <!-- <div class="col-md-6 mb-md-0 mb-4 px-md-5  text-md-left position-relative "> -->
                    <h2 class="mb-3">HAPPY MAHIMA FAMILIES</h2>
                    <!-- </div> -->

                    <div class="desktop-carousel d-none d-md-block">
                        <div id="hotel-carousel" class="owl-carousel wow fadeIn" data-wow-duration="0.7s"
                            data-wow-delay="0.1s">
                            @forelse($datas->hp_family as $vid)
                                <a class="item text-center">
                                    <video width="100%" controls="" poster="/storage/homepage/{{$vid['hp_image']}}" id="youutube">
                                        <source src="/storage/homepage/{{$vid['hp_video']}}" type="video/mp4">
                                    </video>
                                </a>
                                @empty
                            @endforelse
                        </div>
                    </div>
                    <div class="mobile-carousel d-md-none d-block">
                        <div id="hotel-carousel1" class="owl-carousel wow fadeIn" data-wow-duration="0.7s"
                            data-wow-delay="0.1s">
                            
                            @forelse($datas->hp_family as $vids)
                            <a class="item text-center">
                                <video width="100%" controls="" poster="/storage/homepage/{{$vids['hp_image']}}" id="youutube">
                                    <source src="/storage/homepage/{{$vids['hp_video']}}" type="video/mp4">
                                </video>
                            </a>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <style>
        h1 {
            padding-top: 0px;
            color: white !important;
        }


        .intro {
            height: auto;
            min-height: 100vh;
            text-align: center;
            background-color: teal;

        }

        #countr {
            font-size: 30px;
            color: blue;
            text-align: center;
        }

        .counter-title {
            font-size: 13px;
            text-align: center;
        }

        #counter {
            margin-top: 35px;
            margin-bottom: 40px;
        }
        }
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
        function inVisible(element) {
            //Checking if the element is
            //visible in the viewport
            var WindowTop = $(window).scrollTop();
            var WindowBottom = WindowTop + $(window).height();
            var ElementTop = element.offset().top;
            var ElementBottom = ElementTop + element.height();
            //animating the element if it is
            //visible in the viewport
            if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
                animate(element);
        }

        function animate(element) {
            //Animating the element if not animated before
            if (!element.hasClass('ms-animated')) {
                var maxval = element.data('max');
                var html = element.html();
                element.addClass("ms-animated");
                $({
                    countNum: element.html()
                }).animate({
                    countNum: maxval
                }, {
                    //duration 5 seconds
                    duration: 5000,
                    easing: 'linear',
                    step: function() {
                        element.html(Math.floor(this.countNum) + html);
                    },
                    complete: function() {
                        element.html(this.countNum + html);
                    }
                });
            }

        }

        //When the document is ready
        $(function() {
            //This is triggered when the
            //user scrolls the page
            $(window).scroll(function() {
                //Checking if each items to animate are 
                //visible in the viewport
                $("h2[data-max]").each(function() {
                    inVisible($(this));
                });
            })
        });
        </script>

    </section>

    <br>
    <br>

    <div id="passion" class="section-wrapper wow fadeIn" data-wow-duration="0.7s" data-wow-delay="0.1s">
        <div class="container custom-container">
            <h2 class="mb-3 ">Quick access</h2>
            <div class="row">

                <div class="col-md-3 mb-md-0 mb-4">
                    <a href="/career">
                        <p class="border-bottom">Work with us</p>
                    </a>
                </div>
                <div class="col-md-2 mb-md-0 mb-4">
                    <a href="/tools">
                        <p class="border-bottom">Tools</p>
                    </a>
                </div>
                <div class="col-md-2 mb-md-0 mb-4">
                    <a href="/blog">
                        <p class="border-bottom">Blogs</p>
                    </a>
                </div>
                <div class="col-md-3 mb-md-0 mb-4">
                    <a href="/contact">
                        <p class="border-bottom"> Customer Support</p>
                    </a>
                </div>
                <div class="col-md-2 mb-md-0 mb-4">
                    <a href="/about">
                        <p class="border-bottom">Media</p>
                    </a>
                </div>

            </div>
        </div>
    </div>

    
    @endsection