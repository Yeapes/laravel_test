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

//  ====^^^===> Frontend Route <=====^^^====== 

Route::get('/',[
    'uses' => 'FrontendController@index',
    'as' => 'index'
]);
Route::get('/single-post/{id}',[
    'uses' => 'FrontendController@singlePost',
    'as' => 'single-post'
]);
Route::get('/single-video/{id}',[
    'uses' => 'FrontendController@singleVideo',
    'as' => 'single-video'
]);

//  ====^^^===> Frontend End <=====^^^====== 

Auth::routes();


//  =======> Admin Route Start <=========== 


Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    //Post Route Start
    Route::get('/add-post',[
        'uses' => 'Admin\PostController@addPost',
        'as' => 'add-post'
    ]);
    Route::post('/add-post',[
        'uses' => 'Admin\PostController@savePost',
        'as' => 'save-post'
    ]);
    Route::get('/post-list',[
        'uses' => 'Admin\PostController@postList',
        'as' => 'post-list'
    ]);
    Route::get('/post-delete/{id}',[
        'uses' => 'Admin\PostController@postDelete',
        'as' => 'post-delete'
    ]);
    //Post Route End

    //Video Route Start
    Route::get('/add-video',[
        'uses' => 'Admin\VideoController@addVideo',
        'as' => 'add-video'
    ]);
    Route::post('/add-video',[
        'uses' => 'Admin\VideoController@saveVideo',
        'as' => 'save-video'
    ]);
    Route::get('/video-list',[
        'uses' => 'Admin\VideoController@videoList',
        'as' => 'video-list'
    ]);
    Route::get('/video-delete/{id}',[
        'uses' => 'Admin\VideoController@videoDelete',
        'as' => 'video-delete'
    ]);

    //Video Route End
});

//  =======> Admin Route End <=========== 