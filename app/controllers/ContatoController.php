<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Contato;

class ContatoController extends Controller {

    public function index() {
        $dados["view"] = "home";
        $this->load("template", $dados);
    }

    public function listar() {
        $objContato = new Contato();
        $dados["lista"] = $objContato->lista();
        $dados["view"] = "Listar";
        $this->load("template", $dados);
    }

    public function create() {
        $dados["view"] = "Cadastro";
        $this->load("template", $dados);
    }

    public function edit($id) {
        $objContato = new Contato();
        $dados["contato"] = $objContato->getContato($id);
        $dados["view"] = "Cadastro";
        $this->load("template", $dados);
    }

    public function editarcontato($id) {
        $objContato = new Contato();
            $contato = new \stdClass();
            $contato->nome = $_POST["nome"];
            $contato->endereco = $_POST["endereco"];
            $contato->numero = $_POST["numero"];
            $contato->bairro = $_POST["bairro"];
            $contato->cidade = $_POST["cidade"];
            $contato->uf = $_POST["uf"];
            $contato->cep = $_POST["cep"];
            $contato->celular = $_POST["celular"];
            $contato->nascimento = $_POST["nascimento"];
            $contato->email = $_POST["email"];
            $contato->cpf = $_POST["cpf"];
            $contato->id_contato = $id;

        $objContato->editar($contato);
        header("location:" . URL_BASE . "contato/listar");
    }

    public function salvar() {
        $objContato = new Contato();
        $contato = new \stdClass();
            $contato->nome = $_POST["nome"];
            $contato->endereco = $_POST["endereco"];
            $contato->numero = $_POST["numero"];
            $contato->bairro = $_POST["bairro"];
            $contato->cidade = $_POST["cidade"];
            $contato->uf = $_POST["uf"];
            $contato->cep = $_POST["cep"];
            $contato->celular = $_POST["celular"];
            $contato->nascimento = $_POST["nascimento"];
            $contato->email = $_POST["email"];
            $contato->cpf = $_POST["cpf"];

        $objContato->inserir($contato);
        header("location:" . URL_BASE . "contato/listar");
    }

    public function deletar($id) {
        $objContato = new Contato();
        $objContato->delete($id);

        header("location:" . URL_BASE . "contato/listar");
    }

}