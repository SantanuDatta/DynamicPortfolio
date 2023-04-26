@extends('backend.layout.template')

@section('title', 'Experience List')
@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-list-outline tx-70 lh-0"></i>
        <div>
            <h4>Experiences</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin
                template.</p>
        </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
            <div class="col-sm-12">
                <div class="card bd-0">
                    <div class="card-header tx-medium bd-0 tx-white">
                        Manage All Categores
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">

                        @if ($experiences->count() == 0)
                            <div class="alert alert-info">No experiences Have Been Uploaded Yet!</div>
                        @else
                            <table class="table-striped table-hover table-bordered table-responsive-xl table"
                                id="data">
                                <thead>
                                    <tr>
                                        <th scope="col">#SL.</th>
                                        <th scope="col">Worked At</th>
                                        <th scope="col">Worked As</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $serial = 1;
                                    @endphp
                                    @foreach ($experiences as $experience)
                                        <tr>
                                            <th scope="row">{{ $serial }}</th>
                                            <td>{{ $experience->worked_at }}</td>
                                            <td>{{ $experience->worked_as }}</td>
                                            <td>{{ Carbon\Carbon::parse($experience->start_date)->format('d M Y') }}
                                            </td>
                                            <td>
                                                @if (!is_null($experience->end_date))
                                                    {{ Carbon\Carbon::parse($experience->end_date)->format('d M Y') }}
                                                @else
                                                    Current
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group action-bar" role="group">
                                                    <a data-toggle="modal" data-target="#description-{{ $experience->id }}"
                                                        href=""><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('experience.edit', $experience->id) }}"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a data-toggle="modal" data-target="#softdelete-{{ $experience->id }}"
                                                        href=""><i class="fas fa-trash"></i></a>
                                                </div>
                                                <!-- View Modal -->
                                                <div class="modal fade effect-scale modal-dark"
                                                    id="description-{{ $experience->id }}" aria-labelledby="viewModalLabel"
                                                    aria-hidden="true" tabindex="-1">
                                                    <div class="modal-dialog modal-sm modal-dialog-centered">
                                                        <div class="modal-content bd-0">
                                                            <div class="modal-header pd-x-20">
                                                                <h5 class="modal-title" id="viewModalLabel">Experience
                                                                    Descripton</h5>
                                                                <button class="close" data-dismiss="modal" type="button"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body pd-20">
                                                                <p class="mg-b-5">
                                                                    @if (!$experience->description)
                                                                        No Description Added
                                                                    @else
                                                                        {!! $experience->description !!}
                                                                    @endif
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary btn-sm"
                                                                    data-dismiss="modal" type="button">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Delete Modal -->
                                                <div class="modal fade effect-scale modal-dark"
                                                    id="softdelete-{{ $experience->id }}" aria-labelledby="deleteModalLabel"
                                                    aria-hidden="true" tabindex="-1">
                                                    <div class="modal-dialog modal-sm modal-dialog-centered">
                                                        <div class="modal-content bd-0">
                                                            <div class="modal-header pd-x-20">
                                                                <h5 class="modal-title" id="deleteModalLabel">Remove
                                                                    Experience</h5>
                                                                <button class="close" data-dismiss="modal" type="button"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body pd-20">
                                                                <p class="mg-b-5">
                                                                    Are You Sure You Want To Remove This
                                                                    Experience Permanently!
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary btn-sm"
                                                                    data-dismiss="modal" type="button">Close</button>
                                                                <form
                                                                    action="{{ route('experience.destroy', $experience->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button class="btn btn-danger btn-sm" name="delete"
                                                                        type="submit">Rem,ove
                                                                        Experience</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @php $serial++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>
        </div>
    </div>
@endsection
