<?php
/**   Departamento */
// index.php (página inicial)
//
//  Caso sseion_start desativado - Ativar
if( !isset($_SESSION) ) {
     session_start();
}
//
//  SESSIONs
$BASE_URL = $_SESSION["BASE_URL"] ;
$BASE_PATH = $_SESSION["BASE_PATH"] ;
//
$ip_cliente = $_SERVER['REMOTE_ADDR'];
//
$ip_permitidos = ['143.107.143.231', '143.107.143.232', '143.107.143.251', '143.107.143.254'];
if( !in_array($ip_cliente, $ip_permitidos) ) {
    http_response_code(503);
    include $BASE_PATH.'includes/em-construcao.html';
    //
    exit;
}
//

//    echo "\$BASE_PATH = $BASE_PATH  --  \$BASE_URL = $BASE_URL  ";
//    exit();

//
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento TESTE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="<?php echo $BASE_URL; ?>js/tradutor.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>css/styleidiomas.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>css/estilo.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>css/estilodepto.css">
</head>
<body>
<!-- Navbar -->
  <!-- Menu/Tradutor -->
    <?php include $BASE_PATH.'includes/menu.php'; ?>

     <div class="page">


    <section class="hero">
      <div class="hero-inner">
        <div class="hero-copy">
          <div class="accent"></div>
          <h1>Departamento de<br>Genética</h1>
          <h2>FMRP – USP</h2>
          <p>Excelência em ensino, pesquisa e inovação em genética.</p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="#">CONHEÇA O DEPARTAMENTO <span class="arrow"></span></a>
            <a class="btn btn-outline" href="#">LINHAS DE PESQUISA <span class="arrow"></span></a>
          </div>
        </div>
      </div>
      <div class="dots" aria-hidden="true"><span class="active"></span><span></span><span></span></div>
    </section>

    <section class="cards-row">
      <article class="feature-card">
        <div class="feature-top">
          <div class="icon">
            <svg viewBox="0 0 24 24"><path d="M4 19h16"/><path d="M6 19V9l6-4 6 4v10"/><path d="M9 19v-5h6v5"/></svg>
          </div>
        </div>
        <div>
          <h3>ENSINO</h3>
          <p>Graduação e Pós-graduação com excelência acadêmica.</p>
        </div>
        <div class="go">→</div>
      </article>
      <article class="feature-card">
        <div class="feature-top">
          <div class="icon">
            <svg viewBox="0 0 24 24"><path d="M9 3h6"/><path d="M10 3v4l-4 8a4 4 0 0 0 3.6 6h4.8a4 4 0 0 0 3.6-6l-4-8V3"/><path d="M8 14h8"/></svg>
          </div>
        </div>
        <div>
          <h3>PESQUISA</h3>
          <p>Produzindo conhecimento e promovendo inovação.</p>
        </div>
        <div class="go">→</div>
      </article>
      <article class="feature-card">
        <div class="feature-top">
          <div class="icon">
            <svg viewBox="0 0 24 24"><path d="M7 3v18"/><path d="M12 3v18"/><path d="M17 3v18"/><path d="M5 7h14"/><path d="M5 12h14"/><path d="M5 17h14"/></svg>
          </div>
        </div>
        <div>
          <h3>LABORATÓRIOS</h3>
          <p>Infraestrutura moderna e tecnologia de ponta.</p>
        </div>
        <div class="go">→</div>
      </article>
      <article class="feature-card">
        <div class="feature-top">
          <div class="icon">
            <svg viewBox="0 0 24 24"><path d="M3 18c1.8-3 4.3-4.5 7-4.5S14.2 15 16 18"/><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M19 18c-1-1.8-2.3-3-4-3.7"/><path d="M3 18h18"/></svg>
          </div>
        </div>
        <div>
          <h3>CORPO DOCENTE</h3>
          <p>Professores e pesquisadores altamente qualificados.</p>
        </div>
        <div class="go">→</div>
      </article>
    </section>

    <section class="about">
      <div>
        <div class="section-label">SOBRE NÓS</div>
        <h2>Excelência que transforma ciência</h2>
        <p>O Departamento de Genética da FMRP/USP tem uma longa trajetória dedicada à formação de profissionais, à produção de conhecimento e à contribuição para o avanço da genética e áreas correlatas.</p>
        <p>Unimos tradição e inovação para gerar impacto na ciência e na sociedade.</p>
        <a class="btn btn-primary" href="#" style="margin-top:6px;">SAIBA MAIS SOBRE O DEPARTAMENTO</a>
      </div>
      <div class="photo" role="img" aria-label="Imagem institucional do departamento">
        <div class="photo-sign">Departamento de<br>Genética</div>
      </div>
    </section>

    <section class="news">
      <div class="section-head">
        <div>
          <div class="section-label">NOTÍCIAS E DESTAQUES</div>
          <h2>Fique por dentro</h2>
        </div>
        <a class="section-link" href="#">VER TODAS AS NOTÍCIAS <span class="arrow"></span></a>
      </div>
      <div class="news-grid">
        <article class="news-card">
          <div class="thumb one"></div>
          <div class="news-body">
            <div class="date">20 MAI 2025</div>
            <h3>Estudo revela novo mecanismo genético em doenças raras</h3>
            <p>Pesquisa do departamento identifica vias celulares envolvidas em doenças genéticas neurológicas.</p>
            <div class="go">→</div>
          </div>
        </article>
        <article class="news-card">
          <div class="thumb two"></div>
          <div class="news-body">
            <div class="date">15 MAI 2025</div>
            <h3>Departamento promove simpósio sobre edição genômica</h3>
            <p>Evento reuniu pesquisadores nacionais e internacionais para discutir os avanços em CRISPR e suas aplicações.</p>
            <div class="go">→</div>
          </div>
        </article>
        <article class="news-card">
          <div class="thumb three"></div>
          <div class="news-body">
            <div class="date">05 MAI 2025</div>
            <h3>Novo artigo publicado em revista internacional</h3>
            <p>Trabalho da equipe de genética molecular é destaque na revista Genetics &amp; Development.</p>
            <div class="go">→</div>
          </div>
        </article>
        <article class="news-card">
          <div class="thumb four"></div>
          <div class="news-body">
            <div class="date">28 ABR 2025</div>
            <h3>Abertas as inscrições para pós-graduação 2026</h3>
            <p>Processo seletivo para Mestrado e Doutorado. Inscrições até 31/08.</p>
            <div class="go">→</div>
          </div>
        </article>
      </div>
    </section>

    <section class="research">
      <div class="section-label">NOSSAS LINHAS DE PESQUISA</div>
      <h2>Conhecimento que gera impacto</h2>
      <div class="tracks">
        <article class="track">
          <div class="circle">
            <svg viewBox="0 0 24 24"><path d="M12 3v18"/><path d="M8 7c2 0 4 1.5 4 3.5S10 14 8 14s-4 1.5-4 3.5S6 21 8 21"/><path d="M16 3c-2 0-4 1.5-4 3.5S14 10 16 10s4 1.5 4 3.5S18 17 16 17"/></svg>
          </div>
          <h3>Genética Molecular</h3>
          <p>Estudo dos mecanismos moleculares dos genes e suas funções.</p>
        </article>
        <article class="track">
          <div class="circle">
            <svg viewBox="0 0 24 24"><path d="M4 19l8-14 8 14"/><path d="M7 13h10"/></svg>
          </div>
          <h3>Genômica e Bioinformática</h3>
          <p>Análise de dados genômicos e desenvolvimento de ferramentas computacionais.</p>
        </article>
        <article class="track">
          <div class="circle">
            <svg viewBox="0 0 24 24"><circle cx="7" cy="8" r="3"/><circle cx="17" cy="8" r="3"/><circle cx="12" cy="16" r="3"/><path d="M9.5 9.8l1.5 3.2M14.5 9.8l-1.5 3.2"/></svg>
          </div>
          <h3>Biologia Celular</h3>
          <p>Investigação dos processos celulares em condições fisiológicas e patológicas.</p>
        </article>
        <article class="track">
          <div class="circle">
            <svg viewBox="0 0 24 24"><path d="M12 3c-2 3-3.5 4.7-3.5 7a3.5 3.5 0 1 0 7 0c0-2.3-1.5-4-3.5-7z"/><path d="M12 10v11"/></svg>
          </div>
          <h3>Genética de Plantas</h3>
          <p>Melhoramento genético e resistência a estresses bióticos e abióticos.</p>
        </article>
        <article class="track">
          <div class="circle">
            <svg viewBox="0 0 24 24"><path d="M4 19c2-3 4.5-4.5 8-4.5s6 1.5 8 4.5"/><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/></svg>
          </div>
          <h3>Genética de Populações e Evolução</h3>
          <p>Estudos sobre diversidade genética, evolução e conservação.</p>
        </article>
      </div>
    </section>



    <!-- Footer -->
<?php
include($BASE_PATH."rgerodape.php");
?>