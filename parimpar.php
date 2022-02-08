<?php
/**
 * Atividade parte impares e pares
 * Autora: Maria Fernanda
 * Data: 08/02/2022
 * Versão: 1.0
 */
$valor1 = (int) 0;
$valor2 = (int) 0;
$resultado = (int) 0;

if(isset($_POST['btnCalc']))
{
    //receber valores digitados
    $valor1 = $_POST['valorInicial'];
    $valor2 = $_POST['valorFinal'];           
    

    if($valor1 / 2 )
    {

            echo"$valor1 = Par <br>";
    }
    else{
        echo"$valor1 = Par <br>";
    }   

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Par e Ímpar</title>
</head>
<body>
<div id="form">
        <form name="frmTabuada" method="POST" action="">
            valor1:<input type="text" name="valorInical" value="0"><br>
            valor1:<input type="text" name="valorFinal" value="0"><br>

            <div id="btn">
                <input type="submit" name="btnCalc" value ="Calcular" >
            </div>

            <div id="resultado">
                <?=$resultado;?>
            </div>           
        </form>
        <header>
        <nav class="menu">
            <ul class="dropdown-menu">
                <li>
                    <a href="">MENU</a>
                    <ul class="dropdown-submenu"> 
                        <a href="">Média</a>
                        <a href="">Calculadora</a>
                        <a href="http://localhost/maria/atividade_php01/tabuada.php">Tabuada</a>
                        <a href="http://localhost/maria/atividade_php01/parimpar.php">Pares e Ímpares</a>
                    </ul>
                </li>
        </nav>
        </header>

        <main>
            <h2>Par e Ímpar</h2>
        </main>

    </div>
    
</body>
</html>