<?php

    session_start();

    include_once('../config/config.php');// conexao com o banco
    include_once('layouts/header.php');

    if(isset($_GET['page'])){
        if(file_exists('layouts/views/'.$_GET['page'].'.php')){
            include_once('layouts/views/'.$_GET['page'].'.php');
        }else{
            include_once('layouts/views/404.php');
        }
    }else{
        if(isset($_SESSION['email'])){
            include_once('layouts/views/home.php');

        }else{

            //include_once('layouts/views/editor.php');
        }
    }

        include_once('layouts/footer.php');
?>
