@extends('backend.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">EDIT FORM</div>
            <div class="card-body p-3">
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputName1" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control"
                            id="inputName1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea type="text" id="editor" name="description" value="" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">{!! $category->description !!}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
