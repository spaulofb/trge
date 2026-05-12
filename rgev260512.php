[200~
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento de Genética - FMRP/USP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/nrges.css">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
		<a class="navbar-brand" href="index.php">
<div class="d-flex align-items-center">
  <!-- Logo -->
  <img src="assets/img/logo_rge.png" alt="Logo do Departamento de Genética" width="40" height="40" class="me-2">
  
  <!-- Legenda com duas linhas -->
  <div>
    <div class="fw-bold">FMRP • USP</div>
    <div class="text-muted small" style="margin-top: -4px;">Departamento de Genética</div>
  </div>
</div>
            </a>

            <div class="d-flex align-items-center order-lg-last">
                <div class="d-flex align-items-center me-3">
                    <a href="#" class="lang-switch fw-bold" style="color: var(--primary-green);">PT</a>
                    <span class="mx-1 text-muted">|</span>
                    <a href="#" class="lang-switch">EN</a>
                </div>
                <a href="#" class="text-muted me-3"><i class="bi bi-search"></i></a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Departamento</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sobre o Departamento</a></li>
                            <li><a class="dropdown-item" href="historia.php">História</a></li>
                            <li><a class="dropdown-item" href="#">Infraestrutura</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Ensino</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Graduação</a></li>
                            <li><a class="dropdown-item" href="#">Pós-graduação</a></li>
                            <li><a class="dropdown-item" href="#">Cursos de Extensão</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Pesquisa</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Linhas de Pesquisa</a></li>
                            <li><a class="dropdown-item" href="#">Projetos</a></li>
                            <li><a class="dropdown-item" href="#">Publicações</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Laboratórios</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Laboratórios de Pesquisa</a></li>
                            <li><a class="dropdown-item" href="#">Laboratórios de Ensino</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Equipe</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Docentes</a></li>
                            <li><a class="dropdown-item" href="#">Pesquisadores</a></li>
                            <li><a class="dropdown-item" href="#">Funcionários</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="hero-section">
     <video autoplay muted loop playsinline class="hero-video">
        <source src="assets/img/video_1.mp4" type="video/mp4">
    </video>
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
                        <img src="assets/img/rge1.jpg" alt="Departamento de Genética">
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
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
<div class="d-flex align-items-center">
  <!-- Logo -->
  <img src="assets/img/logo_rge.png" alt="Logo do Departamento de Genética" width="60" height="60" class="me-2">
  
  <!-- Legenda com duas linhas -->
  <div>
    <div class="fw-bold">FMRP • USP</div>
    <div class="text-muted small" style="margin-top: -4px;"><h6>Departamento de Genética</h6></div>
  </div>
</div>
                    <p class="footer-desc mt-3">Compromisso com a formação de excelência e a produção de conhecimento científico.</p>
                    <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1">
                    <h6>Links Rápidos</h6>
                    <ul class="footer-links">
                        <li><a href="#">Ensino</a></li>
                        <li><a href="#">Pesquisa</a></li>
                        <li><a href="#">Laboratórios</a></li>
                        <li><a href="#">Equipe</a></li>
                        <li><a href="#">Notícias</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Editais</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6>Informações</h6>
                    <ul class="footer-links">
                        <li><a href="#">Graduação</a></li>
                        <li><a href="#">Pós-graduação</a></li>
                        <li><a href="#">Biblioteca</a></li>
                        <li><a href="#">Comissões</a></li>
                        <li><a href="#">Transparência</a></li>
                        <li><a href="#">Trabalhe Conosco</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6>Contato</h6>
                    <div class="footer-contact-item">
                        <i class="bi bi-geo-alt"></i>
                        <span>Av. Bandeirantes, 3900<br>Ribeirão Preto – SP, 14049-900</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-telephone"></i>
                        <span>(16) 3315-3300</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-envelope"></i>
                        <span>genetica@fmrp.usp.br</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-clock"></i>
                        <span>Segunda a sexta-feira<br>8h às 17h</span>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 Departamento de Genética – FMRP/USP. Todos os direitos reservados.</p>
                <div class="footer-bottom-links">
                    <a href="#">Política de Privacidade</a>
                    <a href="#">Acessibilidade</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


