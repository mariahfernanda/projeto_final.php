<?php
    function lacoFor()
    {
        for($cont=1;$cont<=$contador;$cont++) 
        {
            ($resultado = $tabuada * $cont);
            $equacoes = $equacoes.$tabuada." x ".$cont." = ".$resultado."<br>";   
        } 
    }  
?> 