<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="exe6.php" method="POST" id ='ex6'>
        
        <fieldset>
            <legend>Ma&ccedil;&atilde;</legend>
            <div class = 'container'>
                <label for="valMaca">R$</label>
                <input type="number" step = "any" name="valMaca" id="valMaca">
            </div>
            <div class = 'container'>
                <label for="kgMaca">KG</label>
                <input type="number" step = "any" name="kgMaca" id="kgMaca">
            </div>
        </fieldset>

        
        <fieldset>
            <legend>Melancia</legend>
            <div class = 'container'>
                <label for="valMelancia">R$</label>
                <input type="number" step = "any" name="valMelancia" id="valMelancia">
            </div>
            <div class = 'container'>
                <label for="kgMelancia">KG</label>
                <input type="number" step = "any" name="kgMelancia" id="kgMelancia">
            </div>
        </fieldset>

        <fieldset>
            <legend>Laranja</legend>
            <div class = 'container'>
                <label for="valLaranja">R$</label>
                <input type="number" step = "any" name="valLaranja" id="valLaranja">
            </div>
            <div class = 'container'>
                <label for="kgLaranja">KG</label>
                <input type="number" step = "any" name="kgLaranja" id="kgLaranja">
            </div>
        </fieldset>

        
        <fieldset>
            <legend>Repolho</legend>
            <div class = 'container'>
                <label for="valRepolho">R$</label>
                <input type="number" step = "any" name="valRepolho" id="valRepolho">
            </div>
            <div class = 'container'>
                <label for="kgRepolho">KG</label>
                <input type="number" step = "any" name="kgRepolho" id="kgRepolho">
            </div>
        </fieldset> 
        
        <fieldset>
            <legend>Cenoura</legend>
            <div class = 'container'>
                <label for="valCenoura">R$</label>
                <input type="number" step = "any" name="valCenoura" id="valCenoura">
            </div>
            <div class = 'container'>
                <label for="kgCenoura">KG</label>
                <input type="number" step = "any" name="kgCenoura" id="kgCenoura">
            </div>
        </fieldset> 
        
        <fieldset>
            <legend>Batatinha</legend>
            <div class = 'container'>
                <label for="valBatatinha">R$</label>
                <input type="number" step = "any" name="valBatatinha" id="valBatatinha">
            </div>
            <div class = 'container'>
                <label for="kgBatatinha">KG</label>
                <input type="number" step = "any" name="kgBatatinha" id="kgBatatinha">
            </div>
        </fieldset> 
            
        <input id ='ex6submit' type="submit" value="Calcular">
    </form>

    <?php
    function getValues(array &$valArray, array &$KgArray){
        foreach ($_POST as $var => $value) {
            if (strpos($var, 'kg') === false){
                $valArray[$var] = $value ?: 0;
            }
            else{
                $KgArray[$var] = $value ?: 0;
            }
        }
    }

    function getCustoCompra(array $values,array $kgs){
        $sum = 0;
        for ($i=0; $i < sizeof($values); $i++) { 
            $valor = $values[$i] * $kgs[$i];
    
            $sum += $valor;
        };

        return $sum;
    }

    function getSaldo($valorCompra){
        return 50 - $valorCompra;
    }

    function getStatusSaldo($saldo){
        if ($saldo > 0){
            return "<h1 style = 'color:blue'>sobrou R$$saldo.</h1>";
        }
        else if ($saldo < 0){
            return "<h1 style = 'color:red'>Faltou R$$saldo.</h1>";
        }
        return "<h1 style = 'color:green'>O saldo para compras foi esgotado.</h1>";
    }

    $ArrayValues = [];
    $ArrayKgs = [];
    
    getValues($ArrayValues, $ArrayKgs);

    $custo = getCustoCompra(array_values($ArrayValues), array_values($ArrayKgs));
    $saldo = getSaldo($custo);

    echo "<div id = 'result'>".getStatusSaldo($saldo)."</div>";
    ?>
</body>

</html>