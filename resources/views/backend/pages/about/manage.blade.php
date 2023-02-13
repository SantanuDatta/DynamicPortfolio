@extends('backend.layout.template')

@section('title', 'About Summary')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-settings tx-70 lh-0"></i>
        <div>
        <h4>About Summary</h4>
        <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
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
                        @foreach ($abouts as $about)
                            <form action="{{ route('about.update', $about->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" value="{{ $about->user->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Describe Yourself</label>
                                            <textarea name="description" id="short_desc" class="form-control">{{ $about->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Your Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $about->email }}" placeholder="Your Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control" name="phone" value="{{ $about->phone }}" placeholder="Your Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="user_id" value="{{ $about->user_id }}">
                                            <button type="submit" name="summary" class="btn btn-teal float-right">Update Summary</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                        
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>
        </div>
    </div>
@endsection