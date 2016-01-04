<?php
namespace Cinema\Http\Controllers;

class PruebaController extends Controller{
    public function index(){
        return "Hola desde controlador";
    }
    
    public function nombre($nombre){
        return "Mi nombre es: ".$nombre;
    }
}
?>