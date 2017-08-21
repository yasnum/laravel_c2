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
Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);

Route::group(['middleware'=>['authen','roles']],function(){
        Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
        Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@dashboard']);

});
Route::group(['middleware'=>['authen','roles'],'roles'=>['admin']],function(){
        //User
    Route::get('/managUser',['as'=>'manageUser','uses'=>'UserCtrl@manageUser']);
    Route::resource('usere', 'UserCtrl');
});    
/*
Route::get('/', function () {
    return view('users.users'); 
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function () {
    return view('users.profile');
}); 

*/

Route::get('/profile', function () {
    return view('layouts.app');
});

Route::get('/dump','UserCtrl@dumpUser');

route::resource('dash','DashController');