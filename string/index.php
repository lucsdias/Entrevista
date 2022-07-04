<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name='string' placeholder="Informe uma palavra"> <input type="submit" value="ir">
    </form>
    <?php 
    $dados = filter_input(INPUT_POST , 'string', FILTER_DEFAULT);
    
    echo '<br>';
    echo 'Palavra digitada: '.$dados;
    echo '<br>';
   
    $tamanho = strlen($dados);
    
    echo '<hr>';
    echo "Palavra ao contrario: ";
    

    while ($tamanho > 0 ){
        $tamanho = $tamanho - 1;
        echo ($dados[$tamanho]);
        
       
    }
    ?>
</body>
</html>