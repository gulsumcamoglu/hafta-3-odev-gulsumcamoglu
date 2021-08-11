<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('admin/login', function () {
    return view('admin.login');
});





Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');   // admin ana sayfasına gider masaüstü gibi,
    });
    Route::prefix('/category')->group(function () { //burdan itibaren admin/cat ile devam eden urller categori url'leri buradan başlar
        Route::get('/index', [CatController::class,'index']);

        Route::get('/edit', [CatController::class,'edit']);
    });

    Route::prefix('/product')->group(function () { //burdan itibaren admin/product ile devam eden urller product url'leri buradan başlar
        Route::get('/index', [ProductController::class,'index']);

        Route::get('/edit', [ProductController::class,'edit']);
    });

    Route::prefix('/user')->group(function () { //burdan itibaren admin/product ile devam eden urller product url'leri buradan başlar
        Route::get('/index', [UserController::class,'index']);

        Route::get('/edit', [UserController::class,'edit']);
    });

    Route::prefix('/cart')->group(function () { //burdan itibaren admin/product ile devam eden urller product url'leri buradan başlar
        Route::get('/index', [CartController::class,'index']);


        Route::get('/view', function () {
            $data_ = [
                'title' =>'Cart View Sayfası'
            ];
            return view('admin.Cart.view',$data_);
        });
    });
});
