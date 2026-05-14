<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
        <!-- Importante para tradutor  -->
    <meta name="google" content="notranslate">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratórios – Departamento de Genética – FMRP/USP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <!-- Importante para tradutor  -->
    <script src="js/tradutor.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="https://sol.fmrp.usp.br/trge/css/styleidiomas.css">
    <!-- Importante para Ancora topo  -->
    <link rel="stylesheet" href="assets/css/btn-topo.css">


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
        .navbar-brand svg {
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

        /* Page Header */
        .page-header {
            position: relative;
            padding: 100px 0 80px;
            background: linear-gradient(135deg, var(--dark-green) 0%, var(--primary-green) 100%);
            color: white;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
        }

        .page-header-content {
            position: relative;
            z-index: 2;
        }

        .page-header h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .page-header p {
            font-size: 1.1rem;
            font-weight: 300;
            opacity: 0.9;
            max-width: 600px;
        }

        .breadcrumb-custom {
            background: none;
            padding: 0;
            margin-bottom: 1.5rem;
        }

        .breadcrumb-custom a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 0.85rem;
        }

        .breadcrumb-custom a:hover {
            color: white;
        }

        .breadcrumb-custom .active {
            color: white;
            font-size: 0.85rem;
        }

        .breadcrumb-custom .separator {
            color: rgba(255,255,255,0.4);
            margin: 0 8px;
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

        /* Stats Bar */
        .stats-bar {
            background: white;
            padding: 2rem 0;
            border-bottom: 1px solid #eee;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-green);
            display: block;
        }

        .stat-label {
            font-size: 0.8rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Filters */
        .filters-section {
            padding: 2rem 0;
            background: white;
            border-bottom: 1px solid #eee;
        }

        .filter-btn {
            padding: 0.5rem 1.2rem;
            border-radius: 50px;
            border: 1px solid #ddd;
            background: white;
            color: #555;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            margin: 0 5px 5px 0;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--primary-green);
            color: white;
            border-color: var(--primary-green);
        }

        /* Lab Cards */
        .labs-section {
            padding: 3rem 0 5rem;
            background: var(--bg-light);
        }

        .lab-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.06);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.04);
            display: flex;
            flex-direction: column;
        }

        .lab-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .lab-header {
            position: relative;
            height: 180px;
            overflow: hidden;
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--light-green) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lab-header-icon {
            font-size: 3.5rem;
            color: rgba(255,255,255,0.3);
        }

        .lab-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--accent-green);
            color: var(--dark-green);
            font-size: 0.7rem;
            font-weight: 700;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .lab-badge-teaching {
            background: #fff;
            color: var(--primary-green);
        }

        .lab-body {
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .lab-name {
            font-size: 1.1rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }

        .lab-leader {
            font-size: 0.85rem;
            color: var(--primary-green);
            font-weight: 600;
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .lab-leader i {
            font-size: 0.9rem;
        }

        .lab-desc {
            font-size: 0.85rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 1rem;
            flex: 1;
        }

        .lab-meta {
            font-size: 0.8rem;
            color: #777;
            margin-bottom: 1rem;
        }

        .lab-meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 0.3rem;
        }

        .lab-meta-item i {
            color: var(--primary-green);
            font-size: 0.85rem;
        }

        .lab-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 1rem;
        }

        .lab-tag {
            background: rgba(26, 92, 58, 0.08);
            color: var(--primary-green);
            font-size: 0.7rem;
            font-weight: 600;
            padding: 0.25rem 0.7rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .lab-links {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .lab-link {
            padding: 0.4rem 0.9rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            border: 1px solid transparent;
        }

        .lab-link-primary {
            background: var(--primary-green);
            color: white;
            border-color: var(--primary-green);
        }

        .lab-link-primary:hover {
            background: var(--dark-green);
            border-color: var(--dark-green);
            color: white;
        }

        .lab-link-outline {
            background: transparent;
            color: var(--primary-green);
            border-color: var(--primary-green);
        }

        .lab-link-outline:hover {
            background: var(--primary-green);
            color: white;
        }

        /* Featured Lab */
        .featured-lab {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.04);
            margin-bottom: 2rem;
        }

        .featured-lab-img {
            height: 300px;
            background: linear-gradient(135deg, var(--dark-green) 0%, var(--primary-green) 60%, var(--light-green) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .featured-lab-img i {
            font-size: 5rem;
            color: rgba(255,255,255,0.2);
        }

        .featured-lab-body {
            padding: 2rem;
        }

        .featured-lab-body h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 0.5rem;
        }

        .featured-lab-body .lab-leader {
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .featured-lab-body p {
            color: #555;
            line-height: 1.7;
            margin-bottom: 1rem;
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
            .page-header h1 {
                font-size: 2rem;
            }
            .page-header {
                padding: 60px 0 50px;
            }
            .featured-lab-img {
                height: 200px;
            }
        }
    </style>
</head>
<body>
<!-- Navbar -->
<?php
include('rgetopo.php');
?>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container page-header-content">
            <nav class="breadcrumb-custom">
                <a href="index.html">Início</a>
                <span class="separator">/</span>
                <span class="active">Laboratórios</span>
            </nav>
            <h1>Laboratórios</h1>
            <p>Infraestrutura moderna e tecnologia de ponta para pesquisa e ensino em Genética, abrangendo desde a biologia molecular até a bioinformática.</p>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">14</span>
                        <span class="stat-label">Laboratórios de Pesquisa</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Laboratórios de Ensino</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Equipamentos</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number">1.2k</span>
                        <span class="stat-label">m² de Área</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filters -->
    <section class="filters-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <span class="text-muted me-2" style="font-size: 0.85rem;">Filtrar por área:</span>
                    <button class="filter-btn active">Todos</button>
                    <button class="filter-btn">Genética Molecular</button>
                    <button class="filter-btn">Genômica</button>
                    <button class="filter-btn">Biologia Celular</button>
                    <button class="filter-btn">Micologia</button>
                    <button class="filter-btn">Oncologia</button>
                    <button class="filter-btn">Hematologia</button>
                    <button class="filter-btn">Ensino</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Labs Grid -->
    <section class="labs-section">
        <div class="container">
            <div class="section-label mb-4">Infraestrutura de Pesquisa</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Laboratórios de Pesquisa</h2>

            <!-- Featured Lab -->
            <div class="featured-lab">
                <div class="featured-lab-img">
                    <i class="bi bi-virus"></i>
                </div>
                <div class="featured-lab-body">
                    <div class="lab-tags mb-2">
                        <span class="lab-tag">Genética Molecular</span>
                        <span class="lab-tag">Oncologia</span>
                        <span class="lab-tag">Destaque</span>
                    </div>
                    <h3>Laboratório de Biologia Molecular de Tumores Sólidos</h3>
                    <div class="lab-leader"><i class="bi bi-person-circle"></i> Coordenação: Departamento de Genética – FMRP/USP</div>
                    <p>O Laboratório de Biologia Molecular de Tumores Sólidos desenvolve pesquisas voltadas à compreensão dos mecanismos moleculares envolvidos na carcinogênese, identificação de biomarcadores e desenvolvimento de estratégias terapêuticas para neoplasias sólidas. Conta com infraestrutura para análise de expressão gênica, sequenciamento e cultura de células tumorais.</p>
                    <div class="lab-links">
                        <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                        <a href="#" class="lab-link lab-link-outline">Publicações</a>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Lab 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-bug lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Genética Animal</span>
                                <span class="lab-tag">Biologia de Desenvolvimento</span>
                            </div>
                            <h5 class="lab-name">Biologia e Genética de Desenvolvimento de Abelhas</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Klaus Hartmann Hartfelder</div>
                            <p class="lab-desc">Estudo da biologia molecular e celular de abelhas sociais, com foco em mecanismos de diferenciação de castas, desenvolvimento ovariano, expressão gênica diferencial e plasticidade fenotípica em Apis mellifera e meliponídeos.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3063 / 4541</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> klaus@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco Central – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Site do Lab</a>
                                <a href="#" class="lab-link lab-link-outline">Lattes</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-droplet lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Hematologia</span>
                                <span class="lab-tag">Genética Médica</span>
                            </div>
                            <h5 class="lab-name">Laboratório de Hematologia Molecular</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Marco Antonio Zago</div>
                            <p class="lab-desc">Pesquisas em terapia gênica, engenharia celular, doenças genéticas hematológicas e biologia molecular de células-tronco hematopoéticas. Desenvolvimento de vetores virais e estratégias de correção gênica.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> zago@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-shield-plus lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Imunogenética</span>
                                <span class="lab-tag">Genética Molecular</span>
                            </div>
                            <h5 class="lab-name">Laboratório de Imunogenética Molecular</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Wilson Araújo da Silva Júnior</div>
                            <p class="lab-desc">Investigação da diversidade genética de populações, marcadores do DNA nuclear e mitocondrial, microRNAs em neoplasias hematológicas e bases genéticas da resposta imune em diferentes populações brasileiras.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> wilson.silva@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-flower1 lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Genética de Plantas</span>
                                <span class="lab-tag">Reprodução</span>
                            </div>
                            <h5 class="lab-name">Sinalização Celular na Reprodução</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Equipe de Pesquisa</div>
                            <p class="lab-desc">Estudo dos processos de sinalização celular envolvidos na reprodução de plantas, incluindo interações pólen-pistilo, desenvolvimento de órgãos reprodutivos e regulação gênica durante a gametogênese.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> genetica@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-cpu lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Bioinformática</span>
                                <span class="lab-tag">Genômica</span>
                            </div>
                            <h5 class="lab-name">Processamento de Informação Biológica</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Ricardo Z. N. Vêncio / Tie Koide</div>
                            <p class="lab-desc">Desenvolvimento de ferramentas computacionais para análise de dados ômicos, modelagem de redes regulatórias, transcriptômica e aprendizado de máquina aplicado à biologia. Infraestrutura de alto desempenho para bioinformática.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> rvencio@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-virus lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Micologia</span>
                                <span class="lab-tag">Genética Molecular</span>
                            </div>
                            <h5 class="lab-name">Genética e Biologia Molecular de Fungos</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Francis de Assis Nóbrega / Iran Malavazi</div>
                            <p class="lab-desc">Estudo da biologia molecular de fungos patogênicos, com ênfase em Paracoccidioides brasiliensis e Aspergillus fumigatus. Investigação de mecanismos de patogenicidade, resistência a antifúngicos e transcriptoma fúngico.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> francis.nobrega@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-capsule lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Oncologia</span>
                                <span class="lab-tag">Pesquisa Experimental</span>
                            </div>
                            <h5 class="lab-name">Oncologia Experimental – LABOEX</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Equipe Multidisciplinar</div>
                            <p class="lab-desc">Pesquisas experimentais em oncologia, incluindo estudos de carcinogênese, terapia gênica tumoral, modelos animais de câncer e avaliação de novos compostos com potencial antitumoral.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> genetica@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Anexo A – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 8 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-clipboard-pulse lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Oncopatologia</span>
                                <span class="lab-tag">Diagnóstico</span>
                            </div>
                            <h5 class="lab-name">Laboratório de Oncopatologia</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Equipe de Pesquisa</div>
                            <p class="lab-desc">Estudo da patologia molecular de tumores, correlação entre alterações genéticas e perfis histopatológicos, desenvolvimento de testes diagnósticos moleculares para neoplasias.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> genetica@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 9 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-bacteria lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Parasitologia</span>
                                <span class="lab-tag">Genética Molecular</span>
                            </div>
                            <h5 class="lab-name">Laboratório de Parasitologia Molecular</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Equipe de Pesquisa</div>
                            <p class="lab-desc">Investigação da biologia molecular de parasitos, identificação de alvos terapêuticos, estudos de resistência a drogas e desenvolvimento de métodos diagnósticos moleculares para doenças parasitárias.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> genetica@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 10 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-people lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Genética Humana</span>
                                <span class="lab-tag">Farmacogenética</span>
                            </div>
                            <h5 class="lab-name">Laboratório de Genética Humana e Populações</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Sergio Danilo Junho Pena</div>
                            <p class="lab-desc">Pesquisas em farmacogenética, genética forense, DNA de populações brasileiras, genômica personalizada e medicina de precisão. Desenvolvimento de painéis de SNPs para aplicações médicas e forenses.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> sdjpena@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 11 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-tree lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Genética Vegetal</span>
                                <span class="lab-tag">Melhoramento</span>
                            </div>
                            <h5 class="lab-name">Laboratório de Genética de Plantas</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Equipe de Pesquisa</div>
                            <p class="lab-desc">Melhoramento genético de espécies vegetais, resistência a estresses bióticos e abióticos, engenharia genética de plantas e estudos de expressão gênica em resposta a estresses ambientais.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> genetica@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lab 12 -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header">
                            <i class="bi bi-egg-fried lab-header-icon"></i>
                        </div>
                        <div class="lab-body">
                            <div class="lab-tags">
                                <span class="lab-tag">Genética Animal</span>
                                <span class="lab-tag">Melhoramento</span>
                            </div>
                            <h5 class="lab-name">Laboratório de Genética Animal</h5>
                            <div class="lab-leader"><i class="bi bi-person-circle"></i> Ester Silveira Ramos / Raysildo B. Lôbo</div>
                            <p class="lab-desc">Melhoramento genético aplicado a bovinos de corte, reprodução assistida, precocidade sexual e crescimento, epigenética e genética quantitativa em populações animais.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-telephone"></i> (16) 3315-3300</div>
                                <div class="lab-meta-item"><i class="bi bi-envelope"></i> ester.ramos@fmrp.usp.br</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – FMRP/USP</div>
                            </div>
                            <div class="lab-links">
                                <a href="#" class="lab-link lab-link-primary">Saiba Mais</a>
                                <a href="#" class="lab-link lab-link-outline">Publicações</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Teaching Labs -->
            <div class="section-label mt-5 mb-4">Infraestrutura de Ensino</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Laboratórios de Ensino</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header" style="background: linear-gradient(135deg, #4a7c59 0%, #6b9e75 100%);">
                            <i class="bi bi-mortarboard lab-header-icon"></i>
                            <span class="lab-badge lab-badge-teaching">Ensino</span>
                        </div>
                        <div class="lab-body">
                            <h5 class="lab-name">Laboratório de Práticas em Genética</h5>
                            <p class="lab-desc">Espaço destinado às aulas práticas de graduação em Genética, Citogenética e Biologia Molecular. Equipado com microscópios, material para preparação de lâminas e kits didáticos de biologia molecular.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-people"></i> Capacidade: 30 alunos</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – Térreo</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header" style="background: linear-gradient(135deg, #4a7c59 0%, #6b9e75 100%);">
                            <i class="bi bi-laptop lab-header-icon"></i>
                            <span class="lab-badge lab-badge-teaching">Ensino</span>
                        </div>
                        <div class="lab-body">
                            <h5 class="lab-name">Laboratório de Informática em Genética</h5>
                            <p class="lab-desc">Sala equipada com estações de trabalho para aulas de bioinformática, análise de dados genéticos, simulações computacionais e acesso a bancos de dados genômicos.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-people"></i> Capacidade: 25 alunos</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – 1º Andar</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="lab-card">
                        <div class="lab-header" style="background: linear-gradient(135deg, #4a7c59 0%, #6b9e75 100%);">
                            <i class="bi bi-microscope lab-header-icon"></i>
                            <span class="lab-badge lab-badge-teaching">Ensino</span>
                        </div>
                        <div class="lab-body">
                            <h5 class="lab-name">Laboratório de Microscopia</h5>
                            <p class="lab-desc">Infraestrutura para ensino de técnicas de microscopia óptica e eletrônica, preparação de amostras biológicas e análise morfológica de células e tecidos.</p>
                            <div class="lab-meta">
                                <div class="lab-meta-item"><i class="bi bi-people"></i> Capacidade: 20 alunos</div>
                                <div class="lab-meta-item"><i class="bi bi-geo-alt"></i> Bloco H – Térreo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
<?php
include("rgerodape.php");
?>