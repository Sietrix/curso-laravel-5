<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');

/*
Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
Route::resource('movie','MovieController'); //Crear varias

Route:: get('prueba',function(){
    return "Hola desde routes.php";
});

Route:: get('nombre/{nombre}',function($nombre){
    return "Mi nombre es: ".$nombre; 
});

Route:: get('edad/{edad}',function($edad){
    return "Mi edad es: ".$edad;
});

Route:: get('nombre/{nombre}/edad/{edad}',function($nombre,$edad){
    return "Mi nombre es: ".$nombre." y tengo ".$edad." años";
});

//Parametro opcional
Route:: get('apellido/{apellido?}',function($apellido="Medina"){
    return $apellido;
});

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('contact','WelcomeController@contact');
Route::get('help','WelcomeController@help');
*/