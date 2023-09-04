
@extends('layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<div class="mx-auto p-5 text-center">
    <h1 class="fw-bold display-4">All Posts</h1>
</div>
@if(Session::has('message'))
    <script>
        toastr.options = {
        positionClass: 'toast-top-center'
        };
        toastr.success("{{session()->get('message')}}");
    </script>
@endif


@if (Auth::check())

    <div class="container">
        <div class="mx-auto text-center ml-5">
            <div class="col-6 mt-4">
                <button type="button" class="btn btn-primary">
                    <a href="/blog/create" class="text-white link-underline link-underline-opacity-0 text-uppercase">Add New Topic</a>
                </button>
            </div>
        </div>
    </div>
@endif
<hr class="hr mb-5 hr-blurry" />
@foreach ($posts as $post)


    <div class="container">
        <div class="row m-4 justify-content-md-center">
            <div class="col-6 col-md-4 mt-4">
                <img class="object-fit-xxl-contain img-fluid mx-auto mx-lg-0 h-100 col-8 col-sm-6 col-md-4 col-lg-1 my-auto" src="/images/{{$post -> image_path}}" style="width:100%"/>
            </div>
            <div class="col-12 col-md-4 mt-4 justify-center">
                <h2>{{$post -> title}}</h2>
                By :<span class="fst-italic pt-3"> {{$post -> user -> name}}</span>
                <br>
                On :<span class="fst-italic pt-3"> {{date('d-m-Y',strtotime($post -> updated_at))}}</span>

                <p class="fst-italic pt-3">{{$post -> description}}
                </p>
                <button type="button" class="btn btn-dark btn-block">
                    <a href="/blog/{{$post -> slug}}" class="text-white link-underline link-underline-opacity-0 text-uppercase">Read More</a>
                </button>
            </div>
        </div>
    </div>
            <hr class="hr m-5 hr-blurry" />

@endforeach

@endsection

