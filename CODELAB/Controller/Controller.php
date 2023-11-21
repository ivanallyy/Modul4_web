<?php

namespace Controller;

class COntroller
{
    //VARIABEL ATRIBUT
    var $controllerName;
    var $controllerMethod;

    //Method utk ambil semua atribut
    public function getControllerAttribute()
    {
        return [
            "ControllerName" => $this -> controllerName,
            "Method" => $this -> controllerMethod 
        ];

    }
}