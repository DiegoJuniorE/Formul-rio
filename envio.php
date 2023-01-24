<?php
$nome = $_GET["nome"];
$idade = $_GET["idade"];
$emai = $_GET["email"];
$password = $_GET["senha"];
$dat = $_GET["dat"];
$hora = $_GET["hora"];
$arquivo = $_GET["arquivo"];
$nivel = $_GET["nivel"];
$sexo = $_GET["sexo"];
$hobby = $_GET["hobby"];
$buscar = $_GET["buscar"];
$cidade = $_GET["city"];
$textarea = $_GET["areatexto"];

include('menu.php');

echo $nome , "<br>";
echo $idade , "<br>";
echo $emai , "<br>";
echo $password , "<br>";
echo $dat , "<br>";
echo $hora , "<br>";
echo $arquivo , "<br>";
echo $nivel , "<br>";
echo $sexo , "<br>";
echo $hobby , "<br>";
echo $buscar , "<br>";
echo $cidade , "<br>";
echo $textarea , "<br>";

include("footer.php");
?>