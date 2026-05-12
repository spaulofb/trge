<?php
/**  DEPARTAMENTO DE GENETICA - FMRP/USP  **/    
//  Caso sseion_start desativado - Ativar
if( !isset($_SESSION) ) {
     session_start();
}
//
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="google" content="notranslate">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Departamento de Genética - FMRP/USP</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="<?php echo BASE_URL; ?>js/tradutor.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/styleidiomas.css">
 <style>
    :root{
      --green:#1f7a45;
      --green-dark:#0f5530;
      --green-soft:#eaf4ee;
      --text:#1d2430;
      --muted:#64707f;
      --bg:#f5f7f8;
      --card:#ffffff;
      --shadow:0 10px 28px rgba(16,24,40,.10);
      --radius:18px;
    }
    *{box-sizing:border-box}
    html,body{margin:0;padding:0;background:var(--bg);color:var(--text);font-family:Inter,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Arial,sans-serif}
    a{text-decoration:none;color:inherit}
    .page{max-width:1365px;margin:0 auto;background:#fff;overflow:hidden}
    .topbar{height:88px;display:flex;align-items:center;justify-content:center;background:#fff;border-bottom:1px solid #e6ece8;padding:0 22px}
    .topbar-inner{width:100%;max-width:1200px;display:flex;align-items:center;justify-content:space-between}
    .brand{display:flex;align-items:center;gap:14px}
    .brand-mark{width:34px;height:58px;position:relative}
    .brand-mark:before,
    .brand-mark:after{
      content:"";position:absolute;inset:0;border-radius:18px 18px 18px 18px;
      background:linear-gradient(180deg,var(--green) 0%,#2ea15d 100%);
      clip-path:polygon(53% 0%,72% 7%,61% 21%,47% 37%,38% 52%,29% 66%,18% 78%,34% 100%,11% 100%,0% 77%,10% 60%,22% 43%,35% 28%,45% 15%);
      transform:skewX(-7deg);
    }
    .brand-text{line-height:1}
    .brand-text .small{font-size:12px;color:#6a7885;letter-spacing:.02em}
    .brand-text .big{font-size:24px;font-weight:800;color:#17663a}
    .utility{display:flex;align-items:center;gap:18px;color:#596674;font-size:12px}
    .search{width:18px;height:18px;border:2px solid currentColor;border-radius:50%;position:relative;display:inline-block}
    .search:after{content:"";position:absolute;width:8px;height:2px;background:currentColor;right:-6px;bottom:-2px;transform:rotate(45deg);border-radius:2px}
    .navbar{height:54px;display:flex;align-items:center;justify-content:center;background:#fff;border-bottom:1px solid #eef2ef}
    .nav-inner{width:100%;max-width:1200px;display:flex;align-items:center;justify-content:center;gap:34px;font-size:14px;font-weight:600;color:#475463}
    .nav-item{display:flex;align-items:center;gap:6px}
    .caret{width:7px;height:7px;border-right:2px solid currentColor;border-bottom:2px solid currentColor;transform:rotate(45deg);margin-top:-3px}
    .hero{
      position:relative;min-height:520px;display:flex;align-items:stretch;
      background:
        linear-gradient(90deg, rgba(10,14,18,.82) 0%, rgba(16,22,29,.70) 36%, rgba(31,39,49,.30) 62%, rgba(31,39,49,.18) 100%),
        radial-gradient(circle at 76% 43%, rgba(255,255,255,.42) 0 8%, transparent 9%),
        linear-gradient(135deg,#0d1216 0%,#2b3239 36%,#dfe6e8 100%);
      overflow:hidden;
    }
    .hero::before{
      content:"";position:absolute;inset:auto -10% -5% 52%;
      width:60%;height:78%;
      background:
        linear-gradient(180deg,rgba(255,255,255,.15),rgba(255,255,255,.05)),
        radial-gradient(circle at 35% 20%, rgba(255,255,255,.26), transparent 24%),
        radial-gradient(circle at 60% 36%, rgba(255,255,255,.22), transparent 18%),
        linear-gradient(180deg,#12161b 0,#1d232a 35%,#2f3841 100%);
      transform:skewX(-10deg);
      filter:blur(1px);
      border-radius:28px;
      opacity:.55;
    }
    .hero::after{
      content:"";position:absolute;right:-4%;top:4%;width:44%;height:92%;
      background:
        radial-gradient(circle at 28% 24%, rgba(238,244,247,.95) 0 6%, transparent 7%),
        radial-gradient(circle at 31% 27%, rgba(255,255,255,.92) 0 12%, transparent 13%),
        radial-gradient(circle at 50% 20%, rgba(228,236,240,.9) 0 10%, transparent 11%),
        linear-gradient(180deg, rgba(223,230,235,.95) 0%, rgba(199,209,215,.87) 48%, rgba(236,239,241,.72) 100%);
      opacity:.8;
      clip-path:polygon(66% 0,100% 0,100% 100%,52% 100%,44% 84%,42% 67%,46% 44%,52% 28%,58% 16%);
      filter:blur(.2px);
    }
    .hero-inner{position:relative;z-index:1;max-width:1200px;margin:0 auto;width:100%;padding:72px 22px 64px;display:flex;align-items:flex-end}
    .hero-copy{max-width:560px;color:#fff}
    .accent{width:56px;height:4px;background:#2da45d;border-radius:999px;margin-bottom:20px}
    .hero h1{margin:0;font-size:56px;line-height:.98;letter-spacing:-.03em}
    .hero h2{margin:12px 0 18px;font-size:26px;line-height:1.1;font-weight:700}
    .hero p{margin:0 0 28px;max-width:420px;font-size:18px;line-height:1.45;color:rgba(255,255,255,.86)}
    .hero-actions{display:flex;gap:14px;align-items:center;flex-wrap:wrap}
    .btn{display:inline-flex;align-items:center;gap:10px;padding:14px 22px;border-radius:999px;font-weight:700;font-size:14px;transition:.2s ease}
    .btn-primary{background:var(--green);color:#fff;box-shadow:0 12px 24px rgba(31,122,69,.22)}
    .btn-primary:hover{background:#176339}
    .btn-outline{border:1.5px solid rgba(255,255,255,.4);color:#fff;background:rgba(255,255,255,.04)}
    .btn-outline:hover{background:rgba(255,255,255,.1)}
    .arrow{display:inline-block;border:solid currentColor;border-width:0 2px 2px 0;padding:3px;transform:rotate(-45deg)}
    .dots{position:absolute;left:50%;bottom:18px;transform:translateX(-50%);display:flex;gap:10px;z-index:2}
    .dots span{width:8px;height:8px;border-radius:50%;background:rgba(255,255,255,.48);display:block}
    .dots span.active{background:#2da45d;box-shadow:0 0 0 3px rgba(45,164,93,.18)}
    .cards-row{max-width:1200px;margin:-42px auto 0;padding:0 22px;display:grid;grid-template-columns:repeat(4,1fr);gap:18px;position:relative;z-index:3}
    .feature-card{
      background:#fff;border-radius:16px;padding:26px 20px 24px;box-shadow:var(--shadow);
      min-height:146px;border:1px solid #edf1ef;display:flex;flex-direction:column;justify-content:space-between
    }
    .feature-top{display:flex;align-items:center;gap:14px}
    .icon{
      width:42px;height:42px;border-radius:50%;border:2px solid #dfe8e1;display:grid;place-items:center;color:var(--green)
    }
    .icon svg{width:24px;height:24px;stroke:currentColor;fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
    .feature-card h3{margin:0 0 8px;font-size:15px;letter-spacing:.02em}
    .feature-card p{margin:0;color:var(--muted);font-size:13px;line-height:1.35}
    .feature-card .go{margin-left:auto;color:var(--green);font-size:24px;font-weight:300}
    .about{max-width:1200px;margin:64px auto 0;padding:0 22px;display:grid;grid-template-columns:1.03fr .97fr;gap:30px;align-items:center}
    .section-label{font-size:12px;font-weight:800;letter-spacing:.08em;color:var(--green);text-transform:uppercase;margin-bottom:12px}
    .about h2{margin:0 0 16px;font-size:34px;line-height:1.05;color:#243140}
    .about p{margin:0 0 22px;color:#5b6877;line-height:1.65;font-size:15px;max-width:560px}
    .photo{
      height:330px;border-radius:18px;overflow:hidden;box-shadow:var(--shadow);border:1px solid #edf2ef;
      position:relative;background:
        linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.08)),
        radial-gradient(circle at 34% 18%, rgba(43,87,52,.40), transparent 18%),
        linear-gradient(135deg,#d8e1d2 0%,#bfcfb5 36%,#f8f8f5 36%,#e9ece4 68%,#6f8a68 68%,#50704d 100%);
    }
    .photo:before{
      content:"";position:absolute;left:0;bottom:0;width:100%;height:28%;
      background:linear-gradient(180deg,rgba(255,255,255,0),rgba(255,255,255,.22));
    }
    .photo-sign{
      position:absolute;right:24px;bottom:30px;background:#fff;border-radius:8px;padding:10px 14px;
      box-shadow:0 6px 14px rgba(0,0,0,.12);font-size:14px;font-weight:700;color:#2d3744
    }
    .news{max-width:1200px;margin:66px auto 0;padding:0 22px}
    .section-head{display:flex;align-items:flex-end;justify-content:space-between;gap:20px;margin-bottom:18px}
    .section-head h2{margin:0;font-size:32px;line-height:1.05;color:#243140}
    .section-link{color:var(--green);font-weight:700;font-size:13px;display:flex;align-items:center;gap:8px}
    .news-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
    .news-card{
      background:#fff;border:1px solid #edf2ef;border-radius:14px;overflow:hidden;box-shadow:0 8px 18px rgba(16,24,40,.06);
      display:flex;flex-direction:column;min-height:240px
    }
    .thumb{height:120px;position:relative}
    .thumb.one{background:radial-gradient(circle at 30% 30%, #7d4bd9 0 12%, transparent 13%),radial-gradient(circle at 56% 48%, #2fd0ff 0 10%, transparent 11%),linear-gradient(135deg,#061421,#122b3b 55%,#03111d)}
    .thumb.two{background:linear-gradient(135deg,#dcdad2,#c8c4b8 50%,#9b8f79)}
    .thumb.three{background:linear-gradient(135deg,#d8e8f0,#9fc7dc 50%,#e2f0f7)}
    .thumb.four{background:radial-gradient(circle at 50% 50%, #9bf0c8 0 6%, transparent 7%), linear-gradient(135deg,#041a15,#143f30 60%,#06261d)}
    .thumb:after{
      content:"";position:absolute;inset:auto 12px 12px auto;width:34px;height:34px;border-radius:50%;
      background:rgba(255,255,255,.12);backdrop-filter:blur(4px)
    }
    .news-body{padding:14px 16px 16px;display:flex;flex-direction:column;gap:10px;flex:1}
    .date{font-size:11px;color:#8a95a3;font-weight:700;letter-spacing:.03em}
    .news-body h3{margin:0;font-size:16px;line-height:1.25;color:#233041}
    .news-body p{margin:0;color:#667381;font-size:13px;line-height:1.45}
    .news-body .go{margin-top:auto;color:var(--green);align-self:flex-end;font-size:24px}
    .research{max-width:1200px;margin:56px auto 0;padding:0 22px 54px}
    .research h2{margin:0 0 10px;font-size:32px;color:#243140}
    .tracks{
      margin-top:18px;display:grid;grid-template-columns:repeat(5,1fr);gap:16px;align-items:stretch
    }
    .track{
      background:#fff;border:1px solid #edf2ef;border-radius:16px;padding:18px 14px 16px;text-align:center;
      box-shadow:0 8px 18px rgba(16,24,40,.05)
    }
    .track .circle{
      width:52px;height:52px;border-radius:50%;border:2px solid #dfe8e1;margin:0 auto 12px;display:grid;place-items:center;color:var(--green)
    }
    .track svg{width:28px;height:28px;stroke:currentColor;fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
    .track h3{font-size:14px;margin:0 0 8px;color:#223040}
    .track p{margin:0;font-size:12px;line-height:1.42;color:#697685}
    .footer{
      background:linear-gradient(180deg,#0c4f2e,#07351f);color:#fff;padding:36px 22px 18px
    }
    .footer-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1.2fr .9fr .9fr 1fr;gap:28px}
    .footer .brand-text .small,.footer .brand-text .big{color:#fff}
    .footer p{color:rgba(255,255,255,.84);font-size:14px;line-height:1.55}
    .social{display:flex;gap:10px;margin-top:14px}
    .social span{width:30px;height:30px;border-radius:50%;border:1px solid rgba(255,255,255,.35);display:grid;place-items:center;font-size:12px}
    .footer h4{margin:0 0 14px;font-size:14px;letter-spacing:.06em;text-transform:uppercase;color:rgba(255,255,255,.92)}
    .footer a,.footer li{display:block;color:rgba(255,255,255,.82);font-size:14px;line-height:1.9}
    .footer ul{list-style:none;margin:0;padding:0}
    .contact-item{display:flex;gap:10px;align-items:flex-start;margin-bottom:10px;color:rgba(255,255,255,.86);font-size:14px;line-height:1.5}
    .contact-item .bullet{width:16px}
    .footer-bottom{
      max-width:1200px;margin:16px auto 0;padding-top:14px;border-top:1px solid rgba(255,255,255,.12);
      display:flex;justify-content:space-between;gap:14px;color:rgba(255,255,255,.7);font-size:12px;flex-wrap:wrap
    }

    @media (max-width: 1100px){
      .cards-row,.news-grid,.tracks,.footer-inner{grid-template-columns:repeat(2,1fr)}
      .about{grid-template-columns:1fr}
      .hero h1{font-size:46px}
    }
    @media (max-width: 720px){
      .topbar{height:auto;padding:16px 14px}
      .topbar-inner{gap:12px;flex-direction:column;align-items:flex-start}
      .navbar{height:auto;padding:12px 14px}
      .nav-inner{flex-wrap:wrap;gap:16px;justify-content:flex-start}
      .hero{min-height:auto}
      .hero-inner{padding:42px 14px 56px}
      .hero h1{font-size:38px}
      .hero h2{font-size:20px}
      .hero p{font-size:16px}
      .cards-row,.about,.news,.research{padding:0 14px}
      .cards-row,.news-grid,.tracks,.footer-inner{grid-template-columns:1fr}
      .section-head{align-items:flex-start;flex-direction:column}
      .photo{height:260px}
    }
  </style>
</head>
<body>
  <div class="page">
    <header class="topbar">
      <div class="topbar-inner">
        <div class="brand">
          <div class="brand-mark" aria-hidden="true"></div>
          <div class="brand-text">
            <div class="small">FMRP - USP</div>
            <div class="big">Departamento de Genética</div>
          </div>
        </div>
        <div class="utility">
          <span>PT | EN</span>
          <span class="search" aria-hidden="true"></span>
        </div>
      </div>
    </header>

    <nav class="navbar">
      <div class="nav-inner">
        <div class="nav-item">DEPARTAMENTO <span class="caret"></span></div>
        <div class="nav-item">ENSINO <span class="caret"></span></div>
        <div class="nav-item">PESQUISA <span class="caret"></span></div>
        <div class="nav-item">LABORATÓRIOS <span class="caret"></span></div>
        <div class="nav-item">EQUIPE <span class="caret"></span></div>
        <div class="nav-item">CONTATO</div>
      </div>
    </nav>



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

    <footer class="footer">
      <div class="footer-inner">
        <div>
          <div class="brand" style="margin-bottom:10px">
            <div class="brand-mark" aria-hidden="true"></div>
            <div class="brand-text">
              <div class="small">FMRP - USP</div>
              <div class="big" style="font-size:20px">Departamento de Genética</div>
            </div>
          </div>
          <p>Compromisso com a formação de excelência e a produção de conhecimento científico.</p>
          <div class="social">
            <span>ig</span><span>f</span><span>▶</span><span>in</span>
          </div>
        </div>
        <div>
          <h4>LINKS RÁPIDOS</h4>
          <a href="#">Ensino</a>
          <a href="#">Pesquisa</a>
          <a href="#">Laboratórios</a>
          <a href="#">Equipe</a>
          <a href="#">Notícias</a>
          <a href="#">Eventos</a>
          <a href="#">Editais</a>
        </div>
        <div>
          <h4>INFORMAÇÕES</h4>
          <a href="#">Graduação</a>
          <a href="#">Pós-graduação</a>
          <a href="#">Biblioteca</a>
          <a href="#">Comissões</a>
          <a href="#">Transparência</a>
          <a href="#">Trabalhe Conosco</a>
        </div>
        <div>
          <h4>CONTATO</h4>
          <div class="contact-item"><span class="bullet">📍</span><span>Av. Bandeirantes, 3900<br>Ribeirão Preto – SP, 14049-900</span></div>
          <div class="contact-item"><span class="bullet">☎</span><span>(16) 3315-3300</span></div>
          <div class="contact-item"><span class="bullet">✉</span><span>genetica@fmrp.usp.br</span></div>
          <div class="contact-item"><span class="bullet">🕒</span><span>Segunda a sexta-feira<br>8h às 17h</span></div>
        </div>
      </div>
      <div class="footer-bottom">
        <div>© 2025 Departamento de Genética – FMRP/USP. Todos os direitos reservados.</div>
        <div>Política de Privacidade · Acessibilidade</div>
      </div>
    </footer>
  </div>
</body>
</html>
