## Projeto-Calculo-de-área-Padrão-MVC


![img calculadora de area mvc](https://github.com/evandroid95/Projeto-Calculo-de-area-Padrao-MVC/blob/master/Captura%20de%20Tela%20(303).png)

# Descrição:

Esse sistema utiliza o padrão de arquiterua MVC siglas de (Modelo,visão e controle) é dividido em três camadas de aplicação onde a interface de interação do usuário (front-end) são separados dos métodos que interagem com o banco de dados (back-end) usando esse padrão,este projeto realiza o cálculo de áreas geométricas, quadrado, retângulo e triângulo. Para isso, há um formulário (camada visão) que solicita ao usuário inserir dados para o cálculo. Com efeito, o usuário do sistema pode escolher a opção para calcular a área do quadrado e deverá, então, inserir uma informação referente a medida da aresta (lado do quadrado).

Ao clicar na opção para calcular a área do quadrado, as informações da medida da aresta, são enviados à camada controle, os dados e a informação do formulário utilizado. Por sua vez, um arquivo, com script PHP, dentro da camada controle, contém uma estrutura de decisão que verifica qual formulário foi utilizado e então, invoca a relação matemática adequada. Essas relações matemáticas estão contidas na camada modelo.

Após o cálculo, o resultado é retornado à camada controle e ela decide qual interface gráfica deve ser acionada para exibir a informação ao usuário. 

A seguir é apresentado o arquivo em PHP que realiza o controle no exemplo mencionado


# Como usar?

Passo 1 - Para acessar o arquivo você precisa ter instalado em seu pc o Banco de dados Mysql e o Xampp para procurar os seus arquivos para execução,
por padrão o diretório dos arquivos tem que ser o seguinte C:/xampp/htdocs.


Passo 2 - Devemos abrir o xampp e iniciar o apache e o Mysql:
![img calculadora de area mvc](https://github.com/evandroid95/Projeto-Calculo-de-area-Padrao-MVC/blob/master/Captura%20de%20Tela%20(302).png)


Ultimo passo - devemos abrir em nosso navegador, o caminho: localhost/htdocs/CalculaArea , onde o view.html será o nome do arquivo onde terá a interface html para digitar os comandos da calculadora.
