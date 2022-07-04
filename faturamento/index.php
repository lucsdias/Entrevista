<?php
echo 'Dado o valor de faturamento mensal de uma distribuidora, detalhado por estado:';
echo '<br>';
echo 'SP – R$67.836,43';
echo '<br>';
echo 'RJ – R$36.678,66';
echo '<br>';
echo 'MG – R$29.229,88';
echo '<br>';
echo 'ES – R$27.165,48';
echo '<br>';
echo 'Outros – R$19.849,53';
$soma = (67836.43 + 36678.66 + 29229.88 + 27165.48 + 19849.53 );
echo '<hr>';
echo '<br>';
echo 'Valor total da distribuidora: R$'.number_format($soma,2,",",".");
echo '<br>';
echo '<br>';
echo '<hr>';
echo 'calcule o percentual de representação que cada estado teve dentro do valor total mensal da distribuidora';
echo '<br>';
echo 'RJ: '.number_format((36678.66/$soma)*100,2,",",".")."%";
echo '<br>';
echo 'SP: '.number_format((67836.43/$soma)*100,2,",",".")."%";
echo '<br>';
echo 'MG: '.number_format((29229.88/$soma)*100,2,",",".")."%";
echo '<br>';
echo 'ES: '.number_format((27165.48/$soma)*100,2,",",".")."%";
echo '<br>';
echo 'Outros: '.number_format((19849.53/$soma)*100,2,",",".")."%";


?>