<?php  
//Clausula WHERE

//A clausula WHERE é usada para extrair somente os registros que satisfaçam um criterio especifico.
/*
SELECT column1, column2, ...
FROM table_name
WHERE condition;
*/

include_once 'conexao_try_catch.php';

    $query_usuarios = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id, created, modified FROM usuarios WHERE niveis_acesso_id = 1 AND sits_usuario_id = 1 LIMIT 10";

    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        echo "<pre>";
        var_dump($row_usuario);
        echo "</pre>";
    }
?>
