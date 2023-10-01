<?php
session_start();
include("_config.php");

$nome = mysqli_real_escape_string($conn, trim($_POST['usuario']));
$usuario = mysqli_real_escape_string($conn, trim($_POST['email']));
$senha = mysqli_real_escape_string($conn, trim(SHA1($_POST['password'])));

$sql = "SELECT COUNT(*)AS total FROM users WHERE usuario ='$usuario'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: logi.php');
    exit;
}

$sql = "INSERT INTO users ( usuario, email, password, data_cadastro) VALUES ( '$nome', '$usuario','$senha', NOW())";

if($conn->query($sql) === TRUE){
    $_SESSION ['status_cadastro'] = true;
}

$conn->close();

header('Location: index.php');
exit;
?>