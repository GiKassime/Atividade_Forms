<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if(empty($nome)|| empty($email)){        
        $_SESSION['msg'] = "Todos os campos são obrigatórios";

    }else if(filter_var($email,FILTER_VALIDATE_EMAIL) ===false){
        $_SESSION['msg'] = "Email inválido";

    }else {
        $_SESSION['nome'] = "Nome: <strong>".htmlspecialchars($nome)."</strong>";
        $_SESSION['email'] = "Email: <strong>".htmlspecialchars($email)."</strong>";        
        header("Location: obrigado.php");
        exit();
    }
    header("Location: index.php?");

}