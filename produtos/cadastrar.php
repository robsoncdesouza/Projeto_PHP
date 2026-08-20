<?php
session_start();
include '../conexao.php';
?>
<?php include 'verifica_login.php'; ?>
<?php include '../cabecalho.php'; ?>
<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
 header("Location: ../login.php");
 exit;
}
?>

<main>
 <p>Bem-vindo(a), <?php echo $_SESSION['usuario_nome']; ?>!</p>
 <!-- conteúdo da página -->
</main>
<?php include '../rodape.php'; ?>