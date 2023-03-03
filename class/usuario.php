<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario(){

        return $this->idusuario;
    }

    public function setIdusuario($value){

        return $this->idusuario = $value;
    }

    public function getDeslogin(){

        return $this->deslogin;
    }

    public function setDeslogin($value){

        return $this->deslogin = $value;
    }

    public function getDessenha(){

        return $this->dessenha;
    }

    public function setDessenha($value){

        return $this->dessenha = $value;
    }

    public function getDtcadastro(){

        return $this->dtcadastro;
    }

    public function setDtcadstro($value){

        return $this->dtcadastro = $value;
    }

    public function loadById($id){

        $sql = new Sql();
        $results = $sql->select("SELECT*FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID" =>$id
        ));

        if (count($results) > 0 ){

            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadstro(new DateTime($row['dtcadastro']));

        }

    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/y h:i:s")
        ));
    }

}

?>