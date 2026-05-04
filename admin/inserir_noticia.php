<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);



include "../db.php";
include "../funcoes_imagem.php";

if ($_POST) {

  $titulo = $con->real_escape_string($_POST['titulo']);
  $conteudo = $con->real_escape_string($_POST['conteudo']);

  $imagem = $_FILES['imagem']['name'];
  $tmp = $_FILES['imagem']['tmp_name'];

  $ext = strtolower(pathinfo($imagem, PATHINFO_EXTENSION));

  if (!in_array($ext, ['jpg','jpeg','png','webp'])) {
    die("Formato inválido");
  }

  // 📅 Ano e mês
  $ano = date("Y");
  $mes = date("m");

  $pasta = "../uploads/$ano/$mes/";

  if (!is_dir($pasta)) {
    mkdir($pasta, 0777, true);
  }

  $nome = uniqid();
  $arquivo = "$nome.$ext";

  $caminhoOriginal = $pasta . $arquivo;
  $caminhoThumb = $pasta . "thumb_" . $arquivo;

  // 📥 Move original
  move_uploaded_file($tmp, $caminhoOriginal);

  // 🗜️ Comprimir original
  comprimirImagem($caminhoOriginal, $caminhoOriginal, 70);

  // 🖼️ Criar thumb
  criarThumb($caminhoOriginal, $caminhoThumb, 300);

  // 💾 Caminhos banco
  $imgDB = "uploads/$ano/$mes/$arquivo";
  $thumbDB = "uploads/$ano/$mes/thumb_$arquivo";

  $con->query("INSERT INTO noticias (titulo, conteudo, imagem, thumb)
               VALUES ('$titulo', '$conteudo', '$imgDB', '$thumbDB')");

  echo "Notícia com imagem otimizada salva!";
}
?>