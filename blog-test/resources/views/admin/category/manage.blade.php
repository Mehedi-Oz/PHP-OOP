@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">All Categories</h6>
                        <hr />
                        <table class="table table-stripped table-hover table-bordered">
                            <tr>
                                <th>Sl</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        {{-- <img src="{{asset()}}" alt=""> --}}
                                    </td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        @endsection
