<?php
//Incluindo a classe Figura
require_once ('Figura.php');



class FiguraDAO{

public function Figura($base,$altura){
        $this->base = $base ;
        $this->altura = $altura;
        }    
  
 public function quadrado(Figura $figura) {
                            
                            $base = $figura->getBase();
                            $area = $base * $base;
                            echo $area;
                            }
    
public function retangulo(Figura $figura) {
                            
                            $base = $figura->getBase();
                            $altura = $figura->getAltura();
                            $area = $base * $altura;
                            echo $area;
                            }

public function triangulo(Figura $figura) {
                            
                            $base = $figura->getBase();
                            $altura = $figura->getAltura();
                            $area = ($base * $altura)/2;
                            echo $area;
                            }    
}
 
?>