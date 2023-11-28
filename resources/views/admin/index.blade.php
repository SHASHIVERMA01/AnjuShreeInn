@extends('admin.layouts.master')
@section('admin')
<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Home</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">DashBoard</li>
							</ol>
						</nav>
					</div>
					<!-- <div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div> -->
				</div>
				<!--end breadcrumb-->

				


				<h6 class="mb-0 text-uppercase">DashBoard</h6>
				<hr>
				
				<!--end row-->
				<div class="row row-cols-1 row-cols-md-3 row-cols-xl-5">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3"><img src="images/gallery/hotel.png" alt="" style="width: 30px;">
									</div>
									@php
									$date = date('Y-m-d');
									@endphp
									<h4 class="my-1">{{--App\Models\Facebook::where('created_time','like',"%$date%")->count()--}}</h4>
									<p class="mb-0 text-secondary">Banner</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3"><img src="images/gallery/hotel.png" alt="" style="width: 30px;">
									</div>
									<h4 class="my-1">{{--App\Models\Facebook::where('created_time','like',"%$date%")->where('is_crm_status','0')->count()--}}</h4>
									<p class="mb-0 text-secondary">Home Page</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3"><img src="images/gallery/hotel.png" alt="" style="width: 30px;">
									</div>
									<h4 class="my-1">{{--App\Models\Facebook::where('created_time','like',"%$date%")->where('is_crm_status','2')->count()--}}</h4>
									<p class="mb-0 text-secondary">About Page</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3"><img src="images/gallery/hotel.png" alt="" style="width: 30px;">
									</div>
									<h4 class="my-1">{{--App\Models\Facebook::where('created_time','like',"%$date%")->where('is_crm_status','1')->count()--}}</h4>
									<p class="mb-0 text-secondary">Gallery</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="text-center">
									<div class="widgets-icons rounded-circle mx-auto bg-light-primary text-primary mb-3"><img src="images/gallery/hotel.png" alt="" style="width: 30px;">
									</div>
									<h4 class="my-1">{{--App\Models\Facebook::count()--}}</h4>
									<p class="mb-0 text-secondary">Blog</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
@endsection