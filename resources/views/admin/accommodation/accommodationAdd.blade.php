@extends('admin.layouts.master')
@section('admin')
<meta name="csrf-token" content="{{csrf_token()}}">
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Accommodations</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Accommodations ADD</li>
                </ol>
            </nav>
        </div>
    </div>


    <!--end breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h6 class="mb-0 text-uppercase">Accommodations ADD</h6>
            <hr>
            <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
            <div class="p-4 border rounded" style="background: #fff">
                <form class="row g-3" method="post" action="{{route('accommodation.store', $accommodation->id ?? '')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input class=" form-control" id="cimage" name="id" value="{{ $accommodation->id ?? '' }}" type="text" hidden>	

                    <div class="col-md-8">
                    <h4>Image</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="image" type="file" value="{{ $accommodation->image ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($accommodation->image))
                        <img src="/storage/homepage/{{$accommodation->image}}" alt="" class="img-thumbnail">
                        @endif
                    </div>

                    <div class="col-md-4">
                    <h4>Star</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <select name="star" id="" class=" form-control">
                            <option value="">-- Select Star --</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            
                        </select>
                        <p style="color:red">{{$errors->first('star')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Title</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="title" type="text" value="{{ $accommodation->title ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-12">
                    <h4>Content</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <textarea name="content" id="editor1" rows="5" cols="80"  class="form-control">{{ $accommodation->content ?? '' }}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>   

                    
                    <h4>Room Details</h4>

                    <div class="col-md-4">
                    <h4>Image One</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="image_one" type="file" value="{{ $accommodation->image_one ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($accommodation->image_one))
                        <img src="/storage/homepage/{{$accommodation->image_one}}" alt="" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-4">
                    <h4>Image Two</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="image_two" type="file" value="{{ $accommodation->image_two ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($accommodation->image_two))
                        <img src="/storage/homepage/{{$accommodation->image_two}}" alt="" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-4">
                    <h4>Image / Video</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="image_video" type="file" value="{{ $accommodation->image_video ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($accommodation->image_video))
                        <video width="100%" height="260" controls>
                            <source src="/storage/homepage/{{$accommodation->image_video}}" type="video/mp4" class="img-thumbnail">
                            <!-- <source src="/storage/homepage/{{$accommodation->image_video}}" type="video/ogg"> -->
                           
                            </video>
                        <!-- <img src="/storage/homepage/{{$accommodation->image_video}}" alt="" > -->
                        @endif
                    </div>
                    <div class="col-md-4">
                    <h4>Image Four</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="image_three" type="file" value="{{ $accommodation->image_three ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($accommodation->image_three))
                        <img src="/storage/homepage/{{$accommodation->image_three}}" alt="" class="img-thumbnail">
                        @endif
                    </div>

                    <div class="col-md-4">
                    <h4>Image Five</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="image_four" type="file" value="{{ $accommodation->image_four ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image_four')}}</p>
                        @if(!empty($accommodation->image))
                        <img src="/storage/homepage/{{$accommodation->image_four}}" alt="" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-4">
                    <h4>Image Six</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="image_five" type="file" value="{{ $accommodation->image_five ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($accommodation->image_five))
                        <img src="/storage/homepage/{{$accommodation->image_five}}" alt="" class="img-thumbnail">
                        @endif
                    </div>

                    <!-- <div class="col-md-6">
                    <h4>Type</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <select name="type" id="" class=" form-control">
                            <option value="">-- Select Type --</option>
                            <option value="image">Image</option>
                            <option value="video">Video</option>
                            
                        </select>
                        <p style="color:red">{{$errors->first('star')}}</p>
                    </div> -->

                    <div class="col-md-12">
                    <h4>Content</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <textarea name="content_one" id="editor2" rows="5" cols="80"  class="form-control">{{ $accommodation->content_one ?? '' }}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>  
                   <h4>ACCOMMODATION FACILITIES</h4>
                    <div class="col-md-4">
                    <h4>Double Beds</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="beds" type="text" value="{{ $accommodation->beds ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Max 4 people</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="people" type="text" value="{{ $accommodation->people ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                    <h4>Breakfast</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="breakfast" type="text" value="{{ $accommodation->breakfast ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                    <h4>Private bathroom</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="bathroom" type="text" value="{{ $accommodation->bathroom ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                    <h4>Strongbox included</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="strongbox" type="text" value="{{ $accommodation->strongbox ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                    <h4>HD Television</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="televison" type="text" value="{{ $accommodation->televison ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                    <h4>Free WiFi</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="wifi" type="text" value="{{ $accommodation->wifi ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                    <h4>Room service</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="roomservices" type="text" value="{{ $accommodation->roomservices ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                    <h4>Car park</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="carpark" type="text" value="{{ $accommodation->carpark ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                    <h4>Exclusive service</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="exclusiveservices" type="text" value="{{ $accommodation->exclusiveservices ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                    <h4>Panoramic Terrace</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="panorimictrace" type="text" value="{{ $accommodation->panorimictrace ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                    <h4>Wakeup service</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="walkupservices" type="text" value="{{ $accommodation->walkupservices ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#menuff").on('change', function(){
        // alert('hhhhhhh');

        var data = this.value;
        
        $('#submenudd').html();
        // alert(data);
        
          $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
               url: "{{route('pagedetailindex')}}/"+data,
               type: "GET",
               data: data,
               success: function(result){
                console.log(result);
                $('#submenudd').empty();
                $('#submenudd').append('<option value="">Select Submenu</option>');
                $.each(result,function(key,val){     
                    $('#submenudd').append('<option value="'+val.slug+'">'+val.submenu+'</option>');
                });     
                //    console.log(result);
               }

          });
     });
    });
</script>
<!-- ckeditor -->
<script>
    console.log('fffffffffffffff');
    function submit(){
        console.log('gggggggggg');
   document.getElementById('submitt').innerHTML='Wait...';
}
CKEDITOR.replace('editor1');
CKEDITOR.replace('editor2');
</script>

@endsection