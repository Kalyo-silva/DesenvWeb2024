<?php

try {
    $dbconn = pg_connect("host=localhost dbname=local user=postgres password=postgres");

    if ($dbconn){
        echo "Conectado ";
    }

    $result = pg_query("select * from tbpessoa");

    while ($row = pg_fetch_assoc($result)) {
        echo print_r($row)."<br>";
    };
} catch (Exception $e){
    echo "Não conectado";
}
    