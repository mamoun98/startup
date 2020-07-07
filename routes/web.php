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

Route::get('/', function () {
    return view('welcome')-> with('data',2);
});

Route::get('/test1', function(){
    return 'wellcome';}
);

//Route parametere

Route::get('/test2/{id}', function($id){
    return $id;
});

Route::get('/test3/{id?}',function(){
return 'wellcome';
});

//Route Name

Route::namespace('Front')->group(function(){

    //all route name only access controler or methrds in folder name Front
Route::get('users','UserController@showUserName');

});

/*Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
   Route::get('/',function(){
       return 'work';
   });
Route::get('show','UserController@showUserName');
Route::delete('delete','UserController@showUserName');
Route::get('edit','UserController@showUserName');
Route::put('update','UserController@showUserName');



});

Route::get('check',function(){
 return 'middleware';
})->midlleware('auth');*/


Route::get('second','Admin\SecondController@ShowString0')->middleware('auth');

Route::get('login',function(){
    return 'You Must Login';
})->name('login');


Route::get('/test',function(){
   return 'Wellcome';
});

Route::get('/test1/{id}',function($id){
return 'Hi';
});



Route::resource('News','NewsController');

Route::get('index','Front\UserController@getIndex');



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('fillable','CrudController@getOffers');

Route::group(['prefix'=>'offers'],function(){
    //Route::get('store','CrudController@store');

      Route::get('create','CrudController@create');
      Route::post('store','CrudController@store')-> name('offers.store');
});
