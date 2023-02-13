@extends('backend.layout.template')

@section('title', 'New Portfolio')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
        <h4>Add A Portfolio</h4>
        <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Portfolio
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <div class="row">
                            <div class="col-lg-8">
                                <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Portfolio Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name Of The Work">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Select A Category</label>
                                                <select class="form-control" name="category_id" id="">
                                                    <option value="" hidden>Please Select A Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Complete Date</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ion-ios-calendar tx-16 lh-0 op-6"></i></span>
                                                    </div>
                                                    <input type="text" name="date" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Portfolio Description</label>
                                        <textarea id="long_desc" name="description" class="form-control"></textarea>
                                    </div>
                            </div>
                            <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Job</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="icon ion-ios-briefcase tx-16 lh-0 op-6"></i></span>
                                            <input type="text" class="form-control" name="job" placeholder="What Type Of Job">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Client</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="icon ion-ios-people tx-16 lh-0 op-6"></i></span>
                                            <input type="text" class="form-control" name="client" placeholder="Clients Name">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Company</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="icon ion-ios-analytics tx-16 lh-0 op-6"></i></span>
                                            <input type="text" class="form-control" name="company" placeholder="Clients Company Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="icon ion-at tx-16 lh-0 op-6"></i></span>
                                            <input type="url" class="form-control" name="link" placeholder="Working Site Link">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Select A Status<span class="tx-danger">*</span></label>
                                        <select name="status" class="form-control" id="">
                                            <option value="0" hidden>Please Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Add Portfolio Thumbnail</label>
                                        <div class="ht-200 bg-black-2 d-flex align-items-center justify-content-center">
                                            <input type="file" name="image" id="image"
                                            class="inputfile" data-multiple-caption="{count} files selected" multiple>
                                            <label for="image" class="if-outline if-outline-info">
                                                <i class="icon ion-ios-upload-outline tx-24"></i>
                                                <span>Choose files...</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="addPortfolio" class="btn btn-teal float-right">Add New Portfolio</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>
        </div>
    </div>
@endsection