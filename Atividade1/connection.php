<?php



if(isset($_GET["nome"]) && !empty($_GET["nome"])){

    $nome = $_GET["nome"];
    echo "Seja bem-vindo " . $nome;

} else{
    echo "Por favor, informe seu nome";
}

include_once "togoback.php";
?>
