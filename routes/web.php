<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    
    Route::name('member.')
    ->prefix('/member')
    ->group(function (){
        Route::get('/', 'MemberController@index')->name('index');    
        Route::get('/create', 'MemberController@create')->name('create');    
        Route::post('/register', 'MemberController@register')->name('register');    
        Route::post('/{memberId}/update', 'MemberController@update')->name('update');    
        Route::get('/{memberId}/delete', 'MemberController@delete')->name('delete');        
    });

    Route::name('salary.')
    ->prefix('/salary')
    ->group(function (){
        Route::get('/', 'SalaryController@index')->name('index');    
        Route::get('/pay', 'SalaryController@pay')->name('pay');    
    });

    Route::name('wages.')
    ->prefix('/wages')
    ->group(function (){
        Route::get('/', 'MinimumWagesController@index')->name('index');    
        Route::get('/create', 'MinimumWagesController@create')->name('create');    
        Route::post('/register', 'MinimumWagesController@register')->name('register');    
    });

    
    
});