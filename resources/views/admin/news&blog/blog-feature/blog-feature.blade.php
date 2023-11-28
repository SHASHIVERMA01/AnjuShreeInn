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
								<li class="breadcrumb-item active" aria-current="page">Blog Feature</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<a href="{{route('blogFeature.addEdit')}}"><button type="button" class="btn btn-primary">Add</button></a>
						<a href="{{route('blogFeaturePro.index')}}"><button type="button" class="btn btn-primary">Top Our Project</button></a>
					</div>
				</div>
				<!--end breadcrumb-->
        
				<h6 class="mb-0 text-uppercase">Blog Feature</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="table" class="table table-striped table-bordered">
								<thead>
									<tr>
                  <th >ID</th>
                  <th>Image</th>
                  <th >Action</th>
									</tr>
								</thead>
								<tbody>
                @if(!empty($menu))
                  @foreach($menu as $key=>$menus)
									<tr>
									<td>{{$key+1}}</td>

            
           
                <td><img src="/storage/blog/{{$menus->image}}" alt="" class="" height="60px" width="110px"></td>
			<td>

              <form method="POST" action="{{route('blogFeature.destroy',$menus->id)}}">
                {{csrf_field()}}
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger btn-sm" value="Del" onclick="return confirm('Are you sure you want to delete this Record?');">
              </form>
            </td>
            
                  </tr>
                  @endforeach
                @endif
								</tbody>
								<tfoot>
									<tr>
									<th >ID</th>
                  <th>Image</th>
                  <th >Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				
			</div>


    

@endsection