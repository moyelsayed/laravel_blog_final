
@extends('layouts.app')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@if(Session::has('message'))
    <script>
        toastr.options = {
        positionClass: 'toast-top-center'
        };
        toastr.success("{{session()->get('message')}}");
    </script>
@endif

<div class="mx-auto p-5 text-center">
    <h1>{{$post -> title}}</h1>
    By :<span class="fst-italic pt-3"> {{$post -> user -> name}}</span>
    <br>
    On :<span class="fst-italic pt-3"> {{date('d-m-Y',strtotime($post -> updated_at))}}</span>
</div>
        <div class="row m-4 justify-content-md-center">
            <img class="object-fit-xxl-contain img-fluid mx-auto mx-lg-0 h-100 col-8 col-sm-6 col-md-4 col-lg-1 my-auto" src="/images/{{$post -> image_path}}" style="width:20%"/>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p class="fst-italic pt-3"><h4>{{$post -> description}}<h4>
                </p>
                <br>
                @if(Auth::user() && Auth::user()->id == $post->user_id)
                <button type="button" class="btn btn-success btn-block">
                    <a href="/blog/{{$post -> slug}}/edit" class="text-white link-underline link-underline-opacity-0 text-uppercase">Edit Post</a>
                </button>
                <br>
                @endif
                @if(Auth::user() && Auth::user()->id == $post->user_id)
                    <form action="/blog/{{$post -> slug}}"
                        method="POST"
                        class="inline-block">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-block">
                            <a href="/blog" class="text-white link-underline link-underline-opacity-0 text-uppercase">Delete Post</a>
                        </button>

                @endif


                </form>
            </div>
        </div>
@endsection
