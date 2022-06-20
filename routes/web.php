<?php

use App\Http\Livewire\AdminaddBlogComponent;
use App\Http\Livewire\AdminAddCategoryComponent;
use App\Http\Livewire\AdminAddCouponsComponent;
use App\Http\Livewire\AdminAddHomeSliderComponent;
use App\Http\Livewire\AdminAddProductComponent;
use App\Http\Livewire\AdminBlogComponent;
use App\Http\Livewire\AdminCategoryComponent;
use App\Http\Livewire\AdminContactComponent;
use App\Http\Livewire\AdminCouponsComponent;
use App\Http\Livewire\AdminEditBlogComponent;
use App\Http\Livewire\AdminEditCategoryComponent;
use App\Http\Livewire\AdminEditCouponsComponent;
use App\Http\Livewire\AdminEditHomeSliderComponent;
use App\Http\Livewire\AdminEditProductComponent;
use App\Http\Livewire\AdminHomeSliderComponent;
use App\Http\Livewire\AdminOrderComponent;
use App\Http\Livewire\AdminOrderDetailsComponent;
use App\Http\Livewire\AdminProductComponent;
use App\Http\Livewire\AdminSettingComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\BlogDetailsComponent;
use App\Http\Livewire\BlogsComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\ProductsComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\UserOrderComponent;
use App\Http\Livewire\UserOrderDetailsComponent;
use App\Http\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class)->name('home');
Route::get('/products', ProductsComponent::class)->name('products');
Route::get('/blogs', BlogsComponent::class)->name('blogs');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/product-details/{slug}', ProductDetailsComponent::class)->name('product.details');
Route::get('/blog-details/{slug}', BlogDetailsComponent::class)->name('blog.details');
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/wishlist', WishlistComponent::class)->name('product.wishlist');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/search', SearchComponent::class)->name('product.search');
Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/about-us', AboutComponent::class)->name('about');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//For user
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/user/orders', UserOrderComponent::class)->name('user.orders');
    Route::get('/user/orders/{order_id}', UserOrderDetailsComponent::class)->name('user.orderdetails');
});
//for Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/blogs', AdminBlogComponent::class)->name('admin.blogs');

    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/categories/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/blogs/add', AdminaddBlogComponent::class)->name('admin.addblog');

    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get('/admin/categories/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/blogs/edit/{blog_slug}', AdminEditBlogComponent::class)->name('admin.editblog');

    Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get('/admin/slider/add', AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slide_id}', AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

    Route::get('/admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');
    Route::get('/admin/coupons/add', AdminAddCouponsComponent::class)->name('admin.addcoupon');
    Route::get('/admin/coupons/edit/{coupon_id}', AdminEditCouponsComponent::class)->name('admin.editcoupon');

    Route::get('/admin/contact-us', AdminContactComponent::class)->name('admin.contact');
    Route::get('/admin/settings', AdminSettingComponent::class)->name('admin.settings');

    Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin/orders/{order_id}', AdminOrderDetailsComponent::class)->name('admin.orderdetails');
});