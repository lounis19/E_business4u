<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LanguageController;
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
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*language*/
Route::get('lang/{locale}', [App\Http\Controllers\LanguageController::class,'index'])->name('language');

Route::Post('/send-email', [App\Http\Controllers\MailController::class, 'sendEmail']);

/*template_4*/
Route::view('temp','template_4/template_4');
Route::view('contact','template_4/contact');
Route::view('propos','template_4/a_propos');

Route::view('essaie','template_4/essaie');

Route::view('ez','template_4/ez');
Route::view('ebs','e_business/e_business');

Route::view('sps','template_4/special');


/**** */
Route::view('bsn','template_4/business4u/index');