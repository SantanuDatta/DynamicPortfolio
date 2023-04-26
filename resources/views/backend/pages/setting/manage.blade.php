@extends('backend.layout.template')

@section('title', 'Web Settings')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-settings tx-70 lh-0"></i>
        <div>
            <h4>Web Settiings</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin
                template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Manage All Settings
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <form action="{{ route('setting.update', $settings->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Site Title</label>
                                        <input class="form-control form-control-dark" name="site_title" type="text"
                                            value="{{ $settings->site_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address Info</label>
                                        <input class="form-control form-control-dark" name="address" type="text"
                                            @if (!is_null($settings->address)) value = "{{ $settings->address }}"
                                        @else
                                            placeholder = "Please Enter Address Info." @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email Address</label>
                                        <input class="form-control form-control-dark" name="email" type="email"
                                            @if (!is_null($settings->email)) value = "{{ $settings->email }}"
                                        @else
                                            placeholder = "Please Enter Your Email Address." @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Site Link</label>
                                        <input class="form-control form-control-dark" name="link" type="text"
                                            @if (!is_null($settings->link)) value = "{{ $settings->link }}"
                                        @else
                                            placeholder = "Please Enter Site Link." @endif>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Phone No.</label>
                                        <input class="form-control form-control-dark" name="phone_no" type="text"
                                            @if (!is_null($settings->phone_no)) value="{{ $settings->phone_no }}" @else placeholder = "Please Enter Phone No." @endif />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Update Favicon [96 X 96]</label><br>
                                        @if (!is_null($settings->favicon))
                                            <img class="img-fluid d-block mx-auto"
                                                src="{{ asset('backend/img/settings/favicon/' . $settings->favicon) }}"
                                                style="width: 18.5%;"><br>
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="favicon" name="favicon"
                                                    type="file">
                                                <label
                                                    class="custom-file-label custom-file-label-primary">{{ $settings->favicon }}</label>
                                            </div>
                                        @else
                                            <div class="ht-200 bg-black-2 d-flex align-items-center justify-content-center">
                                                <input class="inputfile" id="favicon" name="favicon"
                                                    data-multiple-caption="{count} files selected" type="file">
                                                <label class="if-outline if-outline-info" for="favicon">
                                                    <i class="icon ion-ios-upload-outline tx-24"></i>
                                                    <span>Choose files...</span>
                                                </label>
                                            </div>
                                        @endif

                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-teal float-right" name="setting" type="submit">Update
                                            Settings</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div><!-- card-body -->
                </div><!-- card -->
            </div>
        </div>
    </div>
@endsection
