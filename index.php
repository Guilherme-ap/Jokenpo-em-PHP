<?php
require_once 'login_cadastro/sql.php';
$u = new usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo/style.css" rel="stylesheet" type="text/css">
    <title>JOKENPO</title>
</head>
<body>
    <header>
        <div class="cab">
        <ul>
        <li><a href="#sobre">Sobre o jogo</a></li>
        <li><a href="login_cadastro/cadastrar.php">cadastro</a></li>
        <li><a href="#contato">contato</a></li>
        </ul>
        </div>
    </header>
    <main>
            <div class="container">
            <div class="box">
            <form method="post">
                <fieldset>
                <label>usuário</label><br><br><br>
                <input type="text" maxlength="30" size="20" name="email" placeholder="Email" id="usuario" required>
                <label>senha</label><br><br><br>
                <input type="password" maxlength="30"  size="16"  name="senha" placeholder="*********" id="senha" required>
                <input type="submit" value="Entrar" id="submit" name="acao"><br><br>
                <label id="cont">não tem uma conta?</label><br><br>
                <a href="login_cadastro/cadastrar.php" id="registro">Registre-se</a>
            </div>
        </div>
        <?php
        if(isset($_POST['email'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $u->conectar("projeto","localhost","root","");
        if($u->logar($email,$senha)){
            header("location:login_cadastro/bem_vindo.php");

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
            <p>Texto destinado a escrever sobre o jogo</p>
            </div>
        </div>
    </main>
    
    <hr>
    <footer>

            <div class="contato">
            <h2 id="contato">Contato</h2>
            <p>Projeto realizado no Instituto Federal de Educação, Ciência e Tecnologia de São Paulo IFSP Guarulhos por Guilherme Alves Pereira e Davi Lima OBS: colocar os gus, Orientadora Marcia Pereira</p>
            </div>
            
    </footer>
</body>
</html>