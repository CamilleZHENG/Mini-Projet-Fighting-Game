<?php
    header('content-type: text/html; charset=utf-8');
    /*Fixer le paramètre HTTP charset*/


    spl_autoload_register(function($className){
            include 'classes/'.$className.'.php';
        });

    new Combat();
