<?php

require "../cnx.php";

$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$id = $_POST["id"];

$comando = "UPDATE produto
SET descricao = '$descricao', preco = '$preco'
WHERE id='$id'";

$retorno = mysqli_query(conexao(), $comando);

if($retorno) {
	header("refresh:2; url=listarProduto.php");
	echo "Foi ALTERADO com sucesso!";
} else {
	echo "Errou!";
}

?>