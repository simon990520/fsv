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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Api

Route::resource('api/v1/municipios', 'MunicipiosController');

Route::resource('api/v1/login', 'LoginController');
Route::resource('api/v1/rols', 'RolsController');
Route::resource('api/v1/caracterizacion', 'CaracterizacionController');
Route::resource('api/v1/canalizacion', 'CanalizacionController');
Route::resource('api/v1/visitauno', 'VisitaUnoController');
Route::resource('api/v1/visitados', 'VisitaDosController');
Route::resource('api/v1/visitatres', 'VisitaTresController');
Route::resource('api/v1/documentos', 'DocumentosController');
Route::resource('api/v1/pacientes', 'PacientesController');
Route::resource('api/v1/encuesta', 'EncuestaController');
Route::resource('api/v1/upload/visitauno', 'Foto1Controller');
Route::resource('api/v1/profesionales', 'Foto1Controller');
Route::resource('api/v1/semaforo', 'SemaforoController');
Route::resource('api/v1/eps', 'EpsController');
Route::resource('api/v1/ips', 'IpsController');
Route::resource('api/v1/cie', 'CieController');
Route::resource('api/v1/seguimiento', 'SeguimientoController');
Route::resource('api/v1/verificacion', 'VerificacionController');
Route::get('api/v1/paciente/{id}', 'PacientesController@optenerp');
Route::get('api/v1/buscarpaciente/{termino}/{idProfesional}', 'PacientesController@buscarPacientes');
/*Route::get('api/v1/buscarpaciente/{termino}/{idProfesional}', 'PacientesController@buscarPacientes');*/
Route::get('api/v1/buscarpaciente/{termino}/', 'PacientesController@buscarAllPacientes');
Route::get('api/v1/allPacientes', 'PacientesController@allPacientes');

//EndApi

Route::get('profile', ['middleware' => 'auth', function()
{
    // Solo los usuarios autenticados pueden entrar...
}]);
