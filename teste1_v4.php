<?php
//  Teste v20260507
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TESTE</title>
<!-- Importando a fonte Montserrat do Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');    

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}


/* 🔥 IMPORTANTE PARA RESPONSIVIDADE */
* {
    box-sizing: border-box;
}

/* BANNER 100% */
.banner {
    position: relative;
    width: 100%;
    /*  height: 320px;   */
    height: 402px;
}

.banner::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3); /* Escurece o vídeo em 30% */
    z-index: 1;
}


/* IMAGEM */
/*
.bg {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
*/
    /* filter: brightness(1.2);  */  
/*    filter: brightness(1.25) contrast(1.1);
}
*/

/* Ajuste para que o vídeo/imagem de fundo se comporte corretamente */
.bg {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Mantém a proporção sem distorcer */
    z-index: 0; /* Garante que fique atrás de tudo */
    
    /* Filtros que você já estava usando */
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

    /*  top: 50%;
    transform: translateY(-50%);
    */

    /* margin-left: 10px;  */
    margin-top: 4px;
    margin-left: 20px;

    /*  width: 25%;  */
    width: auto;
    height: auto;

    display: flex;
    /*  align-items: center;   */
    align-items: flex-start;  

    /*  justify-content: center;  
    *    justify-content: flex-start;
    */
   

     gap: 12px; /* espaço entre logo e texto */

    color: white;


    /* 🔥 AQUI ESTÁ O FADE */
    /*
    background: linear-gradient(
        to right,
        rgba(0,0,0,0.6),
        rgba(0,0,0,0.3),
        rgba(0,0,0,0)
    );
    */
}

/* Garante que o logo e o menu fiquem ACIMA dessa camada escura */
.logo-box, .menu {
    z-index: 2;
}



/* IMAGEM DO LOGO */
.logo {
    display:block;
    width: auto;
    /*  width: 100%;
    *  height: 92%;   
    */
     max-height: 92%;
    object-fit: contain; /* 🔥 NÃO DEFORMA */
    margin-left:2px;
}

.logo-texto {
    position: absolute; /* 🔥 faz sobrepor */
    display: flex;
    flex-direction: column;
    font-family: 'Montserrat', sans-serif;  
     text-shadow: 0 2px 6px rgba(0,0,0,0.7);
     /*  margin-top: 4px;  */
      transform: translate(60px,4px); /* ajuste fino */    
      white-space: nowrap; 
}

/* Linha principal */
.linha1 {
    font-size: 30px;
    font-weight: 600;
}

/* Linha menor */
.linha2 {
    font-size: 26px;
    font-weight: 400;
}

.logo-texto a {
    text-decoration:none;    
    color: inherit; /* Em vez de #00aaff, ele mantém a cor original */
}

/* No seu código, altere esta parte: */
.logo-texto a:hover {
    color: inherit; /* Em vez de #00aaff, ele mantém a cor original */
}

/* MENU */
/*
.menu {
    position: absolute;
    bottom: 15px;
    right: 20px;
}
    */

.menu {
    position: absolute;
    bottom: 15px;

    width: 100%;
    display: flex;
    justify-content: center;  /* Menu centralizado na div class menu  */

    left: 0;
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
    list-style: none; /* 👈 Adicione esta linha aqui */
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

/* HOVER */
.has-sub:hover .submenu {
    display: block;
}


.menu-toggle {
    display: none;
    font-size: 22px;
    color: white;
    background: rgba(0,0,0,0.6);
    padding: 8px 12px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}

/* botão serviços */
.submenu-btn {
    background: none;
    border: none;
    color: #fff;
    font: inherit;
    cursor: pointer;
    padding: 10px;
    width: 100%;
    text-align: left;
}


/* 2. ADICIONE ESTA REGRA (para o clique funcionar no Desktop também) */
.has-sub.active > .submenu {
    display: block !important;
}



/* ========================= */
/*     TABLET       */
/* ========================= */
@media (max-width: 1024px) {

    .banner {
        height: 340px;
    }

    .logo-box {
        margin-left: 15px;
        margin-top: 8px;
    }

    .logo {
        max-height: 90px;
    }

    .logo-texto {
        transform: translate(55px, 8px);
    }

    .linha1 {
        font-size: 22px;
    }

    .linha2 {
        font-size: 18px;
    }

    .menu {
        right: 15px;
        bottom: 12px;
    }

    .menu-list {
        gap: 12px;
        padding: 8px 12px;
    }
}


/* ========================= */
/*        CELULAR     */
/* ========================= */
@media (max-width: 768px) {

    .banner {
        height: 300px;
    }

    .logo-box {
        top: 10px;
        left: 10px;
        margin: 0;
        max-width: calc(100% - 20px);
    }

    .logo {
        max-height: 75px;
    }

    /*
    .logo-texto {
        font-family: 'Montserrat', sans-serif;  
        transform: translate(48px, 8px);
        white-space: normal;
    }  

    .linha1 {
        font-size: 18px;
        line-height: 1.1;
        font-weight: 600;
    }

    .linha2 {
        font-size: 15px;
        font-weight: 400;
    }
        */


    .logo-texto {
        position: absolute;
        font-family: 'Montserrat', sans-serif;  
        transform: translate(48px, 8px);

        white-space: normal;

        width: 280px;
        line-height: 1.1;
    }

    .linha1 {
        font-size: 18px !important;
        /*  line-height: 1.1;  */
        font-weight: 600;
    }

    .linha2 {
        font-size: 14px !important;
        font-weight: 400;
    }


    /*
    .menu {
        right: 10px;
        bottom: 10px;
        width: calc(100% - 20px);
        display: flex;
        flex-direction: column;
        align-items: flex-end;  */
        /*  align-items: flex-start;  */  /*  Inicio da Tela */
 /*   }   */

    .menu {
        position: absolute !important;
         /*  top: 200px;   IMPORTANTE:  Ajuste esta altura para onde o botão ☰ deve ficar */
        top: 80%; /* 👈 Ele sempre estará a 80% do topo do banner, não importa a altura */
        bottom: auto;  /*   IMPORTANTE: desativa o fundo */
        right: 10px;
        width: calc(100% - 20px);
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }

    .menu-toggle {
        display: block;
        margin-bottom: 6px;
        font-size: 24px;
    }

    .menu-list {
        display: none;
        flex-direction: column;
        width: 100%;
        gap: 0;
        padding: 8px 0;
        background: rgba(0,0,0,0.78);
        border-radius: 10px;
    }

    .menu-list.active {
        display: flex;
    }

    .menu-list li {
        width: 100%;
    }

    .menu-list a {
        display: block;
        padding: 12px 15px;
    }

   /*
    .has-sub:hover .submenu {
        display: none;
    }
    */

    /*  submenu do Celular */
    /*
    .submenu {
        position: static;
        display: none;
        width: 100%;
        min-width: 100%;
        padding: 0;
        border-radius: 0;
        background: rgba(255,255,255,0.12);
    }
     */

    .submenu {
        position: static;
        bottom: auto;
        top: auto;
        left: auto;

        display: none;
        width: 100%;
        min-width: 100%;
        padding: 0;

        background: rgba(255,255,255,0.12);
        border-radius: 0;
    }



    .menu-list .has-sub .submenu {
        position: static !important;
        top: auto !important;
        bottom: auto !important;
        left: auto !important;
        right: auto !important;

        display: none;
        width: 100%;
        min-width: 100%;
        margin: 0;
        padding: 0;

        background: rgba(255,255,255,0.12);
        border-radius: 0;
    }

    /*
    .has-sub.active .submenu {
        display: block !important;
    }
        */

    .has-sub.active .submenu {
        position: absolute;
        top: 100%;
        left: 0;
       /* z-index: 100;   */
          z-index: 999;
    }


 /*   .submenu li a {   */
        /*  padding: 10px 25px;  
        padding: 5px 17px;*/
  /*  }   */




}


/* ========================= */
/*    CELULAR PEQUENO     */
/* ========================= */
@media (max-width: 480px) {

    .banner {
        height: 270px;
    }

    .logo {
        max-height: 65px;
    }

    .logo-texto {
        transform: translate(42px, 7px);
    }

    .linha1 {
        font-size: 15px;
    }

    .linha2 {
        font-size: 13px;
    }

    /*  submenu do Celular */
    /*
    .submenu {
        position: static;
        display: none;
        width: 100%;
        min-width: 100%;
        padding: 0;
        border-radius: 0;
        background: rgba(255,255,255,0.12);
    }
     */

    .submenu {
        position: static;
        bottom: auto;
        top: auto;
        left: auto;

        display: none;
        width: 100%;
        min-width: 100%;
        padding: 0;

        background: rgba(255,255,255,0.12);
        border-radius: 0;
    }

    .has-sub.active .submenu {
        display: block !important;
    }

     .submenu li a {
        /*  padding: 10px 25px;  */
        padding: 5px 17px;
    }


}
</style>
</head>

<body>


<header>

    <div class="banner">

        <!-- IMAGEM GRANDE     <img src="img/labmenu_peq_1024x264.jpg" class="bg">    -->
      <video autoplay muted loop playsinline class="bg">
          <source src="video/video_lab_aluna.mp4" type="video/mp4">
           Seu navegador não suporta vídeos.
      </video>


                
        <!-- CONTAINER DO LOGO -->
        <div class="logo-box">
            <!-- LOGO AGORA DENTRO DA IMAGEM 
             <img  src="img/logo_Depto_Genetica_transp_alt260_sem_texto.png" class="logo">   -->
             <img  src="img/logo_52x108.png" class="logo">  


    <div class="logo-texto">
        <span class="linha1"><a href="https://sol.fmrp.usp.br/testes/trge/teste1.php">Departamento de Teste</a></span>
        <span class="linha2">RPFX/ABC</span>
    </div>

   </div>


        <!-- MENU -->
        <nav class="menu">
            
            <button class="menu-toggle" aria-label="Abrir menu">☰</button>

            <ul class="menu-list">
           

                <li><a href="https://sol.fmrp.usp.br/testes/trge/teste1.php"  target="_parent" >Início</a></li>

                <li class="has-sub">
                    <a href="#">Departamento</a>
                    <ul class="submenu">
                        <li><a href="departamento-historia.php">História</a></li>
                        <li><a href="departamento-chefia.php">Chefia</a></li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="equipe-docentes.php">Equipe</a>
                    <ul class="submenu">
                        <li><a href="equipe-docentes.php">Docentes</a></li>
                        <li><a href="equipe-tecnicos.php">Técnicos</a></li>
                        <li><a href="equipe-administrativos.php">Administrativos</a></li>
                    </ul>
                </li>

                <li class="has-sub">
                <a href="ensino-graduacao.php">Ensino</a>
                <ul class="submenu">
                    <li><a href="ensino-graduacao.php">Graduação</a></li>
                    <li><a href="ensino-pos-graduacao.php">Pós-Graduação</a></li>
                    <li><a href="ensino-disciplinas.php">Disciplinas</a></li>
                </ul>
                </li>

                <li class="has-sub">
                <a href="pesquisa-linhas.php">Pesquisa</a>
                <ul class="submenu">
                    <li><a href="pesquisa-linhas.php">Linhas de Pesquisa</a></li>
                    <li><a href="pesquisa-projetos.php">Projetos</a></li>
                    <li><a href="pesquisa-publicacoes.php">Publicações</a></li>
                </ul>
                </li>

                <li class="has-sub">
                    <a href="laboratorios-genetica.php">Laboratórios</a>
                    <ul class="submenu">
                        <li><a href="laboratorios-genetica.php">Genética</a></li>
                        <li><a href="laboratorios-biologia.php">Biologia Molecular</a></li>
                        <li><a href="laboratorios-bioinformatica.php">Bioinformática</a></li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="contato-localizacao.php">Contato</a>
                    <ul class="submenu">
                        <li><a href="contato-localizacao.php">Localização</a></li>
                        <li><a href="contato-telefones.php">Telefones</a></li>
                        <li><a href="contato-formulario.php">Formulário</a></li>
                    </ul>
                </li>


            </ul>
        </nav>

    </div>

</header>


<script>
const toggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu-list');

// Botão hambúrguer (Celular)
toggle.addEventListener('click', (e) => {
    e.stopPropagation();
    menu.classList.toggle('active');
});

// SUBMENU - Agora para todos os tamanhos de tela
document.querySelectorAll('.has-sub > a').forEach(link => {
    link.addEventListener('click', (e) => {
        // SEMPRE impede o link de navegar para abrir o submenu no clique
        e.preventDefault(); 
        e.stopPropagation();

        const parent = link.parentElement;

        // Fecha outros submenus que estiverem abertos
        document.querySelectorAll('.has-sub').forEach(item => {
            if (item !== parent) {
                item.classList.remove('active');
            }
        });

        // Abre/Fecha o submenu clicado
        parent.classList.toggle('active');
    });
});

// Fecha tudo se clicar fora do menu
document.addEventListener('click', () => {
    if (window.innerWidth <= 768) {
        menu.classList.remove('active');
    }
    document.querySelectorAll('.has-sub').forEach(item => item.classList.remove('active'));
});
</script>


</body>
</html>

