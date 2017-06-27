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
Route::get('/agriculturalOfficer/mazao', [

'uses' => 'ProductsController@getAfisaMazao'
    ]);

Route::get('/agriculturalOfficer/pembejeo', [

'uses' => 'PembejeoController@getIndex'
    ]);
Route::get('/farmer/home', function () {
    return view('farmer.home');
});

Route::get('/farmer/mazao', [

'uses' => 'ProductsController@getIndex'
    ]);
Route::get('/farmer/pembejeo', [

'uses' => 'PembejeoController@getIndex'
    ]);
Route::get('/agriculturalRetailer', function () {
    return view('agriculturalRetailer');
});
Route::get('/agriculturalInputs/home', function () {
    return view('agriculturalInputSupplier.home');
});
Route::get('/agriculturalInputs/mazao', [

'uses' => 'ProductsController@getMuuzapembejeoMazao'
    ]);

Route::get('/agriculturalInputs/pembejeo', [

'uses' => 'PembejeoController@getPembejeo'
    ]);
Route::get('/agriculturalRetailer/home', function () {
    return view('agriculturalRetailer.home');
});
Route::get('/agriculturalRetailer/mazao', [

'uses' => 'ProductsController@getMnunuziMazao'
    ]);

Route::get('/agriculturalRetailer/pembejeo', [

'uses' => 'PembejeoController@getIndex'
    ]);

Route::resource('topics', 'TopicController');

Route::get('/farmer/Mada','TopicController@getFarmerMada');
Route::get('/agriculturalRetailer/Mada','TopicController@getAgriculturalRetailerMada');
Route::get('/agriculturalInputs/Mada','TopicController@getAgriculturalInputsMada');

 


Route::resource('products', 'ProductsController');

