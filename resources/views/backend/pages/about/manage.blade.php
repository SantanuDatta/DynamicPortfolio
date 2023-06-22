@extends('backend.layout.template')

@section('title', 'About Summary')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-settings tx-70 lh-0"></i>
        <div>
            <h4>About Summary</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive
                bootstrap 4 admin template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Manage Summary
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <form action="{{ route('about.update', $about) }}" method="POST" novalidate>
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" name="name" type="text"
                                            value="{{ $about->user->name }}">
                                        @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Describe
                                            Yourself</label>
                                        <textarea class="form-control @error('short_desc') is-invalid @enderror" id="short_desc" name="description">{{ $about->description }}</textarea>
                                        @error('description')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Your Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"
                                            value="{{ $about->email }}" placeholder="Your Email Address">
                                        @error('email')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="text"
                                            value="{{ $about->phone }}" placeholder="Your Phone Number">
                                        @error('phone')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input name="user_id" type="hidden" value="{{ $about->user_id }}">
                                        <button class="btn btn-teal float-right" name="summary" type="submit">Update
                                            Summary</button>
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
