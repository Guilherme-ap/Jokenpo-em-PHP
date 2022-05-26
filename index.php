<?php
require_once 'sql.php';
$u = new usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>JOKENPO</title>
</head>
<body>
    <header>
        <div class="cab">
        <ul>
        <button><li><a href="#sobre">Sobre o jogo</a></li></button>
        <button><li><a href="cadastra.php">Cadastro</a></li></button>
        <button><li><a href="#contato">Contato</a></li></button>
        </ul>
        </div>
    </header>
    <main>
            <div class="container">
            <div class="box">
            <form method="post">
                <fieldset>
                <label>Usuário</label><br><br><br>
                <input type="text" maxlength="30" size="20" name="email" placeholder="Email" id="usuario" required>
                <label>Senha</label><br><br><br>
                <input type="password" maxlength="30"  size="16"  name="senha" placeholder="*********" id="senha" required>
                <input type="submit" value="Entrar" id="submit" name="acao"><br><br>
                <label id="cont">Não tem uma conta?</label><br><br>
                <a href="cadastra.php" id="registro">Registre-se</a>
            </div>
        </div>
        <?php
        if(isset($_POST['email'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $u->conectar("projeto","localhost","root","");
        if($u->logar($email,$senha)){
            header("location:bem_vindo.php");

        }else{
            echo "email ou senha incorretos";
        }

        }
    
        ?>
            </fieldset>
            </form>
           
        <div class="container">
            <div class="sobre">
            
            <h2 id="sobre">Sobre o Jogo</h2>
            <p>Olá jogador!!!</p>
            <?php
            $arquivo= "sobre.txt";
            $handle = fopen ($arquivo,'r');

            $ler = fread($handle,filesize($arquivo));
            echo $ler;

            fclose($handle);
                ?>
            </div>
        </div>
    </main>
    
    <hr>
    <footer>
            <div class="contato">
            <h2 id="contato">Contato</h2>
            <p>Projeto realizado no Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Campus Guarulhos</p>
            <p>Guilherme Alves Pereira (GU3022021) e Davi Lima da Silva (GU3020371)</p>
            <p>Orientadora: Marcia Pereira</p>
    </div>
    </footer>
</body>
</html>