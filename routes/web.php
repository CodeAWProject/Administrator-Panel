<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::resource('auth', AuthController::class)
    ->only(['create', 'store', 'register']);

Route::resource('user', UserController::class);

Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy'])
    ->name('auth.destroy');
    
Route::middleware('auth')->group(function () {
    Route::resource('company', CompanyController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('invoices', InvoiceController::class)
    ->only(['index', 'create', 'store']);
    Route::get('settings', [SettingController::class, 'settings'])->name('settings');
    Route::get('settings/invoice_templates', [SettingController::class, 'invoiceTemplates'])->name('invoice_templates');
    Route::get('settings/invoice_templates/{invoice}', [SettingController::class, 'changeInvoiceTemplate'])->name('changeInvoiceTemplate');
    Route::put('settings/invoice_templates/update', [SettingController::class, 'updateInvoiceTemplate'])->name('update_invoiceTemplate');
    Route::get('change_password', [SettingController::class, 'editChangePassword'])->name('change_password');
    Route::put('update_password/{user}', [SettingController::class, 'updatePassword'])->name('update_password');
    Route::get('change_email', [SettingController::class, 'editChangeEmail'])->name('change_email');
    Route::put('update_email/{user}', [SettingController::class, 'updateEmail'])->name('update_email');
    Route::get('change_username', [SettingController::class, 'editUsername'])->name('change_username');
    Route::put('update_username/{user}', [SettingController::class, 'updateUsername'])->name('update_username');
    Route::post('invoices/view-pdf', [PDFController::class, 'viewPDF'])->name('view_pdf');
    Route::post('invoices/download-pdf', [PDFController::class, 'downloadPDF'])->name('download_pdf');
    //Route::get('invoice_template/1', [SettingController:: class, 'invoiceTemplate1'])->name('invoice1');

});
