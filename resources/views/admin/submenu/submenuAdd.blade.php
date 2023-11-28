@extends('admin.layouts.master')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Submenu</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Submenu ADD</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--end breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h6 class="mb-0 text-uppercase">Submenu ADD</h6>
            <hr>
            <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
            <div class="p-4 border rounded" style="background: #fff">
                <form class="row g-3" method="post" action="{{route('submenu.store', $submenu->id ?? '')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input class=" form-control" id="cimage" name="id" value="{{$submenu->id ?? ''}}" type="text" hidden>	

                    <div class="col-md-6">
                    <h4>Menu</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <select name="menu_slug" id=""  class=" form-control">
                            <option value=""> -- Select Menu -- </option>
                            @foreach(App\Models\menus::all() as $menu)
                              <option value="{{ $menu->slug }}">{{ $menu->menu }}</option>
                            @endforeach
                        </select>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-6">
                    <h4>Submenu</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="submenu" type="text" value="{{$submenu->submenu ?? ''}}"
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