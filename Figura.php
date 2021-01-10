<?php
class Figura {
    private $base;
    private $altura;
    
 
 //Encapsulamento dos dados (getters e setters)
    public function getBase(){
        return $this->base;
    }
    
    public function getAltura(){
        return $this->altura;
    }
 
    public function setBase($base){
	$this->base = $base;
    }
    
    public function setAltura($altura){
	$this->altura = $altura;
    }
}
 
?>