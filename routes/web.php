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
Route::resource('comment', 'Comment\CommentController');
Route::get('/{pageId}', function($pageId){
 
   return view('page',['pageId' => $pageId]);
 
});
 
Route::get('comments/{pageId}', 'CommentController@index');
 
Route::post('comments', 'CommentController@store');
 
Route::post('comments/{commentId}/{type}', 'CommentController@update');


Route::group(['middleware' => ['web']], function(){
    if (!env('INSTALLED', false)) {
        Route::get('/', 'Install\InstallController@index');
        Route::post('install/store', 'Install\InstallController@store');
    } else {
        Route::get('/', 'HomeController@index');
    }
    Route::get('home', 'HomeController@index');

    Route::auth();

    
    Route::resource('apprequest', 'Apprequest\ApprequestController');
    Route::get('apprequest/change_status/{user_id}', 'Apprequest\ApprequestController@change_status');

    // term and condition
    Route::get('termsCondition', 'HomeController@termsCondition');
    // privacy policy
    Route::get('privacyPolicy', 'HomeController@privacyPolicy');

    Route::resource('departments', 'Department\DepartmentController');
});


Route::group(['middleware' => ['web', 'auth', 'install', 'superadmin']], function(){
    Route::any('users/update_password', 'Users\UsersController@update_password');
    Route::get('users/active', 'Users\UsersController@active_users');
    Route::get('users/banned', 'Users\UsersController@banned_users');
    Route::get('users/change_status/{user_id}', 'Users\UsersController@change_status');
    Route::resource('users', 'Users\UsersController');
    Route::resource('profile', 'Profile\ProfileController');

     //activities only super admin can see it
     Route::get('activities/clear', 'Activity\ActivityController@clear_activities');
     Route::resource('activities', 'Activity\ActivityController');
});
