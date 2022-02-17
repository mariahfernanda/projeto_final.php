<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pagina_inicial/header.css">
    <link rel="stylesheet" href="./pagina_inicial/main.css">
    <link rel="stylesheet" href="./pagina_inicial/style.css">
    <link rel="stylesheet" href="./pagina_inicial/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@0;1&display=swap" rel="stylesheet">
    <title>PHP</title>
</head>
<body>
    <header>
        <nav class="menu">
            <ul class="dropdown-menu">                
                <li>                  
                    <a class="pontinho" >≡</a>
                  
                    <ul class="dropdown-submenu">
                        <a id="list" href="../tabuada/tabuada.php">Tabuada</a>
                        <a id="list" href="../media/media.php">Media</a>
                        <a id="list" href="../parimpar/parImpar.php">Par e ímpar</a>
                        <a id="list" href="../calculadora/calculadora.php">Calculadora</a>
                        <a id="list" href="index.php">Inicio</a>
                    </ul>
                </li>   
                <div class="home"><h1>Home</h1></div>   
            </ul>  
       
        </nav>
    </header>
    <main>
            <h2 class="funcao">Qual função vai utilizar hoje?</h2>
                
                <a href="../tabuada/tabuada.php" class="Tabuada"><h3>Tabuada</h3></a>                
                <a href="../media/media.php" class="media"><h3>Média</h3></a> 
                <a href="../parimpar/parImpar.php" class="par-impar"><h3>Par e Ímpar</h3></a> 
                <a href="../calculadora/calculadora.php" class="Calculadora"><h3>Calculadora</h3></a>
            </div>            
            
    </main>
    
</body>
</html>