@extends('admin.layouts.master')
@section('admin')
<meta name="csrf-token" content="{{csrf_token()}}">
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Services</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Services ADD</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--end breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h6 class="mb-0 text-uppercase">Services ADD</h6>
            <hr>
            <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
            <div class="p-4 border rounded" style="background: #fff">
                <form class="row g-3" method="post" action="{{route('service.store', $services->id ?? '')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input class=" form-control" id="cimage" name="id" value="{{ $services->id ?? '' }}" type="text" hidden>	

                    <div class="col-md-6">
                    <h4>Image</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="image" type="file" value="{{ $services->image ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
   

                    <div class="col-md-6">
                    <h4>Heading</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="heading" type="text" value="{{ $services->heading ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-12">
                    <h4>Content</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <textarea name="content" id="editor1" rows="5" cols="80"  class="form-control">{{ $services->content ?? '' }}</textarea>
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