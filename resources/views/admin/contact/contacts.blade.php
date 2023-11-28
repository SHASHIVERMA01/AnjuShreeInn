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
                    <li class="breadcrumb-item active" aria-current="page">{{$page}}</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
          
        </div>
    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">{{$page}}</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
						<th>ID</th>
                        @if($page == 'Contact')
                        <th>Name</th>
                        <th>Country Code</th>
                            <th>Mobile</th>
                            <th>Alternate Country Code</th>
                            <th>Alternate Mobile</th>
                            <th>Email</th>
                            <th>City</th>
                        @endif
                       
                     
                            <th>Form</th>
                            <th>Source URL</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($AContact))
                        @foreach($AContact as $key=>$menus)
                        
                        <tr>
                            <td>{{$key+1}}</td>
                        @if($page == 'Contact')
                            <td>{{$menus->name}}</td>
                            <td>{{$menus->country_code}}</td>
                            <td>{{$menus->mobile}}</td>
                            <td>{{$menus->altr_country_code}}</td>
                            <td>{{$menus->alternate_mobile}}</td>
                            <td>{{$menus->email}}</td>
                            <td>{{$menus->city}}</td>
                        @endif
                       
                       
                            <td>{{$menus->page}}</td>
                            <td>{{$menus->form_type}}</td>
							<td>{{$menus->created_at}}</td>
                            <td>
                                <form method="get" action="{{route('contact.destroy',$menus->id)}}">
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
                    <!-- <tfoot>
                        <tr>
							<th>ID</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Alternate Mobile</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Message</th>
                            <th>Form</th>
                            <th>Source URL</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> -->
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