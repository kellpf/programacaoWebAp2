<?php
session_start();
session_destroy(); // destroi os dados da sessão
header('Location: index.php');
exit();
?>