<?php

namespace app\models;



use app\core\Model;

class Contato extends Model {

    public function lista() {
        $sql = "SELECT * FROM contato";
        $res = $this->db->query($sql);
        return $res->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getContato($id) {
        $sql = "SELECT * FROM contato WHERE id_contato = $id";
        $res = $this->db->query($sql);
        return $res->fetch(\PDO::FETCH_OBJ);
    }

    public function inserir($contato) {
        $sql = "INSERT INTO contato SET
                    nome        =:nome,
                    endereco    =:endereco,
                    numero      =:numero,
                    bairro      =:bairro,
                    cidade      =:cidade,
                    uf          =:uf,
                    cep         =:cep,
                    celular     =:celular,
                    nascimento  =:nascimento,
                    email       =:email,
                    cpf         =:cpf
                ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $contato->nome);
        $qry->bindValue(":endereco", $contato->endereco);
        $qry->bindValue(":numero", $contato->numero);
        $qry->bindValue(":bairro", $contato->bairro);
        $qry->bindValue(":cidade", $contato->cidade);
        $qry->bindValue(":uf", $contato->uf);
        $qry->bindValue(":cep", $contato->cep);
        $qry->bindValue(":celular", $contato->celular);
        $qry->bindValue(":nascimento", $contato->nascimento);
        $qry->bindValue(":email", $contato->email);
        $qry->bindValue(":cpf", $contato->cpf);
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function editar($contato) {
        $sql = "UPDATE contato SET
                    nome        =:nome,
                    endereco    =:endereco,
                    numero      =:numero,
                    bairro      =:bairro,
                    cidade      =:cidade,
                    uf          =:uf,
                    cep         =:cep,
                    celular     =:celular,
                    nascimento  =:nascimento,
                    email       =:email,
                    cpf         =:cpf
                WHERE id_contato =:id_contato
                ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $contato->nome);
        $qry->bindValue(":endereco", $contato->endereco);
        $qry->bindValue(":numero", $contato->numero);
        $qry->bindValue(":bairro", $contato->bairro);
        $qry->bindValue(":cidade", $contato->cidade);
        $qry->bindValue(":uf", $contato->uf);
        $qry->bindValue(":cep", $contato->cep);
        $qry->bindValue(":celular", $contato->celular);
        $qry->bindValue(":nascimento", $contato->nascimento);
        $qry->bindValue(":email", $contato->email);
        $qry->bindValue(":cpf", $contato->cpf);
        $qry->bindValue(":id_contato", $contato->id_contato);
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function delete($id) {
        $sql = "DELETE FROM `contato` WHERE id_contato = $id";
        $this->db->exec($sql);
    }
}