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
Route::get('/msaada', function () {
    return view('msaada');
});
Route::get('/kilimo', function () {
    return view('kilimo');
});
Route::get('/mazao', function () {
    return view('mazao');
});
Route::get('/pembejeo', function () {
    return view('pembejeo');
});
Route::get('/maada', function () {
    return view('maada');
});
Route::get('/nunua', function () {
    return view('nunua');
});
Route::get('/agriculturaOfficer/home', function () {
    return view('agriculturaOfficer');
});
Route::get('/farmer', function () {
    return view('farmer');
});
Route::get('/agriculturalRetailer', function () {
    return view('agriculturalRetailer');
});
Route::get('/agriculturalInputs', function () {
    return view('agriculturalInputs');
});

Route::resource('topics', 'TopicController');