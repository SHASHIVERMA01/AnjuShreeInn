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
								<li class="breadcrumb-item active" aria-current="page"> Product ADD</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Product ADD</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3"  method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input class=" form-control" id="cimage" name="id"  value="{{$data->id ?? ''}}" type="hidden">
                                    <input class=" form-control"  name="section_id"  value="{{$id ?? ''}}" type="hidden">
								
											<div class="col-md-4">
												<label for="validationDefault01" class="form-label">Name</label>
												<select name="menu_slug" {{(request()->segment(6) == ($data->name ??  '')) ? '' :'id=menus'}} class="form-control" onchange = "getSelectVal(this.value)">
												@if(request()->segment(6) == ($data->name ??  ''))
													@foreach(App\Models\Menu::all() as $menu)
													<option value="{{$menu->id}} " {{(($data->menu_slug ?? '')  == $menu->name) ? 'selected' : '' }}>{{$menu->name}}</option>
													@endforeach
												@endif
												</select>
												<p style="color:red">{{$errors->first('menu_slug')}}</p>  
											</div>
											<div class="col-md-4">
												<label for="validationDefault02" class="form-label">Title</label>
												<input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{$data->title ?? ''}}">
												<p style="color:red">{{$errors->first('name')}}</p>
											</div>
											<div class="col-md-4">
												<label for="validationDefault02" class="form-label">Image</label>
												<input class=" form-control" id="cimage" name="image"  type="file" {{(request()->segment(6) == ($data->id ??  '')) ? '' : 'required'}}>
												<p style="color:red">{{$errors->first('image')}}</p>
											</div>
											
											<div class="col-md-4">
												<label for="validationDefault02" class="form-label">Location</label>
												<input type="text" name="location" class="form-control" placeholder="Enter Location" value="{{$data->location ?? ''}}">
												<p style="color:red">{{$errors->first('location')}}</p>
											</div>
											<div class="col-md-4">
												<label for="validationDefault02" class="form-label">Price</label>
												<input type="text" name="price" class="form-control" placeholder="Enter Price" value="{{$data->price ?? ''}}">
												<p style="color:red">{{$errors->first('price')}}</p>
											</div>
											<div class="col-md-4">
												<label for="validationDefault02" class="form-label">Status</label>
												<input type="text" name="status" class="form-control" placeholder="Enter Status" value="{{$data->status ?? ''}}">
												<p style="color:red">{{$errors->first('status')}}</p>
											</div>
											<div class="col-md-12">
												<label for="validationDefault02" class="form-label">Content</label>
												<textarea name="content" id="editor1" rows="10" cols="80" class="form-control">{{$data->content ?? ''}}</textarea>
												<p style="color:red">{{$errors->first('content')}}</p>
											</div>
											<div class="col-12">
												<button class="btn btn-primary" type="submit"> {{(request()->segment(6) == ($data->id ??  '')) ? 'Update' : 'Save'}}</button>
												<a href="{{route('product.index')}}"><button class="btn btn-primary" type="button">Back</button></a>
											</div>
									</form>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!--end row-->
			</div>

 <!-- ckeditor -->
 <script>
        CKEDITOR.replace( 'editor1' );
</script>
@endsection