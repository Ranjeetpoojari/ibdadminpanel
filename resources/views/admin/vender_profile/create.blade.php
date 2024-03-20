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
                                @if (Session::get('status') == "failed")
                                    <span id="password" class="text-danger f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                @if (Session::get('status') == "success")
                                    <span id="password" class="text-success f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                <div class="table-responsive">
                                    <form class="forms-sample" action="{{ url('/admin/vender_profile/store') }}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                                        @csrf
                                        {{-- <input type="hidden" name="subcategory_id" value="{{ isset($subcategory->id) ? $subcategory->id : '' }}"> --}}
                                        <input type="hidden" name="id" value="{{ isset($vender->id) ? $vender->id : '' }}">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Business Name</label>
                                            <input type="text" class="form-control" name="business_name" id="exampleInputUsername1" placeholder="Business Name" value="{{ isset($vender->business_name) ? $vender->business_name : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Profile Image</label>
                                            <input type="file" class="form-control" name="profile_image" id="profile_image" placeholder="Profile Image" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Address</label>
                                            <input type="text" class="form-control" name="address" id="exampleInputUsername1" placeholder="Address" value="{{ isset($vender->address) ? $vender->address : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">City</label>
                                            <input type="text" class="form-control" name="city" id="exampleInputUsername1" placeholder="City" value="{{ isset($vender->city) ? $vender->city : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">State</label>
                                            <input type="text" class="form-control" name="state" id="exampleInputUsername1" placeholder="State" value="{{ isset($vender->state) ? $vender->state : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Pincode</label>
                                            <input type="text" class="form-control" name="pincode" id="exampleInputUsername1" placeholder="Pincode" value="{{ isset($vender->pincode) ? $vender->pincode : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Country</label>
                                            <input type="text" class="form-control" name="country" id="exampleInputUsername1" placeholder="Country" value="{{ isset($vender->country) ? $vender->country : '' }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="is_active">Is Verified</label>
                                            <select class="form-control" name="is_verfied" id="is_verfied">
                                                <option value="1" {{ isset($vender->is_verfied) && $vender->is_verfied == 1 ? 'selected' : '' }}>Yes</option>
                                                <option value="0" {{ isset($vender->is_verfied) && $vender->is_verfied == 0 ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Email</label>
                                            <input type="email" class="form-control" name="contact_email" id="exampleInputUsername1" placeholder="Email" value="{{ isset($vender->contact_email) ? $vender->contact_email : '' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Contact number</label>
                                            <input type="text" class="form-control" name="contact_number" id="exampleInputUsername1" placeholder="Contact Number" value="{{ isset($vender->contact_number) ? $vender->contact_number : '' }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="is_active">Status</label>
                                            <select class="form-control" name="is_active" id="is_active">
                                                <option value="active" {{ isset($vender->is_active) && $vender->is_active == "active" ? 'selected' : '' }}>Active</option>
                                                <option value="inactive" {{ isset($vender->is_active) && $vender->is_active == "inactive" ? 'selected' : '' }}>Inactive</option>
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
