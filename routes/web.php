<?php
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
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
Route::get('/contact', function () {
    return view('emailform');
});
Route::post('/contact', function(Request $request){
    Mail::send(new SendMail($request));
    return redirect('/contact');
});

Route::get('/', 'IndexController@index');
Route::get('/about-us', 'IndexController@landingAbout');
Route::get('/landing-kontak', 'IndexController@landingKontak');
Route::get('/landing-isc', 'IndexController@landingIsc');
Route::get('/landing-fiqsi', 'IndexController@landingFiqsi');
Route::get('/landing-osiris', 'IndexController@landingOsiris');
Route::get('/landing-informasi', 'IndexController@landingInformasi');
Route::get('/landing-galeri', 'IndexController@landingGaleri');
// Route::get('/download-file/{id}', 'IndexController@downloadFile');

Route::post('/send','IndexController@send');


Auth::routes(['register' => false]);
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/about', 'AboutController');
    Route::resource('/partner', 'PartnerController');
    Route::resource('/kontak', 'ContactController');
    Route::resource('/isc', 'IscController');
    Route::resource('/fiqsi', 'FiqsiController');
    Route::resource('/osiris', 'OsirisController');
    Route::resource('/profile_isc', 'ProfileIscController');
    Route::resource('/profile_fiqsi', 'ProfileFiqsiController');
    Route::resource('/profile_osiris', 'ProfileOsirisController');
    Route::resource('/sponsor', 'SponsorController');
    Route::resource('/galeri', 'GaleriController');

});