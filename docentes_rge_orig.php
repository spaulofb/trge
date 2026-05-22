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
//  Criando Array $linhas
$linha = $resultDocentes->fetch_assoc();
//
/**  Converte em Variaveis desse Array $linha  */
extract($linha);
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

<?php
include("rgerodape.php");
?>