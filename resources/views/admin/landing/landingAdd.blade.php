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
                    <li class="breadcrumb-item active" aria-current="page"> Landing ADD</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <h6 class="mb-0 text-uppercase">Landing ADD</h6>
            <hr>
            <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
            <div class="p-4 border rounded">
                <form class="row g-3" method="post" action="{{route('landing.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input class=" form-control" id="cimage" name="id" value="{{$data->id ?? ''}}" type="text" hidden>
                    <!-- <div class="col-md-12">
                        <label for="validationDefault02" class="form-label">Custom Slug :</label>
                        <input class=" form-control" name="slug" type="text" value="{{$data->slug ?? ''}}" required>
                        <p style="color:red">{{$errors->first('slug')}}</p>
                    </div> -->
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Properties</label>
                        <select required="" name="properties_id" class="form-control" id="">
                            @foreach(App\Models\Property::where('status',1)->get() as $pro)
                            <option value="{{$pro->id}}">{{$pro->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Type Title </label>
                        <input class=" form-control" id="cimage" name="fec_type_title_1" type="text" value="{{$data->fec_type_title_1 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="fec_title_1" type="text" value="{{$data->fec_title_1 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault02" class="form-label">Short Description</label>
                        <textarea name="fec_short_dis_1" id="editor1" rows="5" cols="80"  class="form-control">{{$data->fec_short_dis_1 ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>
                    <div class="col-12">
                        <label for="validationDefault02" class="form-label">description</label>
                        <textarea name="fec_dis_1" id="editor1" rows="5" cols="80"  class="form-control">{{$data->fec_dis_1 ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>

                    <hr>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Type Title</label>
                        <input class=" form-control" id="cimage" name="fec_type_title_2" type="text" value="{{$data->fec_type_title_2 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="fec_title_2" type="text" value="{{$data->fec_title_2 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault02" class="form-label">Short Description2</label>
                        <textarea name="fec_short_dis_2" id="editor1" rows="5" cols="80"  class="form-control">{{$data->fec_short_dis_2 ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>
                    <div class="col-12">
                        <label for="validationDefault02" class="form-label">description2</label>
                        <textarea name="fec_dis_2" id="editor1" rows="5" cols="80"  class="form-control">{{$data->fec_dis_2 ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>

                    <hr>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Type Title</label>
                        <input class=" form-control" id="cimage" name="fec_type_title_3" type="text" value="{{$data->fec_type_title_3 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="fec_title_3" type="text" value="{{$data->fec_title_3 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault02" class="form-label">Short Description3</label>
                        <textarea name="fec_short_dis_3" id="editor1" rows="5" cols="80"  class="form-control">{{$data->fec_short_dis_3 ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>
                    <div class="col-12">
                        <label for="validationDefault02" class="form-label">description3</label>
                        <textarea name="fec_dis_4" id="editor1" rows="5" cols="80"  class="form-control">{{$data->fec_dis_4 ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>


                    <h3>AMENITIES</h3>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="amenities_title" type="text" value="{{$data->amenities_title ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Description</label>
                        <input class=" form-control" id="cimage" name="amenities_short_des" type="text" value="{{$data->amenities_short_des ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Image </label>
                        <input class=" form-control" id="cimage" name="amenities_img" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        @if(!empty($data->amenities_img))
                        <img src="/storage/landing/{{$data->amenities_img}}" alt="" class="img-thumbnail">
                        @endif
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Image 2</label>
                        <input class=" form-control" id="cimage" name="amenities_img2" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                            @if(!empty($data->amenities_img2))
                        <img src="/storage/landing/{{$data->amenities_img2}}" alt="" class="img-thumbnail">
                        @endif
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Image 3</label>
                        <input class=" form-control" id="cimage" name="amenities_img3" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                            @if(!empty($data->amenities_img3))
                        <img src="/storage/landing/{{$data->amenities_img3}}" alt="" class="img-thumbnail">
                        @endif
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>


                    <h3>Brochure</h3>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="brochure_title" type="text" value="{{$data->brochure_title ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Image </label>
                        <input class=" form-control" id="cimage" name="brochure_img" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                            @if(!empty($data->brochure_img))
                        <img src="/storage/landing/{{$data->brochure_img}}" alt="" class="img-thumbnail">
                        @endif
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">PDf File</label>
                        <input class=" form-control" id="cimage" name="brochure_pdf" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                            
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title2</label>
                        <input class=" form-control" id="cimage" name="brochure_title2" type="text" value="{{$data->brochure_title2 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Image 2</label>
                        <input class=" form-control" id="cimage" name="brochure_img2" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                            @if(!empty($data->brochure_img2))
                        <img src="/storage/landing/{{$data->brochure_img2}}" alt="" class="img-thumbnail">
                        @endif
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">PDf2 File</label>
                        <input class=" form-control" id="cimage" name="brochure_pdf2" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title3</label>
                        <input class=" form-control" id="cimage" name="brochure_title3" type="text" value="{{$data->brochure_title3 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Image 3</label>
                        <input class=" form-control" id="cimage" name="brochure_img3" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                            @if(!empty($data->brochure_img3))
                        <img src="/storage/landing/{{$data->brochure_img3}}" alt="" class="img-thumbnail">
                        @endif
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">PDf3 File</label>
                        <input class=" form-control" id="cimage" name="brochure_pdf3" type="file"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>


                    <h3>Faqs</h3>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="faq_title" type="text" value="{{$data->faq_title ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-12">
                        <label for="validationDefault02" class="form-label">Description</label>
                        <textarea name="faq_dis" id="editor1" rows="5" cols="80"  class="form-control">{{$data->faq_dis ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title2</label>
                        <input class=" form-control" id="cimage" name="faq_title2" type="text" value="{{$data->faq_title2 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Video Link</label>
                        <input class=" form-control" id="cimage" name="faq_vid_1_2" type="text" value="{{$data->faq_vid_1_2 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Video Link</label>
                        <input class=" form-control" id="cimage" name="faq_vid_2_2" type="text" value="{{$data->faq_vid_2_2 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Video Link</label>
                        <input class=" form-control" id="cimage" name="faq_vid_3_2" type="text" value="{{$data->faq_vid_3_2 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title3</label>
                        <input class="form-control" id="cimage" name="faq_title3" type="text" value="{{$data->faq_title3 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-12">
                        <label for="validationDefault02" class="form-label">Description3</label>
                        <textarea name="faq_dis3" id="editor1" rows="5" cols="80"  class="form-control">{{$data->faq_dis3 ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div> 
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="faq_title4" type="text" value="{{$data->faq_title4 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-12">
                        <label for="validationDefault02" class="form-label">Description</label>
                        <textarea name="faq_dis4" id="editor1" rows="5" cols="80"  class="form-control">{{$data->faq_dis4 ?? ''}}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div> 


                    <h3>OUR SERVICES</h3>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="srvc_title" type="text" value="{{$data->srvc_title ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="srvc_title2" type="text" value="{{$data->srvc_title2 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="srvc_title3" type="text" value="{{$data->srvc_title3 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="srvc_title4" type="text" value="{{$data->srvc_title4 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="srvc_title5" type="text" value="{{$data->srvc_title5 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefault02" class="form-label">Title</label>
                        <input class=" form-control" id="cimage" name="srvc_title6" type="text" value="{{$data->srvc_title6 ?? ''}}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>
                    
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <a href="{{route('landing.index')}}"><button class="btn btn-primary" 
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
CKEDITOR.replace('editor1');
</script>

@endsection