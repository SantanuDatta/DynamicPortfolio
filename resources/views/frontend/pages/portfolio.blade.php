<div class="row mb-5">
    <div class="col">
    <h6 class="font-weight-700  mb-0 text-uppercase mb-2">My works</h6>
    <hr class="divider divider-left divider-lg float-left">
    </div>
</div>

    <div class="row text-center">
        <div class="col">
            <ul class="filter mb-0 pl-0">
                <li class=" radius-2 mb-3 mb-md-0"><a data-filter="all" href="#" class="active inner radius-2">all</a></li>
                @foreach ($cDetails as $category)
                    <li class=" radius-2 mb-3 mb-md-0"><a data-filter="{{ $category->slug }}" href="#" class="inner radius-2">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-5 mb-5">
        <hr class="divider divider-md divider-center ">
        </div>
    </div>
    <div class="row ">
        @php
            $cDetials = $cDetails->shuffle();
        @endphp
        @foreach ($cDetails as $category)
            @foreach (App\Models\Portfolio::inRandomOrder()->where('category_id', $category->id)->where('status', 1)->get() as $pDetails)
            <div class="col-lg-4 mb-5 ">
                <div class="item {{ $category->slug }}">
                    <a class="radius-1 shadow-inner  hover-effect d-block" data-overlay="rgba(52,58,64,.6)" href="{{ route('singleProject', $pDetails->slug) }}">
                        <span class="hover-effect-container">
                            <span class="hover-effect-icon ">
                                <span class="fas fa-link top-icon "></span>
                            </span>
                        </span>
                        <div class="p-2  ">
                            <div class="shadow radius-1">
                                <img class=" radius-1" alt="" src="{{ asset('backend/img/portfolio/'. $pDetails->image) }}">
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