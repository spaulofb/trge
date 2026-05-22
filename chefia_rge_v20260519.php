   <link rel="stylesheet" href="assets/css/rgechefia.css">
<?php
/**
*     Chefias - 20260520
*   Conexao Mysql/BD
*/
require_once("./Connections_rge/rgeconnection.php");  
//
/** Cabecalho/Menu  */
include('rgetopo.php');
//
// Melhor com set_charset("utf8mb4")
//  $rgeconnection->set_charset("utf8");
$rgeconnection->set_charset("utf8mb4");
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
//
// Executando mysqli_query
$resGeral = $rgeconnection->query($sqlGeral);
//
if( !$resGeral) {
    // 
    error_log("Erro SQL Pessoa_Chefia: " . $rgeconnection->error);
    die("Ocorreu um erro ao carregar os dados.");
}
//
/**
 *   Resultado de uma consulta ao banco de dados em um array associativo, 
 *      -  onde o nome de cada coluna da tabela vira a "chave" (index) do array.
*/
$dadosGerais = $resGeral->fetch_assoc();
if( !$dadosGerais) {
     //
    error_log("Consulta Pessoa_Chefia retornou vazio.");
    die("Nenhum dado disponível no momento.");
}
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
            p1.Telefone as Fone_Chefe,
            p1.Email as Email_Chefe,
            p1.Pagina_Pessoal as Pag_Chefe,
            p1.Foto as Foto_Chefe,
            p1.Link_Lattes as Lattes_Chefe,
            p2.Nom_Pessoa as Nom_Vice,
            p2.Telefone as Fone_Vice,
            p2.Email as Email_Vice,
            p2.Pagina_Pessoal as Pag_Vice,
            p2.Foto as Foto_Vice,
            p2.Link_Lattes as Lattes_Vice
        FROM Pessoa_Chefia pc
        INNER JOIN Pessoa p1 ON pc.Cod_Pessoa = p1.Cod_Pessoa
        LEFT JOIN Pessoa p2 ON pc.Cod_Pessoa_Vice = p2.Cod_Pessoa
        ORDER BY pc.Dta_Inicio DESC limit 1";
//
$result = $rgeconnection->query($sql);
if( !$result) {
    // 
    error_log("Erro SQL Pessoa_Chefia e Pessoa: " . $rgeconnection->error);
    die("Ocorreu um erro ao carregar os dados das Tabelas.");
}
//
/**
*    Precisa corrigir a Tabela Pessoa_Chefia
*   $dadosGerais['total_anos_historia']
*   Quem foram os primeiros chefes desde 1965 (data da fundacao do Depto de Genética)
*    - definindo desse jeito abaixo
*/
$anoAtual = (new DateTime())->format('Y');
$totanosgen = $anoAtual - 1965;
//
// Anos de Mandato
$anosMand=4;
//
$linha = $result->fetch_assoc();
//
/**  Converte em Variaveis desse Array $linha  */
extract($linha);
//
// Nome Chefe e Vice
function ajustanome($nome) {
    //
    $nome = mb_convert_case(
        mb_strtolower($nome, 'UTF-8'),
        MB_CASE_TITLE,
        'UTF-8'
    );

    $minusculas = [' Da ', ' De ', ' Do ', ' Dos ', ' Das ', ' E '];

    $nome = str_replace(
        $minusculas,
        array_map('mb_strtolower', $minusculas),
        $nome
    );

    return trim($nome);
}
//
//  Nome do Chefe
$nomechefe = ajustanome($Nom_Chefe);
//
//  Nome do Vice
$nomevice = ajustanome($Nom_Vice);
//
// EMAIL Chefe: $Email_Chefe - Minusculo
$Email_Chefe = strtolower("$Email_Chefe");
//
// EMAIL Vice-Chefe: $Email_Vice - Minusculo
$Email_Vice = strtolower("$Email_Vice");
///
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

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo $totanosgen;?></span>
                        <span class="stat-label">Anos de História</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo $dadosGerais["total_mandatos"];?></span>
                        <span class="stat-label">Chefias</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo $linha['anoini']; ?></span>
                        <span class="stat-label">Gestão Atual</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3 mt-md-0">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo $anosMand; ?></span>
                        <span class="stat-label">Anos de Mandato</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- Final - Stats Bar -->    
    
    

    <!-- Chefia Atual -->
    <section class="chefia-section">
        <div class="container">
            <div class="section-label mb-2">Gestão 2024–2028</div>
            <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">Chefia Atual</h2>

            <div class="row g-4 justify-content-center">
                <!-- Chefe -->
                <div class="col-md-6 col-lg-5">
                    <div class="chefia-card">
                        <div class="chefia-card-header">
                            <span class="chefia-badge">Chefe</span>
                            <div class="chefia-avatar">
                                 <!-- A FOTO ENTRA AQUI SUBSTITUINDO O ÍCONE - CHEFE -->
                                 <img src="./assets/img/fotos_docentes/<?php echo $Foto_Chefe;?>" alt="Foto do Chefe">
                            </div>
                        </div>
                        <div class="chefia-card-body">
                            <h3 class="chefia-name"><?php echo htmlspecialchars($nomechefe);?></h3>
                            <div class="chefia-role">Chefe do Departamento</div>
                            <p class="chefia-area">
                                Professor Titular do Departamento de Genética da FMRP/USP. Pesquisador na área de Genética Molecular Humana, com ênfase em diversidade genética de populações, marcadores do DNA nuclear e mitocondrial, e microRNAs em neoplasias hematológicas.
                            </p>
                            <div class="chefia-contact">
                                <div class="chefia-contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <a href="mailto:<?php echo $Email_Chefe;?>"><?php echo $Email_Chefe;?></a>
                                </div>
                                <div class="chefia-contact-item">
                                    <i class="bi bi-telephone"></i>
                                    <span><?php echo $Fone_Chefe;?></span>
                                </div>
                                
                                <!--
                                <div class="chefia-contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Bloco H – FMRP/USP</span>
                                </div>
                                -->
                                
                            </div>
                            <div class="chefia-links">
                                <!-- Curriculo Lates -->
                                <?php if (!empty($Lattes_Chefe)) : ?>
                                       <a href="<?php echo htmlspecialchars($Lattes_Chefe); ?>" target="_blank" 
                                          rel="noopener noreferrer" class="chefia-link chefia-link-outline">Currículo Lattes</a>
                                <?php endif; ?>
                                <!-- Pagina pessoal -->
                                <?php if (!empty($Pag_Chefe)) : ?>
                                       <a href="<?php echo htmlspecialchars($Pag_Chefe); ?>" target="_blank" 
                                          rel="noopener noreferrer" class="chefia-link chefia-link-outline">Página Pessoal</a>
                                <?php endif; ?>
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
                                 <!-- A FOTO ENTRA AQUI SUBSTITUINDO O ÍCONE - VICE -->
                                 <img src="./assets/img/fotos_docentes/<?php echo $Foto_Vice;?>" alt="Foto do Vice-Chefe">
                            </div>
                        </div>
                        <div class="chefia-card-body">
                            <h3 class="chefia-name"><?php echo htmlspecialchars($nomevice);?></h3>
                            <div class="chefia-role">Vice-Chefe do Departamento</div>
                            <p class="chefia-area">
                                Professora Associada do Departamento de Genética da FMRP/USP. Pesquisadora na área de Genética Animal, com foco em melhoramento genético aplicado a bovinos de corte, reprodução assistida, precocidade sexual, crescimento e epigenética.
                            </p>
                            <div class="chefia-contact">
                                <div class="chefia-contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <a href="mailto:<?php echo $Email_Vice;?>"><?php echo $Email_Vice;?></a>
                                </div>
                                <div class="chefia-contact-item">
                                    <i class="bi bi-telephone"></i>
                                    <span><?php echo $Fone_Vice;?></span>
                                </div>
                                
                                <!--
                                <div class="chefia-contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Bloco H – FMRP/USP</span>
                                </div>
                                -->
                                
                            </div>
                            <div class="chefia-links">
                                <!-- Curriculo Lates -->
                                <?php if (!empty($Lattes_Vice)) : ?>
                                       <a href="<?php echo htmlspecialchars($Lattes_Vice); ?>" target="_blank" 
                                          rel="noopener noreferrer" class="chefia-link chefia-link-outline">Currículo Lattes</a>
                                <?php endif; ?>
                                <!-- Pagina pessoal -->
                                <?php if (!empty($Pag_Vice)) : ?>
                                       <a href="<?php echo htmlspecialchars($Pag_Vice); ?>" target="_blank" 
                                          rel="noopener noreferrer" class="chefia-link chefia-link-outline">Página Pessoal</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comissões e Coordenações -->
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
    <!-- Final - Comissões e Coordenações -->
    
    
<?php
//
//  Periodo Chefia
$anosExtras = 4;
//
$sql = "SELECT YEAR(pc.Dta_Inicio) AS anoini,
            IF(
                pc.Dta_Fim IS NULL,
                YEAR(pc.Dta_Inicio) + $anosExtras,
                YEAR(pc.Dta_Fim)
            ) AS anofin,
            p1.Nom_Pessoa AS chefe,
            p2.Nom_Pessoa AS vice
        FROM Pessoa_Chefia pc
        LEFT JOIN Pessoa p1
               ON p1.Cod_Pessoa = pc.Cod_Pessoa
        LEFT JOIN Pessoa p2
               ON p2.Cod_Pessoa = pc.Cod_Pessoa_Vice
        ORDER BY pc.Dta_Inicio DESC";
//
/**  Mantivemos o padrão Orientado a Objetos ($rgeconnection->query) que você já usa  */
$result = $rgeconnection->query($sql);
if( !$result) {
    // 
    error_log("Erro SQL Pessoa_Chefia e Pessoa: " . $rgeconnection->error);
    die("Ocorreu um erro ao carregar os dados das Tabelas.");
}
//
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
            $anoAtual = (int) date('Y') ? ' current' : '';
        ?>
        <div class="timeline-item<?= $atual ?>">
            <div class="timeline-dot"></div>

            <div class="timeline-content">
                <div class="timeline-year">
                    <?= htmlspecialchars($row['anoini']) ?> – <?= htmlspecialchars($row['anofin']) ?>
                </div>
                <div class="timeline-name">
                    <!-- Alterado de$row['Nom_Pessoa'] para  $row['chefe']  -->
                    <?= htmlspecialchars($row['chefe']) ?>
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
        Nenhum registro de chefia encontrado.
    </div>

<?php endif; ?>

</div>

</div>
</section>
<!-- Final - Histórico de Chefias com BD/TB -->

<?php
include("rgerodape.php");
?>