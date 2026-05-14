<?php
/**  FOOTER  */
//  Caso sseion_start desativado - Ativar
if( !isset($_SESSION) ) {
     session_start();
}
//
?>
<!-- Footer -->
     
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <svg height="70" viewBox="0 0 280 70" xmlns="http://www.w3.org/2000/svg">
                        <path d="M35 5 C20 5, 10 20, 10 35 C10 55, 25 65, 35 65 C45 65, 50 55, 50 45 C50 35, 40 30, 35 30 C30 30, 25 35, 25 40 C25 45, 30 50, 35 50" 
                              stroke="white" stroke-width="3" fill="none" stroke-linecap="round"/>
                        <circle cx="35" cy="18" r="3" fill="white"/>
                        <text x="60" y="28" font-family="Inter, sans-serif" font-size="11" font-weight="600" fill="white">FMRP – USP</text>
                        <text x="60" y="48" font-family="Inter, sans-serif" font-size="18" font-weight="700" fill="white">Departamento de</text>
                        <text x="60" y="65" font-family="Inter, sans-serif" font-size="18" font-weight="700" fill="white">Genética</text>
                    </svg>
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

