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

    function moveSlider(index) {
        // Atualiza o índice global
        currentIndex = index;
        
        // Calcula a posição exata
        const targetX = slider.offsetWidth * currentIndex;

        // Move apenas o scroll interno
        slider.scrollTo({
            left: targetX,
            behavior: 'smooth'
        });
    }

    function autoPlay() {
        currentIndex++;
        
        // Se chegar ao fim, volta para o zero
        if (currentIndex >= slides.length) {
            currentIndex = 0;
        }
        
        moveSlider(currentIndex);
    }

    function startTimer() {
        stopTimer(); // Limpa qualquer resquício de timer
        timer = setInterval(autoPlay, delay);
    }

    function stopTimer() {
        clearInterval(timer);
    }

    // Inicia o carrossel
    startTimer();

    // Eventos de interação: Pausa quando o mouse entra, retoma quando sai
    slider.addEventListener('mouseenter', stopTimer);
    slider.addEventListener('mouseleave', startTimer);

    // Ajuste para não quebrar o alinhamento se redimensionar a janela (FMRP desktop/mobile)
    window.addEventListener('resize', () => {
        slider.scrollTo({ 
            left: slider.offsetWidth * currentIndex, 
            behavior: 'auto' 
        });
    });
</script>





<?php include "footer.php"; ?>
