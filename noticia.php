<?php
/**  Arquivo noticia.php - 20260504 */
include "db.php";
include "header.php";

$id = intval($_GET['id']);

echo "\$id = $id ";

$sql = "SELECT * FROM noticias WHERE id = $id";
$result = $con->query($sql);
$noticia = $result->fetch_assoc();
?>

<div class="card">
    <!-- Aqui você já estava usando a variável correta ($noticia) -->
    <h1><?php echo $noticia['titulo']; ?></h1>

    <!-- CORREÇÃO AQUI: Troque $row por $noticia -->
    <img src="<?php echo $noticia['imagem']; ?>" alt="<?php echo $noticia['titulo']; ?>">
    
    <!-- Se você quiser exibir o título novamente abaixo da imagem -->
  <!--  <h3><php echo noticia[titulo]; ?></h3>  -->

    <p><?php echo $noticia['conteudo']; ?></p>
</div>

<?php include "footer.php"; ?>