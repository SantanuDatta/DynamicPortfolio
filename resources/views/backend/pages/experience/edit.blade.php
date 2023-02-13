@extends('backend.layout.template')

@section('title', 'Update Experience')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
        <h4>Update Existing Experience</h4>
        <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Update Experience
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <form action="{{ route('experience.update', $experience->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Worked At<span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="worked_at" placeholder="Where You Worked At" value="{{ $experience->worked_at }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Company Info</label>
                                        <textarea id="short_desc" name="company_info" class="form-control form-control-dark">{{ $experience->company_info }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Worked As</label>
                                        <input type="text" name="worked_as" class="form-control" id="" placeholder="You Worked As A?" value="{{ $experience->worked_as }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Start Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ion-ios-calendar tx-16 lh-0 op-6"></i></span>
                                            </div>
                                            <input type="text" name="start_date" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" value="{{ $experience->start_date }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">End Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ion-ios-calendar tx-16 lh-0 op-6"></i></span>
                                            </div>
                                            <input type="text" name="end_date" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" value="{{ $experience->end_date }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="updateExperience" class="btn btn-teal float-right">Update Experience</button>
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