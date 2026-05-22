    <link rel="stylesheet" href="assets/css/rgedocente.css">
<?php
/**
*     Docentes - 20260521
*   Conexao Mysql/BD
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("./Connections_rge/rgeconnection.php");  
//
/** Cabecalho/Menu  */

include('rgetopo.php');
//
// Garante acentuação correta
$rgeconnection->set_charset("utf8");

// SQL dos docentes
$sqlDocentes = "
SELECT 
    p.Cod_Pessoa,
    p.Nom_Pessoa,
    p.Telefone,
    p.Email,
    p.Link_Lattes,
    p.Pagina_Pessoal,
    p.Foto,
    p.Cod_Titulacao,
    t.Dsc_Titulacao,
    s.Dsc_Setor,
    cv.chefe_vice
FROM Pessoa p
INNER JOIN Setor s 
    ON p.Cod_Setor = s.Cod_Setor
INNER JOIN Titulacao t 
    ON p.Cod_Titulacao = t.Cod_Titulacao
LEFT JOIN (
    SELECT 
        Cod_chefia,
        chefe_vice
    FROM (
        SELECT 
            pc.cod_pessoa AS Cod_chefia,
            'Chefe' AS chefe_vice,
            pc.Dta_Inicio
        FROM Pessoa_Chefia pc

        UNION ALL

        SELECT 
            pc.cod_pessoa_vice AS Cod_chefia,
            'Vice_Chefe' AS chefe_vice,
            pc.Dta_Inicio
        FROM Pessoa_Chefia pc
    ) x
    ORDER BY Dta_Inicio DESC
    LIMIT 2
) cv
    ON p.Cod_Pessoa = cv.Cod_chefia
WHERE 
    p.Idf_Pessoa = 5
    AND p.Doc_Local = 'D'
    AND p.Idf_Status = 'A'
    AND (
        SYSDATE() <= p.Dta_Fim 
        OR p.Dta_Fim IS NULL
    )
ORDER BY p.Nom_Pessoa
";

$resultDocentes = mysqli_query($rgeconnection, $sqlDocentes);

if (!$resultDocentes) {
    die("Erro na consulta dos docentes: " . mysqli_error($rgeconnection));
}

// Número de docentes encontrados
$totalDocentes = mysqli_num_rows($resultDocentes);
//
// Definindo os Array
$chefe = [];
$viceChefe = [];
$docentes = [];
//
while( $linha = $resultDocentes->fetch_assoc()) {
     //
     //  Criando uma Variavel 
     extract($linha);
     //
    if ($linha['chefe_vice'] == 'Chefe') {

        $chefe[] = $linha;

    } elseif ($linha['chefe_vice'] == 'Vice_Chefe') {

        $viceChefe[] = $linha;

    } else {

        $docentes[] = $linha;
    }
}
//
usort($docentes, function($a, $b) {
    return strcmp($a['Nom_Pessoa'], $b['Nom_Pessoa']);
});
//
$docentesFinal = array_merge($chefe, $viceChefe, $docentes);
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
// Caminho das Fotos 
//  $caminhoFoto = "./dados/www/paulo/assets/img/fotos_docentes/";
$caminhoFoto = "./assets/img/fotos_docentes/";
//
?>

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
    <!-- Final - Page Header -->
    
    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo $totalDocentes;?></span>
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
    <!-- Final - Stats Bar -->

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
    <!-- Final - Filters -->



    <!-- Docentes Grid -->
<!-- Docentes Grid -->
<section class="docentes-section">
    <div class="container">

        <div class="section-label mb-4">Nossos Professores</div>

        <h2 class="mb-5" style="font-size: 2rem; font-weight: 700; color: #222;">
            Corpo Docente
        </h2>

        <p>
            Total de docentes: <strong><?php echo $totalDocentes; ?></strong>
        </p>

        <div class="row g-4">

            <?php foreach ($docentesFinal as $linha): ?>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="docente-card">

                        <div class="docente-photo-wrap  background:#F8F9FA !important">

                            <?php
                               //
                               //  FOTO DO DOCENTE
                               if( !empty($linha['Foto'])) {
                                    $fotoDocente = $caminhoFoto . $linha['Foto'];
                               } else {
                                    $fotoDocente = "";
                               }
                               /**  Final - if( !empty($linha['Foto'])) {  */
                               //
                               ?>
                               <?php if (!empty($fotoDocente)): ?>
                                  <div class="docente-photo-placeholder" style="border: 2px solid #FFFFFF;">
                                      <img 
                                          src="<?php echo htmlspecialchars($fotoDocente); ?>"
                                          alt="<?php echo htmlspecialchars($linha['Nom_Pessoa']); ?>"
                              
                                          style="
                                              width:125px;
                                              height:125px;
                              
                                              object-fit:cover;
                                              border: 2px solid #FFFFFF;
                                              border-radius:50%;
                              
                                              display:block;
                                          "
                                      >

                                  </div>
                                   
                              
                              <?php else: ?>
                              
                                  <div class="docente-photo-placeholder">
                                      <i class="bi bi-person-fill"></i>
                                  </div>
                              
                              <?php endif; ?>
                            
                            
                            <?php if ($linha['chefe_vice'] == 'Chefe'): ?>
                                <span class="docente-badge docente-badge-chefe">Chefe</span>
                            <?php elseif ($linha['chefe_vice'] == 'Vice_Chefe'): ?>
                                <span class="docente-badge">Vice-Chefe</span>
                            <?php endif; ?>

                        </div>

                        <div class="docente-body" style="display: flex; flex-direction: column; gap: 4px;" >
                             <!--  Nome Docente -->   
                            <h5 class="docente-name">
                                <?php echo htmlspecialchars(ajustanome($linha['Nom_Pessoa'])); ?>
                            </h5>

                            <!--  Titulacao  -->
                            <span class="docente-role" style="font-size:12px;" >
                                <?php echo htmlspecialchars($linha['Dsc_Titulacao']); ?>
                            </span>

                            <!--  Area/Setor  -->
                            <p class="docente-area"  >
                                <strong>Setor:</strong>
                                <span style="font-size:12px;"><?php echo htmlspecialchars(ajustanome($linha['Dsc_Setor'])); ?></span>
                            </p>

                            <div class="docente-contact">
                                <i class="bi bi-envelope"></i>
                                <?php echo htmlspecialchars(strtolower($linha['Email'])); ?><br>

                                <i class="bi bi-telephone"></i>
                                <?php echo htmlspecialchars($linha['Telefone']); ?>
                            </div>
                            
                            <!-- Curriculo Lates e Pagina Pessoal/Site -->            
                            <div class="docente-links"  style="display:flex;  justify-content:center; 
                                    align-items:center; gap:10px; flex-wrap:wrap;" >
                                 <!-- Curriculo Lates -->
                                <?php if (!empty($linha['Link_Lattes'])): ?>
                                    <a href="<?php echo htmlspecialchars($linha['Link_Lattes']); ?>"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="docente-link docente-link-primary" >
                                        Currículo Lattes
                                    </a>
                                <?php endif; ?>
                                
                                <!-- Pagina pessoal -->
                                <?php if( !empty($linha['Pagina_Pessoal']) ) : ?>
                                       <a href="<?php echo htmlspecialchars($linha['Pagina_Pessoal']); ?>" target="_blank" 
                                          rel="noopener noreferrer" class="chefia-link chefia-link-outline">Página Pessoal</a>
                                <?php endif; ?>
                           </div>
                           <!-- Final - Curriculo Lates e Pagina Pessoal/Site -->
                        </div>
                        <!--  Final -  <div class="docente-body">  -->
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    </div>
</section>

<?php
include("rgerodape.php");
?>
