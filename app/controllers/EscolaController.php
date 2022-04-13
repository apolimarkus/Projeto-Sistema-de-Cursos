<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Colegio;


class EscolaController extends Controller
{
    public function index()
    {
        $objColegio = new Colegio();
        $dados["lista"] = $objColegio->listar();
        $dados["view"] = "Escola/index";

        $this->load("template", $dados);


    }

    public function frmescola()
    {
        $dados["view"] = "Escola/Frmescola";
        $this->load("template", $dados);
    }

    public function salvar()
    {
        //Cria um objeto ao instanciar a classe Curso do models
        $objColegio = new Colegio();

        //Classe padrão stdClass que cria um array e atribui a um objeto
        $escola = new \stdClass();
        $escola->nome = $_POST["nome"];
        $escola->codigo_inep = $_POST["codigo_inep"];
        $escola->cnpj = $_POST["cnpj"];
        $escola->telefone = $_POST["telefone"];
        $escola->email = $_POST["email"];
        $escola->endereco = $_POST["endereco"];
        $escola->idescola = $_POST["idescola"];
        
        if(!$escola->idescola)
        {
            //Chama o método inserir() que está no model Curso.php
            $objColegio->inserir($escola);
        }
        else
        {
            $objColegio->editar($escola);
        }

        header("location:".URL_BASE."escola");
    }

    public function edit($id)
    {
        $objColegio = new Colegio();
        $dados["escola"] = $objColegio->getColegio($id);
        $dados["view"] = "Escola/Frmescola";
        $this->load("template", $dados);
    }

    public function excluir($id){
        $objColegio = new Colegio();
        $objColegio->excluir($id);
        header("location:".URL_BASE."escola");
    }
}