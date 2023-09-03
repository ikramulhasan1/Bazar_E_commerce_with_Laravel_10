@extends('backend.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Category List</div>
            <div class="card-body p-3">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputName1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="inputName1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
