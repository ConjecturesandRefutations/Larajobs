<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//ALL LISTINGS
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Jobs',
        'listings' => Listing::all()
    ]);
});

// SINGLE LISTING
Route::get('/listing/{listing}', function (Listing
$listing) {

        return view('listing', [
            'listing' => $listing
        ]);
});

Route::get('/dbconn', function(){
    return view('dbconn');
});














/* Route::get('/hello', function(){
    return response('<h1>Hello World</h1>',200)
    ->header('Content-Type', 'text/plain')
    ->header('foo','bar');
});

Route::get('/post/{id}', function ($id) {
    //ddd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
    return($request->name . ' ' . $request->city);
});
 */