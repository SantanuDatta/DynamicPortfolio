@extends('backend.layout.template')

@section('title', 'Update Service')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
            <h4>Update Existing Service</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin
                template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Update Service
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <form action="{{ route('service.update', $service) }}" method="POST" novalidate>
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Name<span class="tx-danger">*</span></label>
                                        <input class="form-control @error('name') is-invalid @enderror" name="name"
                                            type="text" value="{{ $service->name }}"
                                            placeholder="Id Of The Degree You Have Got?">
                                        @error('name')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="short_desc" name="description">{{ $service->description }}</textarea>
                                        @error('description')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Image Link</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i
                                                    class="icon ion-at tx-16 lh-0 op-6"></i></span>
                                            <input class="form-control @error('image_link') is-invalid @enderror"
                                                name="image_link" type="text" value="{{ $service->image_link }}"
                                                placeholder="Font Image Link">
                                        </div>
                                        @error('image_link')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-teal float-right" name="updateService" type="submit">Update
                                            Service</button>
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
