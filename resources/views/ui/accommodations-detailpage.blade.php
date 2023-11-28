@extends('layouts.master') @section('body')



@if(request()->segment(3) == 'super-delux-room')
<div class="header-title white" style="background-image: url({{ asset('/images/room.jpeg')}};">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1> {{$accommodationdetailpage->title}}</h1>
            <!--<p>A special room for special people, this is not for everyone</p>-->
        </div>
    </div>
</div>
@endif


@if(request()->segment(3) == 'deluxe-room')
<div class="header-title white" style="background-image: url({{ asset('/images/room1.jpeg')}});">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1> {{$accommodationdetailpage->title}}</h1>
            <!--<p>A special room for special people, this is not for everyone</p>-->
        </div>
    </div>
</div>
@endif
@if(request()->segment(3) == 'club-room')
<div class="header-title white" style="background-image: url({{ asset('/images/room5.jpeg')}};">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1> {{$accommodationdetailpage->title}}</h1>
            <!--<p>A special room for special people, this is not for everyone</p>-->
        </div>
    </div>
</div>
@endif


<!-- Book Now Start-->

<!-- Booking Form css & Js -->
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
</style>
<script>
    // $(document).ready(function() {
    //             $(function() {
    //                 var minDate = new Date();
    //                 $(".arrival-date-input").datepicker({
    //                     minDate:minDate,
    //                     dateFormat:'yy-mm-dd',
    //                 });
    //                 $(".departure-date-input").datepicker({
    //                     dateFormat:'yy-mm-dd',
    //                 });
    //             });
    //             $('.arrival-date-input').change(function() {
    //                 startDate = $(this).datepicker('getDate');
    //                 $('#check_in').val(moment(startDate).format('YYYY-MM-DD'));
    //                 $(".departure-date-input").datepicker("option", "minDate", startDate);
    //             });
    //             $('.departure-date-input').change(function() {
    //                 endDate = $(this).datepicker('getDate');
    //                 $('#check_out').val(moment(endDate).format('YYYY-MM-DD'));
    //                 $(".arrival-date-input").datepicker("option", "maxDate", endDate);
    //             });
                
    //         })


    /* Handling booking engine events */
    
		
</script>



{{-- <div class="section-bg-image" style="background-image: url('images/bg-line.jpg'); background:#00529c; "> --}}
    {{-- <div class="container content" style="padding-top: 15px; padding-bottom: 0px;"> --}}
        {{-- <div class="row">
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
                          padding: 10px;" />Book </a>
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
    {{-- </div> --}}
{{-- </div> --}}

{{-- </div> --}}

<!-- Book Now End-->



<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-7">
                <div class="grid-list gallery">
                    <div class="grid-box row" data-lightbox-anima="show-scale">
                        <div class="grid-item col-md-4">
                            <a class="img-box i-center img-scale-rotate"
                                href="/storage/homepage/{{$accommodationdetailpage->image_one}}">
                                <i class="fa fa-camera"></i>
                                <img src="/storage/homepage/{{$accommodationdetailpage->image_one}}" alt=""
                                    style="height:146px;" />
                            </a>
                        </div>
                        <div class="grid-item col-md-4">
                            <a class="img-box i-center img-scale-rotate"
                                href="/storage/homepage/{{$accommodationdetailpage->image_two}}">
                                <i class="fa fa-camera"></i>
                                <img src="/storage/homepage/{{$accommodationdetailpage->image_two}}" alt=""
                                    style="height:146px;" />
                            </a>
                        </div>
                        <div class="grid-item col-md-4">
                            <a class="img-box mfp-iframe i-center img-scale-rotate"
                                href="/storage/homepage/{{$accommodationdetailpage->image_video}}">
                                <i class="fa fa-film"></i>
                                <video width="100%" height="146" controls>
                                    <source src="/storage/homepage/{{$accommodationdetailpage->image_video}}"
                                        type="video/mp4">
                                    <!-- <source src="/storage/homepage/{{$accommodationdetailpage->image_video}}" type="video/ogg"> -->

                                </video>
                                <!-- <img src="/images/gallery/thumb_3.jpg" alt="" /> -->
                            </a>
                        </div>
                        <div class="grid-item col-md-4">
                            <a class="img-box i-center img-scale-rotate"
                                href="/storage/homepage/{{$accommodationdetailpage->image_three}}">
                                <i class="fa fa-camera"></i>
                                <img src="/storage/homepage/{{$accommodationdetailpage->image_three}}" alt=""
                                    style="height:146px;" />
                            </a>
                        </div>
                        <div class="grid-item col-md-4">
                            <a class="img-box i-center img-scale-rotate"
                                href="/storage/homepage/{{$accommodationdetailpage->image_four}}">
                                <i class="fa fa-camera"></i>
                                <img src="/storage/homepage/{{$accommodationdetailpage->image_four}}" alt=""
                                    style="height:146px;" />
                            </a>
                        </div>
                        <div class="grid-item col-md-4">
                            <a class="img-box i-center img-scale-rotate"
                                href="/storage/homepage/{{$accommodationdetailpage->image_five}}">
                                <i class="fa fa-camera"></i>
                                <img src="/storage/homepage/{{$accommodationdetailpage->image_five}}" alt=""
                                    style="height:146px;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 portfolio-details">
                <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                    <h2>INFORMATIONS</h2>
                    <hr class="anima" />
                </div>
                {!! $accommodationdetailpage->content_one !!}
            </div>
        </div>
        <hr class="space m" />
        <!-- Deatail Section -->
        <div class="section-empty">
            <div class="container content">
                <div class="row" data-anima="fade-bottom">
                    <div class="col-md-12 col-sm-12">
                        <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                            <h2>Why Travel Hotel ?</h2>
                            <hr class="anima" />
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="fa-ul text-justify">
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Temperature Controls</p>
                                    </li>
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Iron & Ironing Board on Demand</p>
                                    </li>
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Free Hi speed wifi</p>
                                    </li>
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Hair Dryer</p>
                                    </li>
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>32” LED TV with Satellite Channels</p>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="fa-ul text-justify">
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>24*7 Room Dining</p>
                                    </li>
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Tea & Coffee Maker</p>
                                    </li>
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Minibar</p>
                                    </li>
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Wardrobe</p>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="fa-ul text-justify">
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Study table with Stationery Folder</p>
                                    </li>
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Electronic safe</p>
                                    </li>
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Shower Cubical</p>
                                    </li>
                                    <li><i class="fa-li fa fa-check"></i>
                                        <p>Welcome Drink</p>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                    {{--
                    <div class="col-md-6">
                        <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                            <h2>ACCOMODATIONS</h2>
                            <hr class="anima" />
                        </div>
                        <p class="text-justify">


                        </p>
                        <hr class="space xs" />
                        <a href="/accommodations" class="anima-button circle-button btn-sm btn"><i
                                class="fa fa-long-arrow-right"></i>Take a look</a>
                    </div>
                    --}}
                </div>
            </div>
        </div>


        <!-- Detail Section -->
        {{--
        <div class="row">
            <div class="col-md-12">
                <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
                    <h2>ACCOMMODATION FACILITIES</h2>
                    <hr class="anima" />
                </div>
                <div class="row" data-anima="show-scale" data-timeline="asc">
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-bed text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->beds}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-users text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->people}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-coffee text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->breakfast}}</label>
                                <p class="text-s">From 6.00AM to 10.00AM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-tint text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->bathroom}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-lock text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->strongbox}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-desktop text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->televison}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-wifi text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->wifi}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-cutlery text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->roomservices}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-car text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->carpark}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-user-plus text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->exclusiveservices}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-sun-o text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->panorimictrace}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="icon-box icon-box-top-bottom anima">
                            <div class="icon-box-cell">
                                <i class="fa fa-clock-o text-xl"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m">{{$accommodationdetailpage->walkupservices}}</label>
                                <p class="text-s">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="space" />
        <div class="title-base title-small text-left" data-anima="show-scale" data-trigger="hover">
            <h2>BOOK NOW</h2>
            <hr class="anima" />
        </div>

        <div class="section-bg-image" style="background-image: url('images/bg-line.jpg'); background:#00529c;">
            <div class="container content" style="padding-top: 15px; padding-bottom: 20px;">
                <form action="http://templates.framework-y.com/eleganjs/php/contact-form.php" class="form-box form-ajax"
                    method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <p style="color: white;">Check-in</p>
                            <input name="checkin" id="checkin" type="text" data-toggle="datepicker"
                                class="form-control form-value" placeholder="Check-in" required>
                        </div>
                        <div class="col-md-3">
                            <p style="color: white;">Check-out</p>
                            <input name="checkout" id="checkout" type="text" data-toggle="datepicker"
                                class="form-control form-value" placeholder="Check-out" required>
                        </div>
                        <div class="col-md-2">
                            <p style="color: white;">Rooms</p>
                            <select name="nights" id="nights" class="form-control form-value" required>
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <p style="color: white;">Guests</p>
                            <select name="adults" id="adults" class="form-control form-value" required>
                                <option value="1" selected="">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <p style="color: white;">Children</p>
                            <select name="adults" id="adults" class="form-control form-value" required>
                                <option value="" selected="">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        <div class="col-md-2" style="padding-left: 15px;">
                            <hr class="space" style="height:35px" />
                            <button class="anima-button circle-button btn-sm btn" type="submit"
                                style="background: #000; padding-bottom: 7px;"><a
                                    href="https://bookings.hotelparkocean.com/?propertyId=7082" style="color: white;"
                                    target="_blank">Book now</a></button>
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
        </div>
        --}}
        {{--
        <form action="http://templates.framework-y.com/elegance/scripts/php/contact-form.php" class="form-box form-ajax"
            method="post">
            <div class="row">
                <div class="col-md-3">
                    <p>Check-in</p>
                    <input name="checkin" id="checkin" type="text" data-toggle="datepicker"
                        class="form-control form-value" placeholder="Check-in" />
                </div>
                <div class="col-md-3">
                    <p>Check-out</p>
                    <input name="checkout" id="checkout" type="text" data-toggle="datepicker"
                        class="form-control form-value" placeholder="Check-out" />
                </div>
                <div class="col-md-2">
                    <p>Rooms</p>
                    <select name="nights" id="nights" class="form-control form-value">
                        <option value="" label="--">--</option>
                        <option value="1" selected="">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <p>Guests</p>
                    <select name="adults" id="adults" class="form-control form-value">
                        <option value="" label="--">--</option>
                        <option value="1" selected="">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <hr class="space s" />
                    <hr class="space xs" />
                    <button class="anima-button circle-button btn-sm btn" type="submit"><i class="fa fa-check"></i>Book
                        now</button>
                </div>
            </div>
            <div class="success-box">
                <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
            </div>
            <div class="error-box">
                <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
            </div>
        </form>
        --}}
    </div>
</div>
</div>

@endsection