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
								<li class="breadcrumb-item active" aria-current="page">Blog</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<a href="{{route('newsadd')}}"><button type="button" class="btn btn-primary">Blog Add</button></a>
						<a href="{{route('blogFeature.index')}}"><button type="button" class="btn btn-primary">Blog Feature Add</button></a>
					</div>
				</div>
				<!--end breadcrumb-->
        
				<h6 class="mb-0 text-uppercase">Blog</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="table" class="table table-striped table-bordered">
								<thead>
									<tr>
                  <th >ID</th>
                  <th>Image</th>
                  <th >Title</th>
                  <th>Date</th>
                  <th>Schedule DateTime</th>
                  <th >Action</th>
                  <th >Comment</th>
									</tr>
								</thead>
								<tbody>
                @if(!empty($menu))
                  @foreach($menu as $menus)
									<tr>
                  <td>{{$menus->id}}</td>

            
           
                <td><img src="/storage/blog/{{$menus->image}}" alt="" class="" height="60px" width="110px"></td>
              
            
         
            <td>{{$menus->title}}</td>
            <td>{{$menus->date}}</td>
            <td>{{$menus->schedule_date_time}}</td>
			<td>
				@if($menus->status == 0)
				<form action="{{route('blog.status',['id'=>$menus->id,'status'=>1])}}" method="get">
					{{csrf_field()}}
					<input type="submit" class="btn btn-danger btn-sm" value="Pending">
				</form>
				@else
				<form action="{{route('blog.status',['id'=>$menus->id,'status'=>0])}}" method="get">
					{{csrf_field()}}
					<input type="submit" class="btn btn-success btn-sm" value="Lived">
				</form>
				@endif

              <form action="{{route('news.edit',$menus->id)}}" method="get">
                {{csrf_field()}}
                <input type="submit" class="btn btn-primary btn-sm" value="Edit">
              </form>
              <form method="POST" action="{{route('news.destroy',$menus->id)}}">
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger btn-sm" value="Del" onclick="return confirm('Are you sure you want to delete this Record?');">
              </form>
            </td>
            <td><a href="{{route('comment.index',$menus->id)}}"><input type="submit" class="btn btn-primary btn-sm" value="Comment"></a></td>
                  </tr>
                  @endforeach
                @endif
								</tbody>
								<tfoot>
									<tr>
									<th >ID</th>
                  <th>Image</th>
                  <th >Title</th>
                  <th>Date</th>
                  <th>Schedule DateTime</th>
                  <th >Action</th>
                  <th >Comment</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				
			</div>


    

@endsection