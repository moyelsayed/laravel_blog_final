@extends('layouts.app')


@section('content')
<div class="bg-image">
    <div class="container">
    <div class="row">
        <div class="d-flex align-items-center justify-content-center" style="height: 350px;">
            <p class="fs-1 fw-bold">Welcome to my Blog</p>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <button type="button" class="btn btn-dark btn-block">
                <a href="/blog" class="text-white link-underline link-underline-opacity-0 text-uppercase">Start Reading</a>
            </button>
        </div>
    </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6 col-md-4 mt-4">
            <img class="img-responsive rounded float-left" src="https://picsum.photos/id/239/960/620" style="width:80%"/>
        </div>

        <div class="col-12 col-md-8 mt-4 justify-center">
            <h2 class="fw-bold text-uppercase">
                ... how to be an expert in 2024 ...
            </h2>
            <p class="fw-bold fs-4">
                you can find a list of all programming languages here.
            </p>
            <div class="col-12 col-md-8 mt-1">
                <p class="fs-5 mr-5">
                    The programming language is usually split into the two components of syntax (form) and semantics (meaning).....
                </p>
                <button type="button" class="btn btn-dark btn-block">
                    <a href="/blog" class="text-white link-underline link-underline-opacity-0 text-uppercase">Read More</a>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="text-center">
            <h2 class="fs-2 text-uppercase py-5">Blog Categories</h2>
        </div>
    </div>
</div>
<div class="bg-dark bg-gradient text-light">
    <div class="row mx-auto text-center p-5">
        <div class="col fs-5 text-uppercase py-2">ux design</div>
        <div class="col fs-5 text-uppercase py-2">programming Languages</div>
        <div class="col fs-5 text-uppercase py-2">Graphic Design</div>
        <div class="col fs-5 text-uppercase py-2">Front-End Dev.</div>

    </div>
</div>
<div class="container mx-auto text-center py-5">
    <h2 class="fw-bold fs-4">Recent Posts</h2>
    <p class="fw-bold p-2 text-secondary">
        PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.The PHP reference implementation is now produced by the PHP Group.PHP was originally an abbreviation of Personal Home Page,but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
    </p>
</div>
<div class="container">
    <div class="row g-0">
        <div class="col text-center p-5 bg-warning text-dark bg-opacity-25">
            <div class="row">
                <div class="col py-2">
                <button type="button" class="btn btn-warning opacity-70">
                    <a href="/" class="text-white link-underline link-underline-opacity-0 text-uppercase">php</a>
                </button>
                </div>
                <div class="col py-2">
                <button type="button" class="btn btn-warning opacity-70">
                    <a href="/" class="text-white link-underline link-underline-opacity-0 text-uppercase">programming</a>
                </button>
                </div>
                <div class="col py-2">
                <button type="button" class="btn btn-warning opacity-70">
                    <a href="/" class="text-white link-underline link-underline-opacity-0 text-uppercase">languages</a>
                </button>
                </div>
                <div class="col py-2">
                <button type="button" class="btn btn-warning opacity-70">
                    <a href="/" class="text-white link-underline link-underline-opacity-0 text-uppercase">Backend</a>
                </button>
                </div>
            </div>
            <div class="row text-center p-3 fw-bold text-muted mt-3">
                <p>PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.The PHP reference implementation is now produced by the PHP Group.PHP was originally an abbreviation of Personal Home Page,but it now stands for the recursive initialism PHP: Hypertext Preprocessor.</p>
                <div class="d-flex align-items-center justify-content-center">
                <button type="button" class="btn btn-outline-warning">
                    <a href="/blog" class="text-white link-underline link-underline-opacity-0 text-uppercase">Start Reading</a>
                </button>
                </div>
            </div>
        </div>
        <div class="col flex">
            <img class="object-fit-xxl-contain img-fluid mx-auto mx-lg-0 h-100 col-8 col-sm-6 col-md-4 col-lg-1 my-auto" src="https://picsum.photos/id/242/960/620" style="width:100% "/>
        </div>
    </div>
</div>




@endsection
