<?php

namespace App\Controllers;


class PageController
{
    public function view($param, $value){
        echo 'view method of PageController works <br>';
        echo "Param: $param, value: $value";
    }

}