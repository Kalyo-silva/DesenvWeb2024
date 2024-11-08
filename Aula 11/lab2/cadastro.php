<?php

function connect(){
    try {
        $dbconn = pg_connect("host=localhost dbname=local user=postgres password=postgres");

        if ($dbconn){
            echo "Conectado ";
            return $dbconn;
        }
    
    } catch (Exception $e){
        echo "Não conectado";
    }  
}

$db = connect();

$dados = [
          $_POST['campo_primeiro_nome'],
          $_POST['campo_sobrenome'],
          $_POST['campo_email'],
          $_POST['campo_cidade'],
          $_POST['campo_estado'],
          $_POST['campo_password'],
        ];

$result = pg_query_params($db, "insert into tbpessoa (pesnome, pessobrenome, pesemail, pescidade,pesestado, pespassword) values($1,$2,$3,$4,$5,$6)", $dados);

if ($result){
    echo "<script>alert('inserido com sucesso!'); location.href = 'index.html'</script>";
}
else{
    echo "<script>alert('Falha ao inserir!'); location.href = 'index.html'</script>";
}

?>