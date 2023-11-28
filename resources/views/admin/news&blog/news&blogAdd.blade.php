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
								<li class="breadcrumb-item active" aria-current="page"> Blog ADD</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-md-12">
						<h6 class="mb-0 text-uppercase">Blog ADD</h6>
						<hr>
						<!-- <div class="card"> -->
							<!-- <div class="card-body"> -->
								<div class="p-4 border rounded">
									<form class="row g-3"  method="post" action="{{route('news.store')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input class=" form-control" id="cimage" name="id"  value="{{$data->id ?? ''}}" type="text" hidden>
										<div class="col-md-12">
											<label for="validationDefault02" class="form-label">Title</label>
                                            <input class=" form-control" id="getValue"   name="title" onkeyup="replaceItemGet()" type="text" value="{{$data->title ?? ''}}" required>
                                            <p style="color:red">{{$errors->first('title')}}</p>
										</div>
										<div class="col-md-12">
											<label for="validationDefault02" class="form-label">Custom Slug :</label>
                                            <input class="form-control" id="slug" onkeyup="replaceItem()"  name="slug"  type="text" value="{{$data->slug ?? ''}}" required>
                                            <p style="color:red">{{$errors->first('slug')}}</p>
										</div>
                                        <div class="col-md-4">
											<label for="validationDefault02" class="form-label">Choose Blog Image</label>
                                            <input class=" form-control" id="cimage" name="image"  type="file" {{(request()->segment(6)) ? '' : 'required'}} >
                                            <p style="color:red">{{$errors->first('image')}}</p>
											<img src="/storage/blog/{{$data->image ?? ''}}" alt="" class="img-fluid" >
										</div>
                                        <div class="col-md-4">
											<label for="validationDefault02" class="form-label">Banner Alt</label>
                                            <input class=" form-control"  name="alt"  type="text" value="{{$data->alt ?? ''}}" required>
                                            <p style="color:red">{{$errors->first('alt')}}</p>
										</div>
                                        <div class="col-md-4">
											<label for="validationDefault02" class="form-label">Date</label>
                                            <input class="form-control" id="cimage" name="date"  type="date" value="{{$data->date ?? ''}}" required>
                                            <p style="color:red">{{$errors->first('date')}}</p>
										</div>
                                        <div class="col-12">
											<label for="validationDefault02" class="form-label">Content</label>
                                            <textarea name="content" id="editor1" rows="10" cols="80" class="form-control">{{$data->content ?? ''}}</textarea>
                                            <p style="color:red">{{$errors->first('content')}}</p>
										</div>
										<div class="col-12">
											<label for="validationDefault02" class="form-label">Meta</label>
                                            <textarea name="meta" id="" rows="10" cols="80" class="form-control">{{$data->meta ?? ''}}</textarea>
                                            <p style="color:red">{{$errors->first('meta')}}</p>
										</div>
										<div class="col-md-4">
											<label for="validationDefault02" class="form-label">Schedule Date Time</label>
                                            <input class="form-control" id="cimage" name="schedule_date_time" value="{{$data->schedule_date_time ?? ''}}"  type="datetime-local" >
                                            <p style="color:red">{{$errors->first('image')}}</p>
										</div>
										@if(!empty($data->schedule_date_time))
										<div class="col-md-4">
											<label for="validationDefault02" class="form-label">Publish Date Time</label>
                                            <input class=" form-control" id="cimage" value="{{$data->schedule_date_time ?? ''}}"  type="text" disabled>
                                            <p style="color:red">{{$errors->first('image')}}</p>
										</div>
										@endif
										<div class="col-12">
											<button class="btn btn-primary" type="submit">Save</button>
                                             <a href="{{route('news.index')}}"><button class="btn btn-primary" type="button">Back</button></a>
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
		function replaceItem(){
			var item = document.getElementById('slug').value;
			item = item.replace(/ /g,'-');
			document.getElementById('slug').value = item.toLowerCase();
		}

		function replaceItemGet(){
			var item = document.getElementById('getValue').value;
			item = item.replace(/ /g,'-');
			document.getElementById('slug').value = item.toLowerCase();
		}

</script>

@endsection