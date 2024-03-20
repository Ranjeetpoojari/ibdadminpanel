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
                                    <a href="{{url('/admin/subcategories/create')}}"><button class="btn btn-info btn-sm">Create New</button></a>
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> S.R.No. </th>
                                                <th> Name </th>
                                              
                                                <th> Banner </th>
                                                {{-- <th> Icon </th> --}}
                                                <th> Category </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($subcategory)
                                            @php
                                            if(isset($_GET['page'])){
                                            $x = ($_GET['page']-1)*15;
                                            }else{
                                            $x = 0;
                                            }
                                            @endphp
                                            @foreach ( $subcategory as $item)
                                            @php
                                            $x = $x+1;
                                            @endphp
                                            <tr>
                                                <td class="py-1">
                                                    {{$x}}
                                                </td>
                                                <td>
                                                    {{$item->name}}
                                                </td>
                                              
                                                <td>
                                                    <img src="{{url($item->image)}}" alt="{{$item->name}}" srcset="">
                                                </td>
                                                <td>
                                                    {{$item->category}}
                                                </td>
                                                <td>
                                                    @if ($item->is_active == "active")
                                                    <a href="{{ url('/admin/subcategories/inactive/' . encrypt($item->id)) }}">
                                                        <button type="button" class="btn btn-danger btn-sm">Inactive</button>
                                                    </a>
                                                @endif
                                                @if ($item->is_active == "inactive")
                                                    <a href="{{ url('/admin/subcategories/active/' . encrypt($item->id)) }}">
                                                        <button type="button" class="btn btn-success btn-sm">Active</button>
                                                    </a>
                                                @endif
                                                    <a href="{{url('/admin/subcategories/edit/'.encrypt($item->id))}}">
                                                        <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                    </a>
                                                    <a href="{{ url('/admin/subcategories/delete/{id}' . $item->id) }}" 
                                                        onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this vendor profile?')) document.getElementById('delete-form-{{ $item->id }}').submit();"
                                                        class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                     </a>
                                                     <form id="delete-form-{{ $item->id }}" action="{{ url('/admin/subcategories/delete/' . $item->id) }}" method="POST" style="display: none;">
                                                         @csrf
                                                         @method('DELETE')
                                                     </form>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    {{$subcategory->links('vendor.pagination.bootstrap-4')}}
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