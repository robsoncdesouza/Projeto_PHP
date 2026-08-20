<?php

include '../conexao.php';
?>
<?php include 'verifica_login.php'; ?>
<?php include '../cabecalho.php'; ?>
<?php
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../login.php");
    exit;
}
?>
<link rel="stylesheet" href="../css/style.css">

<main>
    <p>Bem-vindo(a), <?php echo $_SESSION['usuario_nome']; ?>!</p>
    <!-- conteúdo da página -->
</main>
<?php include '../rodape.php'; ?>