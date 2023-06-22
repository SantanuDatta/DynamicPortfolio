@extends('backend.layout.template')

@section('title', 'Add Experience')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
            <h4>Add New Experience</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin
                template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Add Experience
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <form action="{{ route('experience.store') }}" method="POST" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Worked At<span class="tx-danger">*</span></label>
                                        <input class="form-control @error('worked_at') is-invalid @enderror"
                                            name="worked_at" type="text" value="{{ old('worked_at') }}"
                                            placeholder="Where You Worked At">
                                        @error('worked_at')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Company Info</label>
                                        <textarea class="form-control @error('company_info') is-invalid @enderror" id="short_desc" name="company_info">{{ old('company_info') }}</textarea>
                                        @error('company_info')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Worked As</label>
                                        <input class="form-control @error('worked_as') is-invalid @enderror" id=""
                                            name="worked_as" type="text" value="{{ old('worked_as') }}"
                                            placeholder="You Worked As A?">
                                        @error('worked_as')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Start Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ion-ios-calendar tx-16 lh-0 op-6"></i></span>
                                            </div>
                                            <input
                                                class="form-control fc-datepicker @error('start_date') is-invalid @enderror"
                                                name="start_date" type="text" value="{{ old('start_date') }}"
                                                placeholder="MM/DD/YYYY">
                                        </div>
                                        @error('start_date')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">End Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ion-ios-calendar tx-16 lh-0 op-6"></i></span>
                                            </div>
                                            <input
                                                class="form-control fc-datepicker @error('end_date') is-invalid @enderror"
                                                name="end_date" type="text" value="{{ old('end_date') }}"
                                                placeholder="MM/DD/YYYY">
                                        </div>
                                        @error('end_date')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-teal float-right" name="addExperience" type="submit">Add
                                            Experience</button>
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
