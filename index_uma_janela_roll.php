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
    const slider = document.getElementById('newsSlider');
    const slides = slider.getElementsByClassName('slide');
    let currentIndex = 0;
    const delay = 5000; // 5 segundos cravados
    let timer;

    function startTimer() {
        // Limpa qualquer timer existente antes de começar um novo
        clearInterval(timer);
        timer = setInterval(() => {
            currentIndex++;
            
            // Se passar da última imagem, volta para a primeira
            if (currentIndex >= slides.length) {
                currentIndex = 0;
            }

            // A MÁGICA: Em vez de calcular pixels, dizemos ao navegador
            // para mostrar o slide específico da vez.
            slides[currentIndex].scrollIntoView({
                behavior: 'smooth',
                block: 'nearest',
                inline: 'start'
            });
        }, delay);
    }

    // Inicia pela primeira vez
    startTimer();

    // Pausa ao passar o mouse e reinicia do zero ao sair
    slider.addEventListener('mouseenter', () => clearInterval(timer));
    slider.addEventListener('mouseleave', startTimer);

    // Garante que, se o usuário rolar manualmente, o índice se atualize
    slider.addEventListener('scroll', () => {
        // Atualiza o índice baseado na posição atual da rolagem
        const index = Math.round(slider.scrollLeft / slider.offsetWidth);
        if (index !== currentIndex) {
            currentIndex = index;
        }
    }, { passive: true });
</script>


<?php include "footer.php"; ?>