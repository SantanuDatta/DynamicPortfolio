@extends('backend.layout.template')

@section('title', 'Update Portfolio')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-plus-outline tx-70 lh-0"></i>
        <div>
            <h4>Add A Portfolio</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin
                template.</p>
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
                                <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Portfolio Name</label>
                                        <input class="form-control" name="name" type="text"
                                            value="{{ $portfolio->name }}" placeholder="Name Of The Work">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Select A Category</label>
                                                <select class="form-control" id="" name="category_id">
                                                    <option value="" hidden>Please Select A
                                                        Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            @if ($category->id == $portfolio->category_id) selected @endif>
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Complete Date</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ion-ios-calendar tx-16 lh-0 op-6"></i></span>
                                                    </div>
                                                    <input class="form-control fc-datepicker" name="date" type="text"
                                                        value="{{ $portfolio->date }}" placeholder="MM/DD/YYYY">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Portfolio Description</label>
                                        <textarea class="form-control" id="long_desc" name="description">{{ $portfolio->description }}</textarea>
                                    </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Job</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="icon ion-ios-briefcase tx-16 lh-0 op-6"></i></span>
                                        <input class="form-control" name="job" type="text"
                                            value="{{ $portfolio->job }}" placeholder="What Type Of Job">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Client</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="icon ion-ios-people tx-16 lh-0 op-6"></i></span>
                                        <input class="form-control" name="client" type="text"
                                            value="{{ $portfolio->client }}" placeholder="Clients Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Company</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="icon ion-ios-analytics tx-16 lh-0 op-6"></i></span>
                                        <input class="form-control" name="company" type="text"
                                            value="{{ $portfolio->company }}" placeholder="Clients Company Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Link</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="icon ion-at tx-16 lh-0 op-6"></i></span>
                                        <input class="form-control" name="link" type="url"
                                            value="{{ $portfolio->link }}" placeholder="Working Site Link">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Select A Status<span class="tx-danger">*</span></label>
                                    <select class="form-control" id="" name="status">
                                        <option value="0" hidden>Please Select Status</option>
                                        <option value="1" @if ($portfolio->status == 1) selected @endif>Active
                                        </option>
                                        <option value="0" @if ($portfolio->status == 0) selected @endif>Inactive
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Update Portfolio Image</label>
                                    @if (!is_null($portfolio->image))
                                        <img class="img-fluid d-block mx-auto"
                                            src="{{ asset('backend/img/portfolio/' . $portfolio->image) }}"
                                            style="width:75%;"><br>
                                        <div class="custom-file">
                                            <input class="custom-file-input" id="image" name="image"
                                                type="file">
                                            <label
                                                class="custom-file-label custom-file-label-primary">{{ $portfolio->image }}</label>
                                        </div>
                                    @else
                                        <img class="img-fluid d-block mx-auto"
                                            src="{{ asset('backend/img/portfolio/post_default.png') }}"><br>
                                        <div class="custom-file">
                                            <input class="custom-file-input" id="image" name="image"
                                                type="file">
                                            <label class="custom-file-label custom-file-label-primary">Upload
                                                Portfolio Image</label>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-teal float-right" name="updatePortfolio" type="submit">Update
                                        Portfolio</button>
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
