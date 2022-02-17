<?php 
                 //Função para calcular operações matemáticas
      function calcular($n1, $n2, $tipoCalculo)
      {   
              //Criando variavies locais dentro da função
          $numero1 = (double) 0;
          $numero2 = (double) 0;
          $opcaoCalculo = (string) null;
          $total = (double) 0;
  
              //Guardando os valores dos argumentos nas variaveis da função
          $numero1 = $n1;
          $numero2 = $n2;
          $opcaoCalculo = $tipoCalculo;
  
                  //Verificação para qual tipo de calculo sera realizado
                  if($opcaoCalculo == "SOMA")
                  {
                      $total = $n1 + $n2;
                  }
                  elseif($opcaoCalculo == "SUBTRACAO")
                  {
                      $total = $n1 - $n2;
                  }
                  elseif($opcaoCalculo == "MULTIPLICACAO")
                  {
                      $total =$n1 * $n2; 
                  }
                  elseif($opcaoCalculo == "DIVISAO")
                  {
                      if($n2 == 0)
                      {
                          echo(ERRO_DIVISAO_ZERO);
                      }
                       else
                      {
                          round($total = $n1 / $n2, 2);
                      }
                  }
          return $total;        
      }
?>