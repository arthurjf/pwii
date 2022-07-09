<?php

include_once("conexao.php");

class manipuladados extends conexao
{
    protected $sql, $qr, $table, $fields, $dados, $status, $fieldId, $valueId;

    public function validarLogin($login, $password)
    {
        $this->sql = "SELECT * FROM tb_usuarios WHERE nome = '$login' and senha = '$password'";

        $this->query = self::execSQL($this->sql);

        $linhas = @mysqli_num_rows($this->qr);

        return $linhas;
    }

    public function setTable($t)
    {
        $this->table = $t;
    }

    public function setFields($f)
    {
        $this->fields = $f;
    }

    public function setDados($d)
    {
        $this->dados = $d;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setFieldId($id)
    {
        $this->fieldId = $id;
    }

    public function setValueId($id)
    {
        $this->valueId = $id;
    }

    public function insert()
    {
        $this->sql = "INSERT INTO $this->table($this->fields) VALUES($this->dados)";

        if (self::execSQL($this->sql)) {
            $this->status = "Cadastrado com Sucesso!";
        } else {
            $this->status = "Erro ao cadastrar" . mysqli_error();
        }
    }

    public function update()
    {
        $this->sql = "UPDATE $this->table SET $this->fields WHERE $this->fieldId = '$this->valueId'";

        if (self::execSQL($this->sql)) {
            $this->status = "Alterado com sucesso!";
        } else {
            $this->status = "Erro ao alterar na tabela " . $this->table . +" " . mysqli_error();
        }
    }

    public function delete()
    {
        $this->sql = "DELETE FROM $this->table WHERE $this->fieldId = '$this->valueId'";

        if (self::execSQL($this->sql)) {
            $this->status = "Deletado com sucesso!";
        } else {
            $this->status = "Erro ao deletar na tabela " . $this->table . +" " . mysqli_error();
        }
    }

    public function getAllDataTable()
    {
        $this->sql = "SELECT * FROM $this->table";
        $this->qr  = self::execSQL($this->sql);
        $produtos = array();

        while ($row = @mysqli_fetch_assoc($this->qr)) {
            array_push($produtos, $row);
        }

        return $produtos;
    }

    public function getAllProdutos()
    {
        $this->sql = "SELECT tb_produtos.*,
        tb_categoriaprodutos.nome AS categoria_nome
        FROM $this->table
        INNER JOIN tb_categoriaprodutos
        ON tb_produtos.id_categorias = tb_categoriaprodutos.id;";

        $this->qr  = self::execSQL($this->sql);
        $produtos = array();

        while ($row = @mysqli_fetch_assoc($this->qr)) {
            array_push($produtos, $row);
        }

        return $produtos;
    }

    public function getAllProdutosFromCategory($categoriaId)
    {
        $this->sql = "SELECT tb_produtos.*,
        tb_categoriaprodutos.nome AS categoria_nome
        FROM $this->table
        INNER JOIN tb_categoriaprodutos 
        ON tb_produtos.id_categorias = tb_categoriaprodutos.id
        WHERE tb_categoriaprodutos.id = $categoriaId";

        $this->qr  = self::execSQL($this->sql);
        $produtos = array();

        while ($row = @mysqli_fetch_assoc($this->qr)) {
            array_push($produtos, $row);
        }

        return $produtos;
    }
}

function converte($Strings)
{
    return iconv("UTF-8", "ISO8859-1", $Strings);
}
