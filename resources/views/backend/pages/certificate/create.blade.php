@extends('backend.layout.template')

@section('title', 'Add Certificate')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
            <h4>Add New Certificate</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin
                template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Add Certificate
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <form action="{{ route('certificate.store') }}" method="POST" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Certficate Id<span class="tx-danger">*</span></label>
                                        <input class="form-control @error('c_id') is-invalid @enderror" name="c_id" type="text"
                                            placeholder="Id Of The Degree You Have Got?" value="{{ old('c_id') }}">
                                        @error('c_id')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Degree</label>
                                        <input class="form-control @error('degree') is-invalid @enderror" id="" name="degree" type="text"
                                            placeholder="What Degree Did You Get?" value="{{ old('degree') }}">
                                        @error('degree')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ion-ios-calendar tx-16 lh-0 op-6"></i></span>
                                            </div>
                                            <input class="form-control fc-datepicker @error('date') is-invalid @enderror" name="date" type="text"
                                                placeholder="MM/DD/YYYY" value="{{ old('date') }}">
                                        </div>
                                        @error('date')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-teal float-right" name="addCertificate" type="submit">Add
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
