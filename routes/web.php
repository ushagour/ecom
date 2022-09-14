<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CheckoutComponent;        
use App\Http\Livewire\CategoryComponent;        
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\TestComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AddHomeSliderComponent;
use App\Http\Livewire\Admin\EditHomeSliderComponent;
use App\Http\Livewire\Admin\EditProductComponenet;
use App\Http\Livewire\Admin\AdminOnsaleComponent;
use App\Http\Livewire\Admin\AdminHomeCategoriesComponent;
use App\Http\Livewire\User\UserDashboardComponent;

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

Route::get('/',HomeComponent::class);
Route::get('/cart',CartComponent::class)->name('product.cart');
Route::get('/checkout',CheckoutComponent::class);
Route::get('/shop',ShopComponent::class);
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');

Route::get('/search',SearchComponent::class)->name('product.search');

Route::get('/message',TestComponent::class)->name('message');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//for admin

Route::middleware([
    'auth:sanctum',
    'verified'
])->group(function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/add_product',AddProductComponent::class)->name('add.product');
    Route::get('/admin/product/edit/{product_slug}',EditProductComponenet::class)->name('edit.product');

    Route::get('/admin/sliders',AdminHomeSliderComponent::class)->name('admin.sliders');
    Route::get('/admin/add_sliders',AddHomeSliderComponent::class)->name('add.sliders');
    Route::get('/admin/sliders/edit/{id}',EditHomeSliderComponent::class)->name('edit.sliders');
    
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/categories/edit/{category_slug}',AdminCategoryComponent::class)->name('admin.admin.editcategories');
    
    Route::get('/admin/home-categories',AdminHomeCategoriesComponent::class)->name('admin.home.categories');
    Route::get('/admin/OnSale',AdminOnsaleComponent::class)->name('admin.OnSale');

});
//for user and customer

Route::middleware([
    'auth:sanctum',
    'verified'
])->group(function () {
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});


