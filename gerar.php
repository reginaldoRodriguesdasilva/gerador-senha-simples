<?php

session_start();



    if(isset($_GET['limite']) && !empty($_GET['limite'])){

        $limite = $_GET['limite'];

        if(!is_numeric($limite)){
            
            $_SESSION['alerta'] = "Só é permitido números";
            header('location:index.php');
        exit;

        }

    }else{
        $_SESSION['alerta'] = "Digite um volor";
        header('location:index.php');
        exit;

    }



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senha</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Varela+Round&display=swap" rel="stylesheet">

    <style>
          *{
            box-sizing: border-box;
        }

        body{
            font-family: 'Poppins', sans-serif;
            
        }

        header, footer{
            text-align:center;
        }
        .senha{
            width: 200px;
            text-align: center;
            border: 1px solid #ccc;
            margin: 10px;
            display: inline-block;

        }

        main{
            display:flex;
            justify-content:center;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
  
    <div>
        <header>
            <h1>Gerador de senha</h1>
            <h2>Senha 1 de 1 | <a href="index.php">Voltar</a></h2>
        </header>

        <main>

        <?php for($contador = 1; $contador <=$limite; $contador++ ): ?>
          <div class="senha">
                <h2>SENHA</h2>
                <h3><?=str_pad($contador, 4, 0, STR_PAD_LEFT) ?></h3>
                <p>Aguarde o chamado!</p>
          </div>
          <?php endfor; ?>

        </main>

        <footer>
            <p>Copyringht - 2022 | Desenvolvido por Reginaldo</p>
        </footer>
    </div>


</body>
</html>