<?php
/*
*   Chefias do Depto de Genetica - FMRP/USP
*/
//  Caso sseion_start desativado - Ativar
if( !isset($_SESSION) ) {
     session_start();
}
//
/**
 *   1. Usando a constante mágica __DIR__ (Recomendado)
*       A constante __DIR__ retorna o caminho completo da pasta onde o 
*       arquivo chefia.php está. Como o ipsperm.php está uma pasta acima, 
*       usamos dirname() para subir um nível.
*      Estão na mesma pasta 
 */
//  $path = dirname(__DIR__) . '/ipsperm.php';
/** 
$path = __DIR__ . '/ipsperm.php';
if (file_exists($path)) {
    echo "PASSOU 1 <br>";
    require_once $path;
} else {
    die("Erro crítico: O arquivo de configuração não foi encontrado em: " . $path);
}
*/
//
/**
 *   MELHOR JEITO 
 *   Verifica se a sessao existe antes de incluir
 */
// 
if( isset($_SESSION["BASE_PATH"]) ) {
    //
    $BASE_PATH = $_SESSION["BASE_PATH"];
    include_once $BASE_PATH . '/ipsperm.php';
} else {
    // Fallback caso a sessão não exista (usando caminho relativo)
    //
    die("Erro crítico: SESSION BASE_PATH inexistente.");
    //
}
//
//  IP Conectado
//  $ip_cliente = $_SERVER['REMOTE_ADDR'];
//
// Array IPs permitidos
//  $ip_permitidos = ['143.107.143.7'];
/** 
if( in_array($ip_cliente, $ip_permitidos) ) {
         http_response_code(503);
        include $BASE_PATH.'includes/em-construcao.html';
        exit;
}
*/        
//
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <!-- Importante para tradutor  -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chefia – Departamento de Genética – FMRP/USP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <!-- Importante para tradutor  
    <script src="js/tradutor.js"></script>  
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    -->
   

    <!-- Importante para Ancora topo  -->
    <link rel="stylesheet" href="assets/css/btn-topo.css">
    <link rel="stylesheet" href="assets/css/nrges.css">

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

        /* Chefia Cards */
        .chefia-section {
            padding: 4rem 0;
            background: var(--bg-light);
        }

        .chefia-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.04);
            transition: all 0.3s ease;
            height: 100%;
        }

        .chefia-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }

        .chefia-card-header {
            position: relative;
            height: 120px;
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--light-green) 100%);
        }

        .chefia-card-header-vice {
            background: linear-gradient(135deg, #4a7c59 0%, #6b9e75 100%);
        }

        .chefia-avatar {
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: white;
            border: 4px solid white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: var(--primary-green);
            overflow: hidden;
        }

        .chefia-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .chefia-badge {
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

        .chefia-card-body {
            padding: 3.5rem 2rem 2rem;
            text-align: center;
        }

        .chefia-name {
            font-size: 1.25rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 0.3rem;
        }

        .chefia-role {
            font-size: 0.85rem;
            color: var(--primary-green);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
        }

        .chefia-area {
            font-size: 0.85rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 1.2rem;
        }

        .chefia-contact {
            font-size: 0.8rem;
            color: #777;
            margin-bottom: 1.2rem;
        }

        .chefia-contact-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            margin-bottom: 0.3rem;
        }

        .chefia-contact-item i {
            color: var(--primary-green);
            font-size: 0.85rem;
        }

        .chefia-contact-item a {
            color: #777;
            text-decoration: none;
            transition: color 0.2s;
        }

        .chefia-contact-item a:hover {
            color: var(--primary-green);
        }

        .chefia-links {
            display: flex;
            justify-content: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .chefia-link {
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            border: 1px solid transparent;
        }

        .chefia-link-primary {
            background: var(--primary-green);
            color: white;
            border-color: var(--primary-green);
        }

        .chefia-link-primary:hover {
            background: var(--dark-green);
            border-color: var(--dark-green);
            color: white;
        }

        .chefia-link-outline {
            background: transparent;
            color: var(--primary-green);
            border-color: var(--primary-green);
        }

        .chefia-link-outline:hover {
            background: var(--primary-green);
            color: white;
        }

        /* Comissões Section */
        .comissoes-section {
            padding: 4rem 0;
            background: white;
        }

        .comissao-card {
            background: var(--bg-light);
            border-radius: 14px;
            padding: 1.5rem;
            border: 1px solid rgba(0,0,0,0.04);
            height: 100%;
            transition: all 0.3s ease;
        }

        .comissao-card:hover {
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
            transform: translateY(-3px);
        }

        .comissao-icon {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--light-green) 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .comissao-title {
            font-size: 1rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 0.5rem;
        }

        .comissao-desc {
            font-size: 0.85rem;
            color: #555;
            line-height: 1.5;
            margin-bottom: 0.8rem;
        }

        .comissao-members {
            font-size: 0.8rem;
            color: #666;
        }

        .comissao-members strong {
            color: #333;
        }

        /* Timeline */
        .historico-section {
            padding: 4rem 0;
            background: var(--bg-light);
        }

        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-green), var(--accent-green));
            border-radius: 3px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2.5rem;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-content {
            position: relative;
            width: calc(50% - 40px);
            background: white;
            border-radius: 14px;
            padding: 1.5rem;
            box-shadow: 0 3px 15px rgba(0,0,0,0.06);
            border: 1px solid rgba(0,0,0,0.04);
        }

        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: auto;
        }

        .timeline-dot {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 18px;
            height: 18px;
            background: var(--primary-green);
            border: 4px solid white;
            border-radius: 50%;
            box-shadow: 0 0 0 3px var(--primary-green);
            z-index: 2;
        }

        .timeline-item.current .timeline-dot {
            background: var(--accent-green);
            box-shadow: 0 0 0 3px var(--accent-green);
            width: 22px;
            height: 22px;
        }

        .timeline-year {
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--primary-green);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.3rem;
        }

        .timeline-name {
            font-size: 1rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 0.2rem;
        }

        .timeline-role {
            font-size: 0.8rem;
            color: #666;
        }

        .timeline-badge {
            display: inline-block;
            background: var(--accent-green);
            color: var(--dark-green);
            font-size: 0.65rem;
            font-weight: 700;
            padding: 0.15rem 0.6rem;
            border-radius: 50px;
            text-transform: uppercase;
            margin-top: 0.5rem;
        }

        @media (max-width: 768px) {
            .timeline::before {
                left: 20px;
            }
            .timeline-content {
                width: calc(100% - 60px);
                margin-left: 50px !important;
            }
            .timeline-dot {
                left: 20px;
            }
        }

        /* Footer */
        .footer {
            background: var(--dark-green);
            color: rgba(255,255,255,0.8);
            padding: 4rem 0 1.5rem;
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
        }
    </style>
</head>
<body>
<!-- Navbar -->
<!-- Navbar -->
<?php
//
include('rgetopo.php');
//
//  Conexao MYSQL/DB - MariaDB
$db_host = 'localhost';
$db_name = 'trge';
// $db_user = 'gemacadm'; // Ajuste conforme seu ambiente
$db_user = 'admin'; // Ajuste conforme seu ambiente
//  $db_pass = 'lexus2P5W1!';     // Ajuste conforme seu ambiente
$db_pass = 'M1#oTaur0';     // Ajuste conforme seu ambiente
//
$con = new mysqli("$db_host","$db_user","$db_pass","$db_name");
if ($con->connect_error) {
    die("Erro conexão");
}
$con->set_charset("utf8");
//
// =========================================================================
// 1. CONSULTA DOS DADOS GERAIS (Estatísticas do Topo)
// =========================================================================
$sqlGeral = "SELECT 
                YEAR(MIN(pc.Dta_Inicio)) as ano_inicial, 
                YEAR(MAX(COALESCE(pc.Dta_Fim, NOW()))) as ano_final,
                (YEAR(MAX(COALESCE(pc.Dta_Fim, NOW()))) - YEAR(MIN(pc.Dta_Inicio))) as total_anos_historia,
                COUNT(*) as total_mandatos,
                COUNT(DISTINCT pc.Cod_Pessoa) as total_chefes_unicos
             FROM Pessoa_Chefia pc";

$resGeral = $con->query($sqlGeral);
if ($resGeral) {
    $dadosGerais = $resGeral->fetch_assoc();
} else {
    // Caso pare de funcionar por erro de banco ou sintaxe, isto dirá o motivo exato:
    die("Erro na consulta Geral: " . $con->error);
}
$dadosGerais = $resGeral ? $resGeral->fetch_assoc() : null;
//

// =========================================================================
// 2. CONSULTA DO HISTÓRICO (Timeline)
// =========================================================================
/**   Fazemos INNER JOIN para o Chefe e LEFT JOIN para o Vice (pois o vice pode ser NULL)  */ 
$sql = "SELECT 
            YEAR(pc.Dta_Inicio) as anoini,
            YEAR(pc.Dta_Fim) as anofin,
            pc.Dta_Fim,
            p1.Nom_Pessoa as Nom_Chefe,
            p2.Nom_Pessoa as Nom_Vice
        FROM Pessoa_Chefia pc
        INNER JOIN Pessoa p1 ON pc.Cod_Pessoa = p1.Cod_Pessoa
        LEFT JOIN Pessoa p2 ON pc.Cod_Pessoa_Vice = p2.Cod_Pessoa
        ORDER BY pc.Dta_Inicio DESC, pc.Dta_Fim DESC";
//
$result = $con->query($sql);
//
?>
<!-- Page Header -->
    <section class="page-header">
        <div class="container page-header-content">
            <nav class="breadcrumb-custom">
                <a href="index.html">Início</a>
                <span class="separator">/</span>
                <a href="#">Departamento</a>
                <span class="separator">/</span>
                <span class="active">Chefia</span>
            </nav>
            <h1>Chefia do Departamento</h1>
            <p>A gestão do Departamento de Genética da FMRP/USP é conduzida por uma equipe comprometida com a excelência acadêmica, a inovação científica e o fortalecimento da comunidade universitária.</p>
        </div>
    </section>

<?php
//
$linha = mysqli_fetch_assoc($result);
//

echo "PARROU AQUI - LINHA 796";
exit();


?>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo $resGeral['total_anos_historia']+2; ?></span>
                        <span class="stat-label">Anos de História</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo $resGeral['total_mandatos']; ?></span>
                        <span class="stat-label">Chefias</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo $linha['anoini']; ?>/<?php echo $linha['anofin']; ?></span>
                        <span class="stat-label">Gestão Atual Período</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo $linha['anofin']-$linha['anoini']; ?></span>
                        <span class="stat-label">Anos de Mandato</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Chefia Atual -->
    <section class="chefia-section">
        <div class="container">
            <div class="section-label mb-2">Gestão <?php echo $linha['anoini']; ?>-<?php echo $linha['anofin']; ?></div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Chefia Atual</h2>

            <div class="row g-4 justify-content-center">
                <!-- Chefe -->
                <div class="col-md-6 col-lg-5">
                    <div class="chefia-card">
                        <div class="chefia-card-header">
                            <span class="chefia-badge">Chefe</span>
                            <div class="chefia-avatar">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="chefia-card-body">
                            <h3 class="chefia-name">Wilson Araújo da Silva Júnior</h3>
                            <div class="chefia-role">Chefe do Departamento</div>
                            <p class="chefia-area">
                                Professor Titular do Departamento de Genética da FMRP/USP. Pesquisador na área de Genética Molecular Humana, com ênfase em diversidade genética de populações, marcadores do DNA nuclear e mitocondrial, e microRNAs em neoplasias hematológicas.
                            </p>
                            <div class="chefia-contact">
                                <div class="chefia-contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <a href="mailto:wilson.silva@fmrp.usp.br">wilson.silva@fmrp.usp.br</a>
                                </div>
                                <div class="chefia-contact-item">
                                    <i class="bi bi-telephone"></i>
                                    <span>(16) 3315-3300</span>
                                </div>
                                <div class="chefia-contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Bloco H – FMRP/USP</span>
                                </div>
                            </div>
                            <div class="chefia-links">
                                <a href="#" class="chefia-link chefia-link-primary">Currículo Lattes</a>
                                <a href="#" class="chefia-link chefia-link-outline">Página Pessoal</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vice-Chefe -->
                <div class="col-md-6 col-lg-5">
                    <div class="chefia-card">
                        <div class="chefia-card-header chefia-card-header-vice">
                            <span class="chefia-badge">Vice-Chefe</span>
                            <div class="chefia-avatar">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                        <div class="chefia-card-body">
                            <h3 class="chefia-name">Esther Silveira Ramos</h3>
                            <div class="chefia-role">Vice-Chefe do Departamento</div>
                            <p class="chefia-area">
                                Professora Associada do Departamento de Genética da FMRP/USP. Pesquisadora na área de Genética Animal, com foco em melhoramento genético aplicado a bovinos de corte, reprodução assistida, precocidade sexual, crescimento e epigenética.
                            </p>
                            <div class="chefia-contact">
                                <div class="chefia-contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <a href="mailto:ester.ramos@fmrp.usp.br">ester.ramos@fmrp.usp.br</a>
                                </div>
                                <div class="chefia-contact-item">
                                    <i class="bi bi-telephone"></i>
                                    <span>(16) 3315-3300</span>
                                </div>
                                <div class="chefia-contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Bloco H – FMRP/USP</span>
                                </div>
                            </div>
                            <div class="chefia-links">
                                <a href="#" class="chefia-link chefia-link-primary">Currículo Lattes</a>
                                <a href="#" class="chefia-link chefia-link-outline">Página Pessoal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comissões -->
    <section class="comissoes-section">
        <div class="container">
            <div class="section-label mb-2">Estrutura de Gestão</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Comissões e Coordenações</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="comissao-card">
                        <div class="comissao-icon"><i class="bi bi-journal-check"></i></div>
                        <h5 class="comissao-title">Comissão de Graduação</h5>
                        <p class="comissao-desc">Responsável pela organização e supervisão das atividades de ensino de graduação do departamento.</p>
                        <div class="comissao-members">
                            <strong>Coordenador:</strong> A definir<br>
                            <strong>Membros:</strong> 3 docentes
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="comissao-card">
                        <div class="comissao-icon"><i class="bi bi-mortarboard"></i></div>
                        <h5 class="comissao-title">Comissão de Pós-Graduação</h5>
                        <p class="comissao-desc">Coordenação do Programa de Pós-Graduação em Genética, incluindo seleção e acompanhamento de alunos.</p>
                        <div class="comissao-members">
                            <strong>Coordenador:</strong> A definir<br>
                            <strong>Membros:</strong> 5 docentes
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="comissao-card">
                        <div class="comissao-icon"><i class="bi bi-clipboard-data"></i></div>
                        <h5 class="comissao-title">Comissão de Pesquisa</h5>
                        <p class="comissao-desc">Fomento e supervisão das atividades de pesquisa, incluindo projetos, bolsas e parcerias institucionais.</p>
                        <div class="comissao-members">
                            <strong>Coordenador:</strong> A definir<br>
                            <strong>Membros:</strong> 4 docentes
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="comissao-card">
                        <div class="comissao-icon"><i class="bi bi-shield-check"></i></div>
                        <h5 class="comissao-title">Comissão de Ética</h5>
                        <p class="comissao-desc">Avaliação e acompanhamento de projetos de pesquisa envolvendo seres humanos e animais.</p>
                        <div class="comissao-members">
                            <strong>Coordenador:</strong> A definir<br>
                            <strong>Membros:</strong> 3 docentes
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
//

exit();


// Obtém o ano atual dinamicamente para validar a gestão ativa
$anoAtual = (int)date('Y');

// Busca os dados relacionando o histórico de mandatos com os dados cadastrais da Pessoa
$sql = "SELECT pc.anoini, pc.anofin, pc.descri, pc.vice, p.Nom_Pessoa
        FROM Pessoa_Chefia pc
        INNER JOIN Pessoa p ON pc.Cod_Pessoa = p.Cod_Pessoa
        ORDER BY pc.anoini DESC, pc.anofin DESC";

// Mantivemos o padrão Orientado a Objetos ($con->query) que você já usa
$result = $con->query($sql);
?>

<!-- Histórico de Chefias -->
<section class="historico-section">
   <div class="container">
        <div class="section-label mb-2">Trajetória Institucional</div>
        <h2 class="mb-5 text-center" style="font-size: 2rem; font-weight: 700; color: #222;">Histórico de Chefias</h2>

<div class="timeline">
<?php if ($result && $result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
        <?php
            // Agora verifica dinamicamente se o ano atual está dentro do intervalo do mandato
            $atual = ($anoAtual >= $row['anoini'] && $anoAtual <= $row['anofin']) ? ' current' : '';
        ?>
        <div class="timeline-item<?= $atual ?>">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    <?= htmlspecialchars($row['anoini']) ?> – <?= htmlspecialchars($row['anofin']) ?>
                </div>
                <div class="timeline-name">
                    <!-- Alterado de $row['chefe'] para $row['Nom_Pessoa'] -->
                    <?= htmlspecialchars($row['Nom_Pessoa']) ?>
                </div>
                <div class="timeline-role">
                    <?= htmlspecialchars($row['descri']) ?>
                </div>

                <?php if (!empty($row['vice'])): ?>
                    <div class="timeline-role" style="margin-top: 6px;">
                        <strong>Vice:</strong> <?= htmlspecialchars($row['vice']) ?>
                    </div>
                <?php endif; ?>

                <?php if ($atual): ?>
                    <span class="timeline-badge">Gestão Atual</span>
                <?php endif; ?>

            </div>
        </div>

    <?php endwhile; ?>

<?php else: ?>

    <div class="alert alert-warning text-center">
        Nenhuns registro de chefia encontrado.
    </div>

<?php endif; ?>

</div>

</div>
</section>
<!-- Final - Histórico de Chefias com BD/TB -->



<hr>

<!-- Footer -->
<?php
include("rgerodape.php");
?>