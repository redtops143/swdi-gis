<?php

use App\Http\Controllers\generatePdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RostersController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\LocationController;
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
Route::post('/generate-pdf',[PDFController::class,'generatePDF'])->name('generate.pdf');
Route::get('/generate',[generatePdf::class,'generatePdf']);

Route::get('/', [LocationController::class, 'index'])->name('location.form');
Route::get('/get-municipalities', [LocationController::class, 'getMunicipalities'])->name('get.municipalities');
//Route::post('/submit-location', [LocationController::class, 'submitLocation'])->name('submit.location');
