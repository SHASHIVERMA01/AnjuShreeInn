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
                    <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <!--<a href="{{route('homepage.addEdit')}}"><button type="button" class="btn btn-primary">Add</button></a>-->
        </div>
    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">Home Page</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Point One</th>
                            <th>Point Two</th>
                            <th>Point Three</th>
                            <th>Point Four</th>
                            <th>Point Five</th>
                            <th>Point Six</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($datas))
                        @foreach($datas as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td><img src="/storage/homepage/{{$data->welcome_image}}" alt="" class="img-thumbnail" width="151px"></td>
                            <td>{{$data->point_one}}</td>
                            <td>{{$data->point_two}}</td>
                            <td>{{$data->point_three}}</td>
                            <td>{{$data->point_four}}</td>
                            <td>{{$data->point_five}}</td>
                            <td>{{$data->point_six}}</td>
                            <td>
                                <form action="{{route('homepage.addEdit',$data->id)}}" method="get">
                                    {{csrf_field()}}
                                    <input type="submit" class="btn btn-primary btn-sm" value="Edit">
                                </form>
                                {{-- <form method="POST" action="{{ route('homepagedestroy', $data->id) }}">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" class="btn btn-danger btn-sm" value="Del"
                                        onclick="return confirm('Are you sure you want to delete this Record?');">
                                </form> --}}
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Point One</th>
                            <th>Point Two</th>
                            <th>Point Three</th>
                            <th>Point Four</th>
                            <th>Point Five</th>
                            <th>Point Six</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection