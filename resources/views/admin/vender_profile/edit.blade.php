@extends('admin.layouts.app')
@section('title','Update Vendor Profile')
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
                                <h4 class="card-title">Edit Vendor Profile</h4>
                                @if ( Session::get('status') == "failed")
                                    <span id="password" class="text-danger f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                @if ( Session::get('status') == "success")
                                    <span id="password" class="text-success f_size-1 font-600 lh-1 error">{{ Session::get('msg') }}</span>
                                @endif
                                <div class="table-responsive">
                                    <form class="forms-sample" action="{{url('/admin/vender_profile/update')}}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                                        @csrf
                                        <input type="hidden" name="type" value="edit">
                                        <input type="hidden" name="id" value="{{isset($vender->id)?$vender->id:''}}">
                                        <div class="form-group">
                                           <label for="business_name">Business Name</label>
                                            <input type="text"  onkeyup="BusinessNameToSlug(this.value)" class="form-control" name="business_name" id="business_name"
                                                placeholder="Category Name" value="{{isset($vender->business_name)?$vender->business_name:''}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Slug</label>
                                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{ isset($vender->slug) ? $vender->slug : '' }}" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="{{ isset($vender->firstname) ? $vender->firstname : '' }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" value="{{ isset($vender->lastname) ? $vender->lastname : '' }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="profile_image">Profile Image</label>
                                            <input type="file" class="form-control" name="profile_image" id="profile_image" placeholder="Images">
                                        </div>
                                        <div class="form-group">
                                           <label for="address">Address</label>
                                            <input type="text" class="form-control" name="address" id="address"
                                                placeholder="Category Name" value="{{isset($vender->address)?$vender->address:''}}" required>
                                        </div>
                                        <div class="form-group">
                                           <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" id="city"
                                                placeholder="Category Name" value="{{isset($vender->city)?$vender->city:''}}" required>
                                        </div>
                                        <div class="form-group">
                                           <label for="state">State</label>
                                            <input type="text" class="form-control" name="state" id="state"
                                                placeholder="Category Name" value="{{isset($vender->state)?$vender->state:''}}" required>
                                        </div>
                                        <div class="form-group">
                                           <label for="pincode">Pincode</label>
                                            <input type="text" class="form-control" name="pincode" id="pincode"
                                                placeholder="Category Name" value="{{isset($vender->pincode)?$vender->pincode:''}}" required>
                                        </div>
                                        <div class="form-group">
                                           <label for="country">Country</label>
                                            <input type="text" class="form-control" name="country" id="country"
                                                placeholder="Category Name" value="{{isset($vender->country)?$vender->country:''}}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="is_active">Is Verfied</label>
                                            <select class="form-control" name="is_verfied" id="is_verfied">
                                                <option value="1" {{ isset($vender->is_verfied) && $vender->is_verfied == "1" ? 'selected' : '' }}>Yes</option>
                                                <option value="0" {{ isset($vender->is_verfied) && $vender->is_verfied == "0" ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                           <label for="contact_email">Email</label>
                                            <input type="email" class="form-control" name="contact_email" id="contact_email"
                                                placeholder="Category Name" value="{{isset($vender->contact_email)?$vender->contact_email:''}}" required>
                                        </div>
                                        <div class="form-group">
                                           <label for="contact_number">Contact number</label>
                                            <input type="text" class="form-control" name="contact_number" id="contact_number"
                                                placeholder="Category Name" value="{{isset($vender->contact_number)?$vender->contact_number:''}}" required>
                                        </div>
                                   
                                            {{-- <div class="form-group">
                                                <label for="is_active">Category</label>
                                                <select class="form-control" name="category" id="is_active">
                                            @foreach($subcategory as $sub)
                                            <option value="{{ $sub->name }}" {{ (isset($vender->category) && $vender->category == $sub->name) ? 'selected' : '' }}>
                                                {{ $sub->name }}
                                            </option>
                                        @endforeach
                                                </select>
                                        </div> --}}
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
    <script>
        function BusinessNameToSlug(str){
            var slug = slugify(str);
            $("#slug").val(slug);
        }

        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                .replace(/^-+/, '')             // Trim - from start of text
                .replace(/-+$/, '');            // Trim - from end of text
        }
    </script>
    @stop
    @stop