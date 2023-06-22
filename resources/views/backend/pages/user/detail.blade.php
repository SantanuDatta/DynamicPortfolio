@extends('backend.layout.template')

@section('title', 'User Details')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-settings tx-70 lh-0"></i>
        <div>
            <h4>User Details</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin
                template.</p>
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
                        <form action="{{ route('user.update', $users) }}" method="POST" enctype="multipart/form-data"
                            novalidate>
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" name="name"
                                            type="text" value="{{ $users->name }}">
                                        @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Your Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email"
                                            type="email" value="{{ $users->email }}" placeholder="Enter Email Address">
                                        @error('email')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Occupation</label>
                                        <input class="form-control @error('occupation') is-invalid @enderror"
                                            name="occupation" type="text" value="{{ $users->occupation }}"
                                            placeholder="What Do You Do?">
                                        @error('occupation')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Upload/PDF</label>
                                        @if (!is_null($users->image))
                                            <div class="custom-file">
                                                <input class="custom-file-input @error('pdf') is-invalid @enderror"
                                                    id="pdf" name="pdf" type="file">
                                                <label
                                                    class="custom-file-label custom-file-label-primary">{{ $users->pdf }}</label>
                                            </div>
                                            @error('pdf')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        @else
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="pdf" name="pdf"
                                                    type="file">
                                                <label class="custom-file-label custom-file-label-primary">Upload
                                                    Your CV [PDF Only]</label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Upload/Update Image [696 X
                                            696]</label>
                                        @if (!is_null($users->image))
                                            <img class="img-fluid d-block mx-auto"
                                                src="{{ asset('backend/img/user/' . $users->image) }}"
                                                style="width: 25%; border-radius: 50%; border: 3px solid #116d60;"><br>
                                            <div class="custom-file">
                                                <input class="custom-file-input @error('image') is-invalid @enderror"
                                                    id="image" name="image" type="file">
                                                <label
                                                    class="custom-file-label custom-file-label-primary">{{ $users->image }}</label>
                                            </div>
                                            @error('image')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        @else
                                            <img class="img-fluid d-block mx-auto"
                                                src="{{ asset('backend/img/user/default.png') }}"
                                                style="width: 25%; border-radius: 50%; border: 3px solid #116d60;"><br>
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="image" name="image"
                                                    type="file">
                                                <label class="custom-file-label custom-file-label-primary">Upload
                                                    Avater</label>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-teal float-right" name="details" type="submit">Update
                                            Details</button>
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
