<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDcontroller;

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

Route::get('/', function()
{
    return view('home');
});
Route::post('/addproduct',[CRUDcontroller::class, 'insertProducts']);

Route::get('/insert_product', function()
{
    return view('insertProduct');
});

Route::get('/read',[CRUDcontroller::class, 'readProducts']);
Route::get('/read_product', function()
{
    return view('readProduct');
});