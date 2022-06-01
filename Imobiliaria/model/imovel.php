<?php

require_once 'Banco.php';
require_once '../Conexao.php';

class Imovel extends Banco {


    private $descricao;
    private $foto;
    private $valor;
    private $tipo;

  

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

public function save(){
    
    $result = false;

    $conexao = new Conexao();
    $query = "insert into imovel (id, descricao, foto, valor, tipo ) values (null,:descricao,:foto,:valor,:tipo)";

    if($conn = $conexao->getConection()){

        $stmt = $conn->prepare($query);

        if($stmt->execute(array(':descricao' => $this->descricao, ':foto' => $this->foto, ':valor' => $this->valor, ':tipo' => $this->tipo))){
            $result = $stmt->rowCount();
        }
    }
    return $result;
}

public function remove($id){

}



public function find($id){

}

public function listAll(){

    $conexao = new Conexao();
    $conn = $conexao->getConection();
    $query = "SELECT * FROM usuario";
    $stmt = $conn->prepare($query);
    $result = array();

    if ($stmt->execute()){
        while ($rs = $stmt->fetchObject(Usuario::class)){
            $result[] = $rs;
        }
    }else{
        $result = false;
    }
    return $result;
}

public function count(){

}
}
?>