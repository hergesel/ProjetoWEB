<?php

require "../cnx.php";

$descricao = $_POST["descricao"];
$departamento = $_POST["departamento"];
$preco = $_POST["preco"];

$comando = "INSERT INTO produto (descricao, departamento, preco)
	values ('$descricao', '$departamento', '$preco')";



$retorno = mysqli_query(conexao(), $comando);

if($retorno) {
	header("refresh:2; url=listarProduto.php");
	echo "Foi inserido com sucesso!";
} else {
	echo "Errou!";
}


?>