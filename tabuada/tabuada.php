<?php

    require_once('functions/constantes_variaveis.php');
    require_once('functions/laco_for.php');
   


    if(isset($_POST["btnCalcular"]))
    {
        $tabuada = $_POST["txtTabuada"];
        $contador = $_POST["txtContador"];
        
        if($tabuada == "" || $contador == "") //Tratamento de erro de caixa vazia
        {
           echo(ERRO_CAIXA_VAZIA);
        }
        else
        {
            if(is_numeric($tabuada) && is_numeric($contador))
            {
                if($tabuada == 0 || $contador == 0)
                {
                    echo(ERRO_TABUADA_0);
                }
                else
                {
                    for($cont=1;$cont<=$contador;$cont++) 
                    {
                        ($resultado = $tabuada * $cont);
                        $equacoes = $equacoes.$tabuada." x ".$cont." = ".$resultado."<br>"; 
                    }        
                }   
            }
            else
            {
                echo(ERRO_VALORES_NAO_NUMERICOS);
            }  
        }
    }
     

?>


<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tabuada_css/styleTabuada.css">
    <link rel="stylesheet" href="./tabuada_css/resetTabuada.css">
    <link rel="stylesheet" href="./tabuada_css/mainTabuada.css">
    <link rel="stylesheet" href="./tabuada_css/headerTabuada.css">
    <!-- <link rel="stylesheet" href="./tabuada_css/style.css"> -->
    <title>Tabuada</title>
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
        
    <div id="divEstrutura">
            <div id="divForm">
                <div>
                    <form name="frmTabuada" method="POST" action="">
                        <div class="divLabel">
                         <label class="labels">Multiplicando:  </label>
                         <input type="text" name="txtTabuada" maxlength="2" class="textoLabel">
                        </div>
                 
                        <div class="divLabel">
                        <label class="labels">Multiplicador:   </label>
                        <input type="text" name="txtContador" maxlength="2" class="textoLabel">
                        </div> 

                        <div>
                            <input type="submit" value="Calcular" name="btnCalcular" id="botao">
                        </div>  
                    </form>
                    <div id="divResultado">
                        <?php
                        echo($equacoes); 
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </main>
    
</body>
</html>
