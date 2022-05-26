<!-- Este arquivo é para caso o usuario tenha escolhido o nivel de jogo facil ao qual ele sempre ira ganhar -->
<!-- 1 = Tesoura
2 = Papel
3 = Pedra -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="pedra_e_papel.png" rel="icon" type="icon">
    <link href="style.css" rel="stylesheet"  type="text/css">
    <title>JOKENPO</title>
</head>
<body>
    <form method="post">
        <fieldset>
    <input type="radio" value="tesoura" name="op">Tesoura<br>
    <input type="radio" value="papel" name="op">Papel<br>
    <input type="radio" value="pedra" name="op">Pedra<br>
    <input type="submit" value="jogar"><br><br>
    <a href="bem_vindo.php">Voltar</a>
</fieldset>
</form>
<?php
 if(isset($_POST['op'])){
$bot= 0;
$user=$_POST['op'];
if($user == 'tesoura'){
$bot= 2;
echo "O bot escolheu Papel você ganhou!";
}else if($user == 'papel'){
$bot=3;
echo "O bot escolheu Pedra você ganhou!";
}else if($user == 'pedra'){
$bot =1;
echo "O bot escolheu Tesoura você ganhou!";
}
 }

?>
    
</body>
</html>