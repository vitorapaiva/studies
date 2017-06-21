<?php
	class CalculadoraDeImpostos 
	{
		public function calculaImposto(Orcamento $Orcamento,$imposto)
		{
			return $imposto->calcula($Orcamento);
		}
	}
?>