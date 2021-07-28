<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/admin/products', [ProductController::class, 'index']);
Route::get('/admin/products/create', [ProductController::class, 'create']);
Route::post('/admin/products', [ProductController::class, 'store']);

Route::get('/welcome', [WelcomeController::class, 'welcome']);

Route::get('/users/login', [UserController::class, 'login']);
Route::get('/users/detail/{id}', [UserController::class, 'getUserDetail']);

Route::get('/users/signup', [UserController::class, 'signup']);
Route::post('/users/signup', [UserController::class, 'processSignup']);

Route::get('/demo/page1', [LayoutController::class, 'page1']);
Route::get('/demo/page2', [LayoutController::class, 'page2']);
Route::get('/demo/page3', [LayoutController::class, 'page3']);

Route::get('/admin/index', [AdminController::class, 'showIndex']);
Route::get('/admin/list', [AdminController::class, 'showList']);
Route::get('/admin/form', [AdminController::class, 'showForm']);

//Route::get('/admin/article-categories/create', [ArticleCategoryController::class, 'create']);
//Route::post('/admin/article-categories', [ArticleCategoryController::class, 'store']);
//Route::get('/admin/article-categories', [ArticleCategoryController::class, 'index']);
//Route::get('/admin/article-categories/{id}', [ArticleCategoryController::class, 'show']);
//Route::get('/admin/article-categories/{id}/edit', [ArticleCategoryController::class, 'edit']);
//Route::put('/admin/article-categories/{id}', [ArticleCategoryController::class, 'update']);
//Route::delete('/admin/article-categories/{id}', [ArticleCategoryController::class, 'destroy']);
Route::resource('admin/article-categories', 'App\Http\Controllers\ArticleCategoryController');
Route::resource('admin/articles', 'App\Http\Controllers\ArticleController');
Route::get('/cart/add',[\App\Http\Controllers\ShoppingcartController::class,'add']);
Route::get('/cart/show',[\App\Http\Controllers\ShoppingcartController::class,'show']);
Route::get('/cart/update',[\App\Http\Controllers\ShoppingcartController::class,'update']);
Route::get('/cart/remove',[\App\Http\Controllers\ShoppingcartController::class,'remove']);
