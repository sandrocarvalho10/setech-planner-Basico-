<?php
class Usuario{
    
    public $id;
    public $cpf;
    public $nome;
    public $email;
    public $pass;
    
    
    public function __construct($id,$cpf, $nome, $email, $pass){
        $this->setId($id); 
        $this->setCpf($cpf);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setPass($pass);
    }
    
    
    public function Usuario(){
        
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getCpf(){
        return $this->cpf;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPass(){
        return $this->pass;
    }
    
    
}

?>