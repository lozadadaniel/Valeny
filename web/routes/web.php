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
Route::get('/contacto.html', 'InicioController@contacto')->name('contacto');
Route::get('/contact', 'InicioController@contacto')->name('contact');
Route::get('solicitar-el-catalogo.html', 'InicioController@catalogo')->name('catalogo');
Route::get('/politicas-de-privacidad.html', 'InicioController@politicas')->name('politicas');
Route::get('/devoluciones.html', 'InicioController@devoluciones')->name('devoluciones');
Route::get('/garantia', 'InicioController@garantia')->name('garantia');
Route::get('/como-comprar.html', 'InicioController@comoComprar')->name('como.comprar');

Route::post('/enviar/newsteller', 'InicioController@enviarNew')->name('enviar.new');
Route::post('/enviar/contacto', 'InicioController@enviarContacto')->name('enviar.contacto');

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

Route::get('/joyas-medellin.html', 'InicioController@joyasOroPlata')->name('joyas.medellin');
Route::get('/joyas-colombia.html', 'InicioController@joyasOroPlata')->name('joyas.colombia');
Route::get('/sobre-nosotros.html', 'InicioController@index')->name('nosotros.sobre');
Route::get('/Joyas-acero-por-mayor', 'InicioController@joyasOroPlata')->name('joyas.aceromayor');

//Enlaces SEO
Route::get('/joyas-argentina.html', 'InicioController@joyasOroPlata')->name('joyas.arge');
Route::get('/en/jewels-chile.html', 'InicioController@joyasOroPlata')->name('joyas.chile');
Route::get('/joyas-london.html', 'InicioController@joyasOroPlata')->name('joyas.london');
Route::get('/anillo-aguamarina.html', 'InicioController@anillosColombia')->name('joyas.guamarina');
Route::get('/anillo-managua.html', 'InicioController@anillosColombia')->name('joyas.managua');
Route::get('/anillo-bogota.html', 'InicioController@anillosColombia')->name('joyas.bogota');
Route::get('/anillo-nicaragua.html', 'InicioController@anillosColombia')->name('joyas.nica');
Route::get('/anillo-miami.html', 'InicioController@anillosColombia')->name('joyas.miami');
Route::get('/joyas-panama.html', 'InicioController@dijesColombia')->name('joyas.panama');
Route::get('/en/jewelry-wholesale-in-medellin-antioquia.html', 'InicioController@joyasOroPlata')->name('joyas.medallo');
Route::get('/por-mayor', 'InicioController@index')->name('pormayor');
Route::get('/anillo-horizonte.html', 'InicioController@anillosColombia')->name('joyas.horizonte');
Route::get('/joyas-oro-plata-mexico.html', 'InicioController@joyasOroPlata')->name('joyas.mexico');
Route::get('/anillo-infinitium.html', 'InicioController@anillosColombia')->name('joyas.infinitim');
Route::get('/anillo-panama.html', 'InicioController@anillosColombia')->name('joyas.panama');
Route::get('/joyas-guayaquil.html', 'InicioController@anillosColombia')->name('joyas.guayaquil');
Route::get('/anillos-oro-plata-por-mayor-colombia', 'InicioController@anillosColombia')->name('joyas.oroplatamayorco');
Route::get('/pulseras-por-mayor', 'InicioController@pulserasColombia')->name('pulseras.mayor');
Route::get('/dijes', 'InicioController@dijesColombia')->name('dijes.mayor');
Route::get('/aretes', 'InicioController@setsColombia')->name('sets.mayor');
Route::get('/pt-br/anillo-az-colombia.html', 'InicioController@anillosColombia')->name('joyas.anilloaz');
Route::get('/en', 'InicioController@index')->name('inicio.ingles');
Route::get('/pt-br', 'InicioController@index')->name('inicio.pt');
Route::get('/joyas-doscorazoneshtml', 'InicioController@anillosColombia')->name('joyas.dos');
Route::get('/joyas-doscorazones.html', 'InicioController@anillosColombia')->name('joyas.dosco');
Route::get('/valeny-es', 'InicioController@index')->name('inicio.es');
Route::get('/pulsera-italic.html', 'InicioController@pulserasColombia')->name('pulseras.italic');
Route::get('/dije-102-mariposa.html', 'InicioController@dijesColombia')->name('dijes.102');
Route::get('/anillo-arcoiris.html', 'InicioController@anillosColombia')->name('anillos.arcoiris');
Route::get('/image/cache/catalog/Anillo-Alaska-de-oro-y-plata', 'InicioController@anillosColombia')->name('anillos.alaska');
Route::get('/Joyas-oro-plata/anillos-oro-plata-por-mayor-colombia/SET-CLAXTON', 'InicioController@anillosColombia')->name('anillos.claxton');
Route::get('/home', 'InicioController@index')->name('home2');
Route::get('/sitemap', 'InicioController@index')->name('sitemap');
Route::get('/special', 'InicioController@index')->name('especial');
Route::get('/manufacturer', 'InicioController@index')->name('especiales');
Route::get('/anillo-purple.html', 'InicioController@anillosColombia')->name('anillos.purple');
Route::get('/anillo-elegance.html', 'InicioController@anillosColombia')->name('anillos.elegance');
Route::get('/anillo-triada.html', 'InicioController@anillosColombia')->name('anillos.triada');
Route::get('/anillo-chile.html', 'InicioController@anillosColombia')->name('anillos.chile');
Route::get('/anillo-mexico.html', 'InicioController@anillosColombia')->name('anillos.mexico');
Route::get('/anillo-onix.html', 'InicioController@anillosColombia')->name('anillos.onix');
Route::get('/anillo-linius.html', 'InicioController@anillosColombia')->name('anillos.linius');
Route::get('/pulsera-funnie.html', 'InicioController@pulserasColombia')->name('pulseras.funnie');
Route::get('/anillo-arawak.html', 'InicioController@anillosColombia')->name('anillos.arawak');
Route::get('/anillo-carusel.html', 'InicioController@anillosColombia')->name('anillos.carusel');
Route::get('/anillo-onixlite.html', 'InicioController@anillosColombia')->name('anillos.onixlite');
Route::get('/anillo-primavera.html', 'InicioController@anillosColombia')->name('anillos.primavera');
Route::get('/anillo-fresie.html', 'InicioController@anillosColombia')->name('anillos.fresie');
Route::get('/anillo-coconut.html', 'InicioController@anillosColombia')->name('anillos.coconut');
Route::get('/anillo-geometria.html', 'InicioController@anillosColombia')->name('anillos.geometris');
Route::get('/anillo-impetu.html', 'InicioController@anillosColombia')->name('anillos.impetu');
Route::get('/anillo-jungle.html', 'InicioController@anillosColombia')->name('anillos.jungle');
Route::get('/anillo-paris.html', 'InicioController@anillosColombia')->name('anillos.paris');
Route::get('/anillo-crystal.html', 'InicioController@anillosColombia')->name('anillos.crystal');
Route::get('/pulsera-amaratto.html', 'InicioController@pulserasColombia')->name('pulsera.amaratto');
Route::get('/pulsera-amazonia.html', 'InicioController@pulserasColombia')->name('pulsera.amazonia');
Route::get('/pulsera-medaw.html', 'InicioController@pulserasColombia')->name('pulsera.madaw');
Route::get('/anillo-factory.html', 'InicioController@anillosColombia')->name('anillos.factory');
Route::get('/anillo-palmera.html', 'InicioController@anillosColombia')->name('anillos.palmera');
Route::get('/joyas-acora.html', 'InicioController@anillosColombia')->name('anillos.acora');
Route::get('/pulsera-drupal.html', 'InicioController@pulserasColombia')->name('pulsera.drupal');
Route::get('/panillo-melite.html', 'InicioController@pulserasColombia')->name('pulsera.melite');
Route::get('/anillo-six.html', 'InicioController@anillosColombia')->name('anillos.six');
Route::get('/joyas-gardenias.html', 'InicioController@anillosColombia')->name('anillos.gardenias');
Route::get('/joyas-mexico.html', 'InicioController@anillosColombia')->name('anillos.mexico');
Route::get('/anillo-melite.html', 'InicioController@anillosColombia')->name('anillos.melite');
Route::get('/anillo-celtic.html', 'InicioController@anillosColombia')->name('anillos.celtic');
Route::get('/anillo-bell.html', 'InicioController@anillosColombia')->name('anillos.bell');
Route::get('/pulsera-eco.html', 'InicioController@pulserasColombia')->name('anillos.eco');
Route::get('/anillo-earth.html', 'InicioController@anillosColombia')->name('anillos.earth');
Route::get('/anillo-moravia.html', 'InicioController@anillosColombia')->name('anillos.moravia');
Route::get('/joyas-lyon.html', 'InicioController@anillosColombia')->name('anillos.lyon');
Route::get('/en/bracelets-wholesale', 'InicioController@anillosColombia')->name('anillos.wholesale');
Route::get('/anillo-neox.html', 'InicioController@anillosColombia')->name('anillos.neox');


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
Route::get('/imagenjoya/{filename}', 'InicioController@getImage')->name('joya.avatar');
Route::get('/superadmin/boletin', 'SuperAdminController@boletin')->name('boletin');


