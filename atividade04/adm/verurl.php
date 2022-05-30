<?php
 class verURL{

    function trocarUrl($url){
        if(empty($url)){
            $url = "secoes/formularioNoticia.php";
        }else{
            $url= "secoes/$url.php";
        }
        include_once($url);

    }
 }
?>