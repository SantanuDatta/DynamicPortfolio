{{-- <div class="row mb-5">
    <div class="col">
    <h6 class="font-weight-700 text-uppercase mb-2">Map location</h6>
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
        <h6 class="font-weight-700 text-uppercase mb-2">Contact Info</h6>
        <hr class="divider divider-left divider-lg float-left">
    </div>
</div>

<div class="row info-before position-relative">
    <div class="col-md-12 mb-5">
        <div class="w-75 m-auto">
            <div class="radius-5">
                <div class="ui-icon ui-icon-xl ui-icon-lg-2 shadow-inner">
                    <div class="ui-icon-inner">
                        <a href="javascript:;" style="font-size:40px;cursor: default;"><img
                                src="{{ asset('backend/img/icons/place-marker.png') }}"
                                style="cursor:default; width: 50px;" /></a>
                    </div>
                </div>
            </div>
            <h2 class="h5 font-size-18 font-weight-600 mt-4 text-center" style="margin-bottom: 2.2rem;">
                {{ $settings->address }}
            </h2>
        </div>
    </div>
    <div class="col-md-4 mb-lg-0 mb-3">
        <div class="text-center">
            <div class="radius-5">
                <div class="ui-icon ui-icon-lg shadow-inner">
                    <div class="ui-icon-inner">
                        <a href="javascript:;" style="font-size:25px;cursor: default;">
                            <img src="{{ asset('backend/img/icons/email.png') }}"
                                style="cursor: default; width: 30px;" /></a>
                    </div>
                </div>
            </div>
            <p class="text-alt font-size-14 radius-2 mb-0 mt-3 px-2 py-1 shadow-inner">
                {{ $settings->email }}
            </p>
        </div>
    </div>
    <div class="col-md-4 mb-lg-0 mb-3">
        <div class="text-center">
            <div class="radius-5">
                <div class="ui-icon ui-icon-lg shadow-inner">
                    <div class="ui-icon-inner">
                        <a href="javascript:;" style="font-size:25px;cursor: default;"><img
                                src="{{ asset('backend/img/icons/phone.png') }}"
                                style="cursor: default; width: 30px;" /></a>
                    </div>
                </div>
            </div>
            <p class="text-alt font-size-14 radius-2 mb-0 mt-3 px-3 py-1 shadow-inner">
                {{ $settings->phone_no }} </p>
        </div>
    </div>
    <div class="col-md-4 mb-lg-0 mb-3">
        <div class="text-center">
            <div class="radius-5">
                <div class="ui-icon ui-icon-lg shadow-inner">
                    <div class="ui-icon-inner">
                        <a href="javascript:;" style="font-size:25px;cursor: default;"><img
                                src="{{ asset('backend/img/icons/domain.png') }}"
                                style="cursor: default; width: 30px;" /></a>
                    </div>
                </div>
            </div>
            <p class="text-alt font-size-14 radius-2 mb-0 mt-3 px-3 py-1 shadow-inner">
                {{ $settings->link }}
            </p>
        </div>
    </div>
</div>

<div class="row mb-5 mt-6">
    <div class="col">
        <h6 class="font-weight-700 text-uppercase mb-2">Send me an email</h6>
        <hr class="divider divider-left divider-lg float-left">
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-12">
        <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="row mb-5 mt-6">
                <div class="col-sm-6">
                    <div class="outer radius-2 mb-3">
                        <input class="inner form-control h-100" id="name" name="name" type="text"
                            value="" placeholder="Name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="outer radius-2 mb-3">
                        <input class="inner form-control h-100" id="email" name="email" type="email"
                            value="" placeholder="Email">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="outer radius-2 mb-3">
                        <input class="inner form-control h-100" id="subject" name="subject" type="text"
                            value="" placeholder="Subject">
                    </div>
                </div>
                <div class="col-12">
                    <div class="outer radius-2 mb-3">
                        <textarea class="radius-2 inner form-control resize-n" id="message" name="message" placeholder="Message"
                            rows="6"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="outer radius-2 d-inline-block text-center">
                        <input class="inner radius-2 d-block font-size-15 font-weight-500 py-2 px-4" name="sendMessage"
                            type="submit" value="Send Message">
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
