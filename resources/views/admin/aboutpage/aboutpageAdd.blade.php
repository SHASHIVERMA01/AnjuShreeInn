@extends('admin.layouts.master')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">About</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> About Page ADD</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--end breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h6 class="mb-0 text-uppercase">About Page ADD</h6>
            <hr>
            <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
            <div class="p-4 border rounded" style="background: #fff">
                <form class="row g-3" method="post" action="{{route('aboutpage.store', $aboutpage->id ?? '')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input class=" form-control" id="cimage" name="id" value="{{$aboutpage->id ?? ''}}" type="text" hidden>
                    
                    <!-- Banner Section-->

                    <!-- <div class="col-md-12">
                        <h4>Banner</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="banner" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($aboutpage->banner))
                        <img src="/storage/homepage/{{$aboutpage->banner}}" alt="" class="img-thumbnail">
                        @endif
                    </div> -->
                 <!-- Banner Section End-->

                 <!-- INFORMATION Section -->

                    <div class="col-md-12">
                      <h4>INFORMATION</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <textarea name="information_content" id="editor1" rows="5" cols="80"  class="form-control">{{$aboutpage->information_content ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>

                    <div class="col-md-6">
                       <h4>Image 1</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="image_one" type="file" value=""
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($aboutpage->image_one))
                        <img src="/storage/homepage/{{$aboutpage->image_one}}" alt="" class="img-thumbnail">
                        @endif
                    </div>

                    <div class="col-md-6">
                      <h4>Image 2</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="image_two" type="file" value=""
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($aboutpage->image_two))
                        <img src="/storage/homepage/{{$aboutpage->image_two}}" alt="" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-6">
                      <h4>Image 3</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="image_three" type="file" value=""
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($aboutpage->image_three))
                        <video width="100%" controls>
                            <source src="/storage/homepage/{{$aboutpage->image_three}}" type="video/mp4" class="img-thumbnail">
                           
                           
                            </video>
                        @endif
                    </div>
                    <div class="col-md-6">
                      <h4>Image 4</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="image_four" type="file" value=""
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($aboutpage->image_four))
                        <img src="/storage/homepage/{{$aboutpage->image_four}}" alt="" class="img-thumbnail">
                        @endif
                    </div>
                

                    <!-- INFORMATION End Section --> 

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