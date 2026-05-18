<?php
/**
 *      TRADUTOR - v20260515
 */
?>
<style>
/***  Garante que o conteúdo dos botões não seja afetado visualmente pelo tradutor **/
.notranslate {
    translate: no !important;
}

/**   Esconde completamente a barra do Google Tradutor  **/
body > .skiptranslate {
    display: none !important;
}


/**   Esconde a barra superior do Google   **/
.goog-te-banner-frame.skiptranslate {
    display: none !important;
}

/**   Esconde o gadget padrão   **/
.goog-te-gadget {
    font-size: 0 !important;
}

/**   Esconde tooltip    **/
.goog-tooltip,
.goog-tooltip:hover {
    display: none !important;
}

/* Remove destaque azul */
.goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
}


/* Remove barra superior */
.goog-te-banner-frame.skiptranslate {
    display: none !important;
}


/* Remove iframe */
.goog-te-banner-frame.skiptranslate,
iframe.goog-te-banner-frame {
    display: none !important; 
    visibility: hidden !important;
    height: 0 !important;
}


.goog-tooltip,
.goog-tooltip:hover {
    display: none !important;
}

/* Remove destaque azul */
.goog-text-highlight {
    background: none !important;
    box-shadow: none !important;
}

/* Esconde tooltip */
.goog-tooltip {
    display: none !important;
}

/* Esconde gadget padrão */
.goog-te-gadget {
    font-size: 0 !important;
}

.idiomas {
    position: absolute;
    /**  top: 15px;  */
    top: 2px;
    /** right: 20px;  */
    right: 2px;
    z-index: 9999;

    display: flex;
    gap: 8px;
    
}

.idiomas button {
    background: rgba(255,255,255,0.9);
    border: none;
    /* padding: 6px 12px;  */
      padding: 3px 6px;
     border-radius: 20px;  

    font-weight: bold;
    cursor: pointer;

    transition: 0.3s;

}

.idiomas button:hover {
    background: #2E7D32;
    color: white;
}

.btn-tradutor {
    /* Tamanho menor e mais discreto */
    font-size: 13px; 
    
    /* Peso da fonte médio (nem muito fino, nem muito grosso) */
    font-weight: 500;
    
    /* Cor um pouco mais suave que o preto puro */
    color: #555; 
    
    /* Espaçamento para as letras não ficarem "espremidas" */
    letter-spacing: 0.5px;
    
    /* Remove bordas brutas e fundos padrão */
    background: transparent;
    border: 1px solid #ddd;
    border-radius: 4px;
    
    /* Espaçamento interno */
    padding: 4px 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    
    /* Alinhamento para as bandeiras */
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

/* Efeito ao passar o mouse */
.btn-tradutor:hover {
    background-color: #f8f9fa;
    color: #000;
    border-color: #bbb;
}

@media (max-width: 768px) {

    .idiomas {
        top: 10px;
        right: 10px;
    }

    .idiomas button {
        padding: 5px 8px;
        font-size: 12px;
    }


}

</style>
<!-- Adicionamos a classe 'notranslate' na div pai -->
<div class="tradutor-custom-buttons notranslate">  

    <button id="btn-pt"  onclick="resetParaPortugues()" class="btn-tradutor">
        <img src="https://flagcdn.com/br.svg" width="20" alt="Brasil"></button>

    <button id="btn-en"  onclick="traduzirParaIngles()" class="btn-tradutor">
        <img src="https://flagcdn.com/us.svg" width="20" alt="USA"></button>

    <button id="btn-es" onclick="traduzirParaEspanhol()" class="btn-tradutor">
        <img src="https://flagcdn.com/es.svg" width="20" alt="Esppanha">
    </button>

</div>

<div id="google_translate_element" style="display:none;"></div>



<script>
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'pt',
          /**  includedLanguages: 'pt,en,es',  */
        includedLanguages: 'en,es',
        autoDisplay: false
    }, 'google_translate_element');
}



/* MARCA VISUALMENTE O IDIOMA ATIVO */
function marcarIdiomaAtivo(lang) {

    const btnPt = document.getElementById('btn-pt');
    const btnEn = document.getElementById('btn-en');
    const btnEs = document.getElementById('btn-es');

    // limpa todos
    [btnPt, btnEn, btnEs].forEach(function(btn) {
        if (!btn) return;

        btn.style.fontWeight = 'normal';
        btn.style.opacity = '0.7';
        btn.style.borderBottom = 'none';
    });

    // marca o escolhido
    if (lang === 'pt' && btnPt) {
        btnPt.style.fontWeight = 'bold';
        btnPt.style.opacity = '1';
        btnPt.style.borderBottom = '2px solid #000';
    }

    if (lang === 'en' && btnEn) {
        btnEn.style.fontWeight = 'bold';
        btnEn.style.opacity = '1';
        btnEn.style.borderBottom = '2px solid #000';
    }

    if (lang === 'es' && btnEs) {
        btnEs.style.fontWeight = 'bold';
        btnEs.style.opacity = '1';
        btnEs.style.borderBottom = '2px solid #000';
    }
}

function traduzir(lang) {
    if (lang === 'pt') {
        document.cookie = "googtrans=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        /* document.cookie = "googtrans=; path=/trge/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";  */
        document.cookie = "googtrans=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        location.reload();
        return;
    }
    document.cookie = "googtrans=/pt/" + lang + "; path=/";
    /*  document.cookie = "googtrans=/pt/" + lang + "; path=/trge/";   */

    // Recarrega a página
    location.reload();
    //
}
//
document.addEventListener("DOMContentLoaded", function () {
    function removeBarraGoogle() {
        const banner = document.querySelector(".goog-te-banner-frame");
        if (banner) {
            banner.style.display = "none";
        }
        document.body.style.top = "0px";
    }
    setInterval(removeBarraGoogle, 500);
});
//
function esconderBarraGoogle() {
    const banner = document.querySelector('iframe.goog-te-banner-frame');
    if (banner) {
        banner.style.display = 'none';
        banner.style.visibility = 'hidden';
        banner.style.height = '0';
    }
    document.body.style.top = '0px';
    document.documentElement.style.top = '0px';
}
//
/* espera o Google traduzir e só esconde a barra */
setInterval(esconderBarraGoogle, 500);


// Função genérica para setar o cookie de tradução
// 1. FUNÇÃO MESTRE (A única que deve manipular cookies e reload)
function configurarTraducao(lang) {
    const cookieValue = "/pt/" + lang;
    
    // Limpa cookies antigos em todos os domínios possíveis para evitar conflito
    const dominios = [window.location.hostname, '.usp.br', '.fmrp.usp.br'];
    dominios.forEach(dom => {
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + dom;
    });

    // Define o novo cookie com SameSite=Lax (Correção para Firefox/Safari)
    document.cookie = "googtrans=" + cookieValue + "; path=/; SameSite=Lax";
    
    // Salva no LocalStorage como backup
    localStorage.setItem('googtrans', cookieValue);

    // Tenta acionar o widget do Google se ele já estiver carregado
    const combo = document.querySelector(".goog-te-combo");
    if (combo) {
        combo.value = lang;
        combo.dispatchEvent(new Event("change"));
    } else {
        // Se o widget não carregou ainda, força o reload real com timestamp
        // Isso resolve o problema do Firefox não "perceber" a mudança
        const url = new URL(window.location.href);
        url.searchParams.set('lang_refresh', Date.now());
        window.location.href = url.toString();
    }
}

// FUNÇÃO PARA TRADUZIR PARA INGLÊS
// 2. FUNÇÕES SIMPLIFICADAS DOS BOTÕES
function traduzirParaIngles() {
    marcarIdiomaAtivo('en');
    configurarTraducao('en');
}


// FUNÇÃO PARA TRADUZIR PARA ESPANHOL
function traduzirParaEspanhol() {
    marcarIdiomaAtivo('es');
    configurarTraducao('es');
}


// FUNÇÃO PARA VOLTAR PARA PORTUGUÊS (LIMPEZA TOTAL)
function resetParaPortugues() {
    marcarIdiomaAtivo('pt');
    
    const dominios = [window.location.hostname, '.usp.br', '.fmrp.usp.br'];
    dominios.forEach(dom => {
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + dom;
    });
    
    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
    localStorage.removeItem('googtrans');

    // Volta para a URL original sem o parâmetro de refresh
    window.location.href = window.location.pathname;
}



// NOVA FUNÇÃO: Verifica o idioma ao carregar a página
function checkActiveLang() {
    const cookies = document.cookie.split('; ');
    const langCookie = cookies.find(row => row.startsWith('googtrans='));
    
    /**
    const btnEn = document.getElementById('btn-en');
    const btnPt = document.getElementById('btn-pt');
 */

    const btnPt = document.getElementById('btn-pt');
    const btnEn = document.getElementById('btn-en');
    const btnEs = document.getElementById('btn-es');


    // Se o cookie contiver '/en', o negrito vai para o EN, senão vai para o PT
/**  
    if (langCookie && langCookie.includes('/en')) {
        btnEn.style.fontWeight = 'bold';
        btnPt.style.fontWeight = 'normal';
        btnEn.style.opacity = '1';     // Opcional: deixar mais opaco
        btnPt.style.opacity = '0.7';   // Opcional: deixar o outro mais suave
        btnEn.style.borderBottom = '2px solid #000'; // Linha embaixo do idioma ativo
    } else {
        btnPt.style.fontWeight = 'bold';
        btnEn.style.fontWeight = 'normal';
        btnPt.style.opacity = '1';
        btnEn.style.opacity = '0.7';
        btnPt.style.borderBottom = '2px solid #000'; // Linha embaixo do idioma ativo
    }
 */

        // limpa estilos
    [btnEn, btnPt, btnEs].forEach(btn => {

        if (!btn) return;

        btn.style.fontWeight = 'normal';
        btn.style.opacity = '0.7';
        btn.style.borderBottom = 'none';
    });

    // inglês
    if (langCookie && langCookie.includes('/en')) {

        btnEn.style.fontWeight = 'bold';
        btnEn.style.opacity = '1';
         /* btnPt.style.borderBottom = 'none';  */
        btnEn.style.borderBottom = '2px solid #000' ; // Linha embaixo do idioma ativo
    }

    // espanhol
    else if (langCookie && langCookie.includes('/es')) {

        btnEs.style.fontWeight = 'bold';
        btnEs.style.opacity = '1';
        btnEs.style.borderBottom = '2px solid #000';
    }

    // português
    else {

        btnPt.style.fontWeight = 'bold';
        btnPt.style.opacity = '1';
        btnPt.style.borderBottom = '2px solid #000';
    }

}

// Executa a verificação assim que a página termina de carregar
//  window.addEventListener('load', checkActiveLang);
//  window.addEventListener('load', checkActiveLang);


</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



