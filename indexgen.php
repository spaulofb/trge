<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento de Genética</title>

    <link rel="stylesheet" href="css/stylegen.css">
</head>
<body>

<header class="hero">

    <!-- overlay   -->
    <div class="overlay"></div>     

    <!-- header -->
    <div class="topo">

        <!-- LOGO -->
        <div class="logo">
            <img src="img/Logo_Depto-Genetica.png" alt="Logo">
        </div>

        <!-- MENU -->
        <nav class="menu">
            <ul>
                <li><a href="#">Departamento</a></li>
                <li><a href="#">Equipe</a></li>
                <li><a href="#">Ensino</a></li>
                <li><a href="#">Pesquisa</a></li>
                <li><a href="#">Laboratórios</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>

        <!-- BOTÃO MOBILE -->
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    </div>

</header>





<script>
function toggleMenu() {
    document.querySelector('.menu ul').classList.toggle('active');
}
</script>

</body>
</html>