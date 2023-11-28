@extends('admin.layouts.master')
@section('admin')
@include('admin.message.message')



<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Home</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">News Letter</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
          
        </div>
    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">News Letter</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
						<th>ID</th>
                            <th>Email</th>
                            <th>Source URL</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($datas))
                        @foreach($datas as $key=>$data)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->source_url}}</td>
							<td>{{$data->created_at}}</td>
                            <td>
                                <form method="get" action="{{route('newsletter.destroy',$data->id)}}">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" class="btn btn-danger btn-sm" value="Del"
                                        onclick="return confirm('Are you sure you want to delete this Record?');">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>ID</th>
                            <th>Email</th>
                            <th>Source URL</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable({});
});
</script>

@endsection