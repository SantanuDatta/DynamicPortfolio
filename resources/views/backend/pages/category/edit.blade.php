@extends('backend.layout.template')

@section('title', 'Edit Category')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-compose-outline tx-70 lh-0"></i>
        <div>
            <h4>Edit Category</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive
                bootstrap 4 admin template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Edit Category
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                        <form action="{{ route('category.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Category Name<span class="tx-danger">*</span></label>
                                        <input class="form-control form-control-dark" name="name" type="text"
                                            value="{{ $category->name }}" placeholder="Please Input Category Name">
                                        @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Category Short
                                            Description</label>
                                        <textarea class="form-control form-control-dark" id="short_desc" name="description">{{ $category->description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Feature
                                            Category?</label><br>
                                        <div class="form-check-inline">
                                            <label class="rdiobox rdiobox-info">
                                                <input name="is_featured" type="radio" value="1"
                                                    @checked($category->is_featured == 1)>
                                                <span>Enable</span>
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="rdiobox rdiobox-info">
                                                <input name="is_featured" type="radio" value="0"
                                                    @checked($category->is_featured == 0)>
                                                <span>Disable</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Select A Status<span class="tx-danger">*</span></label>
                                        <select class="form-control form-control-dark" id="" name="status">
                                            <option value="" hidden>Please
                                                Select Status</option>
                                            <option value="1" @selected($category->status == 1)>
                                                Active
                                            </option>
                                            <option value="0" @selected($category->status == 0)>
                                                Inactive</option>
                                        </select>
                                        @error('status')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-teal float-right" name="editCategory" type="submit">Edit
                                            Category</button>
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
