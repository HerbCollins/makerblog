<?php

Route::group([] , function ($router){
    $router->get('/dashboard' ,['uses' => 'IndexController@dashboard' , 'as' => 'admin.dashboard' ]);
    $router->get('/post' ,['uses' => 'PostController@index' , 'as' => 'admin.post']);
    $router->get('/post/edit/{id?}' ,['uses' => 'PostController@edit' , 'as' => 'admin.post.edit']);
    $router->get('/post/not_published' ,['uses' => 'PostController@not_published' , 'as' => 'admin.post.not_published']);
    $router->post('/post/store' ,['uses' => 'PostController@store' , 'as' => 'admin.post.store']);



    $router->get('/category' , ['uses' => 'CategoryController@index', 'as' => 'admin.category']);
    $router->get('/tags' ,['uses' => 'TagController@index' , 'as' => 'admin.tags']);
    $router->get('/system' , [ 'uses' => 'SystemController@index', 'as' => 'admin.system']);
});