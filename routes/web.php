<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\index;
use App\Http\Controllers\TinController;
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
Route::get('/', [FrontEndController::class, 'index'])->name('home.index');

Route::get('/danh-muc/{slug}', [FrontEndController::class, 'category'])->name('category');

route::get('/detail/{id}', [FrontendController::class, 'showArticle'])->name('detail.show');
// Hiển thị tin theo loại
Route::get('/category/{categoryId}', [FrontendController::class, 'articlesByCategory'])->name('category.articles');
Route::get('/search', [FrontendController::class, 'search'])->name('search');
// Route::get('/search-not-found', [FrontendController::class, 'searchNotFound'])->name('searchNotFound');
Route::get('/search-not-found', function () {
    return view('client.page.search-not-found');
})->name('searchNotFound');

//middleware
// Route::middleware('auth')->group(function(){
    Route::get('/list/{menuId}', [FrontendController::class, 'listMenuById'])->name('menu.show');
// });

Route::get('/lienhe', [FrontendController::class, 'contact'])->name('lienhe.contact');
