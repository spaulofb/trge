<?php
/**
 *   LOGIN - 20260504
 */
include 'db2.php';
//
if ($_POST) {
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->execute([$_POST['usuario']]);
    $user = $stmt->fetch();

    if ($user && password_verify($_POST['senha'], $user['senha'])) {
        $_SESSION['logado'] = true;
        header("Location: admin.php");
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>
<form method="POST">
    <h2>Login Restrito</h2>
    <?php if(isset($erro)) echo "<p>$erro</p>"; ?>
    <input type="text" name="usuario" placeholder="Usuário" required><br>
    <input type="password" name="senha" placeholder="Senha" required><br>
    <button type="submit">Entrar</button>
</form>
