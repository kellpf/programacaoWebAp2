<?php
session_start();

if(empty($_POST['login']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$conexao = mysqli_connect("localhost", "root", "", "dbphp7");
if ($conexao->connect_error) {
    echo "Error: " .$bd->connect_error;
} else {
    echo "Conectado!";
}

/**
 * - mysqli_real_escape_string - *pra nao esquecer* 
 * função irá escapar os caracteres especiais em unescaped_string, 
 * levando em conta o atual conjunto de caracteres da conexão
 */

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select idusuario, login from tb_usuarios where login = '{$login}' and senha = {$senha}";
echo $query;
echo "__________";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
echo $row;

if($row == 1) {
    $_SESSION['login'] = $login;
    header('Location: home.php');
    exit();
} else {
    $_SESSION['login_invalido'] = true;
    header('Location: index.php');
    exit();
}
