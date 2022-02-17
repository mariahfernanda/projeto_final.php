<?php
  
        require_once('functions/constantes_variaveis_par_impar.php');


        if(isset($_POST["btnCalcular"])) //Tratamento de erro do Botão
        {
            require_once('functions/variaveis_denro_do_if.php');


            if($ninicial == "" || $nfinal == "" || $ninicial == "Selecione um Número" || $nfinal == "Selecione um Número" ) //Tratamento de erro de caixa vazia
            {
               echo(ERRO_CAIXA_VAZIA);
            }
            else
            {
                if($ninicial >= $nfinal) //Tratamento de erro Número Inicial maior ou igual ao Número Final 
                {
                    echo(MENOR_IGUAL);
                }
                else
                {
                    for($cont=$ninicial;$cont<=$nfinal;$cont++) //Teste lógico para criar os números
                    {       
                        if($cont%2 == 0) //Teste lógico para definir se o número é par ou ímpar
                        {
                            $numerosPar = $numerosPar.$cont."<br>";
                        $qtdPares++;
                        }
                        else
                        {
                            $numerosImpar = $numerosImpar.$cont."<br>"; 
                            $qtdImpares++;
                        }
                    }
                }
            }
        }

        



?>

<html>

<head>
    <title>Pares e Impares</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main.css">
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
                        <a id="list" href="../media/media.php">Media</a>
                        <a id="list" href="parImpar.php">Par e ímpar</a>
                        <a id="list" href="../calculadora/calculadora.php">Calculadora</a>
                        <a id="list" href="../inicio/index.html">Inicio</a>
                    </ul>
                </li>   
                <div class="home"><h1>Pares e Ímpares</h1></div>   
            </ul>        
        </nav>
        </div>
    </header>

    <main>
    <div id="divEstrutura">
        <div id="divForm">
            <div>
                <form name="frmParImpar" method="POST" action="">
                    <div>
                        <label class="labels">Número Inicial: </label>
                        <select name="slcInicial" class="selectLabel">
                            <option value="">
                                <?php
                            for($cont=1;$cont<=500;$cont++) 
                            {
                                echo("<option value='".$cont."'>".$cont."</option>");
                            }
                        ?>
                            <option selected>Selecione um Número</option>
                            </option>
                        </select>
                    </div>
                    <input type="submit" value="Calcular" name="btnCalcular" id="botao">
                    <div>
                        <label class="labels" >Número Final: </label>
                        <select name="slcFinal" class="selectLabel">
                            <option value="">
                                <?php
                                    for($cont=100;$cont<=1000;$cont++) 
                                    {
                                        echo("<option value='".$cont."'>".$cont."</option>");
                                    }
                                ?>
                            <option selected>Selecione um Número</option>
                            </option>
                        </select>
                    </div>
                </form>
                <div id="divResultado">
                    <div id="divImpares">
                        <div>
                            Ímpares:
                        </div>
                        <div class="divNumeros">
                            <?=$numerosImpar?>
                        </div>
                        <div class="qntdNumeros">
                            Quantidade de números ímpares: <?=$qtdImpares?>
                        </div>
                    </div>
                    <div id="divPares">
                        <div>
                            Pares:
                        </div>
                        <div class="divNumeros">
                            <?=$numerosPar?>
                        </div>
                        <div class="qntdNumeros">
                            Quantidade de números pares: <?=$qtdPares?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>

</html>