@extends('backend.layout.template')

@section('title', 'Update Service')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
        <h4>Update Existing Service</h4>
        <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
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
                        <form action="{{ route('service.update', $service->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Name<span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Id Of The Degree You Have Got?" value="{{ $service->name }}">
                                    </div>
                                    <label for="">Description</label>
                                        <textarea id="short_desc" name="description" class="form-control form-control-dark">{{ $service->description }}</textarea>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Image Link</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="icon ion-at tx-16 lh-0 op-6"></i></span>
                                            <input type="text" class="form-control" name="image_link" placeholder="Font Image Link" value="{{ $service->image_link }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="updateService" class="btn btn-teal float-right">Update Service</button>
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