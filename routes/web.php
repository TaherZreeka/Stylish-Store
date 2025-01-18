<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductAttributeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductDiscountController;
use App\Http\Controllers\Customer\CoustomerMainController;
use App\Http\Controllers\MasterCategoryContoller;
use App\Http\Controllers\MasterSubCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Seller\SellerMainController;
use App\Http\Controllers\Seller\SellerProductController;
use App\Http\Controllers\Seller\SellerStoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Start Admin Routes
Route::middleware(['auth', 'verified','rolemanager:admin'])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::controller(AdminMainController::class)->group(function (){
            Route::get('/dashboard','index')->name('admin');
        Route::get('/settings','setting')->name(name: 'admin.settings');
        Route::get('/manage/users','manage_user')->name('admin.manage.user');
        Route::get('/manage/stores','manage_store')->name('admin.manage.store');
        Route::get('/cart/history','cart_history')->name('admin.cart.history');
        Route::get('/order/history','order_history')->name('admin.order.history');
        });
         Route::controller(CategoryController::class)->group(function (){
            Route::get('/category/create','index')->name('category.create');
            Route::get('/category/manage','manage')->name('category.manage');
        });
         Route::controller(SubCategoryController::class)->group(function (){
            Route::get('/subcategory/create','index')->name('sub_category.create');
            Route::get('/subcategory/manage','manage')->name('sub_category.manage');
        });
        Route::controller(ProductController::class)->group(function (){
            Route::get('/product/manage','index')->name('product.manage');
            Route::get('/product/review/manage','review_manage')->name('product.review.manage');
        });

         Route::controller(ProductDiscountController::class)->group(function (){
            Route::get('/discount/create','index')->name('discount.create');
            Route::get('/discount/manage','manage')->name('discount.manage');
        });
          Route::controller(ProductAttributeController::class)->group(function (){
            Route::get('/product_attribute/create','index')->name('product_attribute.create');
            Route::get('/product_attribute/manage','manage')->name('product_attribute.manage');
            Route::post('/default_attribute/create','createattribute')->name('attribute.create');
            Route::get('/default_attribute/show/{id}','showattribute')->name('attribute.show');
            Route::put('/default_attribute/update/{id}','updateattribute')->name('attribute.update');
            Route::delete('/default_attribute/delete{id}','deleteattribute')->name('attribute.delete');
        });
        Route::controller(MasterCategoryContoller::class)->group(function (){
            Route::post('/store/category','storecat')->name('store.cat');
            Route::get('/category/{id}','showcat')->name('show.cat');
            Route::put('/category/update/{id}','updatecat')->name('update.cat');
            Route::delete('/category/delete/{id}','deletecat')->name('delete.cat');
        });
        Route::controller(MasterSubCategoryController::class)->group(function (){
            Route::post('/store/subcategory','storesubcat')->name('store.subcat');
            Route::get('/subcategory/{id}','showsubcat')->name('show.subcat');
            Route::put('/subcategory/update/{id}','updatesubcat')->name('update.subcat');
            Route::delete('/subcategory/delete/{id}','deletesubcat')->name('delete.subcat');
        });
    });

});
// End Admin Routes

// Start Seller Routes
Route::middleware(['auth', 'verified','rolemanager:vendor'])->group(function () {
    Route::prefix('vendor')->group(function(){
        Route::controller(SellerMainController::class)->group(function (){
            Route::get('/dashboard','index')->name('vendor');
            Route::get('/order/history','orderhistory')->name('vendor.order.history');
        });
        Route::controller(SellerStoreController::class)->group(function (){
            Route::get('/store/create','index')->name('vendor.store');
            Route::get('/store/manage','manage')->name('vendor.store.manage');
            Route::post('/store/publish','store')->name('create.store');
            Route::get('/store/show/{id}','show')->name('show.store');
            Route::put('/store/update{id}','update')->name('update.store');
            Route::delete('/store/delete{id}','delete')->name('delete.store');
        });
        Route::controller(SellerProductController::class)->group(function (){
            Route::get('/product/create','index')->name('vendor.product');
            Route::get('/product/manage','manage')->name('vendor.product.manage');
        });

        });
    });

// End Seller Routes


// Start Customer Routes
Route::middleware(['auth', 'verified','rolemanager:customer'])->group(function () {
    Route::prefix('user')->group(function(){
        Route::controller(CoustomerMainController::class)->group(function (){
            Route::get('/dashboard','index')->name('customer.dashboard');
            Route::get('/order/history','history')->name('customer.history');
            Route::get('/settings/payment','payment')->name('customer.payment');
            Route::get('/affiliate','affiliate')->name('customer.affiliate');
        });

        });

        });

// End Customer Routes




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';