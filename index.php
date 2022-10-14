<?php
session_start();
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
            overflow:hidden;
        }
        .container{
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        #geral{
            width: 400px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 30px #ccc
            
        }
        .btn{
            width: 100%;
            padding: 10px;
            border: none;
            border-radius:5px;
            font-size: 1.2rem;
        }
        .btn-laranja{
            background: #ffa50f;
        }
        form input{
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius:5px;
            border:1px solid #ccc;

        }
        .alerta{
            padding: 10px;
            background: #ffe6e6;
            color: #ff0000;
        }
    </style>

</head>

<body>

    <div class= "container">

        <div id="geral">

            <?php if(isset($_SESSION['alerta'])): ?>

            <div class="alerta">
                <?=$_SESSION['alerta'] ?>
            </div>
            

            <?php unset($_SESSION['alerta']);
            endif;
         ?>

            <header>
                <h1>Gerador de senha</h1>
            </header>

            <main>

            <form action="gerar.php" method="get">

            <p>
                <label for="limite">Limite de Senha:</label>
                <input type="text" name="limite" id="limite">
            </p>
            <p>
                <button type="submit" class="btn btn-laranja">Gerar Senha</button>
            </p>

            </form>

            </main>

            <footer>
             <p>Copyringht - 2022 | Desenvolvido por Reginaldo</p>
            </footer>

        </div>

    </div>


</body>
</html>