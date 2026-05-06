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

/* BANNER 100% */
.banner {
    position: relative;
    width: 100%;
    height: 320px;
}

/* IMAGEM */
.bg {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;

    /* filter: brightness(1.2);  */  
    filter: brightness(1.25) contrast(1.1);
}


/* LOGO AGORA SOBRE A IMAGEM */
/*
.logo {
    position: absolute;
    left: 20px;  */  /* 🔥 canto esquerdo */
/*    
    top: 50%;
    transform: translateY(-50%);
    height: 120px;
    opacity: 0.95;  
     filter: drop-shadow(0 0 10px rgba(0,0,0,0.6));
}
*/     

/* CONTAINER DO LOGO */
.logo-box {
    position: absolute;
    left: 0 !important;
    top: 0  !important;

    width: 25%;   /* 🔥 AGORA FUNCIONA */
    height: 100%; /*  height: 100%; 🔥 ocupa toda altura */

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 10px;
}

.logo-box {
    position: absolute;

    top: 50%;                /* 🔥 base do centro */
    left: 0;
    transform: translateY(-50%); /* 🔥 centraliza vertical */

    margin-left: 10px;       /* 🔥 deslocamento lateral */

    width: 25%;
    height: 100%;

    display: flex;
    align-items: center;
    justify-content: center;
}



/* IMAGEM DO LOGO */
.logo {
    width: 100%;
    height: 92%;
    object-fit: contain; /* 🔥 NÃO DEFORMA */
}



/* MENU */
.menu {
    position: absolute;
    bottom: 15px;
    right: 20px;
}

/* MENU HORIZONTAL */
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

.submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;

    background: rgba(0,0,0,0.9);
    border-radius: 6px;
    min-width: 180px;
}

.submenu li a {
    display: block;
    padding: 8px 12px;
}

/* HOVER */
.has-sub:hover .submenu {
    display: block;
}



</style>
</head>

<body>


<header>

    <div class="banner">

        <!-- IMAGEM GRANDE -->
        <img src="img/labmenu_peq_1024x264.jpg" class="bg">

        
        <!-- CONTAINER DO LOGO -->
        <div class="logo-box">
            <!-- LOGO AGORA DENTRO DA IMAGEM -->
             <img src="img/logo_Depto_Genetica_branca_alt260.png" class="logo">
        </div>


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

</header>






</body>
</html>

