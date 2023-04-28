<?php

include_once(__DIR__."/../vendor/autoload.php");

use App\model\Usuario;

if(!isset($_SESSION['uLogado'])){
    if( $_POST['name']== 'admin' && $_POST['pass'] == 'admin'){
        $uAdminPadrao = new Usuario();
        $uAdminPadrao->setName('admin');
        $uAdminPadrao->setPass('admin');
        $_SESSION['uLogado'] = $uAdminPadrao->getName();
        echo 'Welcome.';
    }else{
        echo "Error.";

    }
}