<?php include "db.php"; ?>
<?php include "header.php"; ?>

<h2>Destaques</h2>

<div class="carousel">

<?php
$sql = "SELECT * FROM noticias ORDER BY id DESC LIMIT 10";
$result = $con->query($sql);

while($row = $result->fetch_assoc()) {
?>

  <div class="slide">
    <a href="noticia.php?id=<?php echo $row['id']; ?>">
      <img src="<?php echo $row['thumb']; ?>">
      <p><?php echo $row['titulo']; ?></p>
    </a>
  </div>

<?php } ?>

</div>



<h2>Últimas Notícias</h2>

<div class="grid">

<?php
$result = $con->query("SELECT * FROM noticias ORDER BY id DESC");

while($row = $result->fetch_assoc()) {
?>
  <div class="card">
    <a href="<?php echo $row['imagem']; ?>">
       <img src="<?php echo $row['thumb']; ?>">
    </a>
    <h3><?php echo $row['titulo']; ?></h3>
    <p><?php echo $row['conteudo']; ?></p>
  </div>
<?php } ?>

</div>

<?php include "footer.php"; ?>