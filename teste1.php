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
/*
.banner {
    position: relative;
    width: 100%;
      height: 320px;   
        height: 402px;
}
*/

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


<section class="rge-hero">
  <div class="rge-hero-media">
    <div class="rge-video-box">
<video autoplay muted loop playsinline>
  <source src="assets/img/video_1.mp4" type="video/mp4">
</video>
    </div>
  </div>
</section>

<!--  <div class="rge-hero-content">
    <div class="rge-info-card">
	              <img src="assets/img/Logo_Depto-Gene-tica.png" alt="Departamento de Genética">
      <span class="rge-card-label">Texto base</span>
      <h2>Operações do departamento</h2>

      <p>
        Este espaço pode ser utilizado para apresentar, de forma estruturada,
        as operações do Departamento de Genética, incluindo atividades de ensino,
        pesquisa, suporte técnico-científico e gestão acadêmica.
      </p>

      <p>
        Também pode abranger integração com programas de pós-graduação,
        serviços laboratoriais especializados, colaboração institucional e
        desenvolvimento de projetos científicos em diferentes áreas da genética.
      </p>

      <p>
        Este conteúdo é provisório e deve ser posteriormente substituído pelo
        texto institucional oficial do departamento.
      </p> 
    </div>
  </div>-->


<main>
  <section id="apresentacao">
    <div class="container">
      <div class="section-head">
        <span class="tag">Apresentação</span>
        <h2>Departamento de Genética da FMRP/USP</h2>
        <p>
          A proposta desta abertura valoriza a identidade institucional do departamento,
          organizando o conteúdo em blocos mais limpos, responsivos e de fácil navegação,
          sem perder a abrangência das informações disponíveis na página original.
        </p>
      </div>

      <div class="intro-grid">
        <div class="card">
          <h3 style="margin-top:0;color:var(--primary)">Conheça nossa história</h3>
          <p style="margin-bottom:0;color:var(--muted)">
            Espaço de destaque para apresentação histórica do departamento, chefias,
            trajetória institucional e sua relevância para a FMRP/USP.
          </p>
        </div>

        <div class="card">
          <h3 style="margin-top:0;color:var(--primary)">Estrutura do portal</h3>
          <p style="margin-bottom:0;color:var(--muted)">
            O conteúdo pode ser organizado por grandes eixos: Departamento, Equipe,
            Genética Médica, Ensino, Pesquisa e Inovação, Administrativo e Laboratórios.
          </p>
        </div>
      </div>

      <div class="metrics">
        <div class="metric">
          <span class="num">+200</span>
          <span class="label">Dissertações de Mestrado defendidas e aprovadas</span>
        </div>
        <div class="metric">
          <span class="num">+300</span>
          <span class="label">Teses de Doutorado defendidas e aprovadas</span>
        </div>
        <div class="metric">
          <span class="num">18</span>
          <span class="label">Docentes atualmente credenciados no Programa</span>
        </div>
      </div>
	  
      <div class="intro-grid">
        <div class="card">
          <h3 style="margin-top:0;color:var(--primary)">Notícias</h3>
          <p style="margin-bottom:0;color:var(--muted)">
								<div style="font-size:16px; line-height: 1.2;" class="pb-2">
																	</div>
															<div style="font-size:16px; line-height: 1.2;" class="pb-2">
																	</div>
																									
          </p>
        </div>

        <div class="card">
          <h3 style="margin-top:0;color:var(--primary)">Defesas - Palestras</h3>
																										        <div class="noticia-meta">
                <div class="meta-item">
					
					<span class="meta-valor">18/05-14:00</span>

					<span class="meta-valor"><a class="text-secondary" href="mostra_tese_agendada.php?cod=1098" style="text-decoration: none;">
						GUSTAVO RONCONI ROZA</a></span>
										
					<span class="meta-label">T&iacute;tulo:
					<span class="meta-valor">													T&iacute;tulo: A Mutação del3554G no Gene <i>Aire</i> altera a Si ... 					<a class="text-secondary" href="mostra_tese_agendada.php?cod=1098" style="text-decoration: none;">mais</a></div>
</span></span>	
										
                </div>

        </div>
											
										
																														        </div>
      </div>

	  
	  
    </div>
  </section>

  <section id="estrutura">
    <div class="container">
      <div class="section-head">
        <span class="tag">Navegação institucional</span>
        <h2>Mapa de conteúdo</h2>
        <p>
          Organização visual das áreas informativas existentes na página do departamento.
        </p>
      </div>

      <div class="menu-grid">
        <div class="menu-block">
          <h3>Departamento</h3>
          <ul>
            <li>Histórico</li>
            <li>Chefias</li>
            <li>Original</li>
          </ul>
        </div>

        <div class="menu-block">
          <h3>Equipe</h3>
          <ul>
            <li>Docentes</li>
            <li>Funcionários</li>
          </ul>
        </div>

        <div class="menu-block">
          <h3>Genética Médica</h3>
          <ul>
            <li>Ambulatórios</li>
            <li>Métricas</li>
          </ul>
        </div>

        <div class="menu-block">
          <h3>Ensino</h3>
          <ul>
            <li>Graduação</li>
            <li>Pós-Graduação</li>
          </ul>
        </div>

        <div class="menu-block">
          <h3>Pesquisa e Inovação</h3>
          <ul>
            <li>Serviços</li>
            <li>Laboratórios</li>
          </ul>
        </div>

        <div class="menu-block">
          <h3>Administrativo</h3>
          <ul>
            <li>Formulários</li>
            <li>Pedido de Providência</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

</main>

 <footer class="footer">

  <div class="footer-logo">
    <img src="assets/img/Logo_Depto-Gene-tica.png" alt="Departamento de Genética">
  </div>

  <div class="footer-box">

    <div class="footer-menus">
      <div>
        <h4>Áreas do portal</h4>
        <ul>
          <li>Departamento</li>
          <li>Equipe</li>
          <li>Genética Médica</li>
          <li>Ensino</li>
          <li>Pesquisa e Inovação</li>
          <li>Administrativo</li>
        </ul>
      </div>

      <div>
        <h4>Seções em destaque</h4>
        <ul>
          <li>Histórico</li>
          <li>Chefias</li>
          <li>Graduação</li>
          <li>Pós-Graduação</li>
          <li>Serviços</li>
          <li>Laboratórios</li>
        </ul>
      </div>

      <div class="footer-contato">
        <h4>Contato</h4>
        <p>
          <strong>Departamento de Genética • FMRP/USP</strong><br>
          Av. Bandeirantes, 3900<br>
          Monte Alegre - Ribeirão Preto - SP - Brasil<br>
          CEP: 14049-900<br>
          Telefone: 55 (16) 3315-3293<br>
          e-mail:
          <a href="mailto:secgen@fmrp.usp.br">secgen@fmrp.usp.br</a>
        </p>
      </div>
    </div>

  </div>

  <div class="footer-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14882.224524521393!2d-47.86840796470639!3d-21.170055606189823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bdc103db23cd%3A0xc727b59938bf0833!2sDepartamento%20de%20Gen%C3%A9tica!5e0!3m2!1spt-BR!2sbr!4v1588863834051!5m2!1spt-BR!2sbr"
      frameborder="0"
      allowfullscreen=""
      aria-hidden="false"
      tabindex="0">
    </iframe>
  </div>

</footer>
<script>
function toggleTexto(el){
  const container = el.parentElement;
  container.classList.toggle("expandido");

  if(container.classList.contains("expandido")){
    el.innerText = "Ler menos";
  }else{
    el.innerText = "Ler mais";
  }
}
</script>
<script>
  function toggleRgeMenu() {
    var menu = document.getElementById('rgeMenu');
    menu.classList.toggle('open');
  }
</script>
<script>
const btnTopo = document.getElementById("btnTopo");

// mostrar botão ao rolar
window.onscroll = function() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    btnTopo.style.display = "block";
  } else {
    btnTopo.style.display = "none";
  }
};

// ação de subir com suavidade
btnTopo.onclick = function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
};


/******  PARTE DO ANTERIOR   ***********/


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

