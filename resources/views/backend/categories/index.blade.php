@extends('backend.master')


@section('content')
    <div class="container">
        {{-- Successful massage --}}
        @if (session()->has('success'))
            <div class="alert alert-success fw-medium">
                {{ session()->get('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header d-flex justify-content-between ">
                <div>Category List</div>

                <div>
                    <a href="{{ route('category.create') }}" class=" btn btn-primary btn-sm">Add New Category</a>
                </div>
            </div>
            <div class="card-body p-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sel No.</th>
                            <th scope="col">Name</th>
                            {{-- <th scope="col">Description</th> --}}
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $category->name }}</td>
                                {{-- <td>{{ $category->description }}</td> --}}
                                <td>
                                    <a href="" class="btn btn-success btn-sm">Show</a>
                                    <a href="{{ route('category.edit', $category->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
