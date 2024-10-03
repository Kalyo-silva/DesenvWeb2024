<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exe2.php" method="POST">
        <div>
            <label for="varA">Valor A</label>
            <input type="number" step = "any" name="varA" id="varA">
        </div>

        <input id ='submit' type="submit" value="Calcular">
    </form>

    <?php
        function getPar($Valor){
            if($Valor % 2 == 0){
                return "<h1>$Valor &eacute; divis&iacute;vel por 2!";;
            }
            return "<h1>$Valor n&atilde;o &eacute; divis&iacute;vel por 2!";
        };

        if (isset($_POST['varA'])){
            $varA = $_POST['varA'] ?: 0;

            echo "<div id = 'result'>".getPar($varA)."</div>";
        };
    ?>
</body>

</html>