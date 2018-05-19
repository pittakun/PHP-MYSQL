<?php

require_once 'Crud.php';

class passageiro extends Crud {

    protected $table = 'passageiro';

    private $id_motorista;
    private $nome;
    private $dat;
    private $cpf;
    private $sex;


    public function setId_motorista($id){
        $this->id = $id;
    }

    public function getId_motorista(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setDat($dat){
        $this->dat = $dat;
    }

    public function getData(){
        return $this->dat;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCar($car){
        $this->car = $car;
    }

    public function setSex($sex){
        $this->sex = $sex;
    }

    public function getSex(){
        return $this->sex;
    }


    public function insert(){
        $sql  = "INSERT INTO $this->table (nome, dat, cpf,sexo) VALUES (:nome, :dat, :cpf, :sex)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':dat', $this->dat);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':sex', $this->sex);
        return $stmt->execute();
    }

    public function update($id){

    }


}