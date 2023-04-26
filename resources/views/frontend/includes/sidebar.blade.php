<header class="bg-dark radius-2 px-4 py-6 text-center shadow">
    <div class="profile-image">
        <div class="profile-image-border">
            <img class="rounded-circle" src="{{ asset('backend/img/user/' . $users->image) }}" alt="/">
        </div>
    </div>
    <div class="mt-4 mb-5">
        <h3 class="font-weight-600 mb-0">{{ $users->name }}</h3>
        <h6 class="text-alt">{{ $users->occupation }}</h6>
    </div>
    <nav class="main-nav clearfix tabbed" id="main-nav">
        <ul class="pl-0">
            <li class="outer radius-2 mb-3">
                <a class="inner radius-2" href="#home">
                    <div class="media align-items-center">
                        <div class="media-body text-left">
                            <span class="font-weight-600 font-size-13 text-uppercase text-muted">Home</span>
                        </div>
                        <img src="{{ asset('backend/img/icons/web.png') }}" style="width: 30px;" />
                    </div>
                </a>
            </li>
            <li class="outer radius-2 mb-3">
                <a class="inner radius-2" href="#about">
                    <div class="media align-items-center">
                        <div class="media-body text-left">
                            <span class="font-weight-600 font-size-13 text-uppercase text-muted">About</span>
                        </div>
                        <img src="{{ asset('backend/img/icons/web-account.png') }}" style="width: 30px;" />
                    </div>
                </a>
            </li>
            <li class="outer radius-2 mb-3">
                <a class="inner radius-2" href="#portfolio">
                    <div class="media align-items-center">
                        <div class="media-body text-left">
                            <span class="font-weight-600 font-size-13 text-uppercase text-muted">Portfolio</span>
                        </div>
                        <img src="{{ asset('backend/img/icons/resume-website.png') }}" style="width: 30px;" />
                    </div>
                </a>
            </li>
            {{-- <li class="outer radius-2 mb-3">
            <a class=" inner radius-2" href="#blog" >
                <div class="media  align-items-center ">
                <div class="media-body text-left">
                    <span class="font-weight-600 font-size-13 text-uppercase text-muted">Blog</span>
                </div>
                <svg version="1.1" class="max-width-1 svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 517 466.8" enable-background="new 0 0 517 466.8;" xml:space="preserve">
                    <g>
                        <g>
                            <path  d="M488.9,2.5H156.1c-14.1,0-25.6,11.5-25.6,25.6v204.8c0,14.1,11.5,25.6,25.6,25.6h89.6l76.8,76.8l76.8-76.8
                            h89.6c14.1,0,25.6-11.5,25.6-25.6V28.1C514.5,14,503,2.5,488.9,2.5z M488.9,232.9H388.7l-66.2,66.2l-66.2-66.2H156.1V28.1h332.8
                            V232.9z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path  d="M360.9,333.1v27.8H260.7l-66.2,66.2l-66.2-66.2H28.1V156.1h76.8v-25.6H28.1C14,130.5,2.5,142,2.5,156.1v204.8
                            c0,14.1,11.5,25.6,25.6,25.6h89.6l76.8,76.8l76.8-76.8h89.6c14.1,0,25.6-11.5,25.6-25.6v-53.4L360.9,333.1z"/>
                        </g>
                    </g>
                </svg>
                </div>
            </a>
        </li> --}}
            <li class="outer radius-2 mb-3">
                <a class="inner radius-2" href="#contact">
                    <div class="media align-items-center">
                        <div class="media-body text-left">
                            <span class="font-weight-600 font-size-13 text-uppercase text-muted">Contact</span>
                        </div>
                        <img src="{{ asset('backend/img/icons/new-post.png') }}" style="width: 30px;" />
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</header>
{{-- <div class="text-center mt-5 ">
    <p class="font-size-14 mb-2 text-alt">© 2020 Mutationthemes.</p>
    <ul class="list-inline mt-auto mb-0">
    <li class="list-inline-item outer radius-2 mr-1">
        <a class="inner btn btn-round btn-icon" href="#" >
        <span class="fab fa-facebook-f btn-icon-inner"></span>
        </a>
    </li>
    <li class="list-inline-item mr-1 outer radius-2">
        <a class="inner btn btn-round btn-icon" href="#">
        <span class="fab fa-google btn-icon-inner"></span>
        </a>
    </li>
    <li class="list-inline-item mx-0 outer radius-2 ">
        <a class="inner btn btn-round btn-icon" href="#">
        <span class="fab fa-twitter btn-icon-inner"></span>
        </a>
    </li>
    </ul>
</div> --}}
