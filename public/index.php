<?php 
    $resultado = $_GET['resultado'] ?? null;
    $erro = $_GET['erro'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bin2Dec - Calculadora de binário para decimal!</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div id="container">
        <h1 id="titulo">BIN<span class="azul">2</span>DEC</h1>
        <div class="card">
        <form action="../app/calc.php" method="post">
            <label for="">Bin. Number: </label>
            <input type="text" name="binNumber" id="" maxlength="8">
            <input type="submit" value="Submit">
            <hr id="linhadivisoria">
            <div id="resultado">
                <label for="">Resultado: </label>
                <?php if (!is_null($resultado)) { 
                    echo $resultado;
                }else {
                    if (!is_null($erro) && $erro == 'erro2') {
                        echo 'Insira um valor!';
                    }

                    if (!is_null($erro) && $erro == 'erro1') {
                        echo 'Somente 0 e 1 é permitido!';
                    }
                } ?>
            </div>
        </form>
        </div>
    </div>
</body>
</html>