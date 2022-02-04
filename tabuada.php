<?php
/**
 * Atividade parte tabuada
 * Autora: Maria Fernanda
 * Data: 04/02/2022
 * Versão: 1.0
 */
        $valor1 = (int) 0;
        $valor2 = (int) 0;
        $resultado = (int) 0;
        $i = (int) 0;

        if(isset($_POST['btnCalc']))
        {
            //receber valores digitados
            $valor1 = $_POST['multiplicador'];
            $valor2 = $_POST['multiplicando'];           
            

            if($valor1 > 0 && $valor2 > 0)
                for($valor1 = 0; $valor1< $valor2; $valor1++)

                echo"$valor1 x $valor2 = " . $valor1 * $valor2 . "<br>";

            $resultado = $valor1 * $valor2;
            
        }
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABUADA</title>
</head>
<body>
    <div id="form">
        <form name="frmTabuada" method="POST" action="">
            valor1:<input type="text" name="multiplicador" value="0"><br>
            valor1:<input type="text" name="multiplicando" value="0"><br>

            <div id="btn">
                <input type="submit" name="btnCalc" value ="Calcular" >
            </div>

            <div id="resultado">
                <?=$resultado;?>
            </div>

        </form>

    </div>
    
</body>
</html>