<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Ecommerce Admin Panel</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">
    <link href="{{ asset('backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Premium Dashboard Overrides */
        body {
            font-family: 'Inter', sans-serif !important;
            background-color: #f4f7f6;
            color: #334155;
        }

        /* Sidebar Styling */
        .sl-sideleft {
            background-color: #0f172a !important; /* Sleek Slate Dark */
            border-right: none !important;
            box-shadow: 4px 0 20px rgba(0,0,0,0.08);
            z-index: 1000;
        }
        .sl-logo {
            background-color: #0b1120 !important;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            font-family: 'Inter', sans-serif !important;
            font-weight: 800;
            font-size: 22px;
            padding: 20px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            letter-spacing: 0.5px;
        }
        .sl-logo a {
            color: #f8fafc !important;
            text-decoration: none;
        }
        .sl-logo i {
            color: #6366f1 !important;
            margin-right: 8px;
            font-size: 26px;
        }
        .sl-sideleft-menu {
            padding: 15px 12px;
        }
        .sl-sideleft-menu .sl-menu-link {
            border-radius: 10px;
            margin-bottom: 8px;
            padding: 12px 18px;
            border: none !important;
            transition: all 0.3s ease;
            color: #94a3b8 !important;
            display: flex;
            align-items: center;
        }
        .sl-sideleft-menu .sl-menu-link:hover {
            background-color: rgba(255, 255, 255, 0.05) !important;
            color: #e2e8f0 !important;
            transform: translateX(4px);
        }
        .sl-sideleft-menu .sl-menu-link.active {
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%) !important;
            color: #ffffff !important;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.35);
        }
        .sl-sideleft-menu .sl-menu-link .menu-item-label {
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 0.3px;
        }
        .sl-sideleft-menu .sl-menu-link .menu-item-icon {
            color: inherit;
            font-size: 22px;
            margin-right: 15px;
        }
        .sl-menu-sub {
            padding-left: 25px;
            margin-bottom: 15px;
        }
        .sl-menu-sub .nav-link {
            color: #64748b;
            transition: all 0.3s ease;
            padding: 8px 15px;
            font-size: 13.5px;
            font-weight: 500;
            border-radius: 6px;
        }
        .sl-menu-sub .nav-link:hover {
            color: #f8fafc;
            background-color: rgba(255,255,255,0.03);
            padding-left: 20px;
        }
        
        /* Search Input in Sidebar */
        .input-group-search {
            margin: 25px 12px 20px 12px; /* Exact same gap as the menu */
            width: calc(100% - 24px) !important; /* Prevent 100% width + margin overflow */
            border-radius: 30px; /* Pill Shape */
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.1);
            display: flex;
            flex-direction: row-reverse; /* Moves the icon to the left */
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.1);
        }
        .input-group-search:focus-within {
            border-color: #6366f1;
            background: rgba(255,255,255,0.07);
            box-shadow: 0 0 15px rgba(99, 102, 241, 0.2);
        }
        .input-group-search input {
            background: transparent !important;
            border: none !important;
            color: #fff !important;
            box-shadow: none !important;
            padding: 12px 15px 12px 5px;
            width: 100%;
            font-size: 14px;
        }
        .input-group-search input:focus {
            outline: none;
        }
        .input-group-search input::placeholder {
            color: #64748b;
            letter-spacing: 0.5px;
        }
        .input-group-search .input-group-btn {
            display: flex;
        }
        .input-group-search button {
            background: transparent !important;
            color: #818cf8 !important; /* Soft Indigo */
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 10px 0 18px; /* Padding for the left icon */
            font-size: 16px;
            transition: color 0.3s ease;
        }
        .input-group-search button:hover {
            color: #c7d2fe !important;
        }

        /* Header Styling */
        .sl-header {
            background-color: #0b1120 !important; /* Premium Dark/Black */
            border-bottom: 1px solid rgba(255,255,255,0.05) !important;
            box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.2);
        }
        
        /* Navbar Collapse & Notification Icons */
        .navicon-left a, .navicon-right a {
            color: #94a3b8 !important;
            transition: all 0.3s ease;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
        }
        .navicon-left a:hover, .navicon-right a:hover {
            color: #ffffff !important;
            background-color: rgba(255,255,255,0.05);
        }
        .navicon-right .square-8 {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 2px solid #0b1120; /* Match header background */
            top: 6px;
            right: 6px;
        }

        .nav-link-profile {
            color: #f8fafc !important; /* White text for dark header */
            font-weight: 600;
            font-size: 14px;
        }
        .nav-link-profile img {
            border: 2px solid #6366f1;
            padding: 2px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #fff;
        }
        
        /* Width Adjustments */
        @media (min-width: 992px) {
            body:not(.collapsed-menu) .sl-sideleft, 
            body:not(.collapsed-menu) .sl-logo {
                width: 270px !important;
            }
            body:not(.collapsed-menu) .sl-header {
                left: 270px !important;
            }
            body:not(.collapsed-menu) .sl-mainpanel {
                margin-left: 270px !important;
            }
            
            /* Fix Logo position when collapsed */
            .collapsed-menu .sl-logo {
                left: -270px !important;
            }
            
            /* Ensure collapsed menu icons are centered correctly */
            .collapsed-menu .sl-sideleft-menu {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .collapsed-menu .sl-sideleft-menu .sl-menu-link {
                padding: 0;
                justify-content: center;
                border-radius: 50%;
                width: 46px;
                height: 46px;
                margin: 8px auto !important;
                display: flex;
                align-items: center;
            }
            .collapsed-menu .sl-sideleft-menu .menu-item-icon {
                margin: 0 !important;
                transform: none !important; /* Override Starlight's -4px shift */
            }
            .collapsed-menu .sl-sideleft-menu .menu-item-label,
            .collapsed-menu .sl-sideleft-menu .menu-item-arrow {
                display: none !important;
            }
            
            /* Fix Search Bar in Collapsed Mode */
            .collapsed-menu .input-group-search {
                margin: 20px auto !important;
                width: 45px !important;
                height: 45px;
                padding: 0;
                border-radius: 50%;
                border: none;
                background: rgba(255,255,255,0.05);
                justify-content: center;
            }
            .collapsed-menu .input-group-search input {
                display: none !important;
            }
            .collapsed-menu .input-group-search button {
                width: 100%;
                height: 100%;
                margin: 0;
            }
            .collapsed-menu .input-group-search .input-group-btn {
                width: 100%;
                height: 100%;
            }
        }
        
        /* Remove Default Starlight Navicon Backgrounds */
        .navicon-left, .navicon-right {
            background-color: transparent !important;
        }

        /* Page Titles */
        .sl-page-title h5 {
            font-weight: 700;
            color: #1e293b;
            letter-spacing: -0.5px;
            font-size: 24px;
            margin-bottom: 5px;
        }
        .sl-page-title p {
            color: #64748b;
            font-size: 14px;
        }

        /* Cards and Elements */
        .card {
            border: none !important;
            border-radius: 16px !important;
            box-shadow: 0 10px 25px rgba(0,0,0,0.03) !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
        }
        .card-body-title {
            font-weight: 700;
            color: #334155;
            font-size: 18px;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        
        .sl-pagebody {
            padding: 30px;
        }

        /* Tables Modernization */
        .table-wrapper {
            background: #fff;
            border-radius: 12px;
        }
        table.dataTable.no-footer {
            border-bottom: none !important;
        }
        table.table {
            border: none !important;
            color: #475569;
        }
        table.table thead th {
            background-color: #f8fafc !important;
            color: #64748b !important;
            font-weight: 600 !important;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #e2e8f0 !important;
            border-top: none !important;
            padding: 15px;
        }
        table.table tbody td {
            border-bottom: 1px solid #f1f5f9;
            padding: 15px;
            vertical-align: middle;
        }
        table.table tbody tr {
            transition: background-color 0.2s ease;
        }
        table.table tbody tr:hover {
            background-color: #f8fafc;
        }

        /* Buttons Overrides */
        .btn {
            border-radius: 8px !important;
            font-weight: 500;
            transition: all 0.3s ease;
            text-transform: capitalize;
            letter-spacing: 0.3px;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .btn-info {
            background-color: #3b82f6 !important;
            border-color: #3b82f6 !important;
        }
        .btn-info:hover {
            background-color: #2563eb !important;
            box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3);
        }
        .btn-danger {
            background-color: #ef4444 !important;
            border-color: #ef4444 !important;
        }
        .btn-danger:hover {
            background-color: #dc2626 !important;
            box-shadow: 0 5px 15px rgba(239, 68, 68, 0.3);
        }
        .btn-warning {
            background-color: #f59e0b !important;
            border-color: #f59e0b !important;
            color: #fff !important;
        }
        .btn-warning:hover {
            background-color: #d97706 !important;
            box-shadow: 0 5px 15px rgba(245, 158, 11, 0.3);
        }

        /* Forms & Inputs */
        .form-control {
            border-radius: 8px !important;
            border: 1px solid #e2e8f0;
            padding: 12px 15px;
            background-color: #f8fafc;
            color: #334155;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            background-color: #fff;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }
        label {
            font-weight: 500;
            color: #475569;
            margin-bottom: 8px;
        }

        /* Modals */
        .modal-content {
            border: none;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .modal-header {
            background-color: #f8fafc;
            border-bottom: 1px solid #f1f5f9;
            border-radius: 16px 16px 0 0;
            padding: 20px 25px;
        }
        .modal-header .tx-uppercase {
            font-weight: 700;
            color: #1e293b;
            letter-spacing: 0.5px;
        }
        .modal-footer {
            border-top: 1px solid #f1f5f9;
            padding: 20px 25px;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9; 
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8; 
        }
    </style>
</head>

<body>

    @guest
    @else
        <!-- ########## START: LEFT PANEL ########## -->
        <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>Admin Panel</a></div>
        <div class="sl-sideleft">
            <div class="input-group input-group-search">
                <input type="search" name="search" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                    <button class="btn"><i class="fa fa-search"></i></button>
                </span><!-- input-group-btn -->
            </div><!-- input-group -->


            <div class="sl-sideleft-menu">
                <a href="{{ url('admin/home') }}" class="sl-menu-link active">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                        <span class="menu-item-label">Dashboard</span>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <a href="#" class="sl-menu-link">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                        <span class="menu-item-label">Category</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item"><a href="{{ route('categories') }}" class="nav-link">Category</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('sub.categories') }}" class="nav-link">Sub
                            Category</a></li>
                    <li class="nav-item"><a href="{{ route('brands') }}" class="nav-link">Brand</a></li>

                </ul>
                <a href="#" class="sl-menu-link">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                        <span class="menu-item-label">Coupon</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item"><a href="{{ route('admin.coupon') }}" class="nav-link">Coupon</a>
                    </li>
                </ul>
                <a href="#" class="sl-menu-link">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                        <span class="menu-item-label">Products</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item"><a href="{{ route('add.product') }}" class="nav-link">Add
                            Product</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('all.product') }}" class="nav-link">All
                            Product</a>
                    </li>


                </ul>

                <a href="#" class="sl-menu-link">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                        <span class="menu-item-label">Orders</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item"><a href="{{ route('admin.neworder') }}" class="nav-link">New
                            Pending Order</a></li>
                    <li class="nav-item"><a href="{{ route('admin.accept.payment') }}"
                            class="nav-link">Accept Payments</a></li>
                    <li class="nav-item"><a href="{{ route('admin.progress.payment') }}"
                            class="nav-link">Progress Delevery</a></li>
                    <li class="nav-item"><a href="{{ route('admin.success.payment') }}"
                            class="nav-link">Delevery Success</a></li>
                    <li class="nav-item"><a href="{{ route('admin.cancel.order') }}" class="nav-link">Cancel
                            Orders</a></li>
                </ul>

                <a href="#" class="sl-menu-link">
                    <div class="sl-menu-item">
                        <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
                        <span class="menu-item-label">Others</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div><!-- menu-item -->
                </a><!-- sl-menu-link -->
                <ul class="sl-menu-sub nav flex-column">
                    <li class="nav-item"><a href="{{ route('admin.newslater') }}"
                            class="nav-link">Newslater</a></li>
                    <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
                    <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
                    <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a>
                    </li>
                </ul>
            </div><!-- sl-sideleft-menu -->

            <br>
        </div><!-- sl-sideleft -->
        <!-- ########## END: LEFT PANEL ########## -->

        <!-- ########## START: HEAD PANEL ########## -->
        <div class="sl-header">
            <div class="sl-header-left">
                <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                            class="icon ion-navicon-round"></i></a></div>
                <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                            class="icon ion-navicon-round"></i></a></div>
            </div><!-- sl-header-left -->
            <div class="sl-header-right">
                <nav class="nav">
                    <div class="dropdown">
                        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                            <span class="logged-name">Anamika<span class="hidden-md-down"> Gain</span></span>
                            <img src="{{ asset('backend/img/img3.jpg') }}" class="wd-32 rounded-circle" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-header wd-200">
                            <ul class="list-unstyled user-profile-nav">
                                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                                <li><a href="{{ route('admin.password.change') }}"><i
                                            class="icon ion-ios-gear-outline"></i> Settings</a></li>
                                <li><a href="{{ route('admin.logout') }}"><i class="icon ion-power"></i> Sign Out</a>
                                </li>
                            </ul>
                        </div><!-- dropdown-menu -->
                    </div><!-- dropdown -->
                </nav>
                <div class="navicon-right">
                    <a id="btnRightMenu" href="" class="pos-relative">
                        <i class="icon ion-ios-bell-outline"></i>
                        <!-- start: if statement -->
                        <span class="square-8 bg-danger"></span>
                        <!-- end: if statement -->
                    </a>
                </div><!-- navicon-right -->
            </div><!-- sl-header-right -->
        </div><!-- sl-header -->
        <!-- ########## END: HEAD PANEL ########## -->

        <!-- ########## START: RIGHT PANEL ########## -->
        <div class="sl-sideright">
            <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
                </li>
            </ul><!-- sidebar-tabs -->

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
                    <div class="media-list">
                        <!-- loop starts here -->
                        <a href="" class="media-list-link">
                            <div class="media">
                                <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                                    <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                                    <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire
                                        soul, like these sweet mornings of spring.</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="" class="media-list-link">
                            <div class="media">
                                <img src="{{ asset('backend/img/img4.jpg') }}" class="wd-40 rounded-circle"
                                    alt="">
                                <div class="media-body">
                                    <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                                    <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                                    <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.
                                    </p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link">
                            <div class="media">
                                <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                                    <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                                    <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the
                                        present moment...</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link">
                            <div class="media">
                                <img src="{{ asset('backend/img/img5.jpg') }}" class="wd-40 rounded-circle"
                                    alt="">
                                <div class="media-body">
                                    <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                                    <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                                    <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around
                                        me, and the meridian sun strikes...</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link">
                            <div class="media">
                                <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                                    <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                                    <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire
                                        soul, like these sweet mornings of spring.</p>
                                </div>
                            </div><!-- media -->
                        </a>
                    </div><!-- media-list -->
                    <div class="pd-15">
                        <a href=""
                            class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View
                            More Messages</a>
                    </div>
                </div><!-- #messages -->

                <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
                    <div class="media-list">
                        <!-- loop starts here -->
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth
                                            Bungaos</strong> tagged you and 18 others in a post.</p>
                                    <span class="tx-12">October 03, 2017 8:45am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa
                                            Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The
                                            Social Network</strong></p>
                                    <span class="tx-12">October 02, 2017 12:44am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong
                                            class="tx-medium tx-gray-800">Sale Group</strong></p>
                                    <span class="tx-12">October 01, 2017 10:20pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius
                                            Erving</strong> wants to connect with you on your conversation with <strong
                                            class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                    <span class="tx-12">October 01, 2017 6:08pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth
                                            Bungaos</strong> tagged you and 12 others in a post.</p>
                                    <span class="tx-12">September 27, 2017 6:45am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong
                                            class="tx-medium tx-gray-800">Sale Group</strong></p>
                                    <span class="tx-12">September 28, 2017 11:30pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa
                                            Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The
                                            Great Pyramid</strong></p>
                                    <span class="tx-12">September 26, 2017 11:01am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius
                                            Erving</strong> wants to connect with you on your conversation with <strong
                                            class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                    <span class="tx-12">September 23, 2017 9:19pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                    </div><!-- media-list -->
                </div><!-- #notifications -->

            </div><!-- tab-content -->
        </div><!-- sl-sideright -->
        <!-- ########## END: RIGHT PANEL ########## --->
    @endguest
    @yield('admin_content')

    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/lib/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('backend/js/starlight.js') }}"></script>
    <script src="{{ asset('backend/lib/medium-editor/medium-editor.js') }}"></script>
    <script>
        $(function() {
            'use strict';

            // Inline editor
            var editor = new MediumEditor('.editable');

            // Summernote editor
            $('#summernote').summernote({
                height: 150,
                tooltip: false
            })
        });
    </script>
    <script>
        $(function() {
            'use strict';

            // Inline editor
            var editor = new MediumEditor('.editable');

            // Summernote editor
            $('#summernote1').summernote({
                height: 150,
                tooltip: false
            })
        });
    </script>
    <script>
        $(function() {
            'use strict';

            $('#datatable1').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#datatable2').DataTable({
                bLengthChange: false,
                searching: false,
                responsive: true
            });

            // Select2
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity
            });

        });
    </script>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{ asset('backend/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('backend/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('backend/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/lib/flot-spline/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('backend/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>

    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script>
        @if (Session::has('messege'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('messege') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
        @endif
    </script>

    <script>
        $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            swal({
                    title: "Are you Want to delete?",
                    text: "Once Delete, This will be Permanently Delete!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = link;
                    } else {
                        swal("Safe Data!");
                    }
                });
        });
    </script>
</body>

</html>
