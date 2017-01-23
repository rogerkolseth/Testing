<?php

require_once("Controller.php");


Class CarsController extends Controller {
    
    public function show($page) {
        if ($page == "home"){
        $this->getAll()
            ;}
    }
    
}