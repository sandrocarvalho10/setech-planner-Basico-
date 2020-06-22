<?php 
class Tarefa{
	
    public $id;
    public $nome;
    public $descricao;
    public $data_criacao;
    public $data_final;
    public $status;
    
    
    public function Tarefa(){
		
    
	}

    
    public function getNome() {
        return $this->nome;
    }
  
    public function setNome($nome) {
        $this->nome= $nome;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
      
    
    public function getData_criacao(){
        return $this->data_criacao;
    }
    
    public function setData_criacao($data_criacao){
        $this->data_criacao = $data_criacao;
    }
    
    public function getDataFinal() {
        return $this->data_final;
    }
  
    public function setDataFinal($data_final) {
        $this->data_final = $data_final;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    public function setStatus($status){
        $this->status = $status;
    }
    
        
    
    
}
