<?php
/**  MENU E TRADUTO  */
//  Caso sseion_start desativado - Ativar
if( !isset($_SESSION) ) {
     session_start();
}
//
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <svg height="55" viewBox="0 0 280 70" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35 5 C20 5, 10 20, 10 35 C10 55, 25 65, 35 65 C45 65, 50 55, 50 45 C50 35, 40 30, 35 30 C30 30, 25 35, 25 40 C25 45, 30 50, 35 50" 
                          stroke="#1a5c3a" stroke-width="3" fill="none" stroke-linecap="round"/>
                    <circle cx="35" cy="18" r="3" fill="#1a5c3a"/>
                    <text x="60" y="28" font-family="Inter, sans-serif" font-size="11" font-weight="600" fill="#1a5c3a">FMRP – USP</text>
                    <text x="60" y="48" font-family="Inter, sans-serif" font-size="18" font-weight="700" fill="#1a5c3a">Departamento de</text>
                    <text x="60" y="65" font-family="Inter, sans-serif" font-size="18" font-weight="700" fill="#1a5c3a">Genética</text>
                </svg>
            </a>


            <div class="d-flex align-items-center order-lg-last">
                <div class="d-flex align-items-center me-3">
                    <!-- Tradutor -->
                     <?php include $BASE_PATH.'includes/idiomas.php'; ?>
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
                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>includes/depto_genetica_frmp_usp.php">Sobre o Departamento</a></li>
                            <li><a class="dropdown-item" href="#">História</a></li>
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
