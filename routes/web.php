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



Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    //routes for departments
    Route::get('/departments/create', 'DepartmentsController@create')->name('department.create'); //->middleware('verified')
    Route::post('/departments/store', 'DepartmentsController@store')->name('department.store'); //->middleware('verified')
    Route::get('/departments', 'DepartmentsController@index')->name('departments'); //->middleware('verified')
    Route::get('/departments/edit/{id}', 'DepartmentsController@edit')->name('department.edit'); //->middleware('verified')
    Route::get('/departments/delete/{id}', 'DepartmentsController@destroy')->name('department.delete'); //->middleware('verified')
    Route::post('/departments/update/{id}', 'DepartmentsController@update')->name('department.update'); //->middleware('verified')

    //routs for cities
    Route::get('/cities/create', 'CitiesController@create')->name('city.create'); //->middleware('verified')
    Route::post('/cities/store', 'CitiesController@store')->name('city.store'); //->middleware('verified')
    Route::get('/cities', 'CitiesController@index')->name('cities'); //->middleware('verified')
    Route::get('/cities/edit/{id}', 'CitiesController@edit')->name('city.edit'); //->middleware('verified')
    Route::get('/cities/delete/{id}', 'CitiesController@destroy')->name('city.delete'); //->middleware('verified')
    Route::post('/cities/update/{id}', 'CitiesController@update')->name('city.update'); //->middleware('verified')

    //routs for banks
    Route::get('/banks/create', 'BanksController@create')->name('bank.create'); //->middleware('verified')
    Route::post('/banks/store', 'BanksController@store')->name('bank.store'); //->middleware('verified')
    Route::get('/banks', 'BanksController@index')->name('banks'); //->middleware('verified')
    Route::get('/banks/edit/{id}', 'BanksController@edit')->name('bank.edit'); //->middleware('verified')
    Route::get('/banks/delete/{id}', 'BanksController@destroy')->name('bank.delete'); //->middleware('verified')
    Route::post('/banks/update/{id}', 'BanksController@update')->name('bank.update'); //->middleware('verified')

    Route::get('/dashboard','HomeController@dashboard')->name('dashboard');

    //routes for employees
    Route::get('/employees/create', 'EmployeesController@create')->name('employee.create'); //->middleware('verified')
    Route::post('/employees/store', 'EmployeesController@store')->name('employee.store'); //->middleware('verified')
    Route::get('/employees', 'EmployeesController@index')->name('employees'); //->middleware('verified')
    Route::get('/employees/edit/{id}', 'EmployeesController@edit')->name('employee.edit'); //->middleware('verified')
    Route::get('/employees/delete/{id}', 'EmployeesController@destroy')->name('employee.delete'); //->middleware('verified')
    Route::post('/employees/update/{id}', 'EmployeesController@update')->name('employee.update'); //->middleware('verified')

});
