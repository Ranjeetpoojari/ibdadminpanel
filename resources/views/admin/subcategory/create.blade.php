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
                    <div class="col-lg-2 grid-margin stretch-card"></div>
                    <div class="col-lg-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create new</h4>
                                @if ( Session::get('status') == "failed")
                                    <span id="password" class="text-danger f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                @if ( Session::get('status') == "success")
                                    <span id="password" class="text-success f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                <div class="table-responsive">
                                    <form class="forms-sample" action="{{url('/admin/subcategories/store')}}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                                        @csrf
                                        <input type="hidden" name="subcategory_id" value="{{isset($subcategory->id)?$subcategory->id:''}}">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Subcategory Name</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputUsername1"
                                                placeholder="Category Name" value="{{isset($subcategory->name)?$subcategory->name:''}}" required>
                                        </div>
                                   
                                            <div class="form-group">
                                                <label for="is_active">Category</label>
                                                <select class="form-control" name="category" id="is_active">
                                            @foreach($category as $c)
                                            <option value="{{ $c->name }}" {{ (isset($subcategory->category) && $subcategory->category == $c->name) ? 'selected' : '' }}>
                                                {{ $c->name }}
                                            </option>
                                        @endforeach
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="is_active">Status</label>
                                            <select class="form-control" name="is_active" id="is_active">
                                                <option value="active" {{ isset($subcategory->is_active) && $subcategory->is_active == "active" ? 'selected' : '' }}>Active</option>
                                                <option value="inactive" {{ isset($subcategory->is_active) && $subcategory->is_active == "inactive" ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



    @section('script')

    @stop
    @stop