<?php
/**
 *  ADMIN
 */
include 'db2.php';
verificarLogin();

// Lógica para Deletar
if (isset($_GET['delete'])) {
    $pdo->prepare("DELETE FROM noticias WHERE id = ?")->execute([$_GET['delete']]);
    header("Location: admin.php");
}

$noticias = $pdo->query("SELECT * FROM noticias ORDER BY id DESC")->fetchAll();
?>

<h1>Gerenciar Notícias</h1>
<a href="form.php">+ Nova Notícia</a> | <a href="logout.php">Sair</a>
<hr>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Data</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($noticias as $n): ?>
    <tr>
        <td><?= $n['id'] ?></td>
        <td><?= $n['titulo'] ?></td>
        <td><?= date('d/m/Y', strtotime($n['data'])) ?></td>
        <td>
            <a href="form.php?id=<?= $n['id'] ?>">Editar</a> | 
            <a href="?delete=<?= $n['id'] ?>" onclick="return confirm('Tem certeza?')">Remover</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>