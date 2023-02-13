<div class="row ">
    <div class="col-md-12 mb-6">
    <hr class="divider divider-lg divider-center ">
    </div>
    <div class="col-md-6 text-left mb-2 mb-lg-0">
        @foreach ($users as $user)
            <a class="float-left" href="{{ asset('backend/pdf/'.$user->pdf) }}" download>
                <div class="media  align-items-center">
                    <div class="outer radius-2 mr-3">
                        <div class="ui-icon ui-icon-md inner ">
                        <div class="ui-icon-inner">
                            <img src="{{ asset('backend/img/icons/open-resume.png') }}" style="width: 30px;"/>
                        </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <span class="text-alt font-size-13 font-weight-600 text-uppercase">Download my Resume</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div class="col-md-6 text-left mb-2 mb-lg-0">
        @foreach ($users as $user)
            <a class="float-md-right" href="{{ url('backend/pdf/'.$user->pdf) }}">
                <div class="media  align-items-center">
                    <div class="outer radius-2  mr-3">
                        <div class="ui-icon ui-icon-md inner ">
                        <div class="ui-icon-inner">
                            <img src="{{ asset('backend/img/icons/set-as-resume.png') }}" style="width: 30px;"/>
                        </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <span class="text-alt font-size-13 font-weight-600 text-uppercase">Print my Resume</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>