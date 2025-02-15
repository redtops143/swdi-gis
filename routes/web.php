<?php

use App\Http\Controllers\generatePdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RostersController;
use App\Http\Controllers\PDFController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/generate-roster-pdf', [RostersController::class, 'generatePDF']);
//Route::get('/',function(){
  //  return view('welcome1');
//});

//Route::get('/generate',function(){
 //   return view('layouts.app');
//});
Route::get('/generate-pdf',[PDFController::class,'generatePDF']);
Route::get('/generate',[generatePdf::class,'generatePdf']);
Route::get('/',function(){
  return view('generate-gis');
});
