<?php 

$dados = array(
	
		"dia 1" => 22174.1664,
		
		
	
		"dia 2"=> 24537.6698,
		
		 "dia 3" => 26139.6134,
	
	
		"dia 4" => 0.0,
	

		 "dia 5" => 0.0,
	
	
		"dia 6" => 26742.6612,
	
	
		 "dia 7" => 0.0,
	

		 "dia 8" => 42889.2258,
	
	
		 "dia 9" => 46251.174,
	
	
		"dia 10" => 11191.4722,
	
	
		 "dia 11" => 0.0,
	
	
		 "dia 12" => 0.0,
	
	
		"dia 13" => 3847.4823,
	
	
		 "dia 14" => 373.7838,
	
	
		 "dia 15" => 2659.7563,
	
	
		 "dia 16" => 48924.2448,
	
	
		 "dia 17" => 18419.2614,
	
	
		 "dia 18" => 0.0,
	
	
		 "dia 19" => 0.0,
	
	
		 "dia 20" => 35240.1826,
	
	
		 "dia 21" => 43829.1667,
	
	
		 "dia 22" => 18235.6852,
	
	
		 "dia 23" => 4355.0662,
	
	
		 "dia 24" => 13327.1025,
	
	
		"dia 25" => 0.0,
	
	
	     "dia 26" => 0.0,
	
	
	     "dia 27" => 25681.8318,
	
	
		 "dia 28" => 1718.1221,
	
	
		 "dia 29" => 13220.495,
	
	
		"dia 30" => 8414.61
	
);
echo '<br>';
echo (array_sum($dados));
echo '<br>';
echo count($dados);
echo '<br>';
print_r ("Soma total mesnsal: ".array_sum($dados));
echo "<hr>";
$media =  array_sum($dados)/count($dados);
$max = max($dados);
print_r ("O maior valor do mÊs foi: R$".number_format($max,2,",","."));
echo "<hr>";
$min = min($dados);
echo "<hr>";
print_r ("Média mensal: ".number_format($media,2,",","."));
foreach($dados as $valor){
	
	echo "<br>";
	print_r (array_sum($dados));
}
echo '<br>';
echo "<hr>";

$carros = array("BMW", "Veloster", "Hilux");

print_r($carros);
echo "<hr>";
echo '<br>';
$pessoa = array ("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);

echo $pessoa['nome'];
echo count($pessoa);

foreach($pessoa as $indice => $valor){
	echo $indice.":".$valor."<br>";
}