
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <!-- Importante para tradutor  -->
    <meta name="google" content="notranslate">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe de Funcionários – Departamento de Genética – FMRP/USP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <!-- Importante para tradutor  -->
    <script src="js/tradutor.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="https://sol.fmrp.usp.br/trge/css/styleidiomas.css">
    <!-- Importante para Ancora topo  -->
    <link rel="stylesheet" href="assets/css/btn-topo.css">


      <link rel="stylesheet" href="assets/css/rgefunc.css">
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
                <a href="#">Equipe</a>
                <span class="separator">/</span>
                <span class="active">Funcionários</span>
            </nav>
            <h1>Equipe de Funcionários</h1>
            <p>Conheça os técnicos, secretários e colaboradores administrativos que mantêm o funcionamento do Departamento de Genética da FMRP/USP.</p>
        </div>
    </section>

    <!-- Stats Bar -->
<?php
//
// Configurações de Conexão
$db_host = 'localhost';
$db_name = 'trge';
$db_user = 'gemacadm'; // Ajuste conforme seu ambiente
$db_pass = 'lexus2P5W1!';     // Ajuste conforme seu ambiente
//
$conex = new mysqli("$db_host","$db_user","$db_pass","$db_name");
if( $conex->connect_error) {
    die("Erro conexão");
}
//  $conex->set_charset("utf8");
//  $conex->set_charset("utf8mb4");
$conex->set_charset("utf8");

//  Variaveis 
$totalFuncionarios = 0;
$totalSetores = 0;
$totalTecnicosLab = 0;
$totalEspecialLab = 0;
$totalAnosCasa = "25+";
//
// Define o charset
//  mysqli_set_charset($conex, "utf8mb4");
mysqli_set_charset($conex, "utf8");
//
$sqlStats = "
    SELECT
        COUNT(*) AS total_funcionarios,
        COUNT(DISTINCT setor) AS total_setores,
        SUM(CASE 
            WHEN funcao LIKE '%Técnic%' 
             AND funcao LIKE '%Laboratório%' 
            THEN 1 ELSE 0 
        END) AS total_tecnicos_lab,
        SUM(CASE 
            WHEN funcao LIKE '%Especial%' 
             AND funcao LIKE '%Laboratório%' 
            THEN 1 ELSE 0 
        END) AS total_especialistas_lab
    FROM funcionarios;
";
$resStats = $conex->query($sqlStats);
//
if ($resStats && $dadosStats = $resStats->fetch_assoc()) {
    $totalFuncionarios = $dadosStats['total_funcionarios'];
    $totalSetores = $dadosStats['total_setores'];
    $totalTecnicosLab = $dadosStats['total_tecnicos_lab'];
    $totalEspecialLab = $dadosStats['total_especialistas_lab'];
}
//
?>

<section class="stats-bar">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <span class="stat-number"><?= $totalFuncionarios ?></span>
                    <span class="stat-label">Funcionários</span>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <span class="stat-number"><?= $totalSetores ?></span>
                    <span class="stat-label">Setores</span>
                </div>
            </div>

            <div class="col-6 col-md-3 mt-3 mt-md-0">
                <div class="stat-item">
                    <span class="stat-number"><?= $totalTecnicosLab ?></span>
                    <span class="stat-label">Técnicos de Lab.</span>
                </div>
            </div>

            <div class="col-6 col-md-3 mt-3 mt-md-0">
                <div class="stat-item">
                    <span class="stat-number"><?= $totalEspecialLab ?></span>
                    <span class="stat-label">Especialistas de Lab.</span>
                </div>
            </div>


            <div class="col-6 col-md-3 mt-3 mt-md-0">
                <div class="stat-item">
                    <span class="stat-number"><?= $totalAnosCasa ?></span>
                    <span class="stat-label">Anos de Casa</span>
                </div>
            </div>

        </div>
    </div>
</section>




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
<?php
include("rgerodape.php");
?>