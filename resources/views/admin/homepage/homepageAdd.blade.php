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
                    <li class="breadcrumb-item active" aria-current="page"> Home Page ADD</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--end breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h6 class="mb-0 text-uppercase">Home Page ADD</h6>
            <hr>
            <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
            <div class="p-4 border rounded" style="background: #fff">
                <form class="row g-3" method="post" action="{{route('homepage.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input class=" form-control" id="cimage" name="id" value="{{$data->id ?? ''}}" type="text" hidden>
                    
                    <!-- WHY TRAVEL HOTEL Section-->

                    <div class="col-md-4">
                    <h4>Point 1</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="point_one" type="text" value="{{$data->point_one ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Point 2</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="point_two" type="text" value="{{$data->point_two ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Point 3</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="point_three" type="text" value="{{$data->point_three ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Point 4</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="point_four" type="text" value="{{$data->point_four ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Point 5</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="point_five" type="text" value="{{$data->point_five ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Point 6</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="point_six" type="text" value="{{$data->point_six ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Point 7</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="point_seven" type="text" value="{{$data->point_seven ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Point 8</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="point_eight" type="text" value="{{$data->point_eight ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Point 9</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="point_nine" type="text" value="{{$data->point_nine ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Point 10</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="point_ten" type="text" value="{{$data->point_ten ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>


                 <!-- ACCOMODATIONS Section -->

                 <div class="col-md-12">
                    <h4>ACCOMODATIONS</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <textarea name="accomodations_content" id="editor1" rows="5" cols="80"  class="form-control">{{$data->accomodations_content ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>

                 <!-- ACCOMODATIONS End Section -->


                 <!-- WELCOME TO PARK OCEAN Section -->

                 <h4> WELCOME TO PARK OCEAN</h4>
                   <div class="col-md-8">
                        <h4>Banner</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="welcome_image" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($data->welcome_image))
                        <img src="/storage/homepage/{{$data->welcome_image}}" alt="" class="img-thumbnail">
                        @endif
                    </div>

 <!-- WELCOME TO PARK OCEAN Section -->


                    <div class="col-md-4">
                    <h4>Title</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="welcome_title" type="text" value="{{$data->welcome_title ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-12">
                    <h4>Overview</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <textarea name="welcome_content" id="editor2" rows="5" cols="80"  class="form-control">{{$data->welcome_content ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>


     <!-- EVENTS AND BANQUETS Banner -->
              <h4>EVENTS AND BANQUETS</h4>
                    <div class="col-md-4">
                    <h4>Image 1</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="event_image_one" type="file" value=""
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($data->event_image_one))
                        <img src="/storage/homepage/{{$data->event_image_one}}" alt="" class="img-thumbnail">
                        @endif
                    </div>

                    <div class="col-md-4">
                    <h4>Image 2</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="event_image_two" type="file" value=""
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($data->event_image_two))
                        <img src="/storage/homepage/{{$data->event_image_two}}" alt="" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-4">
                    <h4>Image 3</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="event_image_three" type="file" value=""
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($data->event_image_three))
                        <img src="/storage/homepage/{{$data->event_image_three}}" alt="" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-4">
                    <h4>Image 4</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="event_image_four" type="file" value=""
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($data->event_image_four))
                        <img src="/storage/homepage/{{$data->event_image_four}}" alt="" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-4">
                    <h4>Image 5</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="event_image_five" type="file" value=""
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($data->event_image_five))
                        <img src="/storage/homepage/{{$data->event_image_five}}" alt="" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-4">
                    <h4>Image 6</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="event_image_six" type="file" value=""
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($data->event_image_six))
                        <img src="/storage/homepage/{{$data->event_image_six}}" alt="" class="img-thumbnail">
                        @endif
                    </div>

                    <div class="col-md-12">
                    <h4>Overview</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <textarea name="event_image_content" id="editor3" rows="5" cols="80"  class="form-control">{{$data->event_image_content ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>
<!-- EVENTS AND BANQUETS Banner -->


                    <div class="col-12">
                        <button class="btn btn-primary" onclick="submit()" id="submitt" type="submit">Save</button>
                        <a href="{{route('homepage.index')}}"><button class="btn btn-primary" 
                                type="button">Back</button></a>
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
    console.log('fffffffffffffff');
    function submit(){
        console.log('gggggggggg');
   document.getElementById('submitt').innerHTML='Wait...';
}
CKEDITOR.replace('editor1');
CKEDITOR.replace('editor2');
CKEDITOR.replace('editor3');
</script>

@endsection