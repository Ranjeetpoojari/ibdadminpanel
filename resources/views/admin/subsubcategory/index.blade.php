@extends('admin.layouts.app')
@section('title', 'Subsubcategories | Easy Pandit Online')

@section('content')
<div class="container-scroller">
    @include('admin.navigation.navigation')
    @include('admin.navigation.sidebar')

    <div class="main-panel" style="margin-left:auto;">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Subsubcategories
                                <a href="{{ url('/admin/subsubcategories/create') }}">
                                    <button class="btn btn-info btn-sm">Create New</button>
                                </a>
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th> S.R.No. </th>
                                            <th> Subsubcategory Name </th>
                                            <th> Slug </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($subsubcategory as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->slug }}</td>
                                            <td>
                                                @if ($item->is_active == "active")
                                                <a href="{{ url('/admin/subsubcategories/inactive/' . encrypt($item->id)) }}">
                                                    <button type="button" class="btn btn-danger btn-sm">Inactive</button>
                                                </a>
                                            @endif
                                            @if ($item->is_active == "inactive")
                                                <a href="{{ url('/admin/subsubcategories/active/' . encrypt($item->id)) }}">
                                                    <button type="button" class="btn btn-success btn-sm">Active</button>
                                                </a>
                                            @endif
                                                <a href="{{ url('/admin/subsubcategories/edit/' . encrypt($item->id)) }}">
                                                    <button type="button" class="btn btn-info btn-sm">Edit</button>
                                                </a>
                                                <a href="{{ url('/admin/subsubcategories/delete/{id}' . $item->id) }}" 
                                                    onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this vendor profile?')) document.getElementById('delete-form-{{ $item->id }}').submit();"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                 </a>
                                                 <form id="delete-form-{{ $item->id }}" action="{{ url('/admin/subsubcategories/delete/' . $item->id) }}" method="POST" style="display: none;">
                                                     @csrf
                                                     @method('DELETE')
                                                 </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4">No subsubcategories found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $subsubcategory->links('vendor.pagination.bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script')
    <!-- Add your scripts here if needed -->
@stop
