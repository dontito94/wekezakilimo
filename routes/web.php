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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/kutuhusu', function () {
    return view('kutuhusu');
});
Route::get('/wasiliana', function () {
    return view('wasiliana');
});

Route::get('/maada', function () {
    return view('maada');
});
Route::get('/nunua', function () {
    return view('nunua');
});
Route::get('/agriculturalOfficer/home', function () {
    return view('agriculturalOfficer.home');
});
Route::get('/agriculturalOfficer/mazao', function () {
    return view('agriculturalOfficer.mazao');
});
Route::get('/agriculturalOfficer/pembejeo', function () {
    return view('agriculturalOfficer.pembejeo');
});
Route::get('/farmer/home', function () {
    return view('farmer.home');
});

Route::get('/farmer/mazao', function () {
    return view('farmer.mazao');
});
Route::get('/farmer/pembejeo', function () {
    return view('farmer.pembejeo');
});
Route::get('/agriculturalRetailer', function () {
    return view('agriculturalRetailer');
});
Route::get('/agriculturalInputs/home', function () {
    return view('agriculturalInputSupplier.home');
});
Route::get('/agriculturalInputs/mazao', function () {
    return view('agriculturalInputSupplier.mazao');
});
Route::get('/agriculturalInputs/pembejeo', function () {
    return view('agriculturalInputSupplier.pembejeo');
});
Route::get('/agriculturalRetailer/home', function () {
    return view('agriculturalRetailer.home');
});
Route::get('/agriculturalRetailer/mazao', function () {
    return view('agriculturalRetailer.mazao');
});
Route::get('/agriculturalRetailer/pembejeo', function () {
    return view('agriculturalRetailer.pembejeo');
});

Route::resource('topics', 'TopicController');

Route::get('/farmer/Mada','TopicController@getFarmerMada');
Route::get('/agriculturalRetailer/Mada','TopicController@getAgriculturalRetailerMada');
Route::get('/agriculturalInputs/Mada','TopicController@getAgriculturalInputsMada');

 
