<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo.png" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo.png" alt="" height="40">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo.png" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo.png" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('dashboard') ? 'active' : ''}}" href="{{ url('/') }}"  role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('users') ? 'active' : ''}}" href="{{ url('/users') }}" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-user-line"></i> <span data-key="t-users">Users</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('bikes') ? 'active' : ''}}" href="{{ url('/bikes') }}"  role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-riding-line"></i> <span data-key="t-apps">Bikes</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('products') ? 'active' : ''}}" href="{{ url('/products') }}"  role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-shopping-cart-line"></i><span data-key="t-products">Products</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('maintenances') ? 'active' : ''}}" href="{{ url('/maintenances') }}" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-bike-line"></i> <span data-key="t-rentals">maintenances</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link  {{ Request::routeIs('tours') ? 'active' : ''}}" href="{{ url('/tours') }}"  role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-road-map-line"></i><span data-key="t-tours">Tours</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('tours-schedule') ? 'active' : ''}}" href="{{ url('/tours-schedule') }}" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-calendar-check-line"></i> <span data-key="t-schedule">Schedule</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('activities') ? 'active' : ''}}" href="{{ url('/activities') }}" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-calendar-check-line"></i> <span data-key="t-activity">Activities</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('event') ? 'active' : ''}}" href="{{ url('/event') }}"  role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-calendar-event-line"></i> <span data-key="t-events">Events</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('comments') ? 'active' : ''}}" href="{{ url('/comments') }}"  role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-feedback-line"></i> <span data-key="t-comments">Comments</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('associations') ? 'active' : ''}}" href="{{ url('/associations') }}"  role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-community-line"></i><span data-key="t-associations">Associations</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('reclamation') ? 'active' : ''}}" href="{{ url('/reclamation') }}"  role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-community-line"></i><span data-key="t-reclamation">Reclamations</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('deals') ? 'active' : ''}}" href="{{ url('/deals') }}" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-price-tag-3-line"></i> <span data-key="t-deals">Deals</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
