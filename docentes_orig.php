
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe Docente – Departamento de Genética – FMRP/USP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/rgedocente.css">
    <style>
    </style>
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
                            <li><a class="dropdown-item" href="docentes.php">Docentes</a></li>
                            <li><a class="dropdown-item" href="#">Pesquisadores</a></li>
                            <li><a class="dropdown-item" href="funcionarios.php">Funcionários</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container page-header-content">
            <nav class="breadcrumb-custom">
                <a href="index.html">Início</a>
                <span class="separator">/</span>
                <a href="#">Equipe</a>
                <span class="separator">/</span>
                <span class="active">Docentes</span>
            </nav>
            <h1>Equipe Docente</h1>
            <p>Conheça os professores e pesquisadores que compõem o Departamento de Genética da FMRP/USP, dedicados à excelência em ensino, pesquisa e inovação.</p>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Docentes</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">5</span>
                        <span class="stat-label">Linhas de Pesquisa</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Publicações/Ano</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">1A</span>
                        <span class="stat-label">Conceito Capes</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filters -->
    <section class="filters-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-3 mb-lg-0">
                    <span class="text-muted me-2" style="font-size: 0.85rem;">Filtrar por área:</span>
                    <button class="filter-btn active">Todos</button>
                    <button class="filter-btn">Genética Humana</button>
                    <button class="filter-btn">Genética Molecular</button>
                    <button class="filter-btn">Genômica</button>
                    <button class="filter-btn">Genética Animal</button>
                    <button class="filter-btn">Bioinformática</button>
                </div>
                <div class="col-lg-4">
                    <div class="search-box">
                        <i class="bi bi-search"></i>
                        <input type="text" class="form-control" placeholder="Buscar docente...">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Docentes Grid -->
    <section class="docentes-section">
        <div class="container">
            <div class="section-label mb-4">Nossos Professores</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Corpo Docente</h2>

            <div class="row g-4">
                <!-- Docente 1 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <span class="docente-badge docente-badge-chefe">Chefe</span>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Wilson Araújo da Silva Júnior</h5>
                            <span class="docente-role">Professor Titular</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Genética Molecular Humana<br>
                                Diversidade genética de populações, marcadores genéticos do DNA nuclear e mitocondrial, microRNAs e neoplasias hematológicas.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> wilson.silva@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 2 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <span class="docente-badge">Vice-Chefe</span>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Ester Silveira Ramos</h5>
                            <span class="docente-role">Professora Associada</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Genética Animal<br>
                                Melhoramento genético aplicado a bovinos de corte, reprodução assistida, precocidade sexual e crescimento, epigenética.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> ester.ramos@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 3 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Francis de Assis Nóbrega</h5>
                            <span class="docente-role">Professor Associado</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Genética e Bioquímica<br>
                                Biologia molecular de fungos, transcriptoma, patogenicidade de Paracoccidioides brasiliensis e resistência a antifúngicos.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> francis.nobrega@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 4 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Tie Koide</h5>
                            <span class="docente-role">Professor Doutor</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Bioinformática / Genética de Microrganismos<br>
                                Biologia sistêmica de arqueas, RNAs não codificantes, redes regulatórias gênicas, genômica de Xylella fastidiosa.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> tie.koide@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 5 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Iran Malavazi</h5>
                            <span class="docente-role">Professor Doutor</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Genética Molecular / Micologia<br>
                                Genômica funcional de fungos patogênicos, Aspergillus fumigatus, resistência a azóis, biosíntese de ergosterol.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> iran.malavazi@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 6 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Victor Evangelista de Faria Ferraz</h5>
                            <span class="docente-role">Professor Doutor</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Genética<br>
                                Atuação no Departamento de Genética da FMRP/USP com foco em pesquisa e ensino na área de genética.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> victor.ferraz@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 7 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Ricardo Zorzetto Nicoliello Vêncio</h5>
                            <span class="docente-role">Professor Doutor</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Bioinformática / Genômica<br>
                                Análise de dados ômicos, transcriptômica, aprendizado de máquina aplicado à biologia, sistemas biológicos computacionais.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> rvencio@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 8 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Klaus Hartmann Hartfelder</h5>
                            <span class="docente-role">Professor Titular</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Genética Animal / Biologia Molecular<br>
                                Biologia molecular de abelhas, desenvolvimento ovariano, expressão gênica diferencial, Apis mellifera.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> klaus.hartfelder@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 9 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Raysildo Barbosa Lôbo</h5>
                            <span class="docente-role">Professor Titular</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Genética Animal / Melhoramento<br>
                                Melhoramento genético animal, bovinos de corte, precocidade sexual, crescimento, genética quantitativa.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> rlobo@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 10 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Marco Antonio Zago</h5>
                            <span class="docente-role">Professor Titular</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Genética Humana e Médica<br>
                                Hematologia molecular, terapia gênica, doenças genéticas hematológicas, engenharia celular.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> zago@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 11 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Regina Célia Mingroni-Neto</h5>
                            <span class="docente-role">Professora Associada</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Genética Humana e Médica<br>
                                Genética médica, síndromes genéticas, diagnóstico molecular, conselho genético, genética de populações.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> rmingroni@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Docente 12 -->
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">
                        <div class="docente-photo-wrap">
                            <div class="docente-photo-placeholder">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="docente-body">
                            <h5 class="docente-name">Sergio Danilo Junho Pena</h5>
                            <span class="docente-role">Professor Titular</span>
                            <p class="docente-area">
                                <strong>Área:</strong> Genética Humana / Farmacogenética<br>
                                Farmacogenética, genética forense, DNA de populações, genômica personalizada, medicina de precisão.
                            </p>
                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i> sdjpena@fmrp.usp.br<br>
                                <i class="bi bi-telephone"></i> (16) 3315-3300
                            </div>
                            <div class="docente-links">
                                <a href="#" class="docente-link docente-link-primary">Currículo Lattes</a>
                                <a href="#" class="docente-link docente-link-outline">Site</a>
                            </div>
                        </div>
                    </div>
                </div>
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