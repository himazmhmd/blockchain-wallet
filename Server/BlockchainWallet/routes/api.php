<?php

use App\Models\crytoBallance;
use App\Models\adsBuy;
use App\Models\adsSell;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




//routes for crytocurrency ballance
Route::get('/cryptoBallance',function(){
    return crytoBallance::all();
});
Route::post('/cryptoBallance',function(){

    request()->validate([
        'cryptoName' => 'required',
        'ballance' => 'required',
    ]);
    return crytoBallance::create([
        'cryptoName' => request('cryptoName'),
        'ballance' => request('ballance')
    ]);
});
Route::put('/cryptoBallance/{id}',function($id){
    $crypto = crytoBallance::findorfail($id);
    $crypto->update([
        'ballance' => request('ballance')
    ]);
});
Route::delete('/cryptoBallance/{id}', function($id){
    $crypto = crytoBallance::findorfail($id);
    $crypto->delete();
});





//routes for posting ads for buying 
Route::get('/adsBuy',function(){
    return adsBuy::all();
});
Route::post('/adsBuy',function(){
   
   
    request()->validate([
        'amount' => 'required',
        'currency' => 'required',
        'price' => 'required',
        
    ]);
    return adsBuy::create([
        'amount' => request('amount'),
        'currency' => request('currency'),
        'price' => request('price'),
    ]);
});
Route::put('/adsBuy/{id}',function($id){
    $crypto = adsBuy::findorfail($id);
    $crypto->update([
        'amount' => request('amount'),
        'currency' => request('currency'),
        'price' => request('price')
    ]);
});
Route::delete('/adsBuy/{id}', function($id){
    $adsdelete = adsBuy::findorfail($id);
    $adsdelete->delete();
});




//routes for posting ads for selling 
Route::get('/adsSell',function(){
    return adsSell::all();
});
Route::post('/adsSell',function(){
   

    request()->validate([
        'amount' => 'required',
        'limitfrom' => 'required',
        'limitto' => 'required',
        'currency' => 'required',
        'price' => 'required'
        
    ]);
    return adsSell::create([
        'amount' => request('amount'),
        'limitfrom' => request('limitfrom'),
        'limitto' => request('limitto'),
        'currency' => request('currency'),
        'price' => request('price')
    ]);
});
Route::put('/adsSell/{id}',function($id){
    $crypto = adsSell::findorfail($id);
    $crypto->update([
        'amount' => request('amount'),
        'limit_from' => request('limit_from'),
        'limit_to' => request('limit_to'),
        'currency' => request('currency'),
        'price' => request('price')
    ]);
});
Route::delete('/adsSell/{id}', function($id){
    $adsdelete = adsSell::findorfail($id);
    $adsdelete->delete();
});


//routes of crud for a profile
Route::get('/profile',function(){
    return profile::all();
});
Route::post('/profile',function(){
   

    request()->validate([
        'userName' => 'required',
        'firstName' => 'required',
        'middleName' => 'required',
        'lastName' => 'required',
        'dateofbirth' => 'required',
        'currency' => 'required',
        'countrycode' => 'required',
        'phoneno'=>'required',
        'nicno'=>'required',
        'gender'=>'required',
        'addressline1'=>'required',
        'addressline2'=>'required',
        'city'=>'required',
        'state'=>'required',
        'zip'=>'required',
        'country'=>'required',
        
    ]);
    return profile::create([
        'userName' => request('userName'),
        'firstName' => request('firstName'),
        'middleName' => request('middleName'),
        'lastName' => request('lastName'),
        'dateofbirth' => request('dateofbirth'),
        'currency' => request('currency'),
        'countrycode' => request('countrycode'),
        'phoneno' => request('phoneno'),
        'nicno' => request('nicno'),
        'gender' => request('gender'),
        'addressline1' => request('addressline1'),
        'addressline2' => request('addressline2'),
        'city' => request('city'),
        'state' => request('state'),
        'zip' => request('zip'),
        'country' => request('country')

    ]);


    
    $table->string('');
    $table->string('');
    $table->string('');
    $table->string('');
    $table->string('');
    $table->string('');
    $table->string('');
    $table->string('');


});
Route::put('/profile/{id}',function($id){
    $crypto = profile::findorfail($id);
    $crypto->update([
        'userName' => request('userName'),
        'firstName' => request('firstName'),
        'middleName' => request('middleName'),
        'lastName' => request('lastName'),
        'dateofbirth' => request('dateofbirth'),
        'mobile_no' => request('mobile_no'),
        'address' => request('address'),
        'currency' => request('currency'),
        'countrycode' => request('countrycode'),
        'phoneno' => request('phoneno')
    ]);
});
Route::delete('/profile/{id}', function($id){
    $adsdelete = profile::findorfail($id);
    $adsdelete->delete();
});
