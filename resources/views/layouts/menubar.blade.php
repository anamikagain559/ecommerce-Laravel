@php
$category = DB::table('categories')->get();
@endphp
<nav class="main_nav">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="main_nav_content d-flex flex-row">

                    <!-- Categories Menu -->

                    <div class="cat_menu_container">
                        <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                            <div class="cat_burger"><span></span><span></span><span></span></div>
                            <div class="cat_menu_text">categories</div>
                        </div>

                        <ul class="cat_menu">
                            @foreach ($category as $cat)
                                <li class="hassubs">
                                    <a href="{{ url('category/' . $cat->id) }}">{{ $cat->category_name }}<i
                                            class="fa fa-chevron-right"></i></a>
                                    <ul>
                                        @php
                                            $subcategory = DB::table('subcategories')
                                                ->where('category_id', $cat->id)
                                                ->get();
                                        @endphp
                                        @foreach ($subcategory as $row)
                                            <li><a href="{{ url('products/' . $row->id) }}">{{ $row->subcategory_name }}<i
                                                        class="fa fa-chevron-right"></i></a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>



                    <!-- Main Nav Top Menu -->

                    <div class="main_nav_menu ml-auto">
                        <ul class="standard_dropdown main_nav_dropdown">


                            <li><a href="">Blog<i class="fa fa-chevron-down"></i></a></li>
                            <li><a href="contact.html">Contact<i class="fa fa-chevron-down"></i></a></li>
                        </ul>
                    </div>

                    <!-- Menu Trigger -->

                    <div class="menu_trigger_container ml-auto">
                        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                            <div class="menu_burger">
                                <div class="menu_trigger_text">menu</div>
                                <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Menu Mobile screen-->



</header>

@php
$sliders = DB::table('products')
    ->join('brands', 'products.brand_id', 'brands.id')
    ->select('products.*', 'brands.brand_name')
    ->where('products.main_slider', 1)
    ->orderBy('id', 'DESC')
    ->limit(10)
    ->get();
@endphp
<!-- Banner -->
{{-- <div class="banner_2_container">
    <div class="banner_2_dots" style="align-center"></div>
    <div class="owl-carousel owl-theme banner_2_slider">
        @foreach ($sliders as $slider)
            <div class="banner">
                <div class="banner_background"
                    style="background-image:url({{ asset('frontend/images/banner_background.jpg') }})"></div>
                <div class="container fill_height">
                    <div class="row fill_height">
                        <div class="banner_product_image"><img src="{{ asset($slider->image_one) }}" alt=""
                                height="400px" width="400px"></div>
                        <div class="col-lg-5 offset-lg-4 fill_height">
                            <div class="banner_content">
                                <h1 class="banner_text">{{ $slider->product_name }}</h1>
                                <div class="banner_price">
                                    @if ($slider->discount_price == null)
                                        <h2>${{ $slider->selling_price }}</h2>
                                    @else
                                        <span>${{ $slider->selling_price }}</span>${{ $slider->discount_price }}
                                    @endif

                                </div>
                                <div class="banner_product_name">{{ $slider->brand_name }}</div>
                                <div class="button banner_button"><a href="#">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}
</div>
