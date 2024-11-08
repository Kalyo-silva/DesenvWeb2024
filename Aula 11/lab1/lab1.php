<?php

try {
    $dbconn = pg_connect("host=localhost dbname=local user=postgres password=postgres");

    if ($dbconn){
        echo "Conectado ";
    }

    $result = pg_query('select count(*) as ct from information_schema.tables');

    while ($row = pg_fetch_assoc($result)) {
        echo $row['ct'];
    };
} catch (Exception $e){
    echo "Não conectado";
}
    