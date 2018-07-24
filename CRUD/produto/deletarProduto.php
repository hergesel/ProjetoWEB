<?php
require "../cnx.php";

$id = $_GET["id"];

$comando = "DELETE FROM produto WHERE id = $id";



$retorno = mysqli_query(conexao(), $comando); 

if($retorno) {
	header("refresh:1; url=listarProduto.php");
	echo "Foi excluido com sucesso!";
} else {
	echo "Errou!";
}
?>