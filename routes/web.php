<?php

use Illuminate\Support\Facades\Route;

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
//     // return view('welcome');
//     return "Hello World!";
// });
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TestController;


Route::get(
    '/contato/{nome}/{categoria_id}',
    [ContatoController::class,'print']
)
->where("categoria_id","[0-9]+")
->where("nome","[A-Z][a-z]+");

Route::get("/",[PrincipalController::class,'index'])->name('site.index');

Route::get('/contato',[ContatoController::class,'index'])->name('site.contato');

Route::get('/sobre-nos',[SobreNosController::class,'index'])->name('site.sobrenos');

Route::prefix('app')->group(function(){
    Route::get('/fornecedores',function(){return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/clientes',function(){return 'Clientes';})->name('app.clientes');
    Route::get('/produtos',function(){return 'Fornecedores';})->name('app.produtoss');
});

Route::fallback(function(){
    echo "Rota inexistente. <a href='/'>home</a>";
});

Route::get('/teste/{p1}/{p2}',[TestController::class,'index'])->name('site.teste');