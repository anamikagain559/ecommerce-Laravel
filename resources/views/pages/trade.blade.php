@extends('layouts.app')
@section('content')
    {{-- @include('layouts.menubar') --}}
    <!-- Characteristics -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    @php
    $featured = DB::table('products')
        ->where('status', 1)
        ->orderBy('id', 'desc')
        ->limit(24)
        ->get();
    $trend = DB::table('products')
        ->where('status', 1)
        ->where('trend', 1)
        ->orderBy('id', 'desc')
        ->limit(10)
        ->get();

    $hot = DB::table('products')
        ->join('brands', 'products.brand_id', 'brands.id')
        ->select('brands.brand_name', 'products.*')
        ->where('products.status', 1)
        ->where('hot_deal', 1)
        ->orderBy('id', 'desc')
        ->limit(4)
        ->get();
    @endphp


    <!-- Banner -->
    @php
    $mid = DB::table('products')
        ->join('categories', 'products.category_id', 'categories.id')
        ->join('brands', 'products.brand_id', 'brands.id')
        ->select('products.*', 'brands.brand_name', 'categories.category_name')
        ->where('products.mid_slider', 1)
        ->orderBy('id', 'DESC')
        ->limit(4)
        ->get();
    @endphp


    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">New Trend</div>
                            <ul class="clearfix">
                                <li class="active"></li>

                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">
                                        @foreach ($trend as $row)
                                            <!-- Slider Item -->
                                            <div class="featured_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="{{ asset($row->image_one) }}"
                                                            style="height: 120px; width: 130px;">
                                                    </div>
                                                    <div class="product_content">
                                                        @if ($row->discount_price == null)
                                                            <br><span class="text-danger"><b>
                                                                    ${{ $row->selling_price }} </b></span>
                                                        @else
                                                            <div class="product_price discount">
                                                                ${{ $row->discount_price }}<span>${{ $row->selling_price }}</span>
                                                            </div>
                                                        @endif
                                                        <div class="product_name">
                                                            <div><a href="#">
                                                                    {{ $row->product_name }}
                                                                </a></div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <button id="{{ $row->id }}"
                                                                class="product_cart_button addcart" data-toggle="modal"
                                                                data-target="#cartmodal" onclick="productview(this.id)">Add
                                                                to Cart</button>

                                                        </div>
                                                    </div>
                                                    <button class="addwishlist" data-id="{{ $row->id }}">
                                                        <div class="product_fav">
                                                            <i class="fa fa-heart text-info"></i>
                                                        </div>
                                                    </button>
                                                    <ul class="product_marks">
                                                        @if ($row->discount_price == null)
                                                            <li class="product_mark product_discount"
                                                                style="background: green;">Trend</li>
                                                        @else
                                                            @php
                                                                $amount = $row->selling_price - $row->discount_price;
                                                                $discount = ($amount / $row->selling_price) * 100;
                                                            @endphp
                                                            <li class="product_mark product_discount">

                                                                {{ intval($discount) }}%
                                                            </li>
                                                        @endif


                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="arrivals_slider_dots_cover"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--first category--->
    @php
    $cats = DB::table('categories')
        ->skip(5)
        ->first();
    $category_id = $cats->id;
    $products = DB::table('products')
        ->where('category_id', $category_id)
        ->where('status', 1)
        ->limit(16)
        ->orderBy('id', 'DESC')
        ->get();

    @endphp


    <div class="trends">
        <div class="trends_background"
            style="background-image:url({{ asset('frontend/images/trends_background.jpg') }})"></div>
        <div class="trends_overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title">Buy One Get One</h2>
                        <div class="trends_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
                        </div>
                        <div class="trends_slider_nav">
                            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>
                @php
                    $buyget = DB::table('products')
                        ->where('status', 1)
                        ->where('buyone_getone', 1)
                        ->orderBy('id', 'desc')
                        ->limit(12)
                        ->get();
                @endphp
                <!-- Trends Slider -->
                <div class="col-lg-9">
                    <div class="trends_slider_container">

                        <!-- Trends Slider -->

                        <div class="owl-carousel owl-theme trends_slider">
                            @foreach ($buyget as $row)
                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{ asset($row->image_one) }}" style="height: 220px;">
                                        </div>
                                        <div class="trends_content">

                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a href="#">{{ $row->product_name }}</a>
                                                </div><br>
                                                {{-- <div class="trends_price">$379</div> --}}
                                                @if ($row->discount_price == null)
                                                    <br><span class="text-danger"><b> ${{ $row->selling_price }}
                                                        </b></span>
                                                @else
                                                    <div class="product_price discount">
                                                        ${{ $row->discount_price }}<span>${{ $row->selling_price }}</span>
                                                    </div>
                                                @endif
                                                <a id="{{ $row->id }}"
                                                    class="btn btn-danger btn-sm pull-right addcart" data-toggle="modal"
                                                    data-target="#cartmodal" onclick="productview(this.id)">add to cart</a>

                                            </div>

                                        </div>
                                        <ul class="trends_marks">
                                            {{-- <li class="trends_mark trends_discount">-25%</li> --}}
                                            @if ($row->discount_price == null)
                                                <li class="product_mark product_discount" style="background: blue;">New
                                                </li>
                                            @else
                                                @php
                                                    $amount = $row->selling_price - $row->discount_price;
                                                    $discount = ($amount / $row->selling_price) * 100;
                                                @endphp
                                                <li class="product_mark product_discount">

                                                    {{ intval($discount) }}%
                                                </li>
                                            @endif

                                            <li class="trends_mark trends_new">Extra One</li>
                                        </ul>
                                        {{-- <button
                                                      class="addwishlist" data-id="{{ $row->id }}">
                                                      <div class="product_fav">
                                                         <i class="fa fa-heart text-info"></i>
                                                      </div>
                                                   </button> --}}
                                        <button class="addwishlist" data-id="{{ $row->id }}">
                                            <div class="trends_fav"><i class="fa fa-heart text-danger"></i></div>
                                        </button>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Reviews -->






    <!-- Brands -->



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
@endsection
