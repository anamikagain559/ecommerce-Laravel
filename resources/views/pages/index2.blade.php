<!DOCTYPE html>
<html lang="en">

<head>
    <title>Happy Mart</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}new/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}new//css/font-awesome.min.css">
    <style>
        .box-img .btn:hover {
            background-color: black;
        }

        .box-img .btn1 {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #585;
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .box-img .btn2 {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: rgb(85, 85, 136);
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .box-img .btn3 {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: rgb(231, 53, 92);
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .box-img .btn4 {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: rgb(60, 4, 57);
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .box-img .btn5 {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: rgb(85, 85, 136);
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

    </style>

</head>

<body class="cms-index-index index-opt-14">
    @php

        $row3 = DB::table('products')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
        $row1 = DB::table('products')
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->limit(5)
            ->get();
        $row2 = DB::table('products')
            ->where('status', 1)
            ->where('trend', 1)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
        // $row3 = DB::table('products')
        //     ->where('status', 1)
        //     ->where('id', '=',12)
        //     ->orderBy('id', 'asc')
        //     ->limit(10)
        //     ->get();
        // $row4 = DB::table('products')
        //     ->where('status', 1)
        //     ->where('trend', 1)
        //     ->orderBy('id', 'desc')
        //     ->limit(24)
        //     ->get();

        $row4 = DB::table('products')
            ->join('brands', 'products.brand_id', 'brands.id')
            ->select('brands.brand_name', 'products.*')
            ->where('products.status', 1)
            ->where('hot_deal', 1)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
    @endphp
    <div class="wrapper">

        <!-- HEADER -->
        <header class="site-header header-opt-14 ">

            <!-- header-content -->
            <div class="header-content mid-header">
                <div class="container">
                    <div class="box-content" style="padding-left:50px; padding-top:50px;">

                        <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span><i aria-hidden="true"
                                class="fa fa-bars"></i></span>

                        <!-- menu -->
                        <div class="block-nav-menu">
                            <div class="clearfix"><span data-action="close-nav"
                                    class="close-nav"><span>close</span></span>
                            </div>
                            <ul class="ui-menu">
                                <li class="parent parent-megamenu active">
                                    <a href="index.html">Home</a>

                                </li>

                                @php
                                    $category = DB::table('categories')
                                        ->limit(5)
                                        ->get();
                                @endphp
                                @foreach ($category as $cat)
                                    <li class="parent parent-submenu">
                                        <a href="{{ url('category/' . $cat->id) }}">{{ $cat->category_name }} </a>
                                        <span class="toggle-submenu"></span>
                                        @php
                                            $sub_category = DB::table('subcategories')
                                                ->where('category_id', '=', $cat->id)
                                                ->limit(5)
                                                ->get();
                                        @endphp
                                        {{-- {{ dd($sub_category) }} --}}
                                        <div class="submenu drop-menu">
                                            <ul>
                                                @foreach ($sub_category as $row)
                                                    <li><a
                                                            href="{{ url('products/' . $row->id) }}">{{ $row->subcategory_name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>

                        </div>
                        <!-- menu -->

                        <!-- logo -->
                        <strong class="logo">
                            <a href="{{ url('/') }}"><img
                                    src="{{ asset('new/images/media/index14/logo.jpg') }}" alt="logo"></a>
                        </strong>
                        <!-- logo -->

                        <!-- search -->
                        <div class="block-search dropdown">
                            <a class="dropdown-toggle block-title" href="#" role="button" data-toggle="dropdown">
                                <span>Search</span>
                            </a>
                            <div class="block-content dropdown-menu">
                                <div class="form-search">
                                    <form>
                                        <div class="box-group">
                                            <input type="text" class="form-control"
                                                placeholder="Search your products">
                                            <button class="btn btn-search" type="button"><span>search</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- block mini cart -->
                        <div class="block-minicart dropdown">
                            <a class="dropdown-toggle" href="{{ route('show.cart') }}" role="button">
                                <span class="cart-icon"></span>
                                <span class="counter qty">
                                    <span class="cart-text">Cart </span>
                                    <span class="counter-number"> {{ Cart::count() }}</span>
                                </span>
                            </a>

                        </div>
                        <div class="block-minicart dropdown">
                            <div class="dropdown-toggle">

                                @guest
                                    <div><a href="{{ route('login') }}">Register/Sign in</a></div>
                                @else
                                    <div><a href="{{ route('home') }}">Profile</a></div>
                                @endguest
                            </div>
                        </div>
                        <div class="block-minicart dropdown">
                            <div class="dropdown-toggle">

                                @guest
                                @else
                                    @php
                                        $wishlist = DB::table('wishlists')
                                            ->where('user_id', Auth::id())
                                            ->get();
                                    @endphp
                                    <div class="wishlist_text"><a href="{{ route('user.wishlist') }}">Wishlist</a>
                                        <span class="counter qty">

                                            <span class="counter-number">{{ count($wishlist) }}</span>
                                        </span>
                                        <div>

                                        </div>

                                    </div>
                                </div>
                            @endguest

                        </div>
                    </div>
                    <div class="block-minicart dropdown">
                        <div class="dropdown-toggle">
                            {{-- <img src="{{ asset('frontend/images/heart.png') }}" alt=""> --}}



                        </div>
                    </div>
                </div>
            </div>


    </div>
    <!-- header-content -->

    </header>
    <!-- end HEADER -->

    <!-- MAIN -->
    <main class="site-main">
        <div class="block-section-top block-section-top14">

            <div class="box-section-top">

                <!-- block slide top -->
                <div class="block-slide-main slide-opt-14">

                    <!-- slide -->
                    <div class="owl-carousel " data-nav="true" data-dots="true" data-margin="0" data-items='1'
                        data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                        <div class="item">
                            <img src="{{ asset('new/images/media/index14/slide1.jpg') }}" alt="slide1"
                                class="img-slide">
                            <div class="description">
                                <span class="subtitle ">Welcome To HappyMart</span>
                                <span class="title">All unique products are here for You</span>
                                <span class="clearfix"></span>
                                <a href="" class="view-opt14">Discover More </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('new/images/media/index14/slide2.jpg') }}" alt="slide1"
                                class="img-slide">
                            <div class="description">
                                <span class="subtitle ">Welcome To HappyMart</span>
                                <span class="title">All unique products are here for You</span>
                                <span class="clearfix"></span>
                                <a href="" class="view-opt14">Discover More </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('new/images/media/index14/slide3.jpg') }}" alt="slide1"
                                class="img-slide">
                            <div class="description">
                                <span class="subtitle ">Welcome To HappyMart</span>
                                <span class="title">All unique products are here for You</span>
                                <span class="clearfix"></span>
                                <a href="" class="view-opt14">Discover More </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('new/images/media/index14/slide4.jpg') }}" alt="slide1"
                                class="img-slide">
                            <div class="description">
                                <span class="subtitle ">Welcome To HappyMart</span>
                                <span class="title">All unique products are here for You</span>
                                <span class="clearfix"></span>
                                <a href="" class="view-opt14">Discover More </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('new/images/media/index14/slide5.jpg') }}" alt="slide1"
                                class="img-slide">
                            <div class="description">
                                <span class="subtitle ">Lighthouse sofa </span>
                                <span class="title">A GLAMOUR interior decor BY Happy Mart</span>
                                <span class="clearfix"></span>
                                <a href="" class="view-opt14">Discover More </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('new/images/media/index14/slide1.jpg') }}" alt="slide1"
                                class="img-slide">
                            <div class="description">
                                <span class="subtitle ">Welcome To HappyMart</span>
                                <span class="title">All unique products are here for You</span>
                                <span class="clearfix"></span>
                                <a href="" class="view-opt14">Discover More </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('new/images/media/index14/slide2.jpg') }}" alt="slide1"
                                class="img-slide">
                            <div class="description">
                                <span class="subtitle ">Welcome To HappyMart</span>
                                <span class="title">All unique products are here for You</span>
                                <span class="clearfix"></span>
                                <a href="" class="view-opt14">Discover More </a>
                            </div>
                        </div>
                    </div>
                    <!-- slide -->

                </div>
                <!-- block slide top -->

            </div>

            <!-- banner -->
            <div class="block-banner-main-opt14">
                <div class="container" style="width:100%;display: block;">
                    <div class="section-header" style=" text-align: center;color: solid black;">
                        <h1 style=" font-size: 35px;">Products That Change Lives</h1>
                        <hr class="header-style" style=" border: 1px solid black;width: 100px;">

                        <p style=" font-size: 14px;margin-bottom: 40px;">Bangladesh- millions of entrepreneurs,
                            billions of products</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <a href=" {{ route('buyonegetone') }}" class="box-img"><img
                                    src="{{ asset('new/images/media/index14/1.jpg') }}" alt="img">
                                <button type="button" class="btn1 btn-primary">Buy One Get One</button></a>
                            <a href=" {{ route('newarri') }}" class="box-img"><img
                                    src="{{ asset('new/images/media/index14/2.jpg') }}" alt="img">
                                <button type="button" class="btn2 btn-primary">New Arrival</button></a>
                        </div>
                        <div class="col-sm-4">
                            <a href=" {{ route('trade') }}" class="box-img"><img
                                    src="{{ asset('new/images/media/index14/banner3.jpeg') }}" alt="img">
                                <button type="button" class="btn3 btn-primary">Trend Product</button></a>
                        </div>
                        <div class="col-sm-4">
                            <a href=" {{ route('off') }}" class="box-img"><img
                                    src="{{ asset('new/images/media/index14/4.jpg') }}" alt="img">
                                <button type="button" class="btn4 btn-primary">40% OFF</button></a>
                            <a href=" {{ route('bestrate') }}" class="box-img"><img
                                    src="{{ asset('new/images/media/index14/5.jpg') }}" alt="img">
                                <button type="button" class="btn5 btn-primary">Best Rated Products</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner -->

            <!-- block -tab-product-->
            <div class="block-tab-product-opt14 ">
                <div class="container">

                    <div class="block-title ">
                        <div class="nav-links dropdown">
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                            </button>
                            <div class="dropdown-menu">
                                <ul>
                                    <li role="presentation" class="active"><a href="#floor1-1" role="tab"
                                            data-toggle="tab">All Products</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="actions">
                            <a href="" class="btn btn-view-all">View all</a>
                        </div>
                    </div>

                    <div class="block-content">

                        <div class="tab-content">

                            <!-- tab 1 -->
                            <div class="tab-pane active in   " id="floor1-1" role="tabpanel">
                                <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30"
                                    data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":4},
                                        "1200":{"items":4}
                                    }'>

                                    <div class="item">
                                        @foreach ($row1 as $row)
                                            <div class=" product-item product-item-opt-14">
                                                <div class="product-item-info">

                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img alt="product name"
                                                                src="{{ asset($row->image_one) }}"></a>
                                                        <div class="product-item-actions addwishlist"
                                                            data-id="{{ $row->id }}">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        {{-- <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button> --}}
                                                        <button id="{{ $row->id }}" class="btn btn-cart"
                                                            data-toggle="modal" data-target="#cartmodal"
                                                            onclick="productview(this.id)"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a
                                                                href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">
                                                                {{ $row->product_name }}
                                                            </a></strong>
                                                        <div class="product-item-price">
                                                            <span class="price">BDT
                                                                {{ $row->selling_price }}</span>
                                                        </div>
                                                        <div class="product-item-actions-secondary">
                                                            {{-- <button type="button" class="btn btn-cart"><span>Add
                                                                to
                                                                Cart</span></button> --}}
                                                            <button id="{{ $row->id }}" class="btn btn-cart"
                                                                data-toggle="modal" data-target="#cartmodal"
                                                                onclick="productview(this.id)">Add to Cart</button>
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="item">
                                        @foreach ($row2 as $row)
                                            <div class=" product-item product-item-opt-14">
                                                <div class="product-item-info">

                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img alt="product name"
                                                                src="{{ asset($row->image_one) }}"></a>
                                                        <div class="product-item-actions addwishlist"
                                                            data-id="{{ $row->id }}">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        {{-- <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button> --}}
                                                        <button id="{{ $row->id }}" class="btn btn-cart"
                                                            data-toggle="modal" data-target="#cartmodal"
                                                            onclick="productview(this.id)"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a
                                                                href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">
                                                                {{ $row->product_name }}
                                                            </a></strong>
                                                        <div class="product-item-price">
                                                            <span class="price">BDT
                                                                {{ $row->selling_price }}</span>
                                                        </div>
                                                        <div class="product-item-actions-secondary">
                                                            {{-- <button type="button" class="btn btn-cart"><span>Add
                                                            to
                                                            Cart</span></button> --}}
                                                            <button id="{{ $row->id }}" class="btn btn-cart"
                                                                data-toggle="modal" data-target="#cartmodal"
                                                                onclick="productview(this.id)">Add to Cart</button>
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="item">
                                        @foreach ($row3 as $row)
                                            <div class=" product-item product-item-opt-14">
                                                <div class="product-item-info">

                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img alt="product name"
                                                                src="{{ asset($row->image_one) }}"></a>
                                                        <div class="product-item-actions addwishlist"
                                                            data-id="{{ $row->id }}">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        {{-- <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button> --}}
                                                        <button id="{{ $row->id }}" class="btn btn-cart"
                                                            data-toggle="modal" data-target="#cartmodal"
                                                            onclick="productview(this.id)"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a
                                                                href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">
                                                                {{ $row->product_name }}
                                                            </a></strong>
                                                        <div class="product-item-price">
                                                            <span class="price">BDT
                                                                {{ $row->selling_price }}</span>
                                                        </div>
                                                        <div class="product-item-actions-secondary">
                                                            {{-- <button type="button" class="btn btn-cart"><span>Add
                                                            to
                                                            Cart</span></button> --}}
                                                            <button id="{{ $row->id }}" class="btn btn-cart"
                                                                data-toggle="modal" data-target="#cartmodal"
                                                                onclick="productview(this.id)">Add to Cart</button>
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="item">
                                        @foreach ($row4 as $row)
                                            <div class=" product-item product-item-opt-14">
                                                <div class="product-item-info">

                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img alt="product name"
                                                                src="{{ asset($row->image_one) }}"></a>
                                                        <div class="product-item-actions addwishlist"
                                                            data-id="{{ $row->id }}">
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                            <a class="btn btn-compare" href=""><span>compare</span></a>
                                                            <a class="btn btn-quickview"
                                                                href=""><span>quickview</span></a>
                                                        </div>
                                                        {{-- <button type="button" class="btn btn-cart"><span>Add to
                                                        Cart</span></button> --}}
                                                        <button id="{{ $row->id }}" class="btn btn-cart"
                                                            data-toggle="modal" data-target="#cartmodal"
                                                            onclick="productview(this.id)"><span>Add to
                                                                Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a
                                                                href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">
                                                                {{ $row->product_name }}
                                                            </a></strong>
                                                        <div class="product-item-price">
                                                            <span class="price">BDT
                                                                {{ $row->selling_price }}</span>
                                                        </div>
                                                        <div class="product-item-actions-secondary">
                                                            {{-- <button type="button" class="btn btn-cart"><span>Add
                                                            to
                                                            Cart</span></button> --}}
                                                            <button id="{{ $row->id }}" class="btn btn-cart"
                                                                data-toggle="modal" data-target="#cartmodal"
                                                                onclick="productview(this.id)">Add to Cart</button>
                                                            <a class="btn btn-wishlist"
                                                                href=""><span>wishlist</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- block -tab-product:-->

                    <!--  deal off-->
                    <div class="block-deal-opt14"
                        style="background-image: url({{ asset('new/images/media/index14/bg-deal.jpg') }});">
                        <div class="container">
                            <div class="box">
                                <div class="block-title">
                                    <span class="title">deal of the week</span>
                                    <div class="deals-of-countdown">
                                        <div class="count-down-time" data-countdown="2016/10/25"></div>
                                    </div>
                                </div>

                                <div class="block-content">
                                    <div class=" product-item ">
                                        <div class="product-item-info">

                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="">Tomas Kral at Maison &
                                                        Objet</a></strong>
                                                <div class="product-item-description">
                                                    Donec bibendum dolor at ante. Proin neque dui, pre tium quis
                                                    fringilla
                                                    ut, sodales sed.
                                                </div>
                                                <div class="product-item-price">
                                                    <span class="price">$58.99 </span>
                                                    <span class="old-price">$98.00 </span>
                                                </div>
                                                <div class="product-item-actions">
                                                    <button type="button" class="btn btn-cart"><span>Add to
                                                            Cart</span></button>
                                                    <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  deal off-->

                    <!-- block  top brand-->
                    <div class="block-top-brand-opt14 block-brand-tabs">
                        <div class="container">

                            <div class="block-title">
                                <span class="title">Top Brands</span>
                            </div>

                            <div class="block-content">

                                <ul class="nav-brand owl-carousel" data-nav="true" data-loop="true" data-dots="false"
                                    data-margin="25" data-responsive='{
                                "0":{"items":3},
                                "380":{"items":3},
                                "480":{"items":4},
                                "640":{"items":5},
                                "992":{"items":7}
                            }'>
                                    @php
                                        $brands = DB::table('brands')
                                            ->limit(7)
                                            ->get();
                                    @endphp
                                    @foreach ($brands as $brand)
                                        <li id="brand{{ $brand->id }}" class="brand{{ $brand->id }} active"
                                            value="{{ $brand->id }}">
                                            <a href="{{ url('brand/' . $brand->id) }}">
                                                <img src="{{ asset($brand->brand_logo) }}" alt="img"
                                                    style="height: 74px; width:180px;"></a>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                            <div class="brand">


                                <div class="tab-content">


                                    @php
                                        $products = DB::table('products')
                                            ->limit(6)
                                            ->orderBy('id', 'asc')
                                            ->get();
                                    @endphp


                                    @foreach ($products as $row)
                                        @php
                                            $i = $row->id;
                                        @endphp

                                        <div class="row">
                                            <div class="item">
                                                <div class=" col-md-2  product-item product-item-opt-1">
                                                    <div class="product-item-info">

                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href=""><img alt="product name"
                                                                    src="{{ asset($row->image_one) }}"></a>


                                                            <span class="product-item-label label-new">new</span>
                                                        </div>
                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="">Smart
                                                                    Classic
                                                                    Chair </a></strong>
                                                            <div class="product-item-price">
                                                                <span class="price">$86.95 </span>
                                                            </div>
                                                            <div class="product-item-actions-secondary">
                                                                <button type="button" class="btn btn-cart"><span>Add
                                                                        to
                                                                        Cart</span></button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- block   top brand-->



        </div>

    </main>
    <!-- end MAIN -->

    <!-- FOOTER -->
    <footer class="site-footer footer-opt-14">
        <div class="container ">
            <div class="footer-column">

                <div class="row">

                    <div class="col-md-3  col-sm-3">
                        <strong class="logo-footer">
                            <a href="">
                                <h1>Happy Mart</h1>
                        </strong>

                        <table class="address">

                            <tr>
                                <td class="text-label">Phone:</td>
                                <td>+088017876373</td>
                            </tr>
                            <tr>
                                <td class="text-label">Email:</td>
                                <td>support@business.com</td>
                            </tr>
                        </table>

                        <div class="block-social">
                            <div class="block-title">Let’s Socialize </div>
                            <div class="block-content">
                                <a href="" class="sh-facebook"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                                <a href="" class="sh-twitter"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a>
                                <a href="" class="sh-linkedin"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a>
                                <a href="" class="sh-google"><i class="fa fa-google-plus"
                                        aria-hidden="true"></i></a>
                                <a href="" class="sh-pinterest"><i class="fa fa-pinterest-p"
                                        aria-hidden="true"></i></a>
                                <a href="" class="sh-youtube"><i class="fa fa-youtube"
                                        aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-sm-3">
                        <div class="links">
                            <h3 class="title">customer service</h3>
                            <ul>
                                <li><a href="#">Advanced Search</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">RSS</a></li>
                                <li><a href="#">Help & FAQs</a></li>
                                <li><a href="#">Consultant</a></li>
                                <li><a href="#">Store Locations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3  col-sm-3">
                        <div class="tags">
                            <h3 class="title">popular tags</h3>
                            <ul>
                                <li><a href="#">New In</a></li>
                                <li><a href="#">Decor</a></li>
                                <li><a href="#">Light</a></li>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">Top Brands</a></li>
                                <li><a href="#">Sale & Special Offers</a></li>
                                <li><a href="#">Lookbook</a></li>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#"> Top view</a></li>
                                <li><a href="#">View all</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3  col-sm-3">
                        <div class="recent-blogspost">
                            <h3 class="title">Recent blogspost</h3>
                            <ul>
                                <li>
                                    <p>Ice-cream trucks only play music when out of ice-cream. Well played dad. On
                                        <a href="">@Quora</a>
                                    </p>
                                    <p class="date">3 minutes ago</p>
                                </li>
                                <li>
                                    <p>We are in the process of pushing out all of the new CC apps! We will tweet
                                        again once they are live <a href="">#CreativeCloud</a></p>
                                    <p class="date">3 minutes ago</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>

            <div class="footer-bottom">



                <div class="links">

                    <ul>
                        <li><a href="">Online Shopping </a></li>
                        <li><a href="">Promotions </a></li>
                        <li><a href="">My Orders </a></li>
                        <li><a href="">Help </a></li>
                        <li><a href="">Site Map </a></li>
                        <li><a href="">Customer Service </a></li>
                        <li><a href="">Support </a></li>
                    </ul>
                    <ul>
                        <li><a href="">Most Populars </a></li>
                        <li><a href="">Best Sellers </a></li>
                        <li><a href="">New Arrivals </a></li>
                        <li><a href="">Special Products </a></li>
                        <li><a href=""> Manufacturers </a></li>
                        <li><a href="">Our Stores </a></li>
                        <li><a href="">Shipping </a></li>
                        <li><a href="">Payments </a></li>
                        <li><a href="">Payments </a></li>
                        <li><a href="">Refunds </a></li>
                    </ul>
                    <ul>
                        <li><a href="">Terms & Conditions </a></li>
                        <li><a href="">Policy </a></li>
                        <li><a href="">Policy </a></li>
                        <li><a href=""> Shipping </a></li>
                        <li><a href="">Payments </a></li>
                        <li><a href="">Returns </a></li>
                        <li><a href="">Refunds </a></li>
                        <li><a href="">Warrantee </a></li>
                        <li><a href="">FAQ </a></li>
                        <li><a href="">Contact </a></li>
                    </ul>
                </div>

                <div class="copyright">
                    Copyright © 2022<a href="{{ url('/') }}" target="_blank"></a>
                </div>
                <div class="payment">
                    <img src="{{ asset('/') }}new/images/media/index9/payment1.png" alt="payment">
                    <img src="{{ asset('/') }}new/images/media/index9/payment2.png" alt="payment">
                    <img src="{{ asset('/') }}new/images/media/index9/payment3.png" alt="payment">
                    <img src="{{ asset('/') }}new/images/media/index9/payment4.png" alt="payment">
                </div>

            </div>

        </div>
    </footer>
    <!-- end FOOTER -->

    <!--back-to-top  -->
    <a href="#" class="back-to-top">
        <i aria-hidden="true" class="fa fa-angle-up"></i>
    </a>

    </div>
    <!-- Modal -->
    <div class="modal fade " id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="padding-top: 140px;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Product Short Description</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 16rem;">
                                <img src="" class="card-img-top" id="pimage" style="height: 240px;">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="card-title" id="pname"></h5></span>
                                </li>
                                <li class="list-group-item">Product code: <span id="pcode"> </span></li>
                                <li class="list-group-item">Category: <span id="pcat"> </span></li>
                                <li class="list-group-item">SubCategory: <span id="psubcat"> </span></li>
                                <li class="list-group-item">Brand: <span id="pbrand"> </span></li>
                                <li class="list-group-item">Stock: <span class="badge "
                                        style="background: green; color:white;">Available</span></li>
                            </ul>
                        </div>
                        <div class="col-md-4 ">
                            <form action="{{ route('insert.into.cart') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" id="product_id">
                                <div class="form-group" id="colordiv">
                                    <label for="">Color</label>
                                    <select name="color" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="sizediv">
                                    <label for="exampleInputEmail1">Size</label>
                                    <select name="size" class="form-control" id="size">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Quantity</label>
                                    <input type="number" class="form-control" value="1" name="qty">
                                </div>
                                <button type="submit" class="btn btn-primary">Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal end-->


    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('/') }}new/js/jquery.min.js"></script>

    <!-- sticky -->
    <script type="text/javascript" src="{{ asset('/') }}new/js/jquery.sticky.js"></script>

    <!-- OWL CAROUSEL Slider -->
    <script type="text/javascript" src="{{ asset('/') }}new/js/owl.carousel.min.js"></script>

    <!-- Boostrap -->
    <script type="text/javascript" src="{{ asset('/') }}new/js/bootstrap.min.js"></script>

    <!-- Countdown -->
    <script type="text/javascript" src="{{ asset('/') }}new/js/jquery.countdown.min.js"></script>

    <!--jquery Bxslider  -->
    <script type="text/javascript" src="{{ asset('/') }}new/js/jquery.bxslider.min.js"></script>

    <!-- actual -->
    <script type="text/javascript" src="{{ asset('/') }}new/js/jquery.actual.min.js"></script>

    <!-- Chosen jquery-->
    <script type="text/javascript" src="{{ asset('/') }}new/js/chosen.jquery.min.js"></script>

    <!-- parallax jquery-->
    <script type="text/javascript" src="{{ asset('/') }}new/js/jquery.parallax-1.1.3.js"></script>

    <!-- elevatezoom -->
    <script type="text/javascript" src="{{ asset('/') }}new/js/jquery.elevateZoom.min.js"></script>

    <!-- fancybox -->
    <script src="{{ asset('/') }}new/js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="{{ asset('/') }}new/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="{{ asset('/') }}new/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

    <!-- arcticmodal -->
    <script src="{{ asset('/') }}new/js/arcticmodal/jquery.arcticmodal.js"></script>

    <!-- Main -->
    <script type="text/javascript" src="{{ asset('/') }}new/js/main.js"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            @foreach ($brands as $brand)
                $('.brand{{ $brand->id }}').click(function() {
                    var id = $('.brand{{ $brand->id }}').val();


                    $.ajax({
                        url: "{{ url('/brandProduct/') }}/" + id,
                        type: "GET",
                        dataType: 'html',

                        success: function(data) {
                            console.log(data);
                            $('.brand').html(data);
                        }
                    });
                });
            @endforeach
        });
    </script>
    <script type="text/javascript">
        function productview(id) {
            $.ajax({
                url: "{{ url('/cart/product/view/') }}/" + id,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#pname').text(data.product.product_name);
                    $('#pimage').attr('src', data.product.image_one);
                    $('#pcat').text(data.product.category_name);
                    $('#psubcat').text(data.product.subcategory_name);
                    $('#pbrand').text(data.product.brand_name);
                    $('#pcode').text(data.product.product_code);
                    $('#product_id').val(data.product.id);

                    var d = $('select[name="size"]').empty();
                    $.each(data.size, function(key, value) {
                        $('select[name="size"]').append('<option value="' + value + '">' + value +
                            '</option>');
                        if (data.size == "") {
                            $('#sizediv').hide();
                        } else {
                            $('#sizediv').show();
                        }
                    });

                    var d = $('select[name="color"]').empty();
                    $.each(data.color, function(key, value) {
                        $('select[name="color"]').append('<option value="' + value + '">' + value +
                            '</option>');
                        if (data.color == "") {
                            $('#colordiv').hide();
                        } else {
                            $('#colordiv').show();
                        }
                    });
                }
            })
        }
    </script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('.addwishlist').on('click', function() {
                var id = $(this).data('id');
                if (id) {
                    $.ajax({
                        url: "{{ url('/add/wishlist/') }}/" + id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                            })

                            if ($.isEmptyObject(data.error)) {
                                Toast.fire({
                                    type: 'success',
                                    title: data.success
                                })
                            } else {
                                Toast.fire({
                                    type: 'error',
                                    title: data.error
                                })
                            }

                        },

                    });
                } else {
                    alert('danger');
                }
                e.preventDefault();
            });
        });
    </script>

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
        $(document).on("click", "#return", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            swal({
                    title: "Are you Want to Return?",
                    text: "Once Return,You will return your money!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = link;
                    } else {
                        swal("Cancel");
                    }
                });
        });
    </script>
</body>

</html>
