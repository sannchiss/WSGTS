<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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



Route::group([], function()  
{  
   Route::get('/',function(){  
  
   return view('admin.crearEnvio.createsend');  
    
 });  
Route::get('/shipping',function()  
 {  
    return view('admin.mostrarEnvio.shipping');  
 });  
Route::get('/management',function()  
 {  
    return view('admin.gestionEntrega.management');  
 }); 
 
 Route::get('/detailEtiq',function()  
 {  
    return view('admin.dashboard');  
 }); 
 

});  


Route::name('processing.')
->prefix('processing')
->group(function(){
   Route::get('/', 'CrearEnvioController@index')->name('index');
   Route::post('crearenvio', 'CrearEnvioController@index')->name('crearenvio');
   Route::get('consultaenvio', 'CrearEnvioController@query')->name('consultaenvio');
   Route::get('etiquetapdf', 'CrearEnvioController@etiquetaPDF')->name('etiquetapdf');
});

Route::name('management.')
->prefix('management')
->group(function(){
   Route::get('/management', 'EntregaRecogedor@index')->name('index'); // Ruta listar los envios 
   Route::post('/delivery', 'EntregaRecogedor@deliveryManagement')->name('delivery'); // Entrega de envios 

});

