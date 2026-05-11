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
<style>
/* Container Centralizador */
.admin-container {
    display: flex;
    justify-content: center;
    padding: 40px 20px;
    background-color: #f4f7fa;
    min-height: 100vh;
    font-family: 'Montserrat', sans-serif;
}

/* Card do Formulário */
.form-card {
    background: #fff;
    width: 100%;
    max-width: 900px;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.05);
}

.form-card h2 {
    color: #1b3556;
    margin-bottom: 25px;
    border-bottom: 2px solid #eef2f6;
    padding-bottom: 10px;
}

/* Estrutura dos Campos */
.form-group {
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-weight: 600;
    color: #4a5568;
    margin-bottom: 8px;
    font-size: 14px;
}

/* Inputs e Textarea */
.styled-form input[type="text"],
.styled-form textarea {
    padding: 12px 15px;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    font-size: 16px;
    transition: all 0.3s ease;
    outline: none;
}

.styled-form input:focus,
.styled-form textarea:focus {
    border-color: #1b3556;
    box-shadow: 0 0 0 3px rgba(27, 53, 86, 0.1);
}

/* Linha Dupla (Imagem e Thumb) */
.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

/* Botões */
.form-actions {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-top: 10px;
}

.btn-save {
    background-color: #1b3556;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s;
}

.btn-save:hover {
    background-color: #0077cc;
}

.btn-cancel {
    color: #718096;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
}

.btn-cancel:hover {
    color: #e53e3e;
}

/* Ajuste Responsivo */
@media (max-width: 600px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}

</style>

<div class="admin-container">
    <div class="form-card">
        <h2><?= $id ? "Editar" : "Cadastrar" ?> Notícia</h2>
        
        <form method="POST" class="styled-form">
            <div class="form-group">
                <label for="titulo">Título da Notícia</label>
                <input type="text" id="titulo" name="titulo" value="<?= $n['titulo'] ?>" placeholder="Ex: Nova Descoberta em Genética" required>
            </div>

            <div class="form-group">
                <label for="conteudo">Conteúdo Completo</label>
                <textarea id="conteudo" name="conteudo" rows="8" placeholder="Escreva o corpo da notícia aqui..."><?= $n['conteudo'] ?></textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="imagem">URL da Imagem (Grande)</label>
                    <input type="text" id="imagem" name="imagem" value="<?= $n['imagem'] ?>" placeholder="caminho/da/imagem.jpg">
                </div>
                <div class="form-group">
                    <label for="thumb">URL da Thumbnail (Miniatura)</label>
                    <input type="text" id="thumb" name="thumb" value="<?= $n['thumb'] ?>" placeholder="caminho/da/thumb.jpg">
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-save">Salvar Notícia</button>
                <a href="admin.php" class="btn-cancel">Cancelar</a>
            </div>
        </form>
    </div>
</div>