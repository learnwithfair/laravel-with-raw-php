<?php

use App\Http\Controllers\PostController;
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

Route::get( '/', function () {
    return view( 'welcome' );
} );
// Route::get( '/posts', [PostController::class, 'index'] )->name( 'post.index' );
// Route::get( '/post/create', [PostController::class, 'create'] )->name( 'post.create' );
// Route::post( '/post/store', [PostController::class, 'store'] )->name( 'post.store' );
// Route::get( '/post/show/{id}', [PostController::class, 'show'] )->name( 'post.show' );
// Route::get( '/post/edit/{id}', [PostController::class, 'edit'] )->name( 'post.edit' );
// Route::put( '/post/update/{id}', [PostController::class, 'update'] )->name( 'post.update' );
// Route::delete( '/post/delete/{id}', [PostController::class, 'destroy'] )->name( 'post.destroy' );
Route::prefix( '/' )->controller( PostController::class )->name( 'post.' )->group( function () {
    Route::get( 'posts', 'index' )->name( 'index' );
    Route::get( 'post/create', 'create' )->name( 'create' );
    Route::post( 'post/store', 'store' )->name( 'store' );
    Route::get( 'post/show/{id}', 'show' )->name( 'show' );
    Route::get( 'post/edit/{id}', 'edit' )->name( 'edit' );
    Route::put( 'post/update/{id}', 'update' )->name( 'update' );
    Route::delete( 'post/delete/{id}', 'destroy' )->name( 'destroy' );
} );