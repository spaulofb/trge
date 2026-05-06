<?php include "db.php"; ?>
<?php include "header.php"; ?>
<?php
$result = $con->query("SELECT * FROM noticias");

echo "Total de notícias: " . $result->num_rows."<br>";

// echo password_hash("l3", PASSWORD_DEFAULT);

?>
<h2>Destaques</h2>

<!-- Adicionamos o id "newsSlider" -->
<div class="carousel" id="newsSlider">
    <?php
    $sql = "SELECT * FROM noticias ORDER BY id DESC LIMIT 10";
    $result = $con->query($sql);
    while($row = $result->fetch_assoc()): ?>
        <div class="slide">
            <a href="noticia.php?id=<?= $row['id'] ?>">
                <img src="<?= $row['thumb'] ?>">
                <p><?= $row['titulo'] ?></p>
            </a>
        </div>
    <?php endwhile; ?>
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


<h2>Localização</h2>

<iframe
  src="https://www.google.com/maps?q=Ribeirao%20Preto&output=embed"
  width="100%"
  height="300"
  style="border:0;">
</iframe>

<script>
    //
    const slider = document.getElementById('newsSlider');
    let scrollAmount = 0;
    const scrollStep = slider.offsetWidth; // Tamanho de um slide
    const delay = 5000; // Tempo em milissegundos (5 segundos)

    function autoPlay() {
        // Se chegar no final, volta para o começo
        if (slider.scrollLeft >= (slider.scrollWidth - slider.offsetWidth) - 1) {
            slider.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
            // Move para o próximo slide
            slider.scrollBy({ left: slider.offsetWidth, behavior: 'smooth' });
        }
    }
    //
    // Inicia o temporizador
    let timer = setInterval(autoPlay, delay);
    //
    // Pausa o slider se o usuário passar o mouse por cima
    slider.addEventListener('mouseover', () => clearInterval(timer));
    slider.addEventListener('mouseout', () => timer = setInterval(autoPlay, delay));
    //
</script>

<?php include "footer.php"; ?>