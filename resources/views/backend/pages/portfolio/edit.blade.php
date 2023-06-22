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
                                <form action="{{ route('portfolio.update', $portfolio) }}" method="POST"
                                    enctype="multipart/form-data" novalidate>
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="">Portfolio Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" name="name"
                                            type="text" value="{{ $portfolio->name }}" placeholder="Name Of The Work">
                                        @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Select A Category</label>
                                                <select class="form-control @error('category_id') is-invalid @enderror"
                                                    id="" name="category_id">
                                                    <option value="" hidden>Please Select A
                                                        Category</option>
                                                    @foreach ($categories as $id => $category)
                                                        <option value="{{ $id }}" @selected($id == $portfolio->category_id)>
                                                            {{ $category }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
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
                                                    <input
                                                        class="form-control fc-datepicker @error('date') is-invalid @enderror"
                                                        name="date" type="text" value="{{ $portfolio->date }}"
                                                        placeholder="MM/DD/YYYY">
                                                </div>
                                                @error('date')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Portfolio Description</label>
                                        <textarea class="form-control" id="long_desc" name="description">{{ $portfolio->description }}</textarea>
                                        @error('description')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Job</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="icon ion-ios-briefcase tx-16 lh-0 op-6"></i></span>
                                        <input class="form-control @error('job') is-invalid @enderror" name="job"
                                            type="text" value="{{ $portfolio->job }}" placeholder="What Type Of Job">
                                    </div>
                                    @error('job')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Client</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="icon ion-ios-people tx-16 lh-0 op-6"></i></span>
                                        <input class="form-control @error('client') is-invalid @enderror" name="client"
                                            type="text" value="{{ $portfolio->client }}" placeholder="Clients Name">
                                    </div>
                                    @error('client')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Company</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="icon ion-ios-analytics tx-16 lh-0 op-6"></i></span>
                                        <input class="form-control @error('company') is-invalid @enderror" name="company"
                                            type="text" value="{{ $portfolio->company }}"
                                            placeholder="Clients Company Name">
                                    </div>
                                    @error('company')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Link</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="icon ion-at tx-16 lh-0 op-6"></i></span>
                                        <input class="form-control @error('link') is-invalid @enderror" name="link"
                                            type="url" value="{{ $portfolio->link }}" placeholder="Working Site Link">
                                    </div>
                                    @error('link')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Select A Status<span class="tx-danger">*</span></label>
                                    <select class="form-control @error('status') is-invalid @enderror" id=""
                                        name="status">
                                        <option value="0" hidden>Please Select Status</option>
                                        <option value="1" @selected($portfolio->status == 1)>Active
                                        </option>
                                        <option value="0" @selected($portfolio->status == 0)>Inactive
                                        </option>
                                    </select>
                                    @error('status')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Update Portfolio Image</label>
                                    @if (!is_null($portfolio->image))
                                        <img class="img-fluid d-block mx-auto"
                                            src="{{ asset('backend/img/portfolio/' . $portfolio->image) }}"
                                            style="width:75%;"><br>
                                        <div class="custom-file">
                                            <input class="custom-file-input @error('image') is-invalid @enderror"
                                                id="image" name="image" type="file">
                                            <label
                                                class="custom-file-label custom-file-label-primary">{{ $portfolio->image }}</label>
                                        </div>
                                        @error('image')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    @else
                                        <img class="img-fluid d-block mx-auto"
                                            src="{{ asset('backend/img/portfolio/default.jpg') }}"><br>
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
