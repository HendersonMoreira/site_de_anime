<?php
session_start();
include('_config.php');

if(empty($_POST['usuario']) || empty($_POST['password'])){
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['password']);

$query = "SELECT id,usuario,password, foto FROM users WHERE usuario = '{$usuario}' AND password = SHA1('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $usuario_bd = mysqli_fetch_assoc($result);
    setcookie(
        "tioanimes_user_cookie",
        json_encode($usuario_bd),
        0,
        "/"
    );
    $_SESSION['usuario'] = $usuario_bd['usuario'];
    header('Location: painel.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: signup.php');
    exit();
}
?>