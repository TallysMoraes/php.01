<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];

if(!empty($nome) && !empty($email)){
    echo "Nome: ".$nome."<br>";
    echo "Idade: ".$idade."<br>";
    echo "Email: ".$email."<br>";
} else{
    echo "Preenchimento do Nome e email obrigatorios!!!!";
}
?>
 
<br>
<a href="http://localhost/php.01/index.php">Voltar</a>;