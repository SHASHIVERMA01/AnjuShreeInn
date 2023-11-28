@extends('admin.layouts.master')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">About Locations</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> About Locations ADD</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--end breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h6 class="mb-0 text-uppercase">About Locations ADD</h6>
            <hr>
            <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
            <div class="p-4 border rounded" style="background: #fff">
                <form class="row g-3" method="post" action="{{route('aboutlocation.store', $aboutlocation->id ?? '')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input class=" form-control" id="cimage" name="id" value="{{$aboutlocation->id ?? ''}}" type="text" hidden>
                    
                    <!-- Banner Section-->

                    <div class="col-md-6">
                        <h4>Image</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="image" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($aboutlocation->image))
                          <img src="/storage/homepage/{{$aboutlocation->image}}" alt="" class="img-thumbnail">
                        @endif
                    </div>

                    <div class="col-md-6">
                        <h4>Title</h4>
                        <label for="validationDefault02" class="form-label"> </label>
                        <input class=" form-control" id="cimage" name="title" type="text" value=" {{$aboutlocation->title ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('title')}}</p>
                      
                    </div>
                 <!-- Banner Section End-->

                    <div class="col-md-12">
                      <h4>INFORMATION</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <textarea name="content" id="editor1" rows="5" cols="80"  class="form-control">{{$aboutlocation->content ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>


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