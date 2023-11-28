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
                    <li class="breadcrumb-item active" aria-current="page"> Accommodations ADD</li>
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
                <form class="row g-3" method="post" action="{{route('blog.store', $blog->id ?? '')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input class=" form-control" id="cimage" name="id" value="{{ $blog->id ?? '' }}" type="text" hidden>	

                    <!-- <div class="col-md-12">
                    <h4>Banner Image</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="image" type="file" value="{{ $blog->image ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($blog->image))
                          <img src="/storage/homepage/{{$blog->image}}" alt="" class="img-thumbnail">
                        @endif
                    </div> -->
                    <div class="col-md-8">
                       <h4>Image Two</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="image_two" type="file" value="{{ $blog->image ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                        @if(!empty($blog->image_two))
                          <img src="/storage/homepage/{{$blog->image_two}}" alt="" class="img-thumbnail">
                        @endif
                    </div>

                    <div class="col-md-4">
                    <h4>Heading</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="Heading" type="text" value="{{ $blog->Heading ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                     <div class="col-md-4">
                        <h4>Date</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <select name="date" id="" class=" form-control" value="{{ $blog->date ?? '' }}">
                            <option value="{{ $blog->date ?? '' }}">-- Select Date --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            
                        </select>
                        <p style="color:red">{{$errors->first('star')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Month</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <select name="month" id="" class=" form-control" value="{{ $blog->month ?? '' }}">
                            <option value="{{ $blog->month ?? '' }}">-- Select Month --</option>
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>

                            
                        </select>
                        <p style="color:red">{{$errors->first('star')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Year</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <select name="year" id="" class=" form-control" value="{{ $blog->year ?? '' }}">
                            <option value="{{ $blog->year ?? '' }}"> -- Select Year --</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                            <option value="2032">2032</option>
                            <option value="2033">2033</option>
                            <option value="2034">2034</option>
                            <option value="2035">2035</option>
                            <option value="2036">2036</option>
                            <option value="2037">2037</option>
                            <option value="2038">2038</option>
                            <option value="2039">2039</option>
                            <option value="2040">2040</option>
                            <option value="2041">2041</option>
                            <option value="2042">2042</option>
                            <option value="2043">2043</option>
                            <option value="2044">2044</option>
                            <option value="2045">2045</option>
                            <option value="2046">2046</option>
                            <option value="2047">2047</option>
                            <option value="2048">2048</option>
                            <option value="2049">2049</option>
                            <option value="2050">2050</option>

                            
                        </select>
                        <p style="color:red">{{$errors->first('star')}}</p>
                    </div>

                    <div class="col-md-4">
                    <h4>Comments</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <input class=" form-control" id="cimage" name="comments" type="text" value="{{ $blog->comments ?? '' }}"
                            {{(request()->segment(5)) ? '' : 'required'}}>
                        <p style="color:red">{{$errors->first('image')}}</p>
                    </div>

                    <div class="col-md-12">
                    <h4>Content</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <textarea name="content" id="editor1" rows="5" cols="80"  class="form-control">{{ $blog->content ?? '' }}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>   
                    <!-- <div class="col-md-12">
                    <h4>Content Two</h4>
                        <label for="validationDefault02" class="form-label"></label>
                        <textarea name="content_two" id="editor2" rows="5" cols="80"  class="form-control">{{ $blog->content_two ?? '' }}</textarea>
                        <p style="color:red">{{$errors->first('meta')}}</p>
                    </div>  -->
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