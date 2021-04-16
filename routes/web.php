<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\PageController::class,'home']);
Route::get('/db',[\App\Http\Controllers\PageController::class,'db']);
Route::get('/db_structure',[\App\Http\Controllers\PageController::class,'db_structure']);
Route::get('/tbl_structure',[\App\Http\Controllers\PageController::class,'tbl_structure']);
Route::get('/columns',[\App\Http\Controllers\PageController::class,'columns']);
Route::get('/sql',[\App\Http\Controllers\PageController::class,'sql']);
Route::get('/change_column',[\App\Http\Controllers\PageController::class,'change_column']);
Route::get('/server_databases',[\App\Http\Controllers\PageController::class,'server_databases']);
Route::get('/change_column',[\App\Http\Controllers\PageController::class,'change_column']);
Route::post('/server_databases',[\App\Http\Controllers\DatabasesController::class,'addDb']);
Route::post('/add_table',[\App\Http\Controllers\DatabasesController::class,'addTable']);
Route::post('/add_columns_in_table',[\App\Http\Controllers\DatabasesController::class,'addColumnsInTable']);
Route::post('/table_create',[\App\Http\Controllers\DatabasesController::class,'addTableColumns']);
Route::post('/check_table',[\App\Http\Controllers\DatabasesController::class,'checkTable']);
Route::post('/check_db',[\App\Http\Controllers\DatabasesController::class,'check_db']);
Route::post('/change_column',[\App\Http\Controllers\DatabasesController::class,'changeTableColumns']);
Route::post('/delete_column',[\App\Http\Controllers\DatabasesController::class,'deleteTableColumns']);
Route::post('/delete_table',[\App\Http\Controllers\DatabasesController::class,'deleteTable']);
Route::post('/field_list',[\App\Http\Controllers\DatabasesController::class,'fieldList']);
Route::post('/add_sql',[\App\Http\Controllers\DatabasesController::class,'sqlAdd']);
Route::post('/show_table_ul',[\App\Http\Controllers\DatabasesController::class,'showTableUl']);
Route::post('/show_column_ul',[\App\Http\Controllers\DatabasesController::class,'showColumnUl']);

