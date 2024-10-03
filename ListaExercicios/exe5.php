<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exe5.php" method="POST">
        <div>
            <label for="varA">Base</label>
            <input type="number" step = "any" name="varA" id="varA">
        </div>

        <div>
            <label for="varB">Altura</label>
            <input type="number" step = "any" name="varB" id="varB">
        </div>

        <input id ='submit' type="submit" value="Calcular">
    </form>

    <?php
    function getAreaTriangulo($base, $altura){
        return ($base * $altura) / 2;
    };

    if (isset($_POST['varA'])){
        $varA = $_POST['varA'] ?: 0;
        $varB = $_POST['varB'] ?: 0;

        echo "<div id = 'result'>
                  <h1>&aacute;rea do tri&acirc;ngulo: ".getAreaTriangulo($varA, $varB)."m&sup2;</h1>
              </div>";
    };
    ?>
</body>

</html>