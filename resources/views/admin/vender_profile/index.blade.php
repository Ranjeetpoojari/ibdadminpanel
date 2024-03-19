@extends('admin.layouts.app')
@section('title','Language | Easy Pandit Online')
@section('style')

@stop
@section('content')


<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    @include('admin.navigation.navigation')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        @include('admin.navigation.sidebar')
        <!-- partial -->


        <!-- partial -->
        <div class="main-panel" style="margin-left:auto;">
            <div class="content-wrapper">
                <div class="row">
                    
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Categories
                                    <a href="{{url('admin/vender_profile/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th> Business Name </th>
                                                <th>Image</th>
                                                <th>Address </th>
                                                <th>City </th>
                                                <th> State </th>
                                                <th>Pincode </th>
                                                <th> Country </th>
                                                <th>Verfied </th>
                                                <th>Email </th>
                                                <th>Number </th>
                                                <th>Is Active </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                            @if ($vender)
                                            @php
                                            if(isset($_GET['page'])){
                                            $x = ($_GET['page']-1)*15;
                                            }else{
                                            $x = 0;
                                            }
                                            @endphp
                                            @foreach ( $vender as $item)
                                            @php
                                            $x = $x+1;
                                            @endphp
                                            <tr>
                                                <td class="py-1">
                                                    {{$x}}
                                                </td>
                                                <td>
                                                    {{$item->business_name}}
                                                </td>
                                              
                                                <td>
                                                    <img src="{{url($item->profile_image)}}" alt="{{$item->profile_image}}" srcset="">
                                                 </td>
                                                <td>
                                                    {{$item->address}}
                                                </td>
                                                <td>
                                                    {{$item->city}}
                                                </td>
                                                <td>
                                                    {{$item->state}}
                                                </td>
                                                <td>
                                                    {{$item->pincode}}
                                                </td>
                                                <td>
                                                    {{$item->country}}
                                                </td>
                                                <td>
                                                    {{$item->is_verfied}}
                                                </td>
                                                <td>
                                                    {{$item->contact_email}}
                                                </td>
                                                <td>
                                                    {{$item->contact_number}}
                                                </td>
                                                <td>
                                                    {{$item->is_active}}
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/vender_profile/edit/' . encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                    </a>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody> 
                                    </table>
                                    {{-- {{$vender->links('vendor.pagination.bootstrap-4')}} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->





            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



    @section('script')

    @stop
    @stop