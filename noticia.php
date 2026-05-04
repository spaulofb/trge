<?php
/**  Arquivo noticia.php - 20260504 */
include "db.php";
include "header.php";

$id = intval($_GET['id']);

$sql = "SELECT * FROM noticias WHERE id = $id";
$result = $con->query($sql);
$noticia = $result->fetch_assoc();
?>

<div class="card">
  <h1><?php echo $noticia['titulo']; ?></h1>
<a href="noticia.php?id=<?php echo $row['id']; ?>">
  <img src="<?php echo $row['imagem']; ?>">
  <h3><?php echo $row['titulo']; ?></h3>
</a>

  <p><?php echo $noticia['conteudo']; ?></p>
</div>

<?php include "footer.php"; ?>