<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    <h1>
        BINGO
    </h1>
    <form method="post">
        <input type="submit" value="sortear" name="bt-sortear">
        <input type="submit" value="limpar" name="bt-limpar">
    </form>

        <?php

    session_start();

            if(!isset($_SESSION['numeros'])){
                $_SESSION['numeros']=array();
            }

            if(isset($_POST['bt-limpar'])){
                $_SESSION['numeros']= array();
            }
            if(isset($_POST['bt-sortear'])){
                $tamanho = sizeof($_SESSION['numeros']);

                do{
                    $numero = rand(1,60);
                } while(in_array($numero,$_SESSION['numeros']));
                    echo "<div class = \"numeros\">";
                    $_SESSION['numeros'][$tamanho] = $numero;
                    sort($_SESSION['numeros']);
                        foreach($_SESSION['numeros'] as $num){
                            if($num == $numero){
                                echo "<div class=\"ultimo\">$num</div>";
                            }
                            else{
                                echo "<div>$num</div>";
                            }
                    }

                    echo "</div>";

            }



        ?>
</body>
</html>