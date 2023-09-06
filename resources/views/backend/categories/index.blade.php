@extends('backend.master')


@section('content')
    <div class="container">
        {{-- Successful massage --}}
        @if (session()->has('success'))
            <div class="alert alert-success fw-medium">
                {{ session()->get('success') }}
            </div>
        @endif

        {{-- Delete Message --}}
        @if (session()->has('message'))
            <div class="alert alert-danger fw-medium">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header d-flex justify-content-between ">
                <div>Category List</div>

                {{-- <div>
                    <a href="{{ route('category.create') }}" class=" btn btn-primary btn-sm">Add New Category</a>
                    <a href="" class=" btn btn-primary btn-sm">Download PDF</a>
                    <a href="" class=" btn btn-primary btn-sm">Download Excel</a>
                    <a href="" class=" btn btn-primary btn-sm">Download Docs</a>
                </div> --}}
                <div class="d-flex justify-content-between ">
                    <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm me-2">New Category</a>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Downloads
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('category.report') }}"><i
                                        class="fa-solid fa-file-pdf"></i> PDF</a></li>
                            <li><a class="dropdown-item" href="{{ route('category.excel_report') }}"><i
                                        class="fa-solid fa-file-excel"></i> Excel</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i> Docs</a></li>
                        </ul>
                    </div>
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
                                    <a href="{{ route('category.delete', $category->id) }}"
                                        onclick="return confirm('Do you want to delete this item?')"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
