<?php
/**
 *   FORMULARIO - form.php
 *    20260504
 */
include 'db2.php';
verificarLogin();

$id = $_GET['id'] ?? null;
$n = ['titulo' => '', 'conteudo' => '', 'imagem' => '', 'thumb' => ''];

if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM noticias WHERE id = ?");
    $stmt->execute([$id]);
    $n = $stmt->fetch();
}

if ($_POST) {
    $dados = [$_POST['titulo'], $_POST['conteudo'], $_POST['imagem'], $_POST['thumb']];
    if ($id) {
        $sql = "UPDATE noticias SET titulo=?, conteudo=?, imagem=?, thumb=? WHERE id=?";
        $dados[] = $id;
    } else {
        $sql = "INSERT INTO noticias (titulo, conteudo, imagem, thumb) VALUES (?, ?, ?, ?)";
    }
    $pdo->prepare($sql)->execute($dados);
    header("Location: admin.php");
}
?>

<h2><?= $id ? "Editar" : "Cadastrar" ?> Notícia</h2>
<form method="POST">
    <input type="text" name="titulo" value="<?= $n['titulo'] ?>" placeholder="Título" required style="width:100%"><br><br>
    <textarea name="conteudo" placeholder="Conteúdo" rows="10" style="width:100%"><?= $n['conteudo'] ?></textarea><br><br>
    <input type="text" name="imagem" value="<?= $n['imagem'] ?>" placeholder="URL da Imagem Grande"><br>
    <input type="text" name="thumb" value="<?= $n['thumb'] ?>" placeholder="URL da Thumbnail"><br><br>
    <button type="submit">Salvar Notícia</button>
    <a href="admin.php">Cancelar</a>
</form>