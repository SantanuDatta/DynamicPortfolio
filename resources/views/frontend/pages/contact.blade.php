{{-- <div class="row mb-5">
    <div class="col">
    <h6 class="font-weight-700  mb-0 text-uppercase mb-2">Map location</h6>
    <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
    <div class="item">
        <div class="bounce-circle map-marker"></div>
        <a class="radius-1 shadow-inner d-block " href="https://goo.gl/maps/VzdvTYgNeqtEtVJT7">
            <div class="  p-2  ">
                <div class="shadow radius-1">
                <img class="img-fluid radius-1" src="assets/img/map-dark.jpg" alt="">
                </div>
            </div>
        </a>
    </div>
    </div>
</div> --}}
<div class="row mb-5 mt-6">
    <div class="col">
    <h6 class="font-weight-700  mb-0 text-uppercase mb-2">Contact Info</h6>
    <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
@foreach ($settings as $setting)
<div class="row info-before position-relative">
    <div class="col-md-12 mb-5">
    <div class="w-75 m-auto ">
        <div class="radius-5">
            <div class="shadow-inner  ui-icon ui-icon-xl ui-icon-lg-2 ">
                <div class="ui-icon-inner">
                    <a href="javascript:;" style="font-size:40px;cursor: default;"><img src="{{ asset('backend/img/icons/place-marker.png') }}" style="cursor:default; width: 50px;"/></a>
                </div>
            </div>
        </div>
        <h2 class="h5 font-size-18 text-center font-weight-600 mt-4" style="margin-bottom: 2.2rem;">{{$setting->address}}
        </h2>
    </div>
    </div>
    <div class="col-md-4 mb-3 mb-lg-0">
    <div class="  text-center">
        <div class="radius-5">
            <div class="shadow-inner  ui-icon ui-icon-lg ">
                <div class="ui-icon-inner">
                    <a href="javascript:;" style="font-size:25px;cursor: default;"><img src="{{ asset('backend/img/icons/email.png') }}" style="cursor: default; width: 30px;"/></a>
                </div>
            </div>
        </div>
        <p class="text-alt mb-0 mt-3 font-size-14 shadow-inner radius-2 px-2 py-1">{{ $setting->email }} </p>
    </div>
    </div>
    <div class="col-md-4 mb-3 mb-lg-0">
    <div class="  text-center">
        <div class="radius-5">
            <div class="shadow-inner  ui-icon ui-icon-lg ">
                <div class="ui-icon-inner">
                    <a href="javascript:;" style="font-size:25px;cursor: default;"><img src="{{ asset('backend/img/icons/phone.png') }}" style="cursor: default; width: 30px;"/></a>
                </div>
            </div>
        </div>
        <p class="text-alt mb-0 mt-3 font-size-14 shadow-inner radius-2 px-3 py-1">{{ $setting->phone_no }} </p>
    </div>
    </div>
    <div class="col-md-4 mb-3 mb-lg-0">
    <div class="  text-center">
        <div class="radius-5">
            <div class="shadow-inner  ui-icon ui-icon-lg ">
                <div class="ui-icon-inner">
                    <a href="javascript:;" style="font-size:25px;cursor: default;"><img src="{{ asset('backend/img/icons/domain.png') }}" style="cursor: default; width: 30px;"/></a>
                </div>
            </div>
        </div>
        <p class="text-alt mb-0 mt-3 font-size-14 shadow-inner radius-2 px-3 py-1">{{ $setting->link }}</p>
    </div>
    </div>
</div>
@endforeach

<div class="row mb-5 mt-6">
    <div class="col">
    <h6 class="font-weight-700  mb-0 text-uppercase mb-2">Send me an email</h6>
    <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-12">
    <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
        @csrf
        <div class="row mb-5 mt-6">
            <div class="col-sm-6">
                <div class="outer radius-2 mb-3">
                    <input class="inner form-control  h-100 "  placeholder="Name" value="" id="name" name="name" type="text">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="outer radius-2 mb-3">
                    <input class="inner form-control h-100" placeholder="Email" value="" id="email" name="email" type="email">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="outer radius-2 mb-3">
                    <input class="inner form-control h-100" value="" id="subject" name="subject" placeholder="Subject" type="text">
                </div>
            </div>
            <div class="col-12">
                <div class="outer radius-2 mb-3">
                    <textarea class="radius-2 inner form-control resize-n" name="message" placeholder="Message" id="message" rows="6"></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="outer radius-2 d-inline-block text-center">
                    <input type="submit" class="inner radius-2 d-block py-2 px-4 font-size-15 font-weight-500" name="sendMessage" value="Send Message">
                </div>
            </div>
        </div>
    </form>
    <div id="success">
        <h2>Your message has been sent. Thank you!</h2>
    </div>
    <div id="error">
        <h2>Sorry your message can not be sent.</h2>
    </div>
    </div>
</div>
@include('frontend.includes.resume')