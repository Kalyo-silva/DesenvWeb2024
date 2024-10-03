<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="exe1.php" method = 'POST'>
        <div>
            <label for="varA">Valor A</label>
            <input type="number" step = "any" name="varA" id="varA">
        </div>
        <div>
            <label for="varB">Valor B</label>
            <input type="number" step = "any" name="varB" id="varB">
        </div>
        <div>
            <label for="varC">Valor C</label>
            <input type="number" step = "any" name="varC" id="varC">
        </div>

        <input id ='submit' type="submit" value="Calcular">
    </form>


    <?php
        function getColor($varA, $varB, $varC){
            if ($varA > 10){
                return 'blue';
            }
            else if ($varB < $varC){
                return 'green';
            }
            else if ($varC < $varA && $varC < $varB){
                return 'red';
            }
            return 'hotpink';
        }

        if (isset($_POST['varA'])){
            $varA = $_POST['varA'] ?: 0;
            $varB = $_POST['varB'] ?: 0;
            $varC = $_POST['varC'] ?: 0;

            $sum = $varA + $varB + $varC;

            $color = getColor($varA,$varB,$varC);

            echo "<div id = 'result'>
                    <H1 style = 'color: $color'>$varA + $varB + $varC = $sum</H1>     
                </div>";
        };
    ?>
</body>
</html>


