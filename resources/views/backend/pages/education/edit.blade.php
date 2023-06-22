@extends('backend.layout.template')

@section('title', 'Update Education')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
            <h4>Update Existing Education</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin
                template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Update Education
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <form action="{{ route('education.update', $education) }}" method="POST" novalidate>
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Studied At<span class="tx-danger">*</span></label>
                                        <input class="form-control @error('studied_at') is-invalid @enderror"
                                            name="studied_at" type="text" value="{{ $education->studied_at }}"
                                            placeholder="Where Did You Study At?">
                                        @error('studied_at')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Info</label>
                                        <textarea class="form-control @error('info') is-invalid @enderror" id="short_desc" name="info">{{ $education->info }}</textarea>
                                        @error('info')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Degree</label>
                                        <input class="form-control @error('degree') is-invalid @enderror" id=""
                                            name="degree" type="text" value="{{ $education->degree }}"
                                            placeholder="What Degree You Get?">
                                        @error('degree')
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
                                                name="start_date" type="text" value="{{ $education->start_date }}"
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
                                                name="end_date" type="text" value="{{ $education->end_date }}"
                                                placeholder="MM/DD/YYYY">
                                        </div>
                                        @error('end_date')
                                            <span class="tx-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-teal float-right" name="updateEducation"
                                            type="submit">Update Education</button>
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
