<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Departamento de Genética</title>

<style>


body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

/* LADO A LADO */
.header-flex {
    display: flex;
    height: 300px;
}

/* LOGO ESQUERDA */
.lado-logo {
    width: 25%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
}

.logo {
    max-width: 90%;
}

/* IMAGEM DIREITA */
.lado-banner {
    width: 75%;
    position: relative; /* 🔥 essencial */
}

/* FUNDO */
.bg {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(1.2);
}

/* MENU */
.menu {
    position: absolute;
    bottom: 15px;
    right: 20px;
}

/* HORIZONTAL */
.menu-list {
    list-style: none;
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 10px 15px;

    background: rgba(0,0,0,0.5);
    border-radius: 10px;
    backdrop-filter: blur(6px);
}

/* LINKS */
.menu-list a {
    color: #fff;
    text-decoration: none;
}

/* SUBMENU */
.menu-list li {
    position: relative;
}

/* 🔥 AGORA ABRE PRA BAIXO */
.submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0; /* mantém alinhado com o item pai */

    background: rgba(0,0,0,0.9);
    border-radius: 6px;
    min-width: 180px;

    padding: 5px 0; /* 🔥 diminui espaço lateral */
}


.submenu li a {
     display: block;  
     position: relative;
    padding: 10px;
     /*    padding: 8px 12px;  🔥 mais justo */
     transition: 0.2s;
}

.submenu li a:hover {
    background: rgba(255,255,255,0.15);
    padding-left: 16px; /* 🔥 leve movimento */
}

.submenu li a::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 3px;
    height: 100%;
    background: #00aaff;
    opacity: 0;
    transition: 0.2s;
}

.submenu li a:hover::before {
    opacity: 1;
}


.menu-list > li > a:hover {
    color: #00aaff;
}

/* MOSTRAR */
.has-sub:hover .submenu {
    display: block;
}





</style>
</head>

<body>

<header>

    <div class="header-flex">

        <!-- LOGO ESQUERDA -->
        <div class="lado-logo">
            <img src="img/logo_Depto_Genetica_branca_alt260.png" class="logo">
        </div>

        <!-- IMAGEM DIREITA -->
        <div class="lado-banner">

            <img src="img/labmenu_peq_1024x264.jpg" class="bg">

            <!-- MENU -->
            <nav class="menu">
                <ul class="menu-list">

                    <li><a href="#">Início</a></li>

                    <li class="has-sub">
                        <a href="#">Serviços ▾</a>
                        <ul class="submenu">
                            <li><a href="#">Genética Clínica</a></li>
                            <li><a href="#">Exames</a></li>
                            <li><a href="#">Pesquisa</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Contato</a></li>

                </ul>
            </nav>

        </div>

    </div>

</header>

</body>
</html>

