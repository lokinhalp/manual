<?php

 //$localhost = 'localhost';
 //$localhost = '10.51.47.69';
 //$username  = 'root';
 //$password  = ''; SENHA LOCALHOST
 //$password  = 'root';
 //$db 	    = 'loja';
 
 //$connect  = mysqli_connect($localhost, $username, $password, $db);
 //$host = "localhost:C:\Banco\INTUICTIVE.FDB";
 $host = 'localhost:/Banco/INTUICTIVE.FDB';
 $usuario = "SYSDBA"; // Usuário 
 $senha = "masterkey"; // Senha

 //$host = 'localhost:/Banco/INTUICTIVE.FDB';
 //$connect = @ibase_connect($host,'INTUICTIVE','FARMA99');
 $connect = ibase_connect( $host, $usuario, $senha ) or die( 'Erro ao conectar: ' . ibase_errmsg() );
    
define('BASEPATH', 'http://localhost/manual/public_html/');
define('APP_PATH', '../app/');

function baseUrlPublic($url){

    return BASEPATH.$url;

}


function appPath($filename){

    return APP_PATH.$filename.".php";

}