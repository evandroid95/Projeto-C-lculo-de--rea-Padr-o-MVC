
<?php 
require_once ('Figura.php');
require_once ('FiguraDAO.php');

class Controle {

    public function quadrado() {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
       
                            
        $figura = new Figura();
        $figura->setBase($base);
        $figura->setAltura($altura);
        $figuraDao = new FiguraDAO();
        $figuraDao->quadrado($figura);
    }
    
   public function retangulo() {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
       
                            
        $figura = new Figura();
        $figura->setBase($base);
        $figura->setAltura($altura);
        $figuraDao = new FiguraDAO();
        $figuraDao->retangulo($figura);
    }
    
      public function triangulo() {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
       
                            
        $figura = new Figura();
        $figura->setBase($base);
        $figura->setAltura($altura);
        $figuraDao = new FiguraDAO();
        $figuraDao->triangulo($figura);
    }
    
}

$tipo = $_POST['tipo'];


if($tipo==1){
$controle = new Controle();
echo "Seu quadrado tem a área de ";
$controle->quadrado();
}else if($tipo==2){
$controle = new Controle();
echo "Seu retângulo tem a área de ";    
$controle->retangulo();
}else if($tipo==3){
$controle = new Controle();
echo "Seu triângulo tem a área de ";    
$controle->triangulo();
}else{
    echo "Tipo de Figura inválida";
}
?>