<div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
        <ul class="br-sideleft-menu">
            <li class="br-menu-item">
            <a href="{{ route('admin.dashboard') }}" class="br-menu-link active">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
            </li><!-- br-menu-item -->
            <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Portfolio Managements</label>
            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub
                    @if (Route::is('category.manage') || Route::is('category.create') || Route::is('category.edit'))
                        active
                    @endif
                ">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Categories</span>
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub">
                    <li class="sub-item"><a href="{{ route('category.create') }}" class="sub-link @if (Route::is('category.create'))
                        active
                    @endif">Add New Category</a></li>
                    <li class="sub-item"><a href="{{ route('category.manage') }}" class="sub-link @if (Route::is('category.manage'))
                        active
                    @endif">Manage All Categories</a></li>
                </ul>
            </li>
            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub
                    @if (Route::is('portfolio.manage') || Route::is('portfolio.create') || Route::is('portfolio.edit'))
                        active
                    @endif
                ">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Portfolios</span>
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub">
                    <li class="sub-item"><a href="{{ route('portfolio.create') }}" class="sub-link @if (Route::is('portfolio.create'))
                        active
                    @endif">Add New Portfolio</a></li>
                    <li class="sub-item"><a href="{{ route('portfolio.manage') }}" class="sub-link @if (Route::is('portfolio.manage'))
                        active
                    @endif">Manage All Portfolios</a></li>
                </ul>
            </li>
            <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">About Summary</label>
            <li class="br-menu-item">
                <a href="{{ route('about.manage') }}" class="br-menu-link 
                @if (Route::is('about.manage'))
                    active
                @endif
                ">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">About Detail</span>
                </a><!-- br-menu-link -->
            </li>
            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub
                    @if (Route::is('experience.manage') || Route::is('experience.create') || Route::is('experience.edit'))
                        active
                    @endif
                ">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Experience</span>
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub">
                    <li class="sub-item"><a href="{{ route('experience.create') }}" class="sub-link @if (Route::is('experience.create'))
                        active
                    @endif">Add New Experience</a></li>
                    <li class="sub-item"><a href="{{ route('experience.manage') }}" class="sub-link @if (Route::is('experience.manage'))
                        active
                    @endif">Manage All Education</a></li>
                </ul>
            </li>
            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub
                    @if (Route::is('education.manage') || Route::is('education.create') || Route::is('education.edit'))
                        active
                    @endif
                ">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Education</span>
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub">
                    <li class="sub-item"><a href="{{ route('education.create') }}" class="sub-link @if (Route::is('education.create'))
                        active
                    @endif">Add New Education</a></li>
                    <li class="sub-item"><a href="{{ route('education.manage') }}" class="sub-link @if (Route::is('education.manage'))
                        active
                    @endif">Manage All Education</a></li>
                </ul>
            </li>
            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub
                    @if (Route::is('skill.manage') || Route::is('skill.create') || Route::is('skill.edit'))
                        active
                    @endif
                ">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Skill</span>
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub">
                    <li class="sub-item"><a href="{{ route('skill.create') }}" class="sub-link @if (Route::is('skill.create'))
                        active
                    @endif">Add New Skill</a></li>
                    <li class="sub-item"><a href="{{ route('skill.manage') }}" class="sub-link @if (Route::is('skill.manage'))
                        active
                    @endif">Manage All Skills</a></li>
                </ul>
            </li>
            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub
                    @if (Route::is('service.manage') || Route::is('service.create') || Route::is('service.edit'))
                        active
                    @endif
                ">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Service</span>
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub">
                    <li class="sub-item"><a href="{{ route('service.create') }}" class="sub-link @if (Route::is('service.create'))
                        active
                    @endif">Add New Service</a></li>
                    <li class="sub-item"><a href="{{ route('service.manage') }}" class="sub-link @if (Route::is('service.manage'))
                        active
                    @endif">Manage All Services</a></li>
                </ul>
            </li>
            <li class="br-menu-item">
                <a href="#" class="br-menu-link with-sub
                    @if (Route::is('certificate.manage') || Route::is('certificate.create') || Route::is('certificate.edit'))
                        active
                    @endif
                ">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label">Certficate</span>
                </a><!-- br-menu-link -->
                <ul class="br-menu-sub">
                    <li class="sub-item"><a href="{{ route('certificate.create') }}" class="sub-link @if (Route::is('certificate.create'))
                        active
                    @endif">Add New Certficate</a></li>
                    <li class="sub-item"><a href="{{ route('certificate.manage') }}" class="sub-link @if (Route::is('certificate.manage'))
                        active
                    @endif">Manage All Certficate</a></li>
                </ul>
            </li>
        </ul><!-- br-sideleft-menu -->

        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Account Information</label>
        <li class="br-menu-item">
            <a href="{{ route('user.detail') }}" class="br-menu-link 
            @if (Route::is('user.detail'))
                active
            @endif
            ">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">User Details</span>
            </a><!-- br-menu-link -->
        </li>
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Web Settings</label>
        <li class="br-menu-item">
            <a href="{{ route('setting.manage') }}" class="br-menu-link 
            @if (Route::is('setting.manage'))
                active
            @endif
            ">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">Setting Details</span>
            </a><!-- br-menu-link -->
        </li>

        <br>
</div><!-- br-sideleft -->