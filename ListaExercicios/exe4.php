<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exe4.php" method="POST">
        <div>
            <label for="varA">Lado do A</label>
            <input type="number" step = "any" name="varA" id="varA">
        </div>

        <div>
            <label for="varB">Lado do B</label>
            <input type="number" step = "any" name="varB" id="varB">
        </div>

        <input id ='submit' type="submit" value="Calcular">
    </form>

    <?php
    function getAreaRetangulo($ladoA, $ladoB){
        return $ladoA * $ladoB;
    };

    function getTagArea($area){
        if ($area > 10){
            return 'h1';
        }
        return 'h3';
    }

    if (isset($_POST['varA'])){
        $varA = $_POST['varA'] ?: 0;
        $varB = $_POST['varB'] ?: 0;

        $area = getAreaRetangulo($varA, $varB);
        $tag = getTagArea($area);

        echo "<div id = 'result'>
                  <$tag>&aacute;rea do Ret&acirc;ngulo: $area m&sup2;</$tag>
              </div>";
    };
    ?>
</body>

</html>