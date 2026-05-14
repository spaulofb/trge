
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe de Funcionários – Departamento de Genética – FMRP/USP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/rgefunc.css">
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
                <span class="active">Funcionários</span>
            </nav>
            <h1>Equipe de Funcionários</h1>
            <p>Conheça os técnicos, secretários e colaboradores administrativos que mantêm o funcionamento do Departamento de Genética da FMRP/USP.</p>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">18</span>
                        <span class="stat-label">Funcionários</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">4</span>
                        <span class="stat-label">Setores</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Técnicos de Lab.</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Anos de Casa</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Secretaria -->
    <section class="setor-section">
        <div class="container">
            <div class="section-label mb-2">Setor Administrativo</div>
            <div class="setor-header">
                <div class="setor-icon"><i class="bi bi-building"></i></div>
                <div>
                    <h2 class="setor-title">Secretaria do Departamento</h2>
                    <p class="setor-desc">Atendimento acadêmico, administrativo e apoio às atividades do departamento.</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">SF</div>
                        <div class="func-info">
                            <div class="func-name">Silvia Fernanda G. de Oliveira</div>
                            <div class="func-role">Secretária do Departamento</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:secretaria.genetica@fmrp.usp.br">secretaria.genetica@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                            <div class="func-detail"><i class="bi bi-clock"></i> Seg–Sex, 8h–17h</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">MA</div>
                        <div class="func-info">
                            <div class="func-name">Maria Aparecida dos Santos</div>
                            <div class="func-role">Assistente Administrativa</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:maria.santos@fmrp.usp.br">maria.santos@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3301</div>
                            <div class="func-detail"><i class="bi bi-clock"></i> Seg–Sex, 8h–17h</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">JL</div>
                        <div class="func-info">
                            <div class="func-name">João Lucas Pereira</div>
                            <div class="func-role">Auxiliar Administrativo</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:joao.pereira@fmrp.usp.br">joao.pereira@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3302</div>
                            <div class="func-detail"><i class="bi bi-clock"></i> Seg–Sex, 8h–17h</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Técnicos de Laboratório -->
    <section class="setor-section">
        <div class="container">
            <div class="section-label mb-2">Apoio Técnico</div>
            <div class="setor-header">
                <div class="setor-icon"><i class="bi bi-flask"></i></div>
                <div>
                    <h2 class="setor-title">Técnicos de Laboratório</h2>
                    <p class="setor-desc">Suporte técnico aos laboratórios de pesquisa e ensino do departamento.</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">AR</div>
                        <div class="func-info">
                            <div class="func-name">Ana Regina de Souza</div>
                            <div class="func-role">Técnica de Laboratório</div>
                            <div class="func-detail"><i class="bi bi-geo-alt"></i> Lab. de Genética Molecular</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:ana.souza@fmrp.usp.br">ana.souza@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3310</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">CM</div>
                        <div class="func-info">
                            <div class="func-name">Carlos Eduardo Martins</div>
                            <div class="func-role">Técnico de Laboratório</div>
                            <div class="func-detail"><i class="bi bi-geo-alt"></i> Lab. de Genômica e Bioinformática</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:carlos.martins@fmrp.usp.br">carlos.martins@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3311</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">FB</div>
                        <div class="func-info">
                            <div class="func-name">Fernanda Beatriz Lima</div>
                            <div class="func-role">Técnica de Laboratório</div>
                            <div class="func-detail"><i class="bi bi-geo-alt"></i> Lab. de Biologia Celular</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:fernanda.lima@fmrp.usp.br">fernanda.lima@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3312</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">RC</div>
                        <div class="func-info">
                            <div class="func-name">Ricardo César Almeida</div>
                            <div class="func-role">Técnico de Laboratório</div>
                            <div class="func-detail"><i class="bi bi-geo-alt"></i> Lab. de Genética de Plantas</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:ricardo.almeida@fmrp.usp.br">ricardo.almeida@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3313</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">LP</div>
                        <div class="func-info">
                            <div class="func-name">Luciana Pereira da Costa</div>
                            <div class="func-role">Técnica de Laboratório</div>
                            <div class="func-detail"><i class="bi bi-geo-alt"></i> Lab. de Genética de Populações</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:luciana.costa@fmrp.usp.br">luciana.costa@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3314</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">GS</div>
                        <div class="func-info">
                            <div class="func-name">Gabriel Santos Ribeiro</div>
                            <div class="func-role">Técnico de Laboratório</div>
                            <div class="func-detail"><i class="bi bi-geo-alt"></i> Lab. de Micologia Molecular</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:gabriel.ribeiro@fmrp.usp.br">gabriel.ribeiro@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3315</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">TN</div>
                        <div class="func-info">
                            <div class="func-name">Tatiane Nogueira Dias</div>
                            <div class="func-role">Técnica de Laboratório</div>
                            <div class="func-detail"><i class="bi bi-geo-alt"></i> Lab. de Citogenética</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:tatiane.dias@fmrp.usp.br">tatiane.dias@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3316</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">MO</div>
                        <div class="func-info">
                            <div class="func-name">Marcos Oliveira Duarte</div>
                            <div class="func-role">Técnico de Laboratório</div>
                            <div class="func-detail"><i class="bi bi-geo-alt"></i> Lab. de Ensino</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:marcos.duarte@fmrp.usp.br">marcos.duarte@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3317</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manutenção e Infraestrutura -->
    <section class="setor-section">
        <div class="container">
            <div class="section-label mb-2">Infraestrutura</div>
            <div class="setor-header">
                <div class="setor-icon"><i class="bi bi-tools"></i></div>
                <div>
                    <h2 class="setor-title">Manutenção e Infraestrutura</h2>
                    <p class="setor-desc">Cuidado com as instalações, equipamentos e ambientes do departamento.</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">JB</div>
                        <div class="func-info">
                            <div class="func-name">José Benedito Ferreira</div>
                            <div class="func-role">Técnico de Manutenção</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:jose.ferreira@fmrp.usp.br">jose.ferreira@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3320</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">AS</div>
                        <div class="func-info">
                            <div class="func-name">Antônio Silva Neto</div>
                            <div class="func-role">Auxiliar de Manutenção</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:antonio.silva@fmrp.usp.br">antonio.silva@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3321</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">PS</div>
                        <div class="func-info">
                            <div class="func-name">Paulo Sérgio Mendes</div>
                            <div class="func-role">Auxiliar de Serviços Gerais</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:paulo.mendes@fmrp.usp.br">paulo.mendes@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3322</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TI e Biblioteca -->
    <section class="setor-section">
        <div class="container">
            <div class="section-label mb-2">Apoio Especializado</div>
            <div class="setor-header">
                <div class="setor-icon"><i class="bi bi-pc-display"></i></div>
                <div>
                    <h2 class="setor-title">TI e Biblioteca</h2>
                    <p class="setor-desc">Suporte tecnológico e gestão do acervo bibliográfico do departamento.</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">DR</div>
                        <div class="func-info">
                            <div class="func-name">Daniel Rodrigues Pinto</div>
                            <div class="func-role">Técnico de Informática</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:daniel.pinto@fmrp.usp.br">daniel.pinto@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3330</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">RB</div>
                        <div class="func-info">
                            <div class="func-name">Roberta Braga Campos</div>
                            <div class="func-role">Bibliotecária</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:roberta.campos@fmrp.usp.br">roberta.campos@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3331</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="func-card">
                        <div class="func-avatar">LA</div>
                        <div class="func-info">
                            <div class="func-name">Leandro Alves Nunes</div>
                            <div class="func-role">Assistente de TI</div>
                            <div class="func-detail"><i class="bi bi-envelope"></i> <a href="mailto:leandro.nunes@fmrp.usp.br">leandro.nunes@fmrp.usp.br</a></div>
                            <div class="func-detail"><i class="bi bi-telephone"></i> (16) 3315-3332</div>
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