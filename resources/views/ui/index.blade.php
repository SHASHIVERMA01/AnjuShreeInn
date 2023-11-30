@extends('layouts.master') @section('body')

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

<div class="section-slider home-slider">
    <div class="flexslider advanced-slider slider white text-center" data-options="animation:fade">
        <ul class="slides">
            @foreach(App\Models\banners::all() as $banner)
            <li data-slider-anima="fade-in" data-timeline="asc" data-time="2000" class="" data-anima="fade-in">
                <div class="section-slide">
                    <div class="bg-cover" style="background-image: url(/storage/homepage/{{$banner->image}});"
                        id="desktop-slider"></div>
                    <div class="bg-cover" style="background-image: url(/storage/homepage/{{$banner->mobile_banner}});"
                        id="mobile-slider"></div>
                    <div class="container">
                        <div class="container-middle">
                            <div class="container-inner text-black">
                                <h1 class="text-bold text-xl anima fade-in text-black">
                                    &nbsp;
                                </h1>
                                <p class="anima fade-in text-black">
                                    &nbsp;
                                </p>
                                <hr class="space s" />
                                <!-- <a class="btn btn-default anima fade-in" href="javascript:void(0)">
	                                    Reservetion
	                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <!-- <ol class="flex-control-nav flex-control-paging">
	            <li><a class="">1</a></li>
	            <li><a class="flex-active">2</a></li>
	            <li><a>3</a></li>
	        </ol> -->
        <ul class="flex-direction-nav">
            <li class="flex-nav-prev"><a class="flex-prev" href="#"></a></li>
            <li class="flex-nav-next"><a class="flex-next" href="#"></a></li>
        </ul>
    </div>
</div>

<style>
    @media screen and (max-width: 480px) {
        #desktop-slider {
            display: none !important;
        }

        #mobile-slider {
            display: block !important;
        }
    }

    #desktop-slider {
        display: block !important;
    }

    #mobile-slider {
        display: none;
    }


    /* whats app css */
    /* a{
  text-decoration:none;
} */


</style>


<!-- <div class="section-bg-animation header-animation box-middle-container white" style="background-image:url('images/title-1.jpg'); height:550px">
        <div id="anima-layer-a" class="anima-layer fog-1"></div>
        <div id="anima-layer-b" class="anima-layer fog-2"></div>
        <div class="bg-gradient"></div>
        <img class="overlay bottom center" width="649" src="images/overlay.png" data-anima="fade-bottom" alt="" />
        <div class="container content text-center" data-anima="show-scale" data-timeline="asc" data-time="1000">
            <hr class="space" />
            <h1 class="anima text-xl">WELCOME TO HOTEL PARK OCEAN</h1>
            <p class="anima secondary-color-2">
                An oasis in the middle of Venice
            </p>
        </div>
    </div> -->


<!-- Booking Form css & Js -->
<style>
    #bookingForm .booking-form>div {
        display: inline-block;
        float: none;
        vertical-align: bottom;
    }

    .abs_parent {
        width: 80%;
        margin: auto;
    }

    #bookingForm .form-group.date-parameter-block {
        /*width: 19%;*/
        /*padding: 0 6px;*/
    }

    #bookingForm .adult-wrapper,
    #bookingForm .child-wrapper {
        /*width:8%;*/
        /*padding:0 6px;*/
    }

    #bookingForm .form-group.promo-block {
        /*width: 15%;  */
        /*padding: 0 6px;*/
    }

    #bookingForm .form-group.min-price-wrapper {
        position: absolute;
    }

    #bookingForm .adult-wrapper select,
    #bookingForm .child-wrapper select {
        padding: 5px 10px;
        height: 40px;
    }

    #bookingForm .form-control {
        font-size: 14px;
        height: 34px;
        cursor: pointer;
        width: 100%;
        box-shadow: none;
    }

    #bookingForm .btn-wrapper input.btn.btn-full-width {
        height: 40px;
        padding: 0 10px;
    }

    #bookingForm .date-parameter-block .fa.fa-calendar:before {
        content: "\f073";
    }

    #bookingForm .dp-holder {
        width: 100%;
        border: 1px solid rgb(153, 153, 153);
        position: relative;
        height: 37px;
        border-radius: 0px;
        background-color: rgb(255, 255, 255);
    }

    #bookingForm .dp-holder .form-control {
        position: absolute;
        top: 0px;
        left: 0px;
        background-color: transparent;
        z-index: 1;
    }

    #bookingForm .dp-holder span {
        float: right;
        margin-top: 11px;
        margin-right: 10px;
    }

    #bookingForm .dp-holder input {
        border: none;
    }

    #bookingForm .btn-wrapper {
        margin-left: 10px;
    }

    #booking-form {
        position: relative;
        padding: 10px 20px 20px;
        float: none;
        text-align: center;
        margin: 0 auto;
    }

    .hidden {
        display: none !important;
    }


    @media screen and (max-width:700px) {
        #pzero {
            padding-top: 0px;
        }
    }
</style>
<script>
    $(document).ready(function() {
                $(function() {
                    var minDate = new Date();
                    $(".arrival-date-input").datepicker({
                        minDate:minDate,
                        dateFormat:'yy-mm-dd',
                    });
                    $(".departure-date-input").datepicker({
                        dateFormat:'yy-mm-dd',
                    });
                });
                $('.arrival-date-input').change(function() {
                    startDate = $(this).datepicker('getDate');
                    $('#check_in').val(moment(startDate).format('YYYY-MM-DD'));
                    $(".departure-date-input").datepicker("option", "minDate", startDate);
                });
                $('.departure-date-input').change(function() {
                    endDate = $(this).datepicker('getDate');
                    $('#check_out').val(moment(endDate).format('YYYY-MM-DD'));
                    $(".arrival-date-input").datepicker("option", "maxDate", endDate);
                });
                
            })


    /* Handling booking engine events */
    
		
</script>



{{-- <div class="section-bg-image" style="background-image: url('images/bg-line.jpg'); background:#00529c; ">
    <div class="container content" style="padding-top: 15px; padding-bottom: 0px;">
        <div class="row">
            <div class="clearfix booking-form booking-form-vc-desktop" id="bookingForm">
                <form action="" class="form booking-form" data-engine="simplotel" data-group_id="" data-hotel_id=""
                    id="booking-form" method="GET" style="" target="_parent">
                    <div class="row" style="width:100%">
                        <div class="">
                            <input id="simp_form_hotel_id" name="propertyId" type="hidden" value="79" />
                            <!-- CHANGE HERE - HOTEL-ID -->
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group date-parameter-block right-padd vc_tohide">
                                <label for="" style="color: white;">Check In</label>
                                <div class="dp-holder"><input class="arrival-date-input form-control " data-meta=""
                                        id="dp1655285129744" name="" type="text" value="" readonly="" /><span
                                        class="fa fa-calendar"></span></div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class=""><input class="" data-meta="" id="check_in" name="checkIn" type="hidden"
                                    value="" /></div>
                            <div class="form-group date-parameter-block left-padd vc_tohide">
                                <label for="" style="color: white;">Check Out</label>
                                <div class="dp-holder"><input class="departure-date-input form-control " data-meta=""
                                        id="dp1655285129745" name="" type="text" value="" readonly="" /><span
                                        class="fa fa-calendar"></span></div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class=""><input class="" data-meta="" id="check_out" name="checkout" type="hidden"
                                    value="" /></div>
                            <div class="adult-wrapper">
                                <div class="form-group adult-block tohide booking-form-left">
                                    <div>
                                        <label for="Adult" style="color: white;">Adults</label>
                                        <span>
                                            <select class="form-control" data-meta="1" id="adults_id" name="adults">
                                                <option selected="" value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="child-wrapper">
                                <div class="form-group child-block tohide booking-form-right">
                                    <div>
                                        <label for="Child" style="color: white;">Children</label>
                                        <span>
                                            <select class="form-control" data-meta="0" id="children_id" name="children">
                                                <option selected="" value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="form-group promo-block text-field tohide">
                                <label for="Promo" style="color: white;">Promo Code</label>
                                <div class="tb-holder"><input class="form-control" data-meta="" id="" name="promocode"
                                        type="text" value="" /></div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <div class="btn-wrapper" style="margin-top:20px;">
                                <div class="form-group check-btn-holder" style="background: #000; border-radius: 24px;">
                                    <a href="https://bookings.hotelparkocean.com/?propertyId=7082"
                                        class="btn btn-full-width" data-meta="" id="" name="" type="submit"
                                        value="Book Now" style="border: none;
    padding: 10px;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}

        <!--<form action="http://templates.framework-y.com/eleganjs/php/contact-form.php" class="form-box form-ajax" method="post">-->
        <!--    <div class="row">-->
        <!--        <div class="col-md-3">-->
        <!--            <p style="color: white;">Check-in</p>-->
        <!--            <input name="checkin" id="checkin" type="text" data-toggle="datepicker" class="form-control form-value" placeholder="Check-in" required>-->
        <!--        </div>-->
        <!--        <div class="col-md-3">-->
        <!--            <p style="color: white;">Check-out</p>-->
        <!--            <input name="checkout" id="checkout" type="text" data-toggle="datepicker" class="form-control form-value" placeholder="Check-out" required>-->
        <!--        </div>-->
        <!--        <div class="col-md-2">-->
        <!--            <p style="color: white;">Rooms</p>-->
        <!--            <select name="nights" id="nights" class="form-control form-value" required>-->
        <!--                <option value="1" selected="">1</option>-->
        <!--                <option value="2">2</option>-->
        <!--                <option value="3">3</option>-->
        <!--                <option value="4">4</option>-->
        <!--                <option value="5">5</option>-->
        <!--                <option value="6">6</option>-->
        <!--                <option value="7">7</option>-->
        <!--                <option value="8">8</option>-->
        <!--                <option value="9">9</option>-->
        <!--            </select>-->
        <!--        </div>-->
        <!--        <div class="col-md-1">-->
        <!--            <p style="color: white;">Guests</p>-->
        <!--            <select name="adults" id="adults" class="form-control form-value">-->
        <!--                <option value="1" selected="">1</option>-->
        <!--                <option value="2">2</option>-->
        <!--                <option value="3">3</option>-->
        <!--                <option value="4">4</option>-->
        <!--                <option value="5">5</option>-->
        <!--                <option value="6">6</option>-->
        <!--                <option value="7">7</option>-->
        <!--                <option value="8">8</option>-->
        <!--                <option value="9">9</option>-->
        <!--            </select>-->
        <!--        </div>-->
        <!--        <div class="col-md-1">-->
        <!--            <p style="color: white;">Children</p>-->
        <!--            <select name="adults" id="adults" class="form-control form-value">-->
        <!--                <option value="" selected="">0</option>-->
        <!--                <option value="1">1</option>-->
        <!--                <option value="2">2</option>-->
        <!--                <option value="3">3</option>-->
        <!--                <option value="4">4</option>-->
        <!--                <option value="5">5</option>-->
        <!--                <option value="6">6</option>-->
        <!--                <option value="7">7</option>-->
        <!--                <option value="8">8</option>-->
        <!--                <option value="9">9</option>-->
        <!--            </select>-->
        <!--        </div>-->
        <!--        <div class="col-md-2" style="padding-left: 15px;">-->
        <!--            <hr class="space" style="height:35px" />-->
        <!--            <button class="anima-button circle-button btn-sm btn" type="submit" style="background: #000; padding-bottom: 7px;"><a href="https://bookings.hotelparkocean.com/?propertyId=7082" style="color: white;" target="_blank">Book now</a></button>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="success-box">-->
        <!--        <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>-->
        <!--    </div>-->
        <!--    <div class="error-box">-->
        <!--        <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>-->
        <!--    </div>-->
        <!--</form>-->
        {{--
    </div> --}}
    {{--
</div> --}}



@foreach(App\Models\HomePage::all() as $homepage)
<div class="section-empty">
    <div class="container content">
        <div class="row" data-anima="fade-bottom">
            <div class="col-md-6">
                <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                    <h2>ACCOMODATIONS</h2>
                    <hr class="anima" />
                </div>
                <p class="text-justify">
                    {!! $homepage->accomodations_content !!}

                </p>
                <hr class="space xs" />
                <a href="/accommodations" class="anima-button circle-button btn-sm btn"><i
                        class="fa fa-long-arrow-right"></i>Take a look</a>
            </div>
            <div class="col-md-6">
                <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                    <h2>Why Travel Hotel ?</h2>
                    <hr class="anima" />
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="fa-ul text-justify">
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_one }}</li>
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_two }}</li>
                            <li><i class="fa-li fa fa-check"></i>{{ $homepage->point_three }}</li>
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_four }}</li>
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_five }}</li>
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_eleven }}</li>
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_thrteen }}</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="fa-ul text-justify">
                            <li><i class="fa-li fa fa-check"></i>{{ $homepage->point_six }}</li>
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_seven }}</li>
                            <li><i class="fa-li fa fa-check"></i>{{ $homepage->point_eight }}</li>
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_nine }}</li>
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_ten }}</li>
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_twelve }}</li>
                            <li><i class="fa-li fa fa-check"></i> {{ $homepage->point_fourteen }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{--
---------------------------------------------------------------------------------------------------------------------------------
--}}
<div class="section-empty">
    <div class="container content" id="pzero">
        <div class="row" data-anima="fade-bottom">
            <div class="col-md-6">
                <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                    <h2>OUR OUTLET</h2>
                    <hr class="anima" />
                </div>
                <p class="text-justify">
                    "Discover a culinary journey at our hotel's diverse outlets. From the upscale Grand Dining Room to
                    the relaxed Poolside Oasis, each venue offers a unique dining experience. Savor global flavors at
                    Spice Fusion, unwind at The Terrace Lounge, or grab a quick bite at our Grab & Go Corner. Whether
                    it's an opulent dinner or a refreshing poolside snack, our outlets promise culinary excellence in
                    every bite."

                </p>
                <hr class="space xs" />
                <a href="/accommodations" class="anima-button circle-button btn-sm btn"><i
                        class="fa fa-long-arrow-right"></i>Take a look</a>
            </div>

            <div class="col-md-6">
                {{-- <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                    <h2>Why Travel Hotel ?</h2>
                    <hr class="anima" />
                </div> --}}


                <img src="images/outlet.jpeg" alt="">


            </div>

        </div>
    </div>
</div>

{{--
---------------------------------------------------------------------------------------------------------------------------
--}}

<div class="section-bg-image overlay-container parallax-window" data-natural-height="750" data-natural-width="1920"
    data-parallax="scroll" data-image-src=""
    style="background-image: url(/storage/homepage/{{$homepage->welcome_image}});">
    <div class="container content overlay-content white text-center">
        <hr class="space m" />
        <hr class="space" />
        <div class="title-base title-small" data-anima="show-scale" data-trigger="hover">
            <h2>{{ $homepage->welcome_title }}</h2>
            <hr class="anima" />
        </div>
        {!! $homepage->welcome_content !!}
        <hr class="space xs" />
        <a href="/about-us" class="anima-button circle-button btn-sm btn"><i class="fa fa-heart"></i>Explore now</a>
        <hr class="space" />
        <hr class="space m" />
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <div class="row" data-anima="fade-bottom">
            <div class="col-md-6">
                <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                    <h2>Meeting <span style="text-transform: lowercase;">and</span> Banquets</h2>
                    <hr class="anima" />
                </div>
                <p class="text-justify">
                    {!! $homepage->event_image_content !!}

                </p>
                <hr class="space xs" />
                <a href="/eventbanquet" class="anima-button circle-button btn-sm btn"><i
                        class="fa fa-long-arrow-right"></i>Take a look</a>
            </div>
            <div class="col-md-6">
                <div class="coverflow-slider">
                    <ul class="slides">
                        <li>
                            <a class="img-box lightbox">
                                <img src="/storage/homepage/'{{$homepage->event_image_one}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox">
                                <img src="/storage/homepage/{{$homepage->event_image_two}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox">
                                <img src="/storage/homepage/{{$homepage->event_image_three}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox">
                                <img src="/storage/homepage/{{$homepage->event_image_four}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox">
                                <img src="/storage/homepage/{{$homepage->event_image_five}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox">
                                <img src="/storage/homepage/{{$homepage->event_image_six}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

@endforeach


<div class="section-empty">
    <div class="container content">
        <div class="title-base title-small text-center" data-anima="show-scale" data-trigger="hover">
            <h2>REVIEWS</h2>
            <hr class="anima" />
        </div>
        <div class="flexslider carousel outer-navs" data-options="minWidth:150,itemMargin:3,numItems:4">
            <ul class="slides">
                @foreach(App\Models\testimonial::all() as $testimonial)
                <li>
                    <div>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star"></i>
                        <h4>{{ $testimonial->name }}</h4>
                        {!! $testimonial->content !!}
                    </div>
                </li>
                @endforeach
                <!-- <li>
                                <div>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <h4>Jessica Allise</h4>
                                    <p>
                                        zalig verblijf in de zeer ruime gastenkamers. 'sochtends genoten van een heerlijk ontbijt.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <h4>Robert Hutzon</h4>
                                    <p>
                                        zalig verblijf in de zeer ruime gastenkamers. 'sochtends genoten van een heerlijk ontbijt.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <h4>Anna Lorem</h4>
                                    <p>
                                        zalig verblijf in de zeer ruime gastenkamers. 'sochtends genoten van een heerlijk ontbijt.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <h4>Frederic Lebovsky</h4>
                                    <p>
                                        zalig verblijf in de zeer ruime gastenkamers. 'sochtends genoten van een heerlijk ontbijt.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <h4>Patrizia De Zanet</h4>
                                    <p>
                                        zalig verblijf in de zeer ruime gastenkamers. 'sochtends genoten van een heerlijk ontbijt.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <h4>Alberto Dal Farra</h4>
                                    <p>
                                        zalig verblijf in de zeer ruime gastenkamers. 'sochtends genoten van een heerlijk ontbijt.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <h4>Emma Wiston</h4>
                                    <p>
                                        zalig verblijf in de zeer ruime gastenkamers. 'sochtends genoten van een heerlijk ontbijt.
                                    </p>
                                </div>
                            </li> -->
            </ul>
        </div>
    </div>
</div>



@endsection