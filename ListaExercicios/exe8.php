<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exe8.php" method="POST">
        <div>
            <label for="valMoto">Valor da Moto</label>
            <input type="number" step = "any" name="valMoto" id="valMoto">
        </div>

        <div>
            <label for="Parc">Parcelas</label>

            <div class ='grid'>
                <input type="radio" name="Parc" id="Parc24" value="24">
                <label for="Parc24">24x</label>
                <input type="radio" name="Parc" id="Parc36" value="36">
                <label for="Parc36">36x</label>
                <input type="radio" name="Parc" id="Parc48" value="48">
                <label for="Parc48">48x</label>
                <input type="radio" name="Parc" id="Parc60" value="60">
                <label for="Parc60">60x</label>
            </div>
        </div>

        <input id ='submit' type="submit" value="Calcular">
    </form>

    <?php
    function getJuros($qtdParcelas){
        if($qtdParcelas == 24){
            return 1.5;
        }
        else if ($qtdParcelas == 36){
            return 2;
        }
        else if ($qtdParcelas == 48){
            return 2.5;
        }
        return 3;
    };

    function getValorParcela($valorTotal, $qtdParc, $juros){
        return round(($valorTotal / $qtdParc) + (($valorTotal / $qtdParc)*($juros/100)),2);
    };

    if (isset($_POST['Parc'])){
        $valMoto = $_POST['valMoto'] ?: 0;

        $qtdParc = $_POST['Parc'] ?: 0;
        $juros = getJuros($qtdParc);

        
        echo "<div id = 'result'>
                 <h1>Valor da parcela em $qtdParc vezes: R$".getValorParcela($valMoto, $qtdParc,$juros)."</h1>
             </div>";
    }
    ?>
</body>

</html>