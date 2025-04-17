<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Analytics Dashboard | Mantis Bootstrap 5 Admin Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->

    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon"> <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" >
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link" >
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}" >

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
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
            <a href="../dashboard/index.html" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-fluid logo-lg" alt="logo">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="../dashboard/index.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>UI Components</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item">
                    <a href="../elements/bc_typography.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-typography"></i></span>
                        <span class="pc-mtext">Typography</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../elements/bc_color.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
                        <span class="pc-mtext">Color</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../elements/icon-tabler.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-plant-2"></i></span>
                        <span class="pc-mtext">Icons</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Pages</label>
                    <i class="ti ti-news"></i>
                </li>
                <li class="pc-item">
                    <a href="../pages/login-v3.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-lock"></i></span>
                        <span class="pc-mtext">Login</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../pages/register-v3.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-user-plus"></i></span>
                        <span class="pc-mtext">Register</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Other</label>
                    <i class="ti ti-brand-chrome"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-menu"></i></span><span class="pc-mtext">Menu
              levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="pc-item">
                    <a href="../other/sample-page.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-brand-chrome"></i></span>
                        <span class="pc-mtext">Sample page</span>
                    </a>
                </li>
            </ul>
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{ asset('assets/images/img-navbar-card.png') }}" alt="images" class="img-fluid mb-2">
                    <h5>Help?</h5>
                    <p>Get to resolve query</p>
                    <button class="btn btn-success">Support</button>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="dropdown pc-h-item d-inline-flex d-md-none">
                    <a
                        class="pc-head-link dropdown-toggle arrow-none m-0"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
                        <i class="ti ti-search"></i>
                    </a>
                    <div class="dropdown-menu pc-h-dropdown drp-search">
                        <form class="px-3">
                            <div class="form-group mb-0 d-flex align-items-center">
                                <i data-feather="search"></i>
                                <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                            </div>
                        </form>
                    </div>
                </li>
                <li class="pc-h-item d-none d-md-inline-flex">
                    <form class="header-search">
                        <i data-feather="search" class="icon-search"></i>
                        <input type="search" class="form-control" placeholder="Search here. . .">
                    </form>
                </li>
            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item pc-mega-menu">
                    <a
                        class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
                        <i class="ti ti-layout-grid"></i>
                    </a>
                    <div class="dropdown-menu pc-h-dropdown pc-mega-dmenu">
                        <div class="row g-0">
                            <div class="col image-block">
                                <h2 class="text-white">Explore Components</h2>
                                <p class="text-white my-4">Try our pre made component pages to check how it feels and suits as per your need.</p>
                                <div class="row align-items-end">
                                    <div class="col-auto">
                                        <div class="btn btn btn-light">View All <i class="ti ti-arrow-narrow-right"></i></div>
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('assets/images/mega-menu/chart.svg') }}" alt="image" class="img-fluid img-charts">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="mega-title">UI Components</h6>
                                <ul class="pc-mega-list">
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Alerts</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Accordions</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Avatars</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Badges</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Breadcrumbs</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Button</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Buttons Groups</a></li
                                    >
                                </ul>
                            </div>
                            <div class="col">
                                <h6 class="mega-title">UI Components</h6>
                                <ul class="pc-mega-list">
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Menus</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Media Sliders / Carousel</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Modals</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Pagination</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Progress Bars &amp; Graphs</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Search Bar</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Tabs</a></li
                                    >
                                </ul>
                            </div>
                            <div class="col">
                                <h6 class="mega-title">Advance Components</h6>
                                <ul class="pc-mega-list">
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Advanced Stats</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Advanced Cards</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Lightbox</a></li
                                    >
                                    <li
                                    ><a href="#!" class="dropdown-item"><i class="ti ti-circle"></i> Notification</a></li
                                    >
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a
                        class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
                        <i class="ti ti-language"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-user"></i>
                            <span>My Account</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-settings"></i>
                            <span>Settings</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-headset"></i>
                            <span>Support</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-lock"></i>
                            <span>Lock Screen</span>
                        </a>
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-power"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a
                        class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
                        <i class="ti ti-bell"></i>
                        <span class="badge bg-success pc-h-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Notification</h5>
                            <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-circle-check text-success"></i></a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                            <div class="list-group list-group-flush w-100">
                                <a class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="user-avtar bg-light-success"><i class="ti ti-gift"></i></div>
                                        </div>
                                        <div class="flex-grow-1 ms-1">
                                            <span class="float-end text-muted">3:00 AM</span>
                                            <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
                                            <span class="text-muted">2 min ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="user-avtar bg-light-primary"><i class="ti ti-message-circle"></i></div>
                                        </div>
                                        <div class="flex-grow-1 ms-1">
                                            <span class="float-end text-muted">6:00 PM</span>
                                            <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                                            <span class="text-muted">5 August</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="user-avtar bg-light-danger"><i class="ti ti-settings"></i></div>
                                        </div>
                                        <div class="flex-grow-1 ms-1">
                                            <span class="float-end text-muted">2:45 PM</span>
                                            <p class="text-body mb-1">Your Profile is Complete &nbsp;<b>60%</b></p>
                                            <span class="text-muted">7 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="user-avtar bg-light-primary"><i class="ti ti-headset"></i></div>
                                        </div>
                                        <div class="flex-grow-1 ms-1">
                                            <span class="float-end text-muted">9:10 PM</span>
                                            <p class="text-body mb-1"><b>Cristina Danny </b> invited to join <b> Meeting.</b></p>
                                            <span class="text-muted">Daily scrum meeting time</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="text-center py-2">
                            <a href="#!" class="link-primary">View all</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a
                        class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        aria-expanded="false"
                    >
                        <i class="ti ti-mail"></i>
                    </a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Message</h5>
                            <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-x text-danger"></i></a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                            <div class="list-group list-group-flush w-100">
                                <a class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
                                        </div>
                                        <div class="flex-grow-1 ms-1">
                                            <span class="float-end text-muted">3:00 AM</span>
                                            <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
                                            <span class="text-muted">2 min ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="user-image" class="user-avtar">
                                        </div>
                                        <div class="flex-grow-1 ms-1">
                                            <span class="float-end text-muted">6:00 PM</span>
                                            <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                                            <span class="text-muted">5 August</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/images/user/avatar-3.jpg') }}" alt="user-image" class="user-avtar">
                                        </div>
                                        <div class="flex-grow-1 ms-1">
                                            <span class="float-end text-muted">2:45 PM</span>
                                            <p class="text-body mb-1"><b>There was a failure to your setup.</b></p>
                                            <span class="text-muted">7 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/images/user/avatar-4.jpg') }}" alt="user-image" class="user-avtar">
                                        </div>
                                        <div class="flex-grow-1 ms-1">
                                            <span class="float-end text-muted">9:10 PM</span>
                                            <p class="text-body mb-1"><b>Cristina Danny </b> invited to join <b> Meeting.</b></p>
                                            <span class="text-muted">Daily scrum meeting time</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="text-center py-2">
                            <a href="#!" class="link-primary">View all</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link me-0" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
                        <i class="ti ti-settings"></i>
                    </a>
                </li>
                <li class="dropdown pc-h-item header-user-profile">
                    <a
                        class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        data-bs-auto-close="outside"
                        aria-expanded="false"
                    >
                        <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
                        <span>Stebin Ben</span>
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header">
                            <div class="d-flex mb-1">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar wid-35">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Stebin Ben</h6>
                                    <span>UI/UX Designer</span>
                                </div>
                                <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
                            </div>
                        </div>
                        <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link active"
                                    id="drp-t1"
                                    data-bs-toggle="tab"
                                    data-bs-target="#drp-tab-1"
                                    type="button"
                                    role="tab"
                                    aria-controls="drp-tab-1"
                                    aria-selected="true"
                                ><i class="ti ti-user"></i> Profile</button
                                >
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="drp-t2"
                                    data-bs-toggle="tab"
                                    data-bs-target="#drp-tab-2"
                                    type="button"
                                    role="tab"
                                    aria-controls="drp-tab-2"
                                    aria-selected="false"
                                ><i class="ti ti-settings"></i> Setting</button
                                >
                            </li>
                        </ul>
                        <div class="tab-content" id="mysrpTabContent">
                            <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0">
                                <a href="#!" class="dropdown-item">
                                    <i class="ti ti-edit-circle"></i>
                                    <span>Edit Profile</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ti ti-user"></i>
                                    <span>View Profile</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ti ti-clipboard-list"></i>
                                    <span>Social Profile</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ti ti-wallet"></i>
                                    <span>Billing</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ti ti-power"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
                                <a href="#!" class="dropdown-item">
                                    <i class="ti ti-help"></i>
                                    <span>Support</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ti ti-user"></i>
                                    <span>Account Settings</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ti ti-lock"></i>
                                    <span>Privacy Center</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ti ti-messages"></i>
                                    <span>Feedback</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ti ti-list"></i>
                                    <span>History</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- [ Header ] end -->



<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Analytics</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                        <h4 class="mb-0">78,250 <span class="badge bg-light-primary border border-primary"><i
                                    class="ti ti-trending-up"></i> 70.5%</span></h4>
                    </div>
                    <div id="total-value-graph-1"></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
                        <h4 class="mb-0">18,800 <span class="badge bg-light-warning border border-warning"><i
                                    class="ti ti-trending-down"></i> 27.4%</span></h4>
                    </div>
                    <div id="total-value-graph-2"></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
                        <h4 class="mb-0">$35,078 <span class="badge bg-light-warning border border-warning"><i
                                    class="ti ti-trending-down"></i> 27.4%</span></h4>
                    </div>
                    <div id="total-value-graph-3"></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Marketing</h6>
                        <h4 class="mb-0">4,42,236 <span class="badge bg-light-primary border border-primary"><i
                                    class="ti ti-trending-up"></i> 59.3%</span></h4>
                    </div>
                    <div id="total-value-graph-4"></div>
                </div>
            </div>

            <div class="col-md-12 col-xl-8">
                <h5 class="mb-3">Income Overview</h5>
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3 align-items-center">
                            <div class="col">
                                <p class="mb-1 text-danger">$1,12,900 (45.67%)</p>
                                <p class="mb-1 text-muted">Compare to : 01 Dec 2021-08 Jan 2022</p>
                            </div>
                            <div class="col-auto">
                                <ul class="nav nav-pills justify-content-end mb-0" id="income-tab-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="income-tab-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#income-tab-profile" type="button" role="tab" aria-controls="income-tab-profile"
                                                aria-selected="false">Week</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="income-tab-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#income-tab-home" type="button" role="tab" aria-controls="income-tab-home"
                                                aria-selected="true">Month</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <select class="form-select">
                                    <option>By Volume</option>
                                    <option>By Margin</option>
                                    <option>By Sales</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="avtar avtar-s btn btn-outline-secondary">
                                    <i class="ti ti-download f-18"></i>
                                </a>
                            </div>
                        </div>
                        <div class="tab-content" id="income-tab-tabContent">
                            <div class="tab-pane show active" id="income-tab-profile" role="tabpanel"
                                 aria-labelledby="income-tab-profile-tab" tabindex="0">
                                <div id="income-overview-tab-chart"></div>
                            </div>
                            <div class="tab-pane" id="income-tab-home" role="tabpanel" aria-labelledby="income-tab-home-tab"
                                 tabindex="0">
                                <div id="income-overview-tab-chart-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <h5 class="mb-3">Page Views by Page Title</h5>
                <div class="card">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-grow-1 me-2">
                                    <h6 class="mb-1">Admin Home</h6>
                                    <p class="mb-0 text-muted">/demo/admin/index.html</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h5 class="mb-1 text-primary">7755</h5>
                                    <p class="mb-0 text-muted">31.74%</P>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-grow-1 me-2">
                                    <h6 class="mb-1">Form Elements</h6>
                                    <p class="mb-0 text-muted">/demo/admin/forms.html</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h5 class="mb-1 text-primary">5215</h5>
                                    <p class="mb-0 text-muted">28.53%</P>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-grow-1 me-2">
                                    <h6 class="mb-1">Utilities</h6>
                                    <p class="mb-0 text-muted">/demo/admin/util.html</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h5 class="mb-1 text-primary">4848</h5>
                                    <p class="mb-0 text-muted">25.35%</P>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-grow-1 me-2">
                                    <h6 class="mb-1">Form Validation</h6>
                                    <p class="mb-0 text-muted">/demo/admin/validation.html</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h5 class="mb-1 text-primary">3275</h5>
                                    <p class="mb-0 text-muted">23.17%</P>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-grow-1 me-2">
                                    <h6 class="mb-1">Modals</h6>
                                    <p class="mb-0 text-muted">/demo/admin/modals.html</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h5 class="mb-1 text-primary">3003</h5>
                                    <p class="mb-0 text-muted">22.21%</P>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-8">
                <h5 class="mb-3">Recent Orders</h5>
                <div class="card tbl-card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless mb-0">
                                <thead>
                                <tr>
                                    <th>TRACKING NO.</th>
                                    <th>PRODUCT NAME</th>
                                    <th class="text-end">TOTAL ORDER</th>
                                    <th>STATUS</th>
                                    <th class="text-end">TOTAL AMOUNT</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Camera Lens</td>
                                    <td class="text-end">40</td>
                                    <td><span class="px-4 d-block"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span>
                                    </td>
                                    <td class="text-end">$40,570</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Laptop</td>
                                    <td class="text-end">300</td>
                                    <td><span class="px-4 d-block"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span>
                                    </td>
                                    <td class="text-end">$180,139</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Mobile</td>
                                    <td class="text-end">355</td>
                                    <td><span class="px-4 d-block"><i
                                                class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                                    <td class="text-end">$180,139</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Camera Lens</td>
                                    <td class="text-end">40</td>
                                    <td><span class="px-4 d-block"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span>
                                    </td>
                                    <td class="text-end">$40,570</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Laptop</td>
                                    <td class="text-end">300</td>
                                    <td><span class="px-4 d-block"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span>
                                    </td>
                                    <td class="text-end">$180,139</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Mobile</td>
                                    <td class="text-end">355</td>
                                    <td><span class="px-4 d-block"><i
                                                class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                                    <td class="text-end">$180,139</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Camera Lens</td>
                                    <td class="text-end">40</td>
                                    <td><span class="px-4 d-block"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span>
                                    </td>
                                    <td class="text-end">$40,570</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Laptop</td>
                                    <td class="text-end">300</td>
                                    <td><span class="px-4 d-block"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span>
                                    </td>
                                    <td class="text-end">$180,139</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Mobile</td>
                                    <td class="text-end">355</td>
                                    <td><span class="px-4 d-block"><i
                                                class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                                    <td class="text-end">$180,139</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="text-muted">84564564</a></td>
                                    <td>Mobile</td>
                                    <td class="text-end">355</td>
                                    <td><span class="px-4 d-block"><i
                                                class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                                    <td class="text-end">$180,139</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <h5 class="mb-3">Analytics Report</h5>
                <div class="card">
                    <div class="list-group list-group-flush">
                        <a href="#"
                           class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company
                            Finance Growth<span class="h5 mb-0">+45.14%</span></a>
                        <a href="#"
                           class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company
                            Expenses Ratio<span class="h5 mb-0">0.58%</span></a>
                        <a href="#"
                           class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Business
                            Risk Cases<span class="h5 mb-0">Low</span></a>
                    </div>
                    <div class="card-body px-2">
                        <div id="analytics-report-chart"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-8">
                <h5 class="mb-3">Sales Report</h5>
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                        <h3 class="mb-0">$7,650</h3>
                        <div id="sales-report-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <h5 class="mb-3">Transaction History</h5>
                <div class="card">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                                        <i class="ti ti-gift f-18"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Order #002434</h6>
                                    <p class="mb-0 text-muted">Today, 2:00 AM</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">+ $1,430</h6>
                                    <p class="mb-0 text-muted">78%</P>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                                        <i class="ti ti-message-circle f-18"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Order #984947</h6>
                                    <p class="mb-0 text-muted">5 August, 1:45 PM</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">- $302</h6>
                                    <p class="mb-0 text-muted">8%</P>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                                        <i class="ti ti-settings f-18"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Order #988784</h6>
                                    <p class="mb-0 text-muted">7 hours ago</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">- $682</h6>
                                    <p class="mb-0 text-muted">16%</P>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h5>Help & Support Chat</h5>
                                <p class="mb-3">Typical replay within 5 min</p>
                            </div>
                            <div class="col-auto">
                                <div class="user-group mb-3">
                                    <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="image">
                                    <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="image">
                                    <img src="{{ asset('assets/images/user/avatar-3.jpg') }}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <div class="btn btn-primary">Need Help?</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-8">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="card-body bg-primary position-relative h-100">
                                <h6 class="text-white">What would you want to learn today</h6>
                                <p class="text-white text-sm mb-4">Your learning capacity is 80% as daily analytics</p>
                                <div class="row align-items-end">
                                    <div class="col-7">
                                        <h4 class="text-white">35% Completed</h4>
                                        <div class="progress bg-light-success">
                                            <div class="progress-bar bg-success" style="width: 40%"></div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <img src="{{ asset('assets/images/widget/reader.svg') }}" alt="img" class="img-fluid img-reader">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <p class="mb-2">Get started with new basic skills</p>
                                <p class="text-muted mb-3">Last Date 5th Nov 2020</p>
                                <hr class="my-3">
                                <div class="d-flex align-items-center justify-content-between my-3">
                                    <div class="user-group">
                                        <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="image">
                                        <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="image">
                                        <img src="{{ asset('assets/images/user/avatar-3.jpg') }}" alt="image">
                                    </div>
                                    <a href="#" class="avtar avtar-xs btn btn-primary">
                                        <i class="ti ti-plus f-18"></i>
                                    </a>
                                </div>
                                <p class="text-muted text-sm mb-0">Chrome fixed the bug several versions ago, thus rendering this... </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center my-2">
                            <div class="col-5">
                                <p class="mb-0">Published Project</p>
                            </div>
                            <div class="col">
                                <div class="progress progress-primary">
                                    <div class="progress-bar" style="width: 30%"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0 text-sm text-muted">30%</p>
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-5">
                                <p class="mb-0">Completed Task</p>
                            </div>
                            <div class="col">
                                <div class="progress progress-success">
                                    <div class="progress-bar" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0 text-sm text-muted">90%</p>
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-5">
                                <p class="mb-0">Pending Task</p>
                            </div>
                            <div class="col">
                                <div class="progress progress-danger">
                                    <div class="progress-bar" style="width: 50%"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0 text-sm text-muted">50%</p>
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-5">
                                <p class="mb-0">Issues</p>
                            </div>
                            <div class="col">
                                <div class="progress progress-warning">
                                    <div class="progress-bar" style="width: 55%"></div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <p class="mb-0 text-sm text-muted">55%</p>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('assets/images/widget/target.svg') }}" alt="img" class="img-fluid">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6>Income Salaries & Budget</h6>
                                <p class="text-muted mb-0">All your income salaries and budget comes here, you can track them or manage them</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="mb-2">Acquisition Channels</h6>
                                <p class="mb-0 text-muted">Marketing</P>
                            </div>
                            <h4 class="text-primary">-128</h4>
                        </div>
                        <div id="acquisition-chart"></div>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avtar avtar-s rounded-circle text-secondary bg-light-secondary">
                                        <i class="ti ti-device-analytics f-18"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Top Channels</h6>
                                    <p class="mb-0 text-muted">Today, 2:00 AM</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">+ $1,430</h6>
                                    <p class="mb-0 text-muted">35%</P>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                                        <i class="ti ti-file-text f-18"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Top Pages</h6>
                                    <p class="mb-0 text-muted">Today 6:00 AM</P>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">- $1430</h6>
                                    <p class="mb-0 text-muted">35%</P>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col-sm my-1">
                <p class="m-0"
                >Mantis &#9829; crafted by Team <a href="https://themeforest.net/user/codedthemes" target="_blank">Codedthemes</a> Distributed by <a href="https://themewagon.com/">ThemeWagon</a>.</p
                >
            </div>
            <div class="col-auto my-1">
                <ul class="list-inline footer-link mb-0">
                    <li class="list-inline-item"><a href="../index.html">Home</a></li>
                    <li class="list-inline-item"><a href="https://codedthemes.gitbook.io/mantis-bootstrap" target="_blank">Documentation</a></li>
                    <li class="list-inline-item"><a href="https://codedthemes.authordesk.app/" target="_blank">Support</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer> <!-- Required Js -->
<script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

<!-- [Page Specific JS] start -->
<!-- Apex Chart -->
<script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard-analytics.js') }}"></script>
<!-- [Page Specific JS] end -->
</body>
<!-- [Body] end -->

</html>
