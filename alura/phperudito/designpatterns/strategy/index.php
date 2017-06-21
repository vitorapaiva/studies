<?php
	require "Orcamento.php";
	require "CalculadoraDeImpostos.php";
	require "Imposto.php";
	require "ICMS.php";
	require "ISS.php";
	require "KCV.php";

	$reforma = new Orcamento (500);
	$calculadora = new CalculadoraDeImpostos();
	echo $calculadora->calculaImposto($reforma, new ICMS());
	echo "<br>";
	echo $calculadora->calculaImposto($reforma, new ISS());
	echo "<br>";
	echo $calculadora->calculaImposto($reforma, new KCV());
?>