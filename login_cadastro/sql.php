<?php
class usuario
{
private $pdo;
public $erro = "";
public function conectar($nome,$host,$usuario,$senha){
    //funcao para conectar ao banco de dados
    global $pdo;
    global $erro;
    try{
        $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

    }catch (PDOException $e){
        $erro = $e->getMessage();
    }
    
}
public function cadastrar($nome,$email,$gu,$senha){
    global $pdo;
    //verificar se já existe o email cadastrado
    $sql = $pdo->prepare("SELECT id_use FROM tabuse where email = :e");
    $sql->bindValue(":e",$email);
    $sql->execute();
    // verificar se há algun id com o email digitado
    if($sql->rowCount() > 0){// verificar se volta algum id
        return false; // ja esta cadastrado 
    }else{// caso nao esteja cadastrado
        $sql= $pdo->prepare("INSERT INTO tabuse (nome,email,gu,senha) VALUES (:n,:e,:g,:s)");
        $sql->bindValue(":n",$nome);
        $sql->bindValue(":e",$email);
        $sql->bindValue(":g",$gu);
        $sql->bindValue(":s",$senha);
        $sql->execute();
        return true;//cadastrar o usuario

    }


}

public function logar($email, $senha){

    global $pdo;

    $sql = $pdo->prepare("SELECT id_use FROM tabuse where email = :e AND senha = :s");
    $sql->bindValue(":e",$email);
    $sql->bindValue(":s",$senha);
    $sql->execute();
    if($sql->rowCount() >0){
        //login
        $dado = $sql->fetch();
        session_start();
        $_SESSION['id_use'] = $dado['id_use'];
        return true;
    }else{
        return false;//erro ao fazer o login
    }


}
}
?>