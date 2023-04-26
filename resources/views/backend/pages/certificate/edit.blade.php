@extends('backend.layout.template')

@section('title', 'Update Education')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
            <h4>Update Existing Certficate</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin
                template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Update Certficate
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <form action="{{ route('certificate.update', $certificate->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Certificate Id<span class="tx-danger">*</span></label>
                                        <input class="form-control" name="c_id" type="text"
                                            value="{{ $certificate->c_id }}" placeholder="Id Of The Degree You Have Got?">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Degree</label>
                                        <input class="form-control" id="" name="degree" type="text"
                                            value="{{ $certificate->degree }}" placeholder="What Degree Did You Get?">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Start Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ion-ios-calendar tx-16 lh-0 op-6"></i></span>
                                            </div>
                                            <input class="form-control fc-datepicker" name="date" type="text"
                                                value="{{ $certificate->date }}" placeholder="MM/DD/YYYY">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-teal float-right" name="updateCertificate"
                                            type="submit">Update
                                            Certificate</button>
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
