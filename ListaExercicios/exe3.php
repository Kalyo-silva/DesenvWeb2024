<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exe3.php" method="POST">
        <div>
            <label for="varA">Lado do Quadrado</label>
            <input type="number" step = "any" name="varA" id="varA">
        </div>

        <input id ='submit' type="submit" value="Calcular">
    </form>

    <?php
    function getAreaQuadrado($lado){
        return $lado * $lado;
    };

    if (isset($_POST['varA'])){
        $varA = $_POST['varA'] ?: 0;

        echo "<div id = 'result'>
                  <h1>&aacute;rea do Quadrado: ".getAreaQuadrado($varA)."m&sup2;</h1>
              </div>";
    };
    ?>
</body>

</html>