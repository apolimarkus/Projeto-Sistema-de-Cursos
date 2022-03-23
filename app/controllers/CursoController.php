<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Curso;


class CursoController extends Controller
{
    public function index()
    {
        $objCurso = new Curso();
        $dados["lista"] = $objCurso->listar();
        $dados["view"] = "Curso/index";

        $this->load("template", $dados);


    }

    public function frmcurso()
    {
        $dados["view"] = "Curso/Frmcurso";
        $this->load("template", $dados);
    }

    public function salvar()
    {
        //Cria um objeto ao instanciar a classe Curso do models
        $objCurso = new Curso();

        //Classe padrão stdClass que cria um array e atribui a um objeto
        $curso = new \stdClass();
        $curso->nome = $_POST["nome"];
        $curso->instituicao = $_POST["instituicao"];
        $curso->carga_horaria = $_POST["carga_horaria"];
        $curso->area_curso = $_POST["area_curso"];
        $curso->duracao_curso = $_POST["duracao_curso"];
        $curso->ano = $_POST["ano"];
        $curso->valor = $_POST["valor"];
        $curso->idcurso = $_POST["idcurso"];

        if(!$curso->idcurso)
        {
            //Chama o método inserir() que está no model Curso.php
            $objCurso->inserir($curso);
        }
        else
        {
            $objCurso->editar($curso);
        }

        header("location:".URL_BASE."curso");
    }

    public function edit($id)
    {
        $objCurso = new Curso();
        $dados["curso"] = $objCurso->getCurso($id);
        $dados["view"] = "Curso/Frmcurso";
        $this->load("template", $dados);
    }

    public function excluir($id){
        $objCurso = new Curso();
        $objCurso->excluir($id);
        header("location:".URL_BASE."curso");
    }
}