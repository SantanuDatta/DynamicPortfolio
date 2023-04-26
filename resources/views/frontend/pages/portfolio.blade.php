<div class="row mb-5">
    <div class="col">
        <h6 class="font-weight-700 text-uppercase mb-2">My Works</h6>
        <hr class="divider divider-left divider-lg float-left">
    </div>
</div>

<div class="row text-center">
    <div class="col">
        <ul class="mb-0 pl-0 filter">
            <li class="radius-2 mb-md-0 mb-3"><a class="active inner radius-2" data-filter="all" href="#">all</a>
            </li>
            @foreach ($cDetails as $category)
                <li class="radius-2 mb-md-0 mb-3"><a class="inner radius-2" data-filter="{{ $category->slug }}"
                        href="#">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-5 mb-5">
        <hr class="divider divider-md divider-center">
    </div>
</div>
<div class="row">
    @php
        $cDetials = $cDetails->shuffle();
    @endphp
    @foreach ($cDetails as $category)
        @foreach ($category->portfolio as $pDetail)
            <div class="col-lg-4 mb-5">
                <div class="item {{ $category->slug }}">
                    <a class="radius-1 hover-effect d-block shadow-inner" data-overlay="rgba(52,58,64,.6)"
                        href="{{ route('singleProject', $pDetail->slug) }}">
                        <span class="hover-effect-container">
                            <span class="hover-effect-icon">
                                <span class="fas fa-link top-icon"></span>
                            </span>
                        </span>
                        <div class="p-2">
                            <div class="radius-1 shadow">
                                <img class="radius-1" src="{{ asset('backend/img/portfolio/' . $pDetail->image) }}"
                                    alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    @endforeach
    {{-- <div class="col-12">
            <div class="outer radius-2 d-block text-center" style="margin: 0 auto; width:20%;">
                <a id="load-more" class="send inner radius-2 d-block py-2 px-4 font-size-15 font-weight-500">Load More</a>
            </div>
        </div> --}}
</div>

@include('frontend.includes.resume')
