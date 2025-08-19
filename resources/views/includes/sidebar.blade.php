<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('home') }}" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid logo-lg" alt="logo">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="{{ route('home') }}" class="pc-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        <span class="pc-micon"><i class="fa fa-home"></i></span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
@role('admin')
                <li class="pc-item">
                    <a href="{{ route('users.index') }}" class="pc-link {{ request()->routeIs('users.index') ? 'active' : '' }}">
                        <span class="pc-micon"><i class="fa fa-users"></i></span>
                        <span class="pc-mtext">Users</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="{{ route('roles.index') }}" class="pc-link {{ request()->routeIs('roles.index') ? 'active' : '' }}">
                        <span class="pc-micon"><i class="fas fa-sitemap"></i></span>
                        <span class="pc-mtext">Roles</span>
                    </a>
                </li>

@endrole
                <li class="pc-item">
                    <a href="{{ route('projects.index') }}" class="pc-link {{ request()->routeIs('projects.index') ? 'active' : '' }}">
                        <span class="pc-micon"><i class="fas fa-project-diagram"></i></span>
                        <span class="pc-mtext">Projects</span>
                    </a>

                <li class="pc-item">
                    <a href="{{ route('tasks.index') }}" class="pc-link {{ request()->routeIs('roles.index') ? 'active' : '' }}">
                        <span class="pc-micon"><i class="fas fa-tasks"></i></span>
                        <span class="pc-mtext">Tasks</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>
</nav>
