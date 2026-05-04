</div>

<footer>
  <p>© 2026 - Meu Site</p>
</footer>

<script>
const carousels = document.querySelectorAll('.carousel');

carousels.forEach(carousel => {
  setInterval(() => {
    carousel.scrollBy({ left: 260, behavior: 'smooth' });
  }, 3000);
});
</script>


</body>
</html>