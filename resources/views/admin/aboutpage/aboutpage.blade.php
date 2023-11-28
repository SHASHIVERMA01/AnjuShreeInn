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
                    <li class="breadcrumb-item active" aria-current="page">About Page</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <!-- <a href="{{route('aboutpage.add')}}"><button type="button" class="btn btn-primary">Add</button></a> -->
        </div>
    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">About Page</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <!-- <th>Image</th> -->
                            <th>Image One</th>
                            <th>Image Two</th>
                            <th>Image Three</th>
                            <th>Image Four</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($aboutpage))
                        @foreach($aboutpage as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <!-- <td><img src="/storage/homepage/{{$data->banner}}" alt="" class="img-thumbnail" width="151px"></td> -->
                            <td><img src="/storage/homepage/{{$data->image_one}}" alt="" class="img-thumbnail" width="151px"></td>
                            <td><img src="/storage/homepage/{{$data->image_two}}" alt="" class="img-thumbnail" width="151px"></td>
                            <td>
                            <video width="270" controls>
                            <source src="/storage/homepage/{{$data->image_three}}" type="video/mp4" class="img-thumbnail">
                            <!-- <source src="/storage/homepage/{{$data->image_video}}" type="video/ogg"> -->
                           
                            </video>
                            </td>
                            <td><img src="/storage/homepage/{{$data->image_four}}" alt="" class="img-thumbnail" width="151px"></td>
                            
                            <td>
                                <form action="{{route('aboutpage.edit',$data->id)}}" method="get">
                                    {{csrf_field()}}
                                    <input type="submit" class="btn btn-primary btn-sm" value="Edit">
                                </form>
                                <!-- <form method="POST" action="{{ route('homepagedestroy', $data->id) }}">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" class="btn btn-danger btn-sm" value="Del"
                                        onclick="return confirm('Are you sure you want to delete this Record?');">
                                </form> -->
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <!-- <th>Image</th> -->
                            <th>Image One</th>
                            <th>Image Two</th>
                            <th>Image Three</th>
                            <th>Image Four</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection