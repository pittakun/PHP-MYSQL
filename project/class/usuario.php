<?php

require_once 'Crud.php';

class usuario extends Crud {

    protected $table = 'usuario';

    private $nome;
    private $senha;



    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setDat($senha){
        $this->senha = $senha;
    }

    public function getData(){
        return $this->senha;
    }


    public function insert(){

    }

    public function update($id){

    }

    public function log($l,$s){
        $sql  = "SELECT * FROM $this->table WHERE login = '$l' and senha = '$s' ";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':senha', $this->senha);

        return $stmt->execute();
    }
}