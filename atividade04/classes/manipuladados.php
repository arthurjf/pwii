<?php

include_once("conexao.php");

class manipuladados extends conexao{

    protected $sql, $qr;

    public function validarLogin($login, $password){
        $this->sql = "SELECT * FROM tb_usuarios WHERE nome = '$login' and senha = '$password'";
        
        $this->query = self::execSQL($this->sql);
        
        $linhas = @mysqli_num_rows($this->qr);
        
        return $linhas;
    }

}

?>