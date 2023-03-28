<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShirtColorController;
use App\Http\Controllers\ShirtSizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\FreightController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\OrderfController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\UsershopController;
use App\Http\Controllers\ForgotPasswordController;
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



 

Route::get('/', function () {
    return view('Frontend.index');
});

Route::get('/login.html', function () {
    return view('Frontend.login');
});

Route::post('/login', [UsershopController::class, 'login'])->name('login');

Route::get('/forgotpassword', [UsershopController::class, 'forgotpassword'])->name('forgotpassword');

Route::get('/edit_user', [UsershopController::class, 'edit_user'])->name('edit_user');

Route::post('/edit_user_store', [UsershopController::class, 'edit_user_store'])->name('edit_user_store');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');





Route::get('/logout', [UsershopController::class, 'logout'])->name('logout');

Route::get('/regis', [UsershopController::class, 'register'])->name('regis');

Route::post('/amphures', [UsershopController::class, 'amphures'])->name('amphures');

Route::post('/district', [UsershopController::class, 'district'])->name('district');

Route::post('/postcode', [UsershopController::class, 'postcode'])->name('postcode');

Route::post('/apply', [UsershopController::class, 'apply'])->name('apply');

Route::middleware(['auth.admin'])->group(function(){

    Route::get('indexLoginIsTrue.html', function () {
        return view('Frontend.indexLoginIsTrue');
    })->name('indexTrue');

Route::get('orderf.php', [OrderfController::class, 'index'])->name('orderf');

Route::post('buy.php', [OrderfController::class, 'buycolor'])->name('buy');

Route::post('checkorder3.php', [OrderfController::class, 'checkorder'])->name('checkorder3');

Route::post('checkorder4', [OrderfController::class, 'checkorderdetail'])->name('checkorder4');

Route::post('purchase', [OrderfController::class, 'purchase'])->name('purchase');

Route::post('sample', [OrderfController::class, 'sample'])->name('sample');

Route::post('purchase_1.php', [OrderfController::class, 'storedetail'])->name('purchase_1');

Route::post('store', [OrderfController::class, 'store'])->name('store');

Route::get('shopping.php', [OrderfController::class, 'shopping'])->name('shopping');

Route::post('simple.php', [OrderfController::class, 'sample'])->name('sample');

Route::post('confirmsimple', [OrderfController::class, 'confirmsample'])->name('confirmsample');

Route::post('payment', [OrderfController::class, 'payment'])->name('payment');

Route::get('contact.html', function () {
    return view('Frontend.contact');
});

Route::get('/login', function () {
    return view('Backend.login');
});

Route::get('/register', function () {
    return view('Backend.register');
});

Route::get('/check4', function () {
    return view('Frontend.checkorder4');
});

Route::get('/profile', function () {
    return view('Backend.profile');
});






Route::middleware(['is_admin'])->group(function(){

Route::get('/index_back', function () {
        return view('Backend.indexLoginIsTrue');
    });

Route::get('order.php', function () {
    return view('Backend.order');
});

Route::get('indexLoginIsTrue', [OrderAdminController::class, 'indexLoginIsTrue'])->name('indexLoginIsTrue');

Route::post('detailpurchase.php', [OrderAdminController::class, 'detailpurchase'])->name('detailpurchase');

Route::post('detailpurchase_store.php', [OrderAdminController::class, 'detailpurchase_store'])->name('detailpurchase_store');

Route::get('purchase.php', [OrderAdminController::class, 'purchase'])->name('purchaseback');

Route::get('order.php', [OrderAdminController::class, 'index'])->name('orderadmin');
Route::post('test2-2.php', [OrderAdminController::class, 'detail'])->name('orderadmin_detail');
Route::post('test2-2/edit', [OrderAdminController::class, 'edit'])->name('orderadmin_edit');

Route::get('checkorder.html', function () {
    return view('Backend.checkorder');
});
 
Route::get('adminpurchase.php', [OrderAdminController::class, 'payment'])->name('adminpurchase');

Route::get('managementSize.html', [ShirtSizeController::class, 'index'])->name('managementSize');
Route::post('/managementSize_store', [ShirtSizeController::class, 'store'])->name('managementSize_store');
Route::delete('/managementSize-delete', [ShirtSizeController::class, 'destroy'])->name('managementSize_delete');
Route::get('managementSize-edit/{id}', [ShirtSizeController::class, 'edit'])->name('managementSize_edit');
Route::put('managementSize-update', [ShirtSizeController::class, 'update'])->name('managementSize_update');

 
Route::get('managementColor.html', [ColorController::class, 'index'])->name('managementColor');
Route::post('/managementColor_store', [ColorController::class, 'store'])->name('managementColor_store');
Route::delete('/managementColor-delete', [ColorController::class, 'destroy'])->name('managementColor_delete');
Route::get('managementColor-edit/{id}', [ColorController::class, 'edit'])->name('managementColor_edit');
Route::put('managementColor-update', [ColorController::class, 'update'])->name('managementColor_update');

Route::get('managementColorTshirt.html', [ShirtColorController::class, 'index'])->name('managementColorTshirt');
Route::post('/shirtcolor_store', [ShirtColorController::class, 'store'])->name('shirtcolor_store');
Route::delete('/managementColorTshirt-delete', [ShirtColorController::class, 'destroy'])->name('managementColorTshirt_delete');
Route::get('managementColorTshirt-edit/{id}', [ShirtColorController::class, 'edit'])->name('managementColorTshirt_edit');
Route::put('managementColorTshirt-update', [ShirtColorController::class, 'update'])->name('managementColorTshirt_update');

Route::get('managementBlock.html', [BlockController::class, 'index'])->name('managementBlock');
Route::post('/managementBlock_store', [BlockController::class, 'store'])->name('managementBlock_store');
Route::delete('/managementBlock-delete', [BlockController::class, 'destroy'])->name('managementBlock_delete');
Route::get('managementBlock-edit/{id}', [BlockController::class, 'edit'])->name('managementBlock_edit');
Route::put('managementBlock-update', [BlockController::class, 'update'])->name('managementBlock_update');

Route::get('managementTransport.html', [FreightController::class, 'index'])->name('managementTransport');
Route::post('/managementTransport', [FreightController::class, 'store'])->name('managementTransport_store');
Route::delete('/managementTransport-delete', [FreightController::class, 'destroy'])->name('managementTransport_delete');
Route::get('managementTransport-edit/{id}', [FreightController::class, 'edit'])->name('managementTransport_edit');
Route::put('managementTransport-update', [FreightController::class, 'update'])->name('managementTransport_update');
Route::post('managementTransport-search', [FreightController::class, 'search'])->name('managementTransport_search');

Route::get('/user', [OrderAdminController::class, 'user'])->name('user');

Route::post('/user_show', [OrderAdminController::class, 'user_show'])->name('user_show');

Route::put('Transport-select/{id}', [FreightController::class, 'select'])->name('Transport_select');

Route::post('Transport.html', [TransportController::class, 'store'])->name('Transport_store');
});







});

