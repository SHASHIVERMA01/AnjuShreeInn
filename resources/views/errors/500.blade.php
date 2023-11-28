@extends('layouts.master') @section('body')
<!-- <section id="home-page" class="section-container"  onclick="sidebarclose()"> -->
<section id="home-page" class="section-container">
    <div class=""
        style="position: relative; z-index: 99; background: url(mahima/about-banner.jpg) no-repeat;     height: 100px; background-size: cover;">
    </div>

    <style>
       .container-fluid{
        padding-right: 0px;
        padding-left: 0px;
       }
       .notfoundImg{
        width: 100%;
        position: relative;
       }
       .title1{
        z-index: 99;
    margin-top: -30%;
    margin-left: 246px;
    position: absolute;
       }
       .button-group {
        z-index: 99;
    margin-top: -26%;
    position: absolute;
    margin-left: 200px;
       }
    </style>

    <div class="container-fluid privacy-policy">
        <img class="notfoundImg" src="/mahima/404.jpg" />
         <p class="title1">Page Not Found</p>
         <div class="button-group">
            <a href="/"><button type="button" class="btn btn-mahima">Home</button></a>
            <a href="/"><button type="button" class="btn btn-mahima">All Properties</button></a>
            <a href="/contact"><button type="button" class="btn btn-mahima">Contact Us</button></a>
         </div>
    </div>

</section>


@endsection