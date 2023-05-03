<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('images/logo.png') }}" alt="Rima Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">Rima Institute</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        @if(auth()->user()->user_type == 'User')        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route("portal.dashboard") }}" class="nav-link">
                        <p>
                            <i class="fas fa-tachometer-alt">

                            </i>
                            <span>{{ trans('global.dashboard') }}</span>
                        </p>
                    </a>
                </li>
            </li>
            <li class="nav-item">
                <a href="{{ route("portal.profile.index") }}" class="nav-link">
                    <p>
                        <i class="fas fa-user">

                        </i>
                        <span>Profile</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("portal.application.index") }}" class="nav-link">
                    <p>
                        <i class="fas fa-edit">

                        </i>
                        <span>Application</span>
                    </p>
                </a>
            </li>
             <li class="nav-item">
                <a href="{{ route("portal.application.index") }}" class="nav-link">
                    <p>
                        <i class="fas fa-edit">

                        </i>
                        <span>Application Status</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <p>
                        <i class="fas fa-sign-out-alt">

                        </i>
                        <span>{{ trans('global.logout') }}</span>
                    </p>
                </a>
            </li>
        </ul>
    </nav>

    @else
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route("portal.dashboard") }}" class="nav-link">
                    <p>
                        <i class="fas fa-tachometer-alt">

                        </i>
                        <span>{{ trans('global.dashboard') }}</span>
                    </p>
                </a>
            </li>
            @can('user_management_access')
            <li class="nav-item has-treeview {{ request()->is('portal/permissions*') ? 'menu-open' : '' }} {{ request()->is('portal/roles*') ? 'menu-open' : '' }} {{ request()->is('portal/users*') ? 'menu-open' : '' }}">
                <a class="nav-link nav-dropdown-toggle">
                    <i class="fas fa-user-plus">

                    </i>
                    <p>
                        <span>{{ trans('global.userManagement.title') }}</span>
                        <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @can('permission_access')
                    <li class="nav-item">
                        <a href="{{ route("portal.permissions.index") }}" class="nav-link {{ request()->is('portal/permissions') || request()->is('portal/permissions/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt">

                            </i>
                            <p>
                                <span>{{ trans('global.permission.title') }}</span>
                            </p>
                        </a>
                    </li>
                    @endcan
                    @can('role_access')
                    <li class="nav-item">
                        <a href="{{ route("portal.roles.index") }}" class="nav-link {{ request()->is('portal/roles') || request()->is('portal/roles/*') ? 'active' : '' }}">
                            <i class="fas fa-briefcase">

                            </i>
                            <p>
                                <span>{{ trans('global.role.title') }}</span>
                            </p>
                        </a>
                    </li>
                    @endcan
                    @can('user_access')
                    <li class="nav-item">
                        <a href="{{ route("portal.users.index") }}" class="nav-link {{ request()->is('portal/users') || request()->is('portal/users/*') ? 'active' : '' }}">
                            <i class="fas fa-user">

                            </i>
                            <p>
                                <span>{{ trans('global.user.title') }}</span>
                            </p>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @can('user_management_access')
            <li class="nav-item has-treeview {{ request()->is('portal/students*') ? 'menu-open' : '' }} {{ request()->is('portal/students*') ? 'menu-open' : '' }} {{ request()->is('portal/students*') ? 'menu-open' : '' }}">
                <a class="nav-link nav-dropdown-toggle">
                    <i class="fas fa-graduation-cap">

                    </i>
                    <p>
                        <span>Students</span>
                        <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    @can('permission_access')
                    <li class="nav-item">
                        <a href="{{ route("portal.applicants") }}" class="nav-link {{ request()->is('portal/applicants') || request()->is('portal/applicants/*') ? 'active' : '' }}">
                            <i class="fas fa-users">

                            </i>
                            <p>
                                <span>Applicants</span>
                            </p>
                        </a>
                    </li>
                    @endcan
                    @can('role_access')
                    <li class="nav-item">
                        <a href="{{ route("portal.roles.index") }}" class="nav-link {{ request()->is('portal/roles') || request()->is('portal/roles/*') ? 'active' : '' }}">
                            <i class="fas fa-graduation-cap">

                            </i>
                            <p>
                                <span>Admitted</span>
                            </p>
                        </a>
                    </li>
                    @endcan
                    @can('user_access')
                    <li class="nav-item">
                        <a href="{{ route("portal.users.index") }}" class="nav-link {{ request()->is('portal/users') || request()->is('portal/users/*') ? 'active' : '' }}">
                            <i class="fas fa-briefcase">

                            </i>
                            <p>
                                <span>Graduated</span>
                            </p>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @can('programme_access')
            <li class="nav-item">
                <a href="{{ route("portal.pins.index") }}" class="nav-link {{ request()->is('portal/pins') || request()->is('portal/pins/*') ? 'active' : '' }}">
                    <i class="fas fa-credit-card">

                    </i>
                    <p>
                        <span>Pin Management</span>
                    </p>
                </a>
            </li>
            @endcan
            @can('programme_access')
            <li class="nav-item">
                <a href="{{ route("portal.programmes.index") }}" class="nav-link {{ request()->is('portal/programmes') || request()->is('portal/programmes/*') ? 'active' : '' }}">
                    <i class="fas fa-copy">

                    </i>
                    <p>
                        <span>Programmes</span>
                    </p>
                </a>
            </li>
            @endcan
            @can('course_access')
            <li class="nav-item">
                <a href="{{ route("portal.courses.index") }}" class="nav-link {{ request()->is('portal/courses') || request()->is('portal/courses/*') ? 'active' : '' }}">
                    <i class="fas fa-book">

                    </i>
                    <p>
                        <span>Courses</span>
                    </p>
                </a>
            </li>
            @endcan
            @can('payment_access')
            <li class="nav-item">
                <a href="{{ route("portal.payments.index") }}" class="nav-link {{ request()->is('portal/payments') || request()->is('portal/payments/*') ? 'active' : '' }}">
                    <i class="fas fa-dollar-sign">

                    </i>
                    <p>
                        <span>Payments</span>
                    </p>
                </a>
            </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <p>
                        <i class="fas fa-sign-out-alt">

                        </i>
                        <span>{{ trans('global.logout') }}</span>
                    </p>
                </a>
            </li>
        </ul>
    </nav>


    <!-- Sidebar Menu -->
    @endif   
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>