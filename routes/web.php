<?php
use App\Mail\EnvoieMessage;
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

Route::get('/','ServicesController@envoi');
Route::get('/about','TeamController@envoi_membre');
Route::resource('xaragne','XaragneController');
Route::resource('login','LoginController');
Route::resource('register','RegisterController');
Route::resource('services','ServicesController');
Route::resource('team','TeamController');
Route::get('/send/email', 'HomeController@mail');
Route::get('/sendemail', 'SendEmail@fn_sendmail');
Route::get('/enquiryform', 'SendEmail@index'); 
Route::get('/contact', 'MessageController@store'); 
Route::resource('boutique','BoutiqueController');

//Route::get('contact','MessageController@create'); 



/*Route::get('about', function () {
    return view('about');
})->name('about'); */

Route::get('about',[
    'as'=>'about',
    'uses'=> 'TeamController@envoi_membre'
    ]);

Route::get('solution', function () {
    return view('solution');
})->name('solution');

Route::get('contact',[
    'as'=>'contact',
    'uses'=> 'MessageController@create'
    ]);

Route::post('contact',[
        'as'=>'contact',
        'uses'=> 'MessageController@store'
        ]);
Route::post('create',[
            'as'=>'create',
            'uses'=> 'BoutiqueController@create'
            ]);

Route::get('test-email',function(){
       return new EnvoieMessage('mortalla', 'mortallageek@gmail.com', '772262890','Allez Galsen');
    });
 

    Route::get('/boutique', 'BoutiqueController@create')->name('boutique');
  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//creation model : php artisan make:controller ProductController --resource --model=Product