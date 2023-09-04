@extends('layouts.app')

@section('content')

<div class="mx-auto p-5 text-center">
    <h1 class="fw-bold display-4">Add New Topic</h1>
</div>

<div class="container">

    <form action="/blog" method="POST" enctype="multipart/form-data"
>
    @csrf
        <div class="form-group">
            <label for="title" class="display-6">Title</label>
            <br>
            <div class="col-sm-10">
                <input class="form-control form-control-lg" type="text" name="title" placeholder="Title">
            </div>
        </div>
        <div class="form-group">
        <br>
            <label for="exampleFormControlTextarea1" class="display-6">Subject</label>
            <textarea class="form-control" type="text" name="description" rows="5"></textarea>
            <br>
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label display-6">Add Image</label>
            <br>
            <input class="form-control display-6" type="file" name="image"/>
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </form>
@endsection
