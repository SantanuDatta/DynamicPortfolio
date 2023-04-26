<div class="br-logo"><a href=""><span>[</span>bracket
        <i>plus</i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a class="br-menu-link active" href="{{ route('admin.dashboard') }}">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Portfolio
            Managements</label>
        <li class="br-menu-item">
            <a class="br-menu-link with-sub @if (Route::is('category.manage') || Route::is('category.create') || Route::is('category.edit')) active @endif" href="#">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Categories</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a class="sub-link @if (Route::is('category.create')) active @endif"
                        href="{{ route('category.create') }}">Add New
                        Category</a></li>
                <li class="sub-item"><a class="sub-link @if (Route::is('category.manage')) active @endif"
                        href="{{ route('category.manage') }}">Manage All
                        Categories</a></li>
            </ul>
        </li>
        <li class="br-menu-item">
            <a class="br-menu-link with-sub @if (Route::is('portfolio.manage') || Route::is('portfolio.create') || Route::is('portfolio.edit')) active @endif" href="#">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Portfolios</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a class="sub-link @if (Route::is('portfolio.create')) active @endif"
                        href="{{ route('portfolio.create') }}">Add New
                        Portfolio</a></li>
                <li class="sub-item"><a class="sub-link @if (Route::is('portfolio.manage')) active @endif"
                        href="{{ route('portfolio.manage') }}">Manage All
                        Portfolios</a></li>
            </ul>
        </li>
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">About
            Summary</label>
        <li class="br-menu-item">
            <a class="br-menu-link @if (Route::is('about.manage')) active @endif" href="{{ route('about.manage') }}">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">About Detail</span>
            </a><!-- br-menu-link -->
        </li>
        <li class="br-menu-item">
            <a class="br-menu-link with-sub @if (Route::is('experience.manage') || Route::is('experience.create') || Route::is('experience.edit')) active @endif" href="#">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Experience</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a class="sub-link @if (Route::is('experience.create')) active @endif"
                        href="{{ route('experience.create') }}">Add New
                        Experience</a></li>
                <li class="sub-item"><a class="sub-link @if (Route::is('experience.manage')) active @endif"
                        href="{{ route('experience.manage') }}">Manage All
                        Education</a></li>
            </ul>
        </li>
        <li class="br-menu-item">
            <a class="br-menu-link with-sub @if (Route::is('education.manage') || Route::is('education.create') || Route::is('education.edit')) active @endif" href="#">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Education</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a class="sub-link @if (Route::is('education.create')) active @endif"
                        href="{{ route('education.create') }}">Add New
                        Education</a></li>
                <li class="sub-item"><a class="sub-link @if (Route::is('education.manage')) active @endif"
                        href="{{ route('education.manage') }}">Manage All
                        Education</a></li>
            </ul>
        </li>
        <li class="br-menu-item">
            <a class="br-menu-link with-sub @if (Route::is('skill.manage') || Route::is('skill.create') || Route::is('skill.edit')) active @endif" href="#">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Skill</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a class="sub-link @if (Route::is('skill.create')) active @endif"
                        href="{{ route('skill.create') }}">Add New Skill</a>
                </li>
                <li class="sub-item"><a class="sub-link @if (Route::is('skill.manage')) active @endif"
                        href="{{ route('skill.manage') }}">Manage All
                        Skills</a></li>
            </ul>
        </li>
        <li class="br-menu-item">
            <a class="br-menu-link with-sub @if (Route::is('service.manage') || Route::is('service.create') || Route::is('service.edit')) active @endif" href="#">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Service</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a class="sub-link @if (Route::is('service.create')) active @endif"
                        href="{{ route('service.create') }}">Add New
                        Service</a></li>
                <li class="sub-item"><a class="sub-link @if (Route::is('service.manage')) active @endif"
                        href="{{ route('service.manage') }}">Manage All
                        Services</a></li>
            </ul>
        </li>
        <li class="br-menu-item">
            <a class="br-menu-link with-sub @if (Route::is('certificate.manage') || Route::is('certificate.create') || Route::is('certificate.edit')) active @endif" href="#">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Certficate</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a class="sub-link @if (Route::is('certificate.create')) active @endif"
                        href="{{ route('certificate.create') }}">Add New
                        Certficate</a></li>
                <li class="sub-item"><a class="sub-link @if (Route::is('certificate.manage')) active @endif"
                        href="{{ route('certificate.manage') }}">Manage All
                        Certficate</a></li>
            </ul>
        </li>
    </ul><!-- br-sideleft-menu -->

    <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Account
        Information</label>
    <li class="br-menu-item">
        <a class="br-menu-link @if (Route::is('user.detail')) active @endif" href="{{ route('user.detail') }}">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">User Details</span>
        </a><!-- br-menu-link -->
    </li>
    <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Web
        Settings</label>
    <li class="br-menu-item">
        <a class="br-menu-link @if (Route::is('setting.manage')) active @endif"
            href="{{ route('setting.manage') }}">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Setting Details</span>
        </a><!-- br-menu-link -->
    </li>

    <br>
</div><!-- br-sideleft -->
