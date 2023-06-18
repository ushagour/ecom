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
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\CatalogeComponent;
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
use App\Http\Livewire\Admin\AdminSubCategoryComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\User\UserEditProfileComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\User\UserOrdersDetailsComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserReviewComponent;
use App\Http\Controllers\PDFController;
use App\Http\Livewire\Admin\AdminAddAttributeComponent;
use App\Http\Livewire\Admin\AdminAttributesComponent;
use App\Http\Livewire\Admin\AdminEditAttributeComponent;


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
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/shop',ShopComponent::class);
Route::get('/about',AboutUsComponent::class);
Route::get('/contact-us',ContactUsComponent::class)->name('contact.us');
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');
Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/search',SearchComponent::class)->name('product.search');
Route::get('/wishlist',WishlistComponent::class)->name('wishlist');
Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');
Route::get('/cataloge', CatalogeComponent::class)->name('cataloge');


// Route::get('/test',TestController::class,'test');
Route::get('/test', [TestController::class, 'test']);
Route::get('generate-invoice-pdf',[PDFController::class, 'generateInvoicePDF'])->name('generateDevi');;





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
    Route::get('/admin/categories/edit/{category_slug}',AdminCategoryComponent::class)->name('admin.editcategories');
  
    Route::get('/admin/subCategories',AdminSubCategoryComponent::class)->name('admin.subCategories');
    Route::get('/admin/subCategories/edit/{sub_category_slug}',AdminSubCategoryComponent::class)->name('admin.editSubCategories');
  
    Route::get('/admin/home-categories',AdminHomeCategoriesComponent::class)->name('admin.home.categories');
    Route::get('/admin/OnSale',AdminOnsaleComponent::class)->name('admin.OnSale');
    
    Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin/orders/{order_id}', AdminOrderDetailsComponent::class)->name('admin.orderdetails');
  
  
    // Route::get('admin/settings', AdminSettingComponent::class)->name('admin.settings');
  
    Route::get('admin/attributes', AdminAttributesComponent::class)->name('admin.attributes');
    Route::get('admin/attribute/add', AdminAddAttributeComponent::class)->name('admin.add_attribute');
    Route::get('admin/attribute/edit/{attribute_id}', AdminEditAttributeComponent::class)->name('admin.edit_attribute');
  });
  Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/orders', UserOrdersComponent::class)->name('user.orders');
    Route::get('/user/orders/{order_id}', UserOrdersDetailsComponent::class)->name('user.orderdetails');
    Route::get('/user/review/{order_item_id}', UserReviewComponent::class)->name('user.review');
    Route::get('/user/change-password', UserChangePasswordComponent::class)->name('user.changepassword');
    Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
    Route::get('/user/profile/edit', UserEditProfileComponent::class)->name('user.editprofile');
  });
  

