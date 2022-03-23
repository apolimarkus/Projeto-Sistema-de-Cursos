<?php

namespace app\models;
use app\core\Model;

class Curso extends Model
{
    public function listar()
    {
        $sql = "SELECT * FROM tbcursos";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);

    }

    //Método que faz a inserção dos dados no BD
    public function inserir($curso)
    {
        $sql = "INSERT INTO tbcursos SET
        nome            = :nome,
        instituicao     = :instituicao,
        carga_horaria   = :carga_horaria,
        area_curso      = :area_curso,
        duracao_curso   = :duracao_curso,
        ano             = :ano,
        valor           = :valor
        ";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $curso->nome);
        $qry->bindValue(":instituicao", $curso->instituicao);
        $qry->bindValue(":carga_horaria", $curso->carga_horaria);
        $qry->bindValue(":area_curso", $curso->area_curso);
        $qry->bindValue(":duracao_curso", $curso->duracao_curso);
        $qry->bindValue(":ano", $curso->ano);
        $qry->bindValue(":valor", $curso->valor);
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function getCurso($id)
    {
        $sql = "SELECT * FROM tbcursos WHERE idcurso = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    //Método responsável por editar e/ou atualizar os dados do curso
    public function editar($curso)
    {
        $sql = "UPDATE tbcursos SET
        nome            = :nome,
        instituicao     = :instituicao,
        carga_horaria   = :carga_horaria,
        area_curso      = :area_curso,
        duracao_curso   = :duracao_curso,
        ano             = :ano,
        valor           = :valor
        WHERE idcurso   = :id
        ";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $curso->nome);
        $qry->bindValue(":instituicao", $curso->instituicao);
        $qry->bindValue(":carga_horaria", $curso->carga_horaria);
        $qry->bindValue(":area_curso", $curso->area_curso);
        $qry->bindValue(":duracao_curso", $curso->duracao_curso);
        $qry->bindValue(":ano", $curso->ano);
        $qry->bindValue(":valor", $curso->valor);
        $qry->bindValue(":id", $curso->idcurso);

        $qry->execute();
        return $curso->idcurso;

    }

    //Método excluir
    public function excluir($id)
    {
        $sql = "DELETE FROM tbcursos WHERE idcurso = $id";
        $qry = $this->db->query($sql);

    }
}