<?php
//declaração de variaveis 
//nomeVar = (tipoDados) valor inicial;
$nota1 = (float) 0;
$nota2 = (float) 0;
$nota3 = (float) 0;
$nota4 = (float) 0;
$media = (float) 0;

//Validação para tratar se o botão foi clicado
if (isset($_POST['btncalc'])) {

    //recebendo dados utilizados o POST do formulário
    $nota1 = $_POST['txtn1'];
    $nota2 = $_POST['txtn2'];
    $nota3 = $_POST['txtn3'];
    $nota4 = $_POST['txtn4'];

  
    //Operadores lógicos:
    //OU - or , ||
    //E  - and , &&
    //NEGAÇÃO - !

    /*Tratamento de erro para validção de caixa vazia:
      is_numeric()  - permite validar se o conteúdo é um número
      is_string()   - permite validar se o conteúdo é uma string
      is_interger() - permite validar se o conteúdo é um inteiro
      is_double()   - permite validar se o conteúdo é um valor real
      is_float()    - permite validar se o conteúdo é um valor real
      is_arrey()    - permite validar se o conteúdo é um vetor ou matriz
      is_bool()     - permite validar se o conteúdo é um booleano
      ... e outras opções de validação
    */

    
    if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "" || $_POST['txtn3'] == "" || $_POST['txtn4'] == "") {

        echo ('<p class="msgErro"> Verificar se todos as notas foram preenchidas! </p>');
    } 
    else {

        //Tratamento de erro para validação de caracteres não numéricos
        if (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)) {
            echo('<p class="msgErro"> Todos os valores  digitados devem ser números válidos! </p> ');
        
        }
        else
        {
        //realizando o cálculo da média
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            
        }
        }
    }


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Média</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/reset.css">


    <meta charset="utf-8">
</head>

<body>

    <div id="conteudo">
        <header id="titulo">
        <nav class="menu">
            <ul class="dropdown-menu">                
                <li>                  
                    <a class="pontinho" >≡</a>
                  
                    <ul class="dropdown-submenu">
                        <a id="list" href="../tabuada/tabuada.php">Tabuada</a>
                        <a id="list" href="media.php">Media</a>
                        <a id="list" href="">Par e ímpar</a>
                        <a id="list" href="">Calculadora</a>
                        <a id="list" href="../sit_php/index.php">Inicio</a>
                    </ul>
                </li>   
                <div class="home"><h1>Média</h1></div>   
            </ul>        
        </nav>
        </div>
    </header>



    <main>
        <div id="form">
            <form name="frmMedia" method="post" action="media.php">
                <div>
                    <label id="texto">Nota 1:</label>
                    <input type="text" name="txtn1" value="<?php echo ($nota1) ?>">
                </div>

                <div>
                    <label id="texto">Nota 2:</label>
                    <input type="text" name="txtn2" value="<?php echo ($nota2) ?>">
                </div>

                <div>
                    <label id="texto">Nota 3:</label>
                    <input type="text" name="txtn3" value="<?php echo ($nota3) ?>">
                </div>

                <div>
                    <label id="texto">Nota 4:</label>
                    <input type="text" name="txtn4" value="<?php echo ($nota4) ?>">
                </div>
                <div>
                    <input id="botaoCalcular" type="submit" name="btncalc" value="Calcular">
                    <div id="botaoReset">
                        <a href="media.php">
                            Novo Cálculo
                        </a>
                    </div>
                </div>
            </form>
        </div>

    </main>

        <footer id="resultado">
            A média é: <?php echo ($media); ?>
        </footer>



</body>

</html>