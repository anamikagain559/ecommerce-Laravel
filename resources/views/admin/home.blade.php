@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>

        <div class="sl-pagebody">
            <style>
                .welcome-banner {
                    background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
                    border-radius: 16px;
                    padding: 30px 40px;
                    color: #1e293b;
                    margin-bottom: 30px;
                    box-shadow: 0 10px 20px rgba(142, 197, 252, 0.2);
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }
                .welcome-text h4 {
                    font-weight: 700;
                    margin-bottom: 5px;
                    font-size: 28px;
                    color: #1e3c72;
                }
                .welcome-text p {
                    font-size: 15px;
                    color: #334155;
                    margin-bottom: 0;
                    opacity: 0.8;
                }
                
                .sl-pagebody .card {
                    border-radius: 16px;
                    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    border: none;
                    overflow: hidden;
                    position: relative;
                    z-index: 1;
                }
                .sl-pagebody .card:hover {
                    transform: translateY(-8px);
                    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
                }
                
                /* Large Background Icons for Cards */
                .card-icon-bg {
                    position: absolute;
                    right: -10px;
                    bottom: -15px;
                    font-size: 100px;
                    color: rgba(255, 255, 255, 0.15);
                    z-index: -1;
                    transform: rotate(-15deg);
                    transition: transform 0.3s ease;
                }
                .sl-pagebody .card:hover .card-icon-bg {
                    transform: rotate(0deg) scale(1.1);
                }

                .sl-pagebody .bg-primary {
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
                }
                .sl-pagebody .bg-info {
                    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%) !important;
                }
                .sl-pagebody .bg-purple {
                    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%) !important;
                }
                .sl-pagebody .bg-sl-primary {
                    background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%) !important;
                }
                .sl-pagebody .tx-white-6 {
                    color: rgba(255, 255, 255, 0.9) !important;
                }
                .sl-pagebody .tx-white-8 {
                    color: rgba(255, 255, 255, 1) !important;
                }
                
                /* Dashboard Tables */
                .dash-table-wrapper {
                    background: #fff;
                    border-radius: 16px;
                    padding: 25px;
                    box-shadow: 0 10px 25px rgba(0,0,0,0.03);
                    margin-top: 30px;
                }
                .dash-title {
                    font-size: 18px;
                    font-weight: 700;
                    color: #1e293b;
                    margin-bottom: 20px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                .dash-title a {
                    font-size: 13px;
                    color: #6366f1;
                    font-weight: 500;
                    text-decoration: none;
                }
            </style>

            <!-- Welcome Banner -->
            <div class="welcome-banner">
                <div class="welcome-text">
                    <h4>Welcome Back, Admin! 👋</h4>
                    <p>Here is what's happening with your store today.</p>
                </div>
                <div class="welcome-image d-none d-md-block">
                    <!-- Optional: Add a nice SVG illustration here if available -->
                    <i class="icon ion-ios-pulse-strong" style="font-size: 60px; color: #1e3c72; opacity: 0.2;"></i>
                </div>
            </div>

            <!-- Stat Widgets -->
            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-primary">
                        <i class="icon ion-ios-cart-outline card-icon-bg"></i>
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$850</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                    <div class="card pd-20 bg-info">
                        <i class="icon ion-ios-briefcase-outline card-icon-bg"></i>
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Week's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$4,625</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-purple">
                        <i class="icon ion-ios-pie-outline card-icon-bg"></i>
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$11,908</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-sl-primary">
                        <i class="icon ion-ios-analytics-outline card-icon-bg"></i>
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$91,239</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
            </div><!-- row -->

            <!-- Recent Activity Section -->
            <div class="row row-sm">
                <!-- Recent Orders Table -->
                <div class="col-lg-8">
                    <div class="dash-table-wrapper">
                        <div class="dash-title">
                            Recent Orders
                            <a href="#">View All Orders &rarr;</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>#ORD-00124</strong></td>
                                        <td>Alex Johnson</td>
                                        <td>Oct 24, 2024</td>
                                        <td><span class="badge badge-success pd-y-5 pd-x-10">Completed</span></td>
                                        <td>$124.50</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#ORD-00125</strong></td>
                                        <td>Sarah Smith</td>
                                        <td>Oct 24, 2024</td>
                                        <td><span class="badge badge-warning pd-y-5 pd-x-10">Pending</span></td>
                                        <td>$89.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#ORD-00126</strong></td>
                                        <td>Michael Brown</td>
                                        <td>Oct 23, 2024</td>
                                        <td><span class="badge badge-info pd-y-5 pd-x-10">Processing</span></td>
                                        <td>$299.99</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#ORD-00127</strong></td>
                                        <td>Emily Davis</td>
                                        <td>Oct 22, 2024</td>
                                        <td><span class="badge badge-danger pd-y-5 pd-x-10">Cancelled</span></td>
                                        <td>$45.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- col-lg-8 -->

                <!-- Quick Overview Side Card -->
                <div class="col-lg-4">
                    <div class="dash-table-wrapper" style="height: calc(100% - 30px);">
                        <div class="dash-title">
                            System Overview
                        </div>
                        <div class="d-flex align-items-center mg-b-20">
                            <div class="bg-primary tx-white pd-15 rounded-circle mg-r-15">
                                <i class="icon ion-ios-people tx-24"></i>
                            </div>
                            <div>
                                <h6 class="tx-15 tx-bold tx-inverse mg-b-0">1,245</h6>
                                <span class="tx-13 tx-gray-500">Total Registered Users</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mg-b-20">
                            <div class="bg-info tx-white pd-15 rounded-circle mg-r-15">
                                <i class="icon ion-cube tx-24"></i>
                            </div>
                            <div>
                                <h6 class="tx-15 tx-bold tx-inverse mg-b-0">432</h6>
                                <span class="tx-13 tx-gray-500">Total Products</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mg-b-20">
                            <div class="bg-success tx-white pd-15 rounded-circle mg-r-15">
                                <i class="icon ion-ios-checkmark-outline tx-24"></i>
                            </div>
                            <div>
                                <h6 class="tx-15 tx-bold tx-inverse mg-b-0">98%</h6>
                                <span class="tx-13 tx-gray-500">Order Delivery Success</span>
                            </div>
                        </div>
                        
                        <a href="#" class="btn btn-info btn-block mg-t-30">Generate Report</a>
                    </div>
                </div><!-- col-lg-4 -->
            </div><!-- row -->

        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
@endsection
