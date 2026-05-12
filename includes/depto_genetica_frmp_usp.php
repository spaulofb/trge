<?php
/**   PAGINA PRINCIPAL */
// index.php (página inicial)
//
//  Caso sseion_start desativado - Ativar
if( !isset($_SESSION) ) {
     session_start();
}
//
//  path e arquivo local
$dirarq=$_SERVER['SCRIPT_FILENAME'];
//
//  Arquivo local
$arqlocal =  basename(__FILE__);
$dirprincipal = str_replace($arqlocal,'',$dirarq);
//
// Para site em subpasta (ex: exemplo.com/meusite/)
//  define('BASE_PATH', '/var/www/html/trge/');
define('BASE_PATH', "$dirprincipal");
//
//  Protocolo
$_SESSION["protocolo"] = $protocolo =  (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=="on") ? "https" : "http");
//
// Para subpasta, defina manualmente:
define('BASE_URL', $protocolo."://". $_SERVER['HTTP_HOST'] . '/trge/');
//
//   echo "BASE_PATH = ".BASE_PATH."  -->>  BASE_URL = ".BASE_URL;
//    exit();
//
global $BASE_URL, $BASE_PATH;
$_SESSION["BASE_URL"] = $BASE_URL=BASE_URL;
$_SESSION["BASE_PATH"] = $BASE_PATH=BASE_PATH;
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
    <style>
        :root {
            --primary-green: #1a5c3a;
            --dark-green: #0f3d26;
            --light-green: #2d7a52;
            --accent-green: #4ade80;
            --bg-light: #f8f9fa;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            color: #333;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar-brand img {
            height: 55px;
        }

        .navbar {
            padding: 0.5rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar-nav .nav-link {
            color: #444;
            font-weight: 500;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding: 1rem 1rem !important;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus {
            color: var(--primary-green);
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .dropdown-item {
            font-size: 0.9rem;
            padding: 0.6rem 1.2rem;
        }

        .dropdown-item:hover {
            background-color: rgba(26, 92, 58, 0.08);
            color: var(--primary-green);
        }

        .lang-switch {
            font-size: 0.8rem;
            color: #666;
            text-decoration: none;
        }

        .lang-switch:hover {
            color: var(--primary-green);
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 600px;
            background: linear-gradient(90deg, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.2) 100%),
                        url('https://images.unsplash.com/photo-1579154204601-01588f351e67?w=1920&h=600&fit=crop') center/cover no-repeat;
            display: flex;
            align-items: center;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 0.5rem;
        }

        .hero-content .subtitle {
            font-size: 1.5rem;
            font-weight: 300;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.1rem;
            font-weight: 300;
            max-width: 400px;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn-green {
            background-color: var(--primary-green);
            color: white;
            border: 2px solid var(--primary-green);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .btn-green:hover {
            background-color: var(--dark-green);
            border-color: var(--dark-green);
            color: white;
            transform: translateY(-2px);
        }

        .btn-outline-light-custom {
            background-color: rgba(255,255,255,0.15);
            color: white;
            border: 1px solid rgba(255,255,255,0.4);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .btn-outline-light-custom:hover {
            background-color: rgba(255,255,255,0.25);
            color: white;
            transform: translateY(-2px);
        }

        .hero-indicators {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .hero-indicators span {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255,255,255,0.4);
            cursor: pointer;
            transition: all 0.3s;
        }

        .hero-indicators span.active {
            background: var(--accent-green);
            width: 25px;
            border-radius: 5px;
        }

        /* Feature Cards */
        .features-section {
            margin-top: -60px;
            position: relative;
            z-index: 10;
            padding-bottom: 3rem;
        }

        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 2rem 1.5rem;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.04);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 35px rgba(0,0,0,0.12);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 1rem;
        }

        .feature-icon svg {
            width: 100%;
            height: 100%;
        }

        .feature-card h5 {
            color: var(--primary-green);
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .feature-card p {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .feature-link {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: gap 0.3s;
        }

        .feature-link:hover {
            gap: 10px;
            color: var(--dark-green);
        }

        /* Section Labels */
        .section-label {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--primary-green);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-label::before {
            content: '';
            display: inline-block;
            width: 25px;
            height: 2px;
            background: var(--primary-green);
        }

        /* About Section */
        .about-section {
            padding: 4rem 0;
            background: var(--bg-light);
        }

        .about-section h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .about-section p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .about-img {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .about-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* News Section */
        .news-section {
            padding: 4rem 0;
        }

        .news-section .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .news-section h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #222;
        }

        .see-all-link {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .see-all-link:hover {
            color: var(--dark-green);
        }

        .news-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.06);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.04);
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .news-img {
            height: 160px;
            overflow: hidden;
        }

        .news-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .news-card:hover .news-img img {
            transform: scale(1.05);
        }

        .news-body {
            padding: 1.2rem;
        }

        .news-date {
            font-size: 0.75rem;
            color: #888;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .news-title {
            font-size: 0.95rem;
            font-weight: 600;
            color: #222;
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }

        .news-excerpt {
            font-size: 0.8rem;
            color: #666;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .news-link {
            color: var(--primary-green);
            text-decoration: none;
            font-size: 1.1rem;
        }

        .news-link:hover {
            color: var(--dark-green);
        }

        /* Research Section */
        .research-section {
            padding: 4rem 0;
            background: var(--bg-light);
        }

        .research-section h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 2.5rem;
        }

        .research-carousel {
            position: relative;
        }

        .research-item {
            text-align: center;
            padding: 1.5rem;
        }

        .research-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 1rem;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        }

        .research-icon svg {
            width: 35px;
            height: 35px;
        }

        .research-item h5 {
            font-size: 0.95rem;
            font-weight: 600;
            color: #222;
            margin-bottom: 0.5rem;
        }

        .research-item p {
            font-size: 0.8rem;
            color: #666;
            line-height: 1.5;
            max-width: 200px;
            margin: 0 auto;
        }

        .carousel-control-prev-custom,
        .carousel-control-next-custom {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            z-index: 10;
        }

        .carousel-control-prev-custom:hover,
        .carousel-control-next-custom:hover {
            background: var(--primary-green);
            border-color: var(--primary-green);
            color: white;
        }

        .carousel-control-prev-custom {
            left: -20px;
        }

        .carousel-control-next-custom {
            right: -20px;
        }

        /* Footer */
        .footer {
            background: var(--dark-green);
            color: rgba(255,255,255,0.8);
            padding: 4rem 0 1.5rem;
        }

        .footer-logo {
            height: 70px;
            margin-bottom: 1rem;
            filter: brightness(0) invert(1);
        }

        .footer-desc {
            font-size: 0.85rem;
            line-height: 1.6;
            max-width: 250px;
            color: rgba(255,255,255,0.7);
        }

        .footer h6 {
            color: white;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1.5rem;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 0.6rem;
        }

        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 0.8rem;
            font-size: 0.85rem;
            color: rgba(255,255,255,0.7);
        }

        .footer-contact-item i {
            margin-top: 3px;
            font-size: 0.9rem;
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 1.5rem;
        }

        .social-links a {
            width: 32px;
            height: 32px;
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 0.85rem;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: white;
            color: var(--dark-green);
            border-color: white;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 3rem;
            padding-top: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-bottom p {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.5);
            margin: 0;
        }

        .footer-bottom-links a {
            color: rgba(255,255,255,0.5);
            text-decoration: none;
            font-size: 0.8rem;
            margin-left: 1rem;
        }

        .footer-bottom-links a:hover {
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            .hero-content .subtitle {
                font-size: 1.2rem;
            }
            .features-section {
                margin-top: -30px;
            }
            .carousel-control-prev-custom {
                left: 0;
            }
            .carousel-control-next-custom {
                right: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
     <!-- Menu/Tradutor -->
     <?php include BASE_PATH.'includes/menu.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-content">
                    <div style="width: 40px; height: 3px; background: var(--accent-green); margin-bottom: 1.5rem;"></div>
                    <h1>Departamento de<br>Genética</h1>
                    <p class="subtitle">FMRP – USP</p>
                    <p>Excelência em ensino, pesquisa<br>e inovação em genética.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#" class="btn btn-green">CONHEÇA O DEPARTAMENTO <i class="bi bi-arrow-right ms-1"></i></a>
                        <a href="#" class="btn btn-outline-light-custom">LINHAS DE PESQUISA <i class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-indicators">
            <span class="active"></span>
            <span></span>
            <span></span>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 15 L25 5 L40 15 L40 35 L25 45 L10 35 Z" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M25 5 L25 25 M25 25 L10 35 M25 25 L40 35" stroke="#1a5c3a" stroke-width="1.5"/>
                                <circle cx="25" cy="25" r="3" fill="#1a5c3a"/>
                            </svg>
                        </div>
                        <h5>ENSINO</h5>
                        <p>Graduação e Pós-graduação com excelência acadêmica.</p>
                        <a href="#" class="feature-link">→</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="20" width="30" height="25" rx="3" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M15 20 L15 15 Q15 5 25 5 Q35 5 35 15 L35 20" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <circle cx="25" cy="32" r="5" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                <line x1="25" y1="27" x2="25" y2="24" stroke="#1a5c3a" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <h5>PESQUISA</h5>
                        <p>Produzindo conhecimento e promovendo inovação.</p>
                        <a href="#" class="feature-link">→</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="12" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <rect x="22" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <rect x="32" y="5" width="6" height="30" rx="2" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <line x1="15" y1="38" x2="15" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="25" y1="38" x2="25" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="35" y1="38" x2="35" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                                <line x1="10" y1="45" x2="40" y2="45" stroke="#1a5c3a" stroke-width="2"/>
                            </svg>
                        </div>
                        <h5>LABORATÓRIOS</h5>
                        <p>Infraestrutura moderna e tecnologia de ponta.</p>
                        <a href="#" class="feature-link">→</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18" cy="18" r="8" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <circle cx="32" cy="18" r="8" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                <path d="M12 30 Q25 25 38 30 Q38 42 25 45 Q12 42 12 30" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                            </svg>
                        </div>
                        <h5>CORPO DOCENTE</h5>
                        <p>Professores e pesquisadores altamente qualificados.</p>
                        <a href="#" class="feature-link">→</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">Sobre Nós</div>
                    <h2>Excelência que<br>transforma ciência</h2>
                    <p>O Departamento de Genética da FMRP/USP tem uma longa trajetória dedicada à formação de profissionais, à produção de conhecimento e à contribuição para o avanço da genética e áreas correlatas.</p>
                    <p>Unimos tradição e inovação para gerar impacto na ciência e na sociedade.</p>
                    <a href="#" class="btn btn-green mt-3">SAIBA MAIS SOBRE O DEPARTAMENTO</a>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=800&h=500&fit=crop" alt="Departamento de Genética">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="container">
            <div class="section-label">Notícias e Destaques</div>
            <div class="section-header">
                <h2>Fique por dentro</h2>
                <a href="#" class="see-all-link">VER TODAS AS NOTÍCIAS <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="news-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 1">
                        </div>
                        <div class="news-body">
                            <div class="news-date">20 MAI 2025</div>
                            <h5 class="news-title">Estudo revela novo mecanismo genético em doenças raras</h5>
                            <p class="news-excerpt">Pesquisa do departamento identifica vias celulares envolvidas em doenças genéticas neurológicas.</p>
                            <a href="#" class="news-link"><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="news-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?w=400&h=250&fit=crop" alt="Notícia 2">
                        </div>
                        <div class="news-body">
                            <div class="news-date">15 MAI 2025</div>
                            <h5 class="news-title">Departamento promove simpósio sobre edição genômica</h5>
                            <p class="news-excerpt">Evento reuniu pesquisadores nacionais e internacionais para discutir os avanços em CRISPR e suas aplicações.</p>
                            <a href="#" class="news-link"><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="news-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=400&h=250&fit=crop" alt="Notícia 3">
                        </div>
                        <div class="news-body">
                            <div class="news-date">05 MAI 2025</div>
                            <h5 class="news-title">Novo artigo publicado em revista internacional</h5>
                            <p class="news-excerpt">Trabalho da equipe de genética molecular é destaque na revista Genetics & Development.</p>
                            <a href="#" class="news-link"><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="news-card">
                        <div class="news-img">
                            <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?w=400&h=250&fit=crop" alt="Notícia 4">
                        </div>
                        <div class="news-body">
                            <div class="news-date">28 ABR 2025</div>
                            <h5 class="news-title">Abertas as inscrições para pós-graduação 2026</h5>
                            <p class="news-excerpt">Processo seletivo para Mestrado e Doutorado. Inscrições até 30/06.</p>
                            <a href="#" class="news-link"><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Research Section -->
    <section class="research-section">
        <div class="container">
            <div class="section-label">Nossas Linhas de Pesquisa</div>
            <h2>Conhecimento que gera impacto</h2>

            <div class="research-carousel position-relative">
                <div id="researchCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <path d="M17.5 5 C10 5, 5 12, 5 18 C5 26, 12 30, 17.5 30 C23 30, 30 26, 30 18 C30 12, 25 5, 17.5 5" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <path d="M12 15 Q17.5 10 23 15 Q23 22 17.5 25 Q12 22 12 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                                <circle cx="17.5" cy="18" r="2" fill="#1a5c3a"/>
                                            </svg>
                                        </div>
                                        <h5>Genética Molecular</h5>
                                        <p>Estudo dos mecanismos moleculares dos genes e suas funções.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <path d="M8 28 Q8 5 17.5 5 Q27 5 27 28" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <line x1="17.5" y1="5" x2="17.5" y2="28" stroke="#1a5c3a" stroke-width="1.5"/>
                                                <line x1="12" y1="15" x2="23" y2="15" stroke="#1a5c3a" stroke-width="1.5"/>
                                                <line x1="10" y1="22" x2="25" y2="22" stroke="#1a5c3a" stroke-width="1.5"/>
                                            </svg>
                                        </div>
                                        <h5>Genômica e Bioinformática</h5>
                                        <p>Análise de dados genômicos e desenvolvimento de ferramentas computacionais.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <circle cx="12" cy="12" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <circle cx="23" cy="12" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <circle cx="17.5" cy="24" r="6" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                            </svg>
                                        </div>
                                        <h5>Biologia Celular</h5>
                                        <p>Investigação dos processos celulares em condições fisiológicas e patológicas.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <path d="M17.5 30 L17.5 20 M17.5 20 Q12 15 12 8 Q12 3 17.5 3 Q23 3 23 8 Q23 15 17.5 20" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <path d="M10 25 Q8 20 10 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                                <path d="M25 25 Q27 20 25 15" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                                <ellipse cx="17.5" cy="30" rx="8" ry="3" stroke="#1a5c3a" stroke-width="1.5" fill="none"/>
                                            </svg>
                                        </div>
                                        <h5>Genética de Plantas</h5>
                                        <p>Melhoramento genético e resistência a estresses bióticos e abióticos.</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <div class="research-item">
                                        <div class="research-icon">
                                            <svg viewBox="0 0 35 35" fill="none">
                                                <circle cx="10" cy="12" r="5" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <circle cx="25" cy="12" r="5" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                                <path d="M7 20 Q17.5 15 28 20 Q28 30 17.5 32 Q7 30 7 20" stroke="#1a5c3a" stroke-width="2" fill="none"/>
                                            </svg>
                                        </div>
                                        <h5>Genética de Populações e Evolução</h5>
                                        <p>Estudos sobre diversidade genética, evolução e conservação.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev-custom" type="button" data-bs-target="#researchCarousel" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="carousel-control-next-custom" type="button" data-bs-target="#researchCarousel" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
     <?php include $BASE_PATH.'includes/footer.php'; ?>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>