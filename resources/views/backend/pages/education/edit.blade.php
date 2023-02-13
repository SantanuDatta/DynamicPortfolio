@extends('backend.layout.template')

@section('title', 'Update Education')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
        <h4>Update Existing Education</h4>
        <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
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
                        <form action="{{ route('education.update', $education->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Studied At<span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="studied_at" placeholder="Where Did You Study At?" value="{{ $education->studied_at }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Info</label>
                                        <textarea id="short_desc" name="info" class="form-control form-control-dark">{{ $education->info }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Degree</label>
                                        <input type="text" name="degree" class="form-control" id="" placeholder="What Degree You Get?" value="{{ $education->degree }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Start Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ion-ios-calendar tx-16 lh-0 op-6"></i></span>
                                            </div>
                                            <input type="text" name="start_date" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" value="{{ $education->start_date }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">End Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ion-ios-calendar tx-16 lh-0 op-6"></i></span>
                                            </div>
                                            <input type="text" name="end_date" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" value="{{ $education->end_date }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="updateEducation" class="btn btn-teal float-right">Update Education</button>
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