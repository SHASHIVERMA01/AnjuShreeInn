@extends('admin.layouts.master')
@section('admin')
@include('admin.message.message')



<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Home</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Forms</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">Forms</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="row ">
            
                <div class="col-md-3">
                    <div class="card radius-10">
                        <a href="{{route('contact.show','Contact')}}">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4 class="my-1">Contact</h4>
                                </div>
                            </div>
                        </a> 
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card radius-10">
                        <a href="{{route('contact.show','Quick Call')}}">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4 class="my-1">Sidebar</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            
                <div class="col-md-3">
                    <div class="card radius-10">
                        <a href="{{route('contact.show','Book Site Vist')}}">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4 class="my-1">Book Site Visit</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
        
                {{--
                <div class="col-md-3">
                    <div class="card radius-10">
                        <a href="{{route('contact.show')}}">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4 class="my-1">Section 5</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card radius-10">
                        <a href="{{route('contact.show')}}">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4 class="my-1">Section 6</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card radius-10">
                        <a href="{{route('career.list')}}">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4 class="my-1">Section 7</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card radius-10">
                        <a href="{{route('career.list')}}">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4 class="my-1">Section 8</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </div>

</div>


@endsection