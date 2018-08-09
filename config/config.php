<?php

 //$localhost = 'localhost';
 //$localhost = '10.51.47.69';
 //$username  = 'root';
 //$password  = ''; SENHA LOCALHOST
 //$password  = 'root';
 //$db 	    = 'loja';
 
 //$connect  = mysqli_connect($localhost, $username, $password, $db);

define('BASEPATH', 'http://localhost/manual/public_html/');
define('APP_PATH', '../app/');

function baseUrlPublic($url){

    return BASEPATH.$url;

}

function appPath($filename){

    return APP_PATH.$filename.".php";

}