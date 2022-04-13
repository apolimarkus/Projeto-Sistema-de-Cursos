<?php

namespace app\models;

use app\core\Model;

class Colegio extends Model
{
    public function listar()
    {
        $sql = "SELECT * FROM tbescola";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    //Método que faz a inserção dos dados no BD
    public function inserir($escola)
    {
        $sql = "INSERT INTO tbescola SET
        nome            = :nome,
        codigo_inep     = :codigo_inep,
        cnpj            = :cnpj,
        telefone        = :telefone,
        email           = :email,
        endereco        = :endereco        
        ";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $escola->nome);
        $qry->bindValue(":codigo_inep", $escola->codigo_inep);
        $qry->bindValue(":cnpj", $escola->cnpj);
        $qry->bindValue(":telefone", $escola->telefone);
        $qry->bindValue(":email", $escola->email);
        $qry->bindValue(":endereco", $escola->endereco);
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function getColegio($id)
    {
        $sql = "SELECT * FROM tbescola WHERE idescola = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    //Método responsável por editar e/ou atualizar os dados do curso
    public function editar($escola)
    {
        $sql = "UPDATE tbescola SET
        nome            = :nome,
        codigo_inep     = :codigo_inep,
        cnpj            = :cnpj,
        telefone        = :telefone,
        email           = :email,
        endereco        = :endereco
        WHERE idescola   = :id
        ";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $escola->nome);
        $qry->bindValue(":codigo_inep", $escola->codigo_inep);
        $qry->bindValue(":cnpj", $escola->cnpj);
        $qry->bindValue(":telefone", $escola->telefone);
        $qry->bindValue(":email", $escola->email);
        $qry->bindValue(":endereco", $escola->endereco);
        $qry->bindValue(":id", $escola->idescola);
        $qry->execute();
        return $escola->idescola;
    }

    //Método excluir
    public function excluir($id)
    {
        $sql = "DELETE FROM tbescola WHERE idescola = $id";
        $qry = $this->db->query($sql);
    }
}
