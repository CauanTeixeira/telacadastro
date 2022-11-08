<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina2</title>
</head>
<body>
    <?php
    if ($get->get('A')<>''&&$get->get('B')<>''&&$get->get('C')<>''){
        $a = $get->get('A');
        $b = $get->get('B');
        $raiz = sqrt($a);
        $potecia = $b*$b;        
    }
    ?>
    <img src="<?=$info['img']?>">
    <p>Email: <?=$value['User'] ?></p>
    <p>Nome:<?=$value['name'] ?></p>
    <p>CPF:<?=$value['cpf'] ?></p> <br><br>
    <h2>Os resultados são:</h2>
    <p>A raiz quadrada de <?=$a?> é de: <?=$raiz?></p>
    <P>A potecialização de <?=$b?> é de: <?=$potecia?></P>
    
</body>
</html>