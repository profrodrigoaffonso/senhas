<?php

die;

$conn = new mysqli('localhost','dev','dev','senhas');
$sql = "INSERT INTO senhas (senha) VALUES";
for($i = 1; $i <= 99999; $i++){
    $senha =  str_pad($i, 5, '0', STR_PAD_LEFT);
    $sql .= "('{$senha}'),";
}

$sql = substr($sql, 0 , -1);



mysqli_query($conn, $sql);

$arq = fopen('aaa.sql','w');
fwrite($arq, $sql);

fclose($arq);

echo $sql;