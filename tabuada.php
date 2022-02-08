<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/php.css">
    <title>TABUADA</title>
</head>
<body>
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
            <h2>Tabuada</h2>
        </main>

    <div id="form">

    <div id="frm" >
     <form name="frmTabuada" method="POST" action="">
            valor1:<input type="text" name="multiplicador" value="0"><br>
            valor2:<input type="text" name="multiplicando" value="0"><br>

            <div id="btn">
                <input type="submit" name="btnCalc" value ="Calcular" >
            </div>         
        </form>
    </div>
    </div>
    <?php
/**
 * Atividade parte tabuada
 * Autora: Maria Fernanda
 * Data: 04/02/2022
 * Versão: 1.0
 */
        $valor1 = (int) 0;
        $valor2 = (int) 0;

        if(isset($_POST['btnCalc']))
        {
            //receber valores digitados
            $valor1 = $_POST['multiplicador'];
            $valor2 = $_POST['multiplicando'];           
            
            if(!is_numeric($valor1) && !is_numeric($valor2))
            {
                echo"O valor informado não é um nmero<br>";
            }elseif($valor1 > 1 && $valor2 > 0)
                {
                    for($valor1 = 1; $valor1 < $valor2; $valor1++)
                    echo"$valor2 x $valor1 = " . $valor2 * $valor1 . "<br>";
                }

        }
        ?>

</body>
</html>