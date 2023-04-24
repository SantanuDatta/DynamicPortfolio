@extends('frontend.layout.template')

@section('title', 'Dev')
@section('body-content')
<div class="row ">
    <div class="col-lg-9 my-order-switch-1 ">
        <section id="home" class="shadow bg-dark radius-2 padding-dy text-center " >
            <div class="row v-height-50 v-centred">
                <div class="col-md-12">
                    <h1 class="font-weight-600 mb-0">{{ $users->first()->name }}</h1>
                <div class="text-rotation">
                    <div class="item">
                        <h6 class="h5 text-alt mt-1 mb-0 "> <span class=" text-rotating">Wordpress Designer, Web Desinger, Web Developer, Laravel Developer</span></h6>
                    </div>
                </div>
                <ul class="list-inline  mb-0 mt-4">
                    <li class="list-inline-item outer radius-2 mr-1 mb-2 mb-lg-0">
                        <a class="inner btn btn-round btn-icon" href="#">
                        <span class="fab fa-facebook-f btn-icon-inner" style="font-size: 15px;"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                        <a class="inner btn btn-round btn-icon" href="#">
                        <span class="fab fa-google btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                        <a class="inner btn btn-round btn-icon" href="#">
                        <span class="fab fa-twitter btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item outer radius-2 mr-1 mb-2 mb-lg-0">
                        <a class="inner btn btn-round btn-icon" href="#">
                        <span class="fab fa-instagram btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                        <a class="inner btn btn-round btn-icon" href="#" >
                        <span class="fab fa-linkedin btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                        <a class="inner btn btn-round btn-icon" href="#" >
                        <span class="fab fa-github btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mr-1 outer radius-2 mb-2 mb-lg-0">
                        <a class="inner btn btn-round btn-icon" href="#">
                        <span class="fab fa-vimeo btn-icon-inner"></span>
                        </a>
                    </li>
                    <li class="list-inline-item mx-0 outer radius-2 mb-2 mb-lg-0">
                        <a class="inner btn btn-round btn-icon" href="#" >
                        <span class="fab fa-youtube btn-icon-inner"></span>
                        </a>
                    </li>
                </ul>
                </div>
            </div>
            @include('frontend.includes.resume')
        </section>
        <section id="about" class="shadow bg-dark radius-2 padding-dy">
            @include('frontend.pages.about')
        </section>
        <section id="portfolio" class="shadow bg-dark radius-2 padding-dy work">
            @include('frontend.pages.portfolio')
        </section>
        <section id="contact" class="shadow bg-dark radius-2 padding-dy">
            @include('frontend.pages.contact')
        </section>
        {{-- <div class="row mt-4 justify-content-center ">
            <div class="text-center shadow-inner radius-2  py-1 px-4">
                <p class="font-size-11  mb-0 ">Font by <a class="text-alt"  href="https://www.flaticon.com">flaticon.com</a>
                Under <a class="text-alt"  href="http://creativecommons.org/licenses/by/3.0/">CC: </a> <a class="text-alt"  href="https://www.flaticon.com/authors/eucalyp" title="Eucalyp">Eucalyp</a>
                </p>
            </div>
        </div> --}}
    </div>
    <div class="col-lg-3 pl-lg-0  my-order-switch-2 mb-lg-0 mb-5">
        <div class="sticky-lg-top">
            @include('frontend.includes.sidebar')
        </div>
    </div>
    </div>
@endsection