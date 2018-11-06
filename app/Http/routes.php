<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//home
Route::get('/h', function () {
   // return view('welcome');
   //to redirect to the url vue 
    return redirect('vue');
    // return redirect()->route('vue');

});
Route::get('/', 'WelcomeController@index');

Route::get('/vue', function () {
    return view('vue1');
});
//article
/*
Route::get('/article/{n}', function ($n) {
    // return view('article')->with('numero',$n);
    return view('article', ['numero' => $n]);
})->where('n','[0-9]+');
*/
//route with controller
Route::get('/article/{n}', 'ArticleController@show')->where('n','[0-9]+');
//get users
Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');
//get contact
Route::get('contact', 'ContactController@getInfos');
Route::post('contact', 'ContactController@postInfos');
//route  1
Route::get('1',function(){
     return 'je suis la page 1';
});
//route  conditions
Route::get('{n}',function($n){
    return 'je suis la page  '.$n.' ! ';
})->where('n','[1-4]');
//alias view for redirect 
Route::get('/home',['as' => 'home', function () {
    return response('Je suis à home !',202);
    // return 'Je suis à home !';
}] );
//get phpot
Route::get('photo', 'PhotoController@getForm');
Route::post('photo', 'PhotoController@postForm');