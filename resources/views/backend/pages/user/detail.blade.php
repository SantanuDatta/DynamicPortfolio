@extends('backend.layout.template')

@section('title', 'User Details')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-settings tx-70 lh-0"></i>
        <div>
        <h4>User Details</h4>
        <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Manage Details
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        @foreach ($users as $user)
                            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Your Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Occupation</label>
                                            <input type="text" class="form-control" name="occupation" value="{{ $user->occupation }}" placeholder="What Do You Do?">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Upload/PDF</label>
                                            @if (!is_null($user->image))
                                                <div class="custom-file">
                                                    <input type="file" name="pdf" id="pdf" class="custom-file-input">
                                                    <label class="custom-file-label custom-file-label-primary">{{ $user->pdf }}</label>
                                                </div>
                                            @else
                                                <div class="custom-file">
                                                    <input type="file" name="pdf" id="pdf" class="custom-file-input">
                                                    <label class="custom-file-label custom-file-label-primary">Upload Your CV [PDF Only]</label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Upload/Update Image [696 X 696]</label>
                                            @if (!is_null($user->image))
                                                <img src="{{ asset('backend/img/user/'.$user->image) }}" class="img-fluid mx-auto d-block" style="width: 25%; border-radius: 50%; border: 3px solid #116d60;"><br>
                                                <div class="custom-file">
                                                    <input type="file" name="image" id="image" class="custom-file-input">
                                                    <label class="custom-file-label custom-file-label-primary">{{ $user->image }}</label>
                                                </div>
                                            @else
                                                <img src="{{ asset('backend/img/user/default.png') }}" class="img-fluid mx-auto d-block" style="width: 25%; border-radius: 50%; border: 3px solid #116d60;"><br>
                                                <div class="custom-file">
                                                    <input type="file" name="image" id="image" class="custom-file-input">
                                                    <label class="custom-file-label custom-file-label-primary">Upload Avater</label>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="details" class="btn btn-teal float-right">Update Details</button>
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