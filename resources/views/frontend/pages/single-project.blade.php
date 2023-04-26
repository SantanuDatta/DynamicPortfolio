<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    @include('frontend.includes.header')
    <!-- Css -->
    @include('frontend.includes.css')
</head>

<body>
    <div class="loader">
        <div class="loader-inner">
            <div class="bounce">
                <div class="bounce-circle"></div>
            </div>
        </div>
    </div>
    <div class="wrapper" id="wrapper">
        <!--Alternate styles for demo purposes only-->
        @include('frontend.includes.wrapper')
        <div class="blurred-content"></div>
        <section class="project spacer-xlg">
            <div class="bg-dark radius-2 padding-dy container shadow">
                <div class="row mb-5">
                    <div class="col">
                        <h6 class="font-weight-700 text-uppercase mb-2">
                            {{ $portfolio->category->name }}</h6>
                        <hr class="divider divider-left divider-lg float-left">
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col text-center">
                        <ul class="list-inline project-nav mb-0">
                            <li class="outer radius-2 list-inline-item mr-1"><a class="inner btn btn-round btn-icon" href="#">
                            <span class="fa fa-angle-left btn-icon-inner"></span></a>
                            </li>
                            <li class="outer radius-2 list-inline-item mr-1"><a class="inner btn btn-round btn-icon" href="index.html#portfolio">
                            <span class="fa fa-times btn-icon-inner"></span></a>
                            </li>
                            <li class="outer radius-2 list-inline-item mr-1"><a class="inner btn btn-round btn-icon" href="#">
                            <span class="fa fa-angle-right btn-icon-inner"></span></a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="row align-items-center justify-content-center mt-6">
                    <div class="col-md-10">
                        <h1 class="font-weight-600">{{ $portfolio->name }}
                        </h1><br>
                        <img class="img-fluid" src="{{ asset('backend/img/portfolio/' . $portfolio->image) }}"
                            alt="" style="width: 100%; height: 26rem;"><br><br>
                        <p class="mb-0">{!! $portfolio->description !!}</p>
                        <div class="w-100">
                            <hr class="divider divider-md divider-center float-left mt-5 mb-5">
                        </div>
                        <ul class="list-inline font-size-15 w-100 float-left">
                            @if (!is_null($portfolio->job))
                                <li>Job :
                                    <strong class="font-weight-600 text-alt">{{ $portfolio->job }}</strong>
                                </li>
                            @endif
                            @if (!is_null($portfolio->client))
                                <li>Client :
                                    <strong class="font-weight-600 text-alt">{{ $portfolio->client }}</strong>
                                </li>
                            @endif
                            @if (!is_null($portfolio->company))
                                <li>Company :
                                    <strong class="font-weight-600 text-alt">{{ $portfolio->company }}</strong>
                                </li>
                            @endif
                            @if (!is_null($portfolio->date))
                                <li>Year :
                                    <strong
                                        class="font-weight-600 text-alt">{{ Carbon\Carbon::parse($portfolio->date)->format('M, Y') }}</strong>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                {{-- <div class="row align-items-center justify-content-center">
                    <div class="col-md-10 text-center">
                        <ul class="list-inline  mb-0">
                            <li class="list-inline-item outer radius-2 mr-1">
                            <a class="inner btn btn-round btn-icon" href="#">
                            <span class="fab fa-facebook-f btn-icon-inner"></span>
                            </a>
                            </li>
                            <li class="list-inline-item mr-1 outer radius-2">
                            <a class="inner btn btn-round btn-icon" href="#">
                            <span class="fab fa-google btn-icon-inner"></span>
                            </a>
                            </li>
                            <li class="list-inline-item mx-0 outer radius-2 ">
                            <a class="inner btn btn-round btn-icon" href="#">
                            <span class="fab fa-twitter btn-icon-inner"></span>
                            </a>
                            </li>
                            <li class="list-inline-item mr-1 outer radius-2">
                            <a class="inner btn btn-round btn-icon" href="#">
                            <span class="fab fa-vimeo btn-icon-inner"></span>
                            </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12 mt-6 mb-6 pt-6">
                        <hr class="divider divider-lg divider-center">
                    </div>
                    <div class="col-md-6 mb-lg-0 mb-2 text-left">
                        <a class="float-left" href="{{ $portfolio->link }}" target="_blank">
                            <div class="media align-items-center">
                                <div class="outer radius-2 mr-3">
                                    <div class="ui-icon ui-icon-md inner">
                                        <div class="ui-icon-inner">
                                            <img src="{{ asset('backend/img/icons/open-in-browser.png') }}"
                                                style="width: 30px;" />
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <span class="text-alt font-size-13 font-weight-600 text-uppercase">View
                                        project
                                        online</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-lg-0 mb-2 text-left">
                        <a class="float-md-right" href="{{ route('home') }}#portfolio">
                            <div class="media align-items-center">
                                <div class="outer radius-2 mr-3">
                                    <div class="ui-icon ui-icon-md inner">
                                        <div class="ui-icon-inner">
                                            <i class="fas fa-arrow-left" style="font-size: 20px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <span class="text-alt font-size-13 font-weight-600 text-uppercase">Back
                                        To
                                        Portfolio</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <a class="outer scroll-to-top scroll" href="#wrapper">
            <div class="scroll-to-top-inner inner radius-2"><span class="fas fa-arrow-up top-icon"></span></div>
        </a>
        <!-- End to the top -->
    </div>
    <!-- End wrapper-->
    <!--Javascript-->
    @include('frontend.includes.script')
</body>

</html>
