@extends('layouts.app')
@section('content')
    {{-- @include('layouts.menubar') --}}
    <!-- Characteristics -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    @php

    $trend = DB::table('products')
        ->whereNotNull('discount_price')
        ->orderBy('id', 'desc')
        ->limit(4)
        ->get();

    @endphp



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
                            <div class="new_arrivals_title">Product With 40% Discount</div>
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
                                                                    BDT{{ $row->selling_price }} </b></span>
                                                        @else
                                                            <div class="product_price discount">
                                                                BDT{{ $row->discount_price }}<span>BDT{{ $row->selling_price }}</span>
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
