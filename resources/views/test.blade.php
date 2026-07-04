<div class="tab-content">
    <div class="row">

        @foreach ($Brandproduct as $row)
            @php
                $i = 1;
            @endphp



            <div class="item">
                <div class=" col-md-2  product-item product-item-opt-14">
                    <div class="product-item-info">

                        <div class="product-item-photo">
                            <a class="product-item-img" href=""><img alt="product name"
                                    src="{{ asset($row->image_one) }}"></a>
                            <div class="product-item-actions">
                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                <a class="btn btn-compare" href=""><span>compare</span></a>
                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                            </div>
                            <button type="button" class="btn btn-cart"><span>Add to
                                    Cart</span></button>
                            <span class="product-item-label label-new">new</span>
                        </div>
                        <div class="product-item-detail">
                            <strong class="product-item-name"><a href="">Smart Classic
                                    Chair </a></strong>
                            <div class="product-item-price">
                                <span class="price">$86.95 </span>
                            </div>
                            <div class="product-item-actions-secondary">
                                <button type="button" class="btn btn-cart"><span>Add
                                        to
                                        Cart</span></button>
                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            @php
                $i++;
            @endphp
        @endforeach
    </div>
</div>
