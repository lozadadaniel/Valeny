<?php

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


Auth::routes();

//Rutas normales
Route::get('/', 'InicioController@index')->name('home');
Route::get('/contacto', 'InicioController@contacto')->name('contacto');
Route::get('solicitar-el-catalogo.html', 'InicioController@catalogo')->name('catalogo');
Route::get('/politicas-de-privacidad', 'InicioController@politicas')->name('politicas');
Route::get('/devoluciones', 'InicioController@devoluciones')->name('devoluciones');
Route::get('/garantia', 'InicioController@garantia')->name('garantia');
Route::get('/como-comprar', 'InicioController@comoComprar')->name('como.comprar');

Route::post('/enviar/newsteller', 'InicioController@enviarNew')->name('enviar.new');

//Enlaces
Route::get('/Joyas-de-Acero-por-mayor-Colombia', 'InicioController@joyasAceroPorMayor')->name('acero.colombia');
Route::get('/Joyas-oro-plata', 'InicioController@joyasOroPlata')->name('joyas.oroplata');
Route::get('/JOYAS-MIAMI-ORO-PLATA', 'InicioController@joyasMiamiOroPlata')->name('joyas.miamioroplata');
Route::get('/Joyas-oro-plata/anillos-oro-plata-por-mayor-colombia/{nombre}', 'InicioController@joyasProfile')->name('joyas.profile');
Route::get('/joyerias-oro-y-plata-en-cali-por-mayor.html', 'InicioController@joyasCali')->name('joyas.cali');
Route::get('/fabrica-de-joyas-oro-plata-bogota.html', 'InicioController@joyasBogota')->name('joyas.bogota');
Route::get('/joyas-al-por-mayor-en-medellin-antioquia.html', 'InicioController@joyasMayorMedellin')->name('joyas.mayorMedellin');

Route::get('/joyeria-oro-plata-en-barranquilla.html', 'InicioController@joyasBarranquilla')->name('joyas.mayorMedellin');
Route::get('/joyas-oro-plata-en-new-york.html', 'InicioController@joyasNy')->name('joyas.ny');
Route::get('/joyas-oro-plata-en-washington.html', 'InicioController@joyasWashington')->name('joyas.washington');

Route::get('/joyas-oro-plata-en-orlando-por-mayor-valeny.html', 'InicioController@joyasOrlando')->name('joyas.orlando');
Route::get('/joyas-oro-plata-atlanta.html', 'InicioController@joyasAtlanta')->name('joyas.atlanta');




//Categorias
Route::get('/Joyas-oro-plata/anillos-oro-plata-por-mayor-colombia', 'InicioController@anillosColombia')->name('anillos.colombia');
Route::get('/Joyas-oro-plata/pulseras-por-mayor', 'InicioController@pulserasColombia')->name('pulseras.colombia');
Route::get('/Joyas-oro-plata/por-mayor', 'InicioController@setsColombia')->name('sets.colombia');
Route::get('/Joyas-oro-plata/dijes', 'InicioController@dijesColombia')->name('dijes.colombia');
Route::get('/Joyas-oro-plata/collares', 'InicioController@collaresColombia')->name('collares.colombia');
Route::get('/Joyas-oro-plata/boda', 'InicioController@bodaColombia')->name('boda.colombia');



//POST web
Route::post('/solicitar-catalogo/enviar', 'InicioController@enviarCatalogo')->name('enviarCatalogo');


//Superadmin
Route::get('/superadmin/catalogo', 'SuperAdminController@catalogos')->name('solicitar.catalogo');
Route::get('/superadmin/joyas', 'SuperAdminController@joyas')->name('joyas');
Route::post('/superadmin/joyas/crear', 'SuperAdminController@crearJoya')->name('crear.joya');
Route::get('/superadmin/imagenjoya/{filename}', 'InicioController@getImage')->name('joya.avatar');
Route::get('/superadmin/boletin', 'SuperAdminController@boletin')->name('boletin');


