<div class="row mb-5">
    <div class="col">
        <h6 class="font-weight-700 text-uppercase mb-2">About me</h6>
        <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
@foreach ($abouts as $about)
    <div class="row mb-2">
        <div class="col-lg-12">
            <h1 class="font-weight-600 mb-0">{{ $about->user->name }}</h1>
            <h6 class="h5 text-alt">{{ $about->user->occupation }}</h6>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <p>{!! $about->description !!}</p>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-3">
            <div class="radius-1 p-2 shadow-inner">
                <div class="radius-1 shadow">
                    <ul class="info-list font-size-14 list-inline mb-0 p-2">
                        <li><span class="inf">Email</span> <span class="value pl-2">{{ $about->email }}</span></li>
                        <li><span class="inf">Phone</span> <span class="value pl-2">
                                {{ $about->phone }} </span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="row mb-5 mt-6">
    <div class="col">
        <h6 class="font-weight-700 text-uppercase mb-2">Professional skills</h6>
        <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
<div class="row vc skill des mb-5">
    <div class="col-md-11">
        <ul class="skills-list list-inline mb-0">
            @foreach ($about->skills as $skill)
                <li>
                    <h6 class="font-weight-600 font-size-14 text-uppercase">{{ $skill->name }}</h6>
                    <div class="progress mb-3">
                        <div class="percentage">
                            {{ $skill->skill_rate }}%
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="col-lg-1">
        <div class="title des font-size-14">
            <span>Development</span>
        </div>
    </div>
</div>
<div class="row mb-5 mt-6">
    <div class="col">
        <h6 class="font-weight-700 text-uppercase mb-2">Services</h6>
        <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
<div class="row">
    @foreach ($about->services as $service)
        <div class="col-md-4 mb-lg-0 mb-3">
            <div class="service text-center">
                <div class="outer ui-icon-outer-lg radius-2 m-auto">
                    <div class="ui-icon ui-icon-lg inner">
                        <div class="ui-icon-inner ui-icon-inner-lg">
                            <a href="javascript:;" style="font-size:28px; cursor: default;"><img
                                    src="{{ asset($service->image_link) }}" style="cursor: default; width:35px;" /></a>
                        </div>
                    </div>
                </div>
                <h6 class="font-weight-600 font-size-15 mb-1 mt-3">{{ $service->name }}</h6>
                <p class="mb-0">{!! $service->description !!}</p>
            </div>
        </div>
        @if ($loop->iteration % 3 == 0 && !$loop->last)
            <div class="col-md-12 mt-6 mb-6">
                <hr class="divider divider-md divider-center">
            </div>
        @endif
    @endforeach
</div>
<div class="row mb-5 mt-6">
    <div class="col">
        <h6 class="font-weight-700 text-uppercase mb-2">Experience</h6>
        <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="timeline">
            <div class="outer radius-2 position-absolute">
                <div class="ui-icon ui-icon-md inner">
                    <div class="ui-icon-inner">
                        <a href="javascript:;" style="font-size:20px;cursor: default;"><i class="fas fa-briefcase"
                                style="cursor: default;"></i></a>
                    </div>
                </div>
            </div>
            <div class="pt-7">
                @foreach ($about->experiences as $experience)
                    <div class="timeline-content">
                        <div class="mb-1">
                            <h6 class="font-weight-600 font-size-15 mb-1">
                                {{ $experience->worked_as }} –
                                {{ $experience->worked_at }} </h6>
                            <div class="font-size-13 text-alt mb-1"><span class="fa fa-calendar text-muted mr-2"></span>
                                {{ $experience->start_date }} -
                                @if (!is_null($experience->end_date))
                                    {{ $experience->end_date }}
                                @else
                                    <span class="current">Current</span>
                                @endif
                            </div>
                        </div>
                        <p class="mb-0">{!! $experience->company_info !!}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<div class="row mb-5 mt-6">
    <div class="col">
        <h6 class="font-weight-700 text-uppercase mb-2">Education</h6>
        <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="timeline">
            <div class="outer radius-2 position-absolute">
                <div class="ui-icon ui-icon-md inner">
                    <div class="ui-icon-inner">
                        <a href="javascript:;" style="font-size:20px;cursor: default;"><i class="fas fa-graduation-cap"
                                style="cursor: default;"></i></a>
                    </div>
                </div>
            </div>
            <div class="pt-7">
                @foreach ($about->educations as $education)
                    <div class="timeline-content">
                        <div class="mb-1">
                            <h6 class="font-weight-600 font-size-15 mb-1">{{ $education->degree }}
                                –
                                {{ $education->studied_at }} </h6>
                            <div class="font-size-13 text-alt mb-1"></div>
                        </div>
                        <p class="mb-0">{!! $education->info !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- <div class="row mb-5 mt-6">
    <div class="col">
    <h6 class="font-weight-700 text-uppercase mb-2">Testimonials</h6>
    <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
<div class="row  align-items-center">
    <div class="testimonial-carousel">
    <div class="px-3  w-100 pt-5">
        <div class="card border-0    bg-dark">
            <div class="card-body pr-5 pl-5 p5-3 pt-0 shadow radius-2">
                <div class="testimonial-image">
                <div class="testimonial-image-border">
                    <img class="rounded-circle" src="assets/img/avatar/1.jpg" alt="/">
                </div>
                </div>
                <p class=" mb-0 mt-2">"Mountain Pose is the base for all standing poses it gives
                you a sense of how to ground in to your feet and feel the earth
                below you."
                </p>
            </div>
            <div class="card-footer border-0  pt-0 px-5 pb-0 mt-3">
                <span class="h6 font-size-15 font-weight-600 mb-0">Jeremy Spivak</span>
                <small class="d-block text-muted">Business Manager</small>
            </div>
        </div>
    </div>
    <div class="px-3  w-100 pt-5">
        <div class="card border-0  bg-dark">
            <div class="card-body pr-5 pl-5 pb-5 pt-0 shadow radius-2">
                <div class="testimonial-image">
                <div class="testimonial-image-border">
                    <img class="rounded-circle" src="assets/img/avatar/2.jpg" alt="/">
                </div>
                </div>
                <p class=" mb-0 mt-2">"Mountain Pose is the base for all standing poses it gives
                you a sense of how to ground in to your feet and feel the earth
                below you."
                </p>
            </div>
            <div class="card-footer border-0  pt-0 px-5 pb-0  mt-3">
                <span class="h6 font-size-15 font-weight-600 mb-0">Melissa Wagner</span>
                <small class="d-block text-muted">Business Manager</small>
            </div>
        </div>
    </div>
    <div class="px-3  w-100 pt-5 ">
        <div class="card border-0   bg-dark">
            <div class="card-body pr-5 pl-5 pb-5 pt-0 shadow radius-2">
                <div class="testimonial-image">
                <div class="testimonial-image-border">
                    <img class="rounded-circle" src="assets/img/avatar/3.jpg" alt="/">
                </div>
                </div>
                <p class=" mb-0 mt-2">"Mountain Pose is the base for all standing poses it gives
                you a sense of how to ground in to your feet and feel the earth
                below you."
                </p>
            </div>
            <div class="card-footer border-0  pt-0 px-5 pb-0 mt-3">
                <span class="h6 font-size-15 font-weight-600 mb-0">Stacy Taylor</span>
                <small class="d-block text-muted">Business Manager</small>
            </div>
        </div>
    </div>
    <div class="px-3 w-100 pt-5 pb-5">
        <div class="card border-0   bg-dark">
            <div class="card-body pr-5 pl-5 pb-5 pt-0 shadow radius-2">
                <div class="testimonial-image">
                <div class="testimonial-image-border">
                    <img class="rounded-circle" src="assets/img/avatar/4.jpg" alt="/">
                </div>
                </div>
                <p class=" mb-0 mt-2">"Mountain Pose is the base for all standing poses it gives
                you a sense of how to ground in to your feet and feel the earth
                below you."
                </p>
            </div>
            <div class="card-footer border-0  pt-0 px-5 pb-0  mt-3">
                <span class="h6 font-size-15 font-weight-600 mb-0">Renee Mu</span>
                <small class="d-block text-muted">Business Manager</small>
            </div>
        </div>
    </div>
    </div>
</div> --}}
<div class="row mb-5 mt-6">
    <div class="col">
        <h6 class="font-weight-700 text-uppercase mb-2">Certificates</h6>
        <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
<div class="row mb-5 mt-6">

    <div class="testimonial-carousel">
        @foreach ($about->certificates as $certificate)
            <div class="w-100 px-3 pt-5">
                <div class="card bg-dark border-0">
                    <div class="card-body p5-3 radius-2 pr-5 pl-5 pt-0 shadow">
                        <div class="testimonial-image">
                            <div class="testimonial-image-border">
                                <img class="img-fluid" src="{{ asset('backend/img/icons/contract.png') }}"
                                    style="cursor: default; font-size:20px;" />
                            </div>
                        </div>
                        <div class="card-footer mt-3 border-0 p-0 pt-0 pb-0">
                            <span class="h6 font-size-15 font-weight-600 mb-0">{{ $certificate->degree }}</span>
                            <small
                                class="d-block text-muted">{{ Carbon\Carbon::parse($certificate->date)->format('d M Y') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@include('frontend.includes.resume')
