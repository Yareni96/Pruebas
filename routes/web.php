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
Route::get('/', function () {
    $categorias = [1=>'Electronica', 2=>'Electrodomesticos',3=>'Ropa'];

    return view('welcome',compact('categorias') );
});
Route::get('autenticar', function() {
    return view('autenticar'); 
    //buscara el archivo 'autenticar.php' o 'autenticar.blade.php' dentro de resoureces/views
});
Route::get('tablero', function() {
    return view('supervisor.tablero'); 
    //buscara el archivo 'tablero.php' o 'tablero.blade.php' dentro de resoureces/views/supervisor
});
Route::get('revisar', function() {
    return view('encargado.revisar'); 
});
Route::get('cuenta', function() {
    return view('cliente.cuenta'); 
});
Route::post('validar'        , 'AutenticarControler@validar');
Route::get('listar_por_categoria/{categoria_id}','BuscarControler@listar_por');



Route::get('Categorias','CategoriasControler@index');
Route::post('Categorias','CategoriasControler@store');
Route::get('Categorias/create','CategoriasControler@create');
Route::get('Categorias/{categoria}','CategoriasControler@show');
Route::put('Categorias/{categoria}','CategoriasControler@update');
Route::delete('Categorias/{categoria}','CategoriasControler@destroy');
Route::get('Categorias/{categoria}/edit','CategoriasControler@edit');
//Route::resource('Categorias','CategoriasControler');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/vista', function () {
    return view('vista');
});

Route::get('/crud', function () {
    return view('crud');
});

Route::get('/nuevo', function () {
    return view('nuevo');
});

Route::get('/modrefri', function () {
    return view('layouts.modrefri');
});

Route::get('/eliminar', function () {
    return view('layouts.eliminar');
});

Route::get('/refri', function () {
    return view('layouts.refri');
});
Route::get('/lavadora', function () {
    return view('layouts.lavadora');
});
Route::get('/modlav', function () {
    return view('layouts.modlav');
});
Route::get('/sala', function () {
    return view('layouts.sala');
});
Route::get('/modsala', function () {
    return view('layouts.modsala');
});
Route::get('/laptop', function () {
    return view('layouts.laptop');
});
Route::get('/modlap', function () {
    return view('layouts.modlap');
});
Route::get('/celular', function () {
    return view('layouts.celular');
});
Route::get('/modcel', function () {
    return view('layouts.modcel');
});




