<?php

//socialite
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::get('/', function () {
    return view('pages.index2');
});
Route::get('/buyonegetone', 'frontController@buyonegetone')->name('buyonegetone');
Route::get('/trade', 'frontController@trade')->name('trade');
Route::get('/off', 'frontController@off')->name('off');
Route::get('/newarri', 'frontController@newarri')->name('newarri');
Route::get('/bestrate', 'frontController@bestrate')->name('bestrate');
//auth & user
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
// Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password', 'AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update', 'AdminController@Update_pass')->name('admin.password.update');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

//admin section----------------
//categories--------
Route::get('admin/catgories', 'Admin\Category\CategoryController@category')->name('categories');
Route::post('admin/store/category', 'Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('delete/category/{id}', 'Admin\Category\CategoryController@DeleteCategory');
Route::get('edit/category/{id}', 'Admin\Category\CategoryController@EditCategory');
Route::post('update/category/{id}', 'Admin\Category\CategoryController@UpdateCategory');

//brands=====
Route::get('admin/brands', 'Admin\Category\CategoryController@brand')->name('brands');
Route::post('admin/store/brand', 'Admin\Category\CategoryController@storebrand')->name('store.brand');
Route::get('delete/brand/{id}', 'Admin\Category\CategoryController@DeleteBrand');
Route::get('edit/brand/{id}', 'Admin\Category\CategoryController@EditBrand');
Route::post('update/brand/{id}', 'Admin\Category\CategoryController@UpdateBrand');
//sub categories=====
Route::get('admin/sub/category', 'Admin\Category\CategoryController@subcategories')->name('sub.categories');
Route::post('admin/store/subcat', 'Admin\Category\CategoryController@storesubcat')->name('store.subcategory');
Route::get('delete/subcategory/{id}', 'Admin\Category\CategoryController@DeleteSubCat');
Route::get('edit/subcategory/{id}', 'Admin\Category\CategoryController@EditSubCat');
Route::post('update/subcategory/{id}', 'Admin\Category\CategoryController@UpdateSubCat');
//coupon------
Route::get('admin/sub/coupon', 'Admin\CouponController@Coupon')->name('admin.coupon');
Route::post('admin/store/coupon', 'Admin\CouponController@StoreCoupon')->name('store.coupon');
Route::get('delete/coupon/{id}', 'Admin\CouponController@DeleteCoupon');
Route::get('edit/coupon/{id}', 'Admin\CouponController@EditCoupon');
Route::post('update/coupon/{id}', 'Admin\CouponController@UpdateCoupon');

//newslater
Route::get('admin/newslater', 'Admin\CouponController@Newslater')->name('admin.newslater');
Route::get('delete/sub/{id}', 'Admin\CouponController@DeleteSub');
Route::get('admin/seo', 'Admin\CouponController@Seo')->name('admin.seo');
Route::post('admin/update/seo', 'Admin\CouponController@UpdateSeo')->name('update.seo');
//products routes=====
Route::get('admin/product/all', 'Admin\ProductController@index')->name('all.product');
Route::get('admin/product/add', 'Admin\ProductController@create')->name('add.product');
Route::post('admin/store/product', 'Admin\ProductController@store')->name('store.product');
Route::get('inactive/product/{id}', 'Admin\ProductController@Inactive');
Route::get('active/product/{id}', 'Admin\ProductController@Active');
Route::get('delete/product/{id}', 'Admin\ProductController@DeleteProduct');
Route::get('view/product/{id}', 'Admin\ProductController@ViewProduct');
Route::get('edit/product/{id}', 'Admin\ProductController@EditProduct');
Route::post('update/product/withoutphoto/{id}', 'Admin\ProductController@UpdateProductWithoutPhoto');
Route::post('update/product/photo/{id}', 'Admin\ProductController@UpdateProductPhoto');

//admin order routes
Route::get('admin/pending/order', 'Admin\OrderController@NewOrder')->name('admin.neworder');
Route::get('admin/view/order/{id}', 'Admin\OrderController@ViewOrder');
Route::get('admin/payment/accept/{id}', 'Admin\OrderController@PaymentAccept');
Route::get('admin/payment/cancel/{id}', 'Admin\OrderController@PaymentCancel');
Route::get('admin/accept/payment', 'Admin\OrderController@AcceptPaymentOrder')->name('admin.accept.payment');
Route::get('admin/progress/payment', 'Admin\OrderController@ProgressPaymentOrder')->name('admin.progress.payment');
Route::get('admin/success/payment', 'Admin\OrderController@SuccessPaymentOrder')->name('admin.success.payment');
Route::get('admin/cancel/payment', 'Admin\OrderController@CancelPaymentOrder')->name('admin.cancel.order');
Route::get('admin/delevery/progress/{id}', 'Admin\OrderController@DeleveryProgress');
Route::get('admin/delevery/done/{id}', 'Admin\OrderController@DeleveryDone');

//frontedn all routesa are here--------
Route::post('store/newslater', 'FrontController@StoreNewslater')->name('store.newslater');
Route::get('/product/details/{id}/{product_name}', 'ProductController@ProductView');
Route::post('/cart/product/add/{id}', 'ProductController@AddCart');
Route::get('/products/{id}', 'ProductController@productsView');
Route::post('product/search', 'FrontController@ProductSearch')->name('product.search');
//category post--------
Route::get('/category/{id}', 'ProductController@productByCategory')->name('category.products');
Route::get('/brand/{id}', 'ProductController@productByBrand')->name('brand.products');
//wishlists
Route::get('add/wishlist/{id}', 'WishlistController@AddWishlist');
Route::get('brandProduct/{id}', 'frontController@BrandProduct');
//cart
Route::get('add/to/cart/{id}', 'CartController@AddCart');
Route::get('check', 'CartController@check');
Route::get('/cart', 'CartController@showCart')->name('show.cart');
Route::get('remove/cart/{rowId}', 'CartController@removeCart');
Route::post('update/cart/item', 'CartController@UpdateCart')->name('update.cartitem');
Route::get('cart/product/view/{id}', 'CartController@ViewProduct');
Route::post('insert/into/cart/', 'CartController@InsertCart')->name('insert.into.cart');
Route::get('user/checkout/', 'CartController@Checkout')->name('user.checkout');
Route::get('user/wishlist/', 'CartController@Wishlist')->name('user.wishlist');
Route::post('user/apply/coupon/', 'CartController@Coupon')->name('apply.coupon');
Route::get('coupon/remove/', 'CartController@CouponRemove')->name('coupon.remove');
Route::get('payment/page/', 'CartController@PymentPage')->name('payment.step');
//payment methods
Route::post('user/payment/process/', 'PaymentController@payment')->name('payment.process');
Route::any('user/stripe/charge/', 'PaymentController@STripeCharge')->name('stripe.charge');
Route::get('success/list/', 'PaymentController@SuccessList')->name('success.orderlist');
Route::get('request/return/{id}', 'PaymentController@RequestReturn');
Route::any('user/cashonedelivery/', 'PaymentController@cashonedelivery')->name('cashonedelivery');
