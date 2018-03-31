<?php

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

Route::get('/' , 'HomeController@index');

//Route::get('/{slug}' , 'BlogController@detail');
Route::group(['middleware' => 'postread'] , function (){
    Route::get('/{slug}' , ['uses' => 'BlogController@detail' , 'as' => 'web.post' ]);
});


Auth::routes();

Route::group(['prefix' => 'makerhome' , 'namespace' => 'Admin'] , function ($router){
    require base_path('Routes/admin.php');
});