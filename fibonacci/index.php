<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" min="1" placeholder="informe um numero" name="numero"> <input type="submit" value="ir">
    </form>
    <?php 
    $dados = filter_input(INPUT_POST, 'numero', FILTER_DEFAULT);
    echo '<br>';
    echo "Número digitado: ".$dados;
    $stop = 0;
    $f1 = 0;
    $f2 = 1;
    
    while($stop < 100 ){
        $f3 = $f2 + $f1;
        
        if($f3 == $dados){
            break; 
        }
        $f1 = $f2;
        $f2 = $f3;
        $stop++;
        
        
    }
    echo '<br>';
    echo '<hr>';
    if ($dados == $f3){
        echo $dados." : Pertence a sequência.";
    } else{
        echo $dados." : Não pertence a sequência.";
    }
    
    
  
    
    ?>
</body>
</html>

