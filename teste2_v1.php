<?php
//  Teste v20260508
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
    <script src="js/carrossel.js" defer></script>
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
/*
.banner {
    position: relative;
    width: 100%;
      height: 320px;   
        height: 402px;
}
*/

/* HEADER FIXO AO ROLAR */

header {
    position: sticky;
    top: 0;
    z-index: 9999;
}

/* quando fixar, deixa o banner menor */
header.fixo .banner {
    height: 90px;
    transition: 0.4s;
}

/* esconde o vídeo quando rolar */
header.fixo .bg,
header.fixo .banner::after {
    display: none;
}

/* fundo do header fixo */
header.fixo .banner {
    background: rgba(10, 20, 35, 0.96);
    box-shadow: 0 4px 18px rgba(0,0,0,0.25);
}

/* ajusta logo */
header.fixo .logo {
    max-height: 65px;
}

/* ajusta texto */
header.fixo .linha1 {
    font-size: 22px;
}

header.fixo .linha2 {
    font-size: 17px;
}

/* coloca o menu dentro do header fixo */
header.fixo .menu {
    bottom: 15px;
}



.banner {
    position: relative;
    width: 100%;
    height: 480px; /* Altere de 402px para 300px ou quanto desejar */
     /*  overflow: hidden;  Garante que nada escape da caixa */
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
    /*  align-items: flex-start;    */
    
    align-items: center;  /*  Alinha verticalmente no centro  */
    /*  justify-content: center;  
    *    justify-content: flex-start;
    */
    /*   gap: 12px;  espaço entre logo e texto */
    gap: 15px; 

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

/* .logo-box {  
    display: flex;
    align-items: center;   Alinha verticalmente no centro 
    gap: 15px;
}
*/



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
     /*  position: absolute; 🔥 faz sobrepor */
    position: static;  /* Remove o translate  */
    display: flex;
    flex-direction: column;
    font-family: 'Montserrat', sans-serif;  
     text-shadow: 0 2px 6px rgba(0,0,0,0.7);
     /*  margin-top: 4px;  */
      /*  transform: translate(80px,4px);  ajuste fino */    
      white-space: nowrap; 
      transform: none;
}

/*
.logo-texto {
    position: static;  Remove o translate 
    transform: none;
}
*/



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



/* HEADER FIXO */

/*
.menu.fixed-nav {
    position: fixed;
    top: 0;
    bottom: auto;
    background: rgba(0, 0, 0, 0.9);
    height: 60px;
}
*/    


.menu.fixed-nav {

    position: fixed;

    top: 0;
    left: 0;

    width: 100%;

    z-index: 9999;

    background: rgba(10, 20, 35, 0.92);

    backdrop-filter: blur(8px);

    -webkit-backdrop-filter: blur(8px);

    padding: 10px 0;

    box-shadow: 0 4px 18px rgba(0,0,0,0.25);

    animation: slideDown 0.35s ease;
}

.menu.fixed-nav .menu-list {

    background: transparent;

    border: none;

    box-shadow: none;
}


/* animação */

@keyframes slideDown {

    from {
        transform: translateY(-100%);
        opacity: 0;
    }

    to {
        transform: translateY(0);
        opacity: 1;
    }
}



/* MENU HORIZONTAL */
.menu-list {
    list-style: none;
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 10px 15px;

 /*   background: rgba(0,0,0,0.5);  */
    background: rgba(255, 255, 255, 0.1); /* Fundo mais claro e transparente */
   /*  border-radius: 10px;
    backdrop-filter: blur(6px);  */
        border: 1px solid rgba(255, 255, 255, 0.2); /* Borda "de vidro" */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
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

.has-sub > a::after {
    content: ' ▼';
    font-size: 10px;
    vertical-align: middle;
    opacity: 0.7;
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
/*        CONTENT            */
/* ========================= */

.conteudo {
    background: #f4f6f9;
    padding: 60px 5%;
}

/* TÍTULOS */
.section-title {
    text-align: center;
    margin-bottom: 45px;
}

.section-title h2 {
    font-size: 36px;
    color: #1b3556;
    margin-bottom: 10px;
    font-family: 'Montserrat', sans-serif;
}

.section-title p {
    color: #666;
    font-size: 17px;
}

/* CARDS */

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px,1fr));
    gap: 25px;
}

.card {
    background: white;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 5px 18px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 24px rgba(0,0,0,0.15);
}

.card img {
    width: 100%;
    height: 210px;
    object-fit: cover;
}

.card-content {
    padding: 22px;
}

.card-content h3 {
    margin-top: 0;
    color: #1b3556;
    font-size: 22px;
}

.card-content p {
    color: #555;
    line-height: 1.6;
}

.card-content a {
    display: inline-block;
    margin-top: 14px;
    color: #0077cc;
    text-decoration: none;
    font-weight: bold;
}

/* ÁREA INSTITUCIONAL */

.institucional {
    margin-top: 80px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
}

.institucional img {
    width: 100%;
    border-radius: 14px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}

.institucional-texto h2 {
    font-size: 34px;
    color: #1b3556;
    margin-bottom: 20px;
}

.institucional-texto p {
    line-height: 1.8;
    color: #444;
    font-size: 17px;
}

/* NÚMEROS */

.numeros {
    margin-top: 80px;
    background: linear-gradient(135deg, #1b3556, #244b7a);
    padding: 60px 30px;
    border-radius: 18px;
    color: white;

    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(180px,1fr));
    gap: 30px;
    text-align: center;
}

.numero h3 {
    font-size: 48px;
    margin: 0;
}

.numero p {
    margin-top: 10px;
    font-size: 18px;
}

.noticias {
    padding: 70px 5%;
    background: #ffffff;
}

.noticias-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

.noticia-card {
    background: #f4f6f9;
    padding: 28px;
    border-radius: 14px;
    border-left: 5px solid #1b3556;
    box-shadow: 0 5px 16px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.noticia-card:hover {
    transform: translateY(-6px);
}

.noticia-card h3 {
    color: #1b3556;
    margin-top: 12px;
}

.noticia-card p {
    color: #555;
    line-height: 1.6;
}

.noticia-card a {
    color: #0077cc;
    font-weight: bold;
    text-decoration: none;
}

.tag {
    background: #1b3556;
    color: white;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 13px;
}


/*  CARROSSEL  */
/* ========================= */
/*      CARROSSEL            */
/* ========================= */

.carrossel-wrapper {

    width: 100%;

    display: flex;

    justify-content: center;

    align-items: center;

    padding: 50px 0;

    background: #f4f6f9;
}

/* CONTAINER */

.carrossel {

    position: relative;

    width: 60%;

    max-width: 1200px;

    height: 320px;

    overflow: hidden;

    border-radius: 18px;

    background: #12263f;

    box-shadow: 0 10px 30px rgba(0,0,0,0.15);

    margin-left: auto;
    margin-right: auto;
}

/* SLIDES */

.slide {

    position: absolute;

    top: 0;
    left: 0;

    width: 100%;
    height: 100%;

    opacity: 0;

    visibility: hidden;

    transition: opacity 0.8s ease;
}

.slide.ativo {

    opacity: 1;

    visibility: visible;

    z-index: 2;
}

/* IMAGEM */

.slide img {

    width: 100%;

    height: 100%;

    object-fit: contain;

    background: #000;

    display: block;
}

/* TEXTO */

.slide-texto {

    position: absolute;

    left: 40px;

    bottom: 35px;

    color: white;

    z-index: 5;

    max-width: 70%;

    text-shadow: 0 3px 10px rgba(0,0,0,0.7);
}

.slide-texto h2 {

    font-size: 34px;

    margin-bottom: 10px;
}

.slide-texto p {

    font-size: 18px;
}

/* BOTÕES */

.carrossel-btn {

    position: absolute;

    top: 50%;

    transform: translateY(-50%);

    z-index: 10;

    border: none;

    width: 48px;

    height: 48px;

    border-radius: 50%;

    background: rgba(255,255,255,0.2);

    color: white;

    font-size: 24px;

    cursor: pointer;
}

.prev {

    left: 15px;
}

.next {

    right: 15px;
}










.card,
.noticia-card,
.institucional,
.numero {
    animation: subirSuave 0.8s ease forwards;
}

@keyframes subirSuave {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* ========================= */
/*          FOOTER           */
/* ========================= */

.footer {
    background: #12263f;
    color: #ddd;
    padding: 60px 5% 30px;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
    gap: 40px;
}

.footer h3 {
    color: white;
    margin-bottom: 18px;
    font-size: 22px;
}

.footer p,
.footer a {
    color: #ccc;
    text-decoration: none;
    line-height: 1.8;
}

.footer a:hover {
    color: #00aaff;
}

.footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.1);
    margin-top: 40px;
    padding-top: 20px;
    text-align: center;
    color: #aaa;
    font-size: 14px;
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
        object-fit: contain; /* 🔥 NÃO DEFORMA */
        margin-left:2px;
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


    .institucional {
        grid-template-columns: 1fr;
    }

    .section-title h2 {
        font-size: 28px;
    }

    .institucional-texto h2 {
        font-size: 28px;
    }

    .numero h3 {
        font-size: 36px;
    }


    .carrossel {
        width: 94%;
        height: 220px;
    }

    .slide-texto {
        left: 20px;
        bottom: 20px;
        max-width: 85%;
    }

    .slide-texto h2 {
        font-size: 22px;
    }

    .slide-texto p {
        font-size: 14px;
    }


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




/* HEADER FIXO */

const menuHeader = document.querySelector('.menu');

window.addEventListener('scroll', () => {

    if (window.scrollY > 120) {

        menuHeader.classList.add('fixed-nav');

    } else {

        menuHeader.classList.remove('fixed-nav');
    }

});




</script>

</head>

<body>


<header>

    <div class="banner">

        <!-- IMAGEM GRANDE     <img src="img/labmenu_peq_1024x264.jpg" class="bg">  
                                 <source src="video/video_lab_aluna.mp4" type="video/mp4"> 
        -->
      <video autoplay muted loop playsinline class="bg">
          <source src="video/fundo_video_1.mp4" type="video/mp4">
           Seu navegador não suporta vídeos.
      </video>

                
        <!-- CONTAINER DO LOGO -->
        <div class="logo-box">
            <!-- LOGO AGORA DENTRO DA IMAGEM 
             <img  src="img/logo_Depto_Genetica_transp_alt260_sem_texto.png" class="logo">   -->
             <img  src="img/logo_98x204.png" class="logo">  


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

<!-- ========================= -->
<!--        CONTEÚDO           -->
<!-- ========================= -->

<section class="conteudo">

    <!-- TÍTULO -->
    <div class="section-title">
        <h2>Pesquisa, Ensino e Inovação</h2>
        <p>Excelência acadêmica e científica voltada ao desenvolvimento da sociedade.</p>
    </div>

    <!-- CARDS -->
    <div class="cards">

        <div class="card">
            <img src="img/pesquisa.jpg" alt="">
            <div class="card-content">
                <h3>Linhas de Pesquisa</h3>
                <p>Projetos científicos avançados em genética, biologia molecular e bioinformática.</p>
                <a href="#">Saiba mais →</a>
            </div>
        </div>

        <div class="card">
            <img src="img/laboratorio.jpg" alt="">
            <div class="card-content">
                <h3>Laboratórios</h3>
                <p>Infraestrutura moderna para desenvolvimento de pesquisas e formação acadêmica.</p>
                <a href="#">Conheça →</a>
            </div>
        </div>

        <div class="card">
            <img src="img/alunos.jpg" alt="">
            <div class="card-content">
                <h3>Pós-Graduação</h3>
                <p>Programas de excelência reconhecidos nacional e internacionalmente.</p>
                <a href="#">Ver programas →</a>
            </div>
        </div>

    </div>

    <!-- ÁREA INSTITUCIONAL -->

    <div class="institucional">

        <img src="img/universidade.jpg" alt="Universidade">

        <div class="institucional-texto">

            <h2>Compromisso com a Ciência</h2>

            <p>
                O Departamento atua na formação de recursos humanos altamente qualificados,
                promovendo integração entre ensino, pesquisa e extensão universitária.
            </p>

            <p>
                Nossos projetos envolvem colaboração nacional e internacional,
                fortalecendo o avanço científico e tecnológico nas áreas biomédicas.
            </p>

        </div>

    </div>

    <!-- NÚMEROS -->

    <div class="numeros">

        <div class="numero">
            <h3>25+</h3>
            <p>Docentes</p>
        </div>

        <div class="numero">
            <h3>40+</h3>
            <p>Projetos</p>
        </div>

        <div class="numero">
            <h3>300+</h3>
            <p>Publicações</p>
        </div>

        <div class="numero">
            <h3>120+</h3>
            <p>Alunos</p>
        </div>

    </div>

</section>

<section class="noticias">
    <div class="section-title">
        <h2>Notícias e Defesas</h2>
        <p>Acompanhe as principais novidades, teses, dissertações e eventos acadêmicos.</p>
    </div>

    <div class="noticias-grid">

        <article class="noticia-card">
            <span class="tag">Tese</span>
            <h3>Defesa de Doutorado em Genética</h3>
            <p>Pesquisa aborda novos marcadores genéticos aplicados à saúde humana.</p>
            <a href="#">Ler mais →</a>
        </article>

        <article class="noticia-card">
            <span class="tag">Evento</span>
            <h3>Simpósio de Bioinformática</h3>
            <p>Encontro reúne pesquisadores, docentes e alunos da pós-graduação.</p>
            <a href="#">Ler mais →</a>
        </article>

        <article class="noticia-card">
            <span class="tag">Dissertação</span>
            <h3>Nova dissertação defendida</h3>
            <p>Trabalho apresenta avanços em biologia molecular e análise genômica.</p>
            <a href="#">Ler mais →</a>
        </article>

    </div>
</section>


<div class="carrossel-wrapper">

    <section class="carrossel">

        <div class="slide ativo">

            <img src="img/carrossel/carrossel1_366x400.png" alt="">

            <div class="slide-texto">
                <h2>Excelência em Ensino e Pesquisa</h2>
                <p>Formação acadêmica integrada à inovação científica.</p>
            </div>

        </div>

        <div class="slide">

            <img src="img/carrossel/carrossel2_364x400.png" alt="">

            <div class="slide-texto">
                <h2>Genética e Bioinformática</h2>
                <p>Pesquisa e inovação científica.</p>
            </div>

        </div>

        <button class="carrossel-btn prev">&#10094;</button>
        <button class="carrossel-btn next">&#10095;</button>

    </section>

</div>



<!-- ========================= -->
<!--          FOOTER           -->
<!-- ========================= -->

<footer class="footer">

    <div class="footer-grid">

        <div>
            <h3>Departamento</h3>

            <p>
                Departamento de Teste<br>
                RPFX/ABC
            </p>

            <p>
                Universidade Exemplo<br>
                Ribeirão Preto - SP
            </p>
        </div>

        <div>
            <h3>Links Rápidos</h3>
            <p><a href="#">Graduação</a></p>
            <p><a href="#">Pós-Graduação</a></p>
            <p><a href="#">Pesquisa</a></p>
            <p><a href="#">Laboratórios</a></p>
        </div>

        <div>
            <h3>Contato</h3>

            <p>📞 (16) 0000-0000</p>
            <p>✉ contato@universidade.br</p>
            <p>📍 Ribeirão Preto - SP</p>
        </div>

        <div>
            <h3>Redes Sociais</h3>

            <p><a href="#">Instagram</a></p>
            <p><a href="#">Facebook</a></p>
            <p><a href="#">YouTube</a></p>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 Departamento de Teste - Todos os direitos reservados.
    </div>

</footer>
</body>
</html>

