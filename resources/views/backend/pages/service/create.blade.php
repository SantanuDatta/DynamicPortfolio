@extends('backend.layout.template')

@section('title', 'Add Service')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
            <h4>Add New Service</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin
                template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Add Service
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <form action="{{ route('service.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Name<span class="tx-danger">*</span></label>
                                        <input class="form-control" name="name" type="text"
                                            placeholder="Name Of The Service">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea class="form-control form-control-dark" id="short_desc" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Image Link</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i
                                                    class="icon ion-at tx-16 lh-0 op-6"></i></span>
                                            <input class="form-control" name="image_link" type="text"
                                                placeholder="Font Image Link">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-teal float-right" name="addService" type="submit">Add
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
