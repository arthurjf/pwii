<?php

class verurl{
    public function trocarUrl($url){
        if(empty($url)){
            $url = "autenticacao/secoes/login.php";
        }else{
            $url = "autenticacao/secoes/$url.php";
        }
        include_once($url);
    }
}
