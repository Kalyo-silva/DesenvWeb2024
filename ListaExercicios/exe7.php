<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exe7.php" method="POST">
        <div>
            <label for="valCarro">Valor do carro</label>
            <input type="number" step = "any" name="valCarro" id="valCarro">
        </div>

        <div>
            <label for="Parc">Parcelas</label>
            <input type="number" step = "any" name="Parc" id="Parc">
        </div>

        <div>
            <label for="valParc">Valor das Parcelas</label>
            <input type="number" step = "any" name="valParc" id="valParc">
        </div>

        <input id ='submit' type="submit" value="Calcular">
    </form>

    <?php
        function getValorPago($qtdParc, $valorParc){
            return $qtdParc * $valorParc;
        }

        function getValorJuros($valor, $valorPago){
            return $valorPago - $valor;
        }

        if (isset($_POST)){
            $valCarro = $_POST['valCarro'];
            $Parc = $_POST['Parc'];
            $valParc = $_POST['valParc'];

            $valorPago = getValorPago($Parc, $valParc);

            
            echo "<div id = 'result'>
                      <h1>Valor pago em juros: R$".getValorJuros($valCarro, $valorPago)."</h1>
                  </div>";
        }
    ?>
</body>

</html>