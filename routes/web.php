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

Route::get('/', 'HomeController@index');
Route::get('/home', 'UserController@index');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Route::get('/version', 'HomeController@version')->name('app.version');

Route::get('/reservacion/data', 'ReservacionController@anyData')->name('reservacion.data');
// Route::get('/reservacion/{reservacion}/voucher', 'ReservacionController@voucher')->name('reservacion.voucher');
Route::resource('/reservacion', 'ReservacionController');

Route::get('/user/data', 'UserController@anyData')->name('user.data');
Route::resource('user',  'UserController');

Route::get('/facturacion', 'FacturacionController@index')->name('facturacion.index');
Route::get('/facturacion/previo', 'FacturacionController@prefacturacion')->name('facturacion.prefacturacion');
Route::post('/facturacion/procesar', 'FacturacionController@procesar')->name('facturacion.procesar');

Route::post('/reportes/guardarAsig', 'ReportesController@guardarAsig')->name('reportes.guardar-asig');
Route::prefix('/reportes')->group(function() {
    Route::get('/', 'ReportesController@index')->name('reporte.index');
    Route::get('llegadas', 'ReportesController@llegadas')->name('reporte.llegadas');
    Route::get('llegadas-csv', 'ReportesController@llegadasCSV')->name('reporte.llegadas-csv');
    Route::get('llegadas-vertical', 'ReportesController@llegadasPDFVertical')->name('reporte.llegadas-vertical');
    Route::get('llegadas-horizontal', 'ReportesController@llegadasPDFHorizontal')->name('reporte.llegadas-horizontal');
    Route::get('salidas', 'ReportesController@salidas')->name('reporte.salidas');
    Route::get('salidas-csv', 'ReportesController@salidasCSV')->name('reporte.salidas-csv');
    Route::get('salidas-vertical', 'ReportesController@salidasPDFVertical')->name('reporte.salidas-vertical');
    Route::get('salidas-horizontal', 'ReportesController@salidasPDFHorizontal')->name('reporte.salidas-horizontal');
    Route::get('vouchers', 'ReportesController@voucherSalidas')->name('reporte.voucher-salidas');
    Route::get('personalizado', 'ReportesController@personalizado')->name('reporte.personalizado');
    Route::get('personalizado-horizontal', 'ReportesController@personalizadoPDF')->name('reporte.personalizado-horizontal');
    Route::get('reservas-facturadas', 'ReportesController@reservasFacturadas')->name('reporte.reservas-facturadas');
});

Route::prefix('/administracion')->group(function() {
    Route::get('/', 'PanelController@administracion');
    //datatable data source
    Route::get('zonas/data',    'ZonaController@anyData')->name('zonas.data');
    Route::get('hotel/data',    'HotelController@anyData')->name('hotel.data');
    Route::get('clase/data',    'ClaseServicioController@anyData')->name('clase.data');
    Route::get('tipo/data',     'TipoServicioController@anyData')->name('tipo.data');
    Route::get('formas/data',   'FormasPagoController@anyData')->name('formas.data');
    Route::get('moneda/data',   'MonedaPagoController@anyData')->name('moneda.data');
    Route::get('agencia/data',  'AgenciaController@anyData')->name('agencia.data');
    Route::get('empleado/data', 'EmpleadoController@anyData')->name('empleado.data');
    //controllers
    Route::resource('zonas',    'ZonaController');
    Route::resource('hotel',    'HotelController');
    Route::resource('clase',    'ClaseServicioController');
    Route::resource('tipo',     'TipoServicioController');
    Route::resource('formas',   'FormasPagoController');
    Route::resource('moneda',   'MonedaPagoController');
    Route::resource('agencia',  'AgenciaController');
    Route::resource('empleado', 'EmpleadoController');
});