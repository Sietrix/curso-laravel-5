<?php 

namespace Cinema\Http\Controllers;

class WelcomeController extends Controller{
    
    public function contact(){
        return "contact me";
        
    }
    
    public function help(){
        return view('pages.help');
    }
}

?>

