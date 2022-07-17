<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">CareOfClean</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>Apps</span>
            </li>
            <li class="active"><a href="{{ route('dashboard_view') }}"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="pickup">Pickup</span></a>
            </li>
            @can('button_listuser' , \App\Models\User::class)
            <br>
            <li class="active"><a href="{{ route('listuser') }}"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="pickup">Data User</span></a>
            </li>
            @endcan
            <br>
            <li class="active"><a href="{{ route('infoview') }}"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="pickup">Info</span></a>
            </li>
            <br>
        </ul>
    </div>
</div>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
