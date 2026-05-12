/**  
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'pt',
        includedLanguages: 'pt,en',
        autoDisplay: false
    }, 'google_translate_element');
}
function traduzir(lang) {
    const select = document.querySelector(".goog-te-combo");
    if (select) {
        select.value = lang;
        select.dispatchEvent(new Event('change'));
    }
}
 */

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'pt',
        includedLanguages: 'pt,en',
        autoDisplay: false
    }, 'google_translate_element');
}

function traduzir(lang) {

    // Salva o idioma em cookie
 //   document.cookie = "googtrans=/pt/" + lang + "; path=/";

    // Recarrega a página
   // location.reload();


    if (lang === 'pt') {
        document.cookie = "googtrans=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        document.cookie = "googtrans=; path=/trge/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
        location.reload();
        return;
    }

    document.cookie = "googtrans=/pt/" + lang + "; path=/";
    document.cookie = "googtrans=/pt/" + lang + "; path=/trge/";

    // Recarrega a página
    location.reload();
    //
}


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

/* espera o Google traduzir e só esconde a barra */
setInterval(esconderBarraGoogle, 500);

// Inicialização do Google Translate
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'pt',
        includedLanguages: 'pt,en',
        autoDisplay: false
    }, 'google_translate_element');
}

// FUNÇÃO PARA TRADUZIR PARA INGLÊS
function traduzirParaIngles() {
    // Define o cookie para Inglês (/idioma_origem/idioma_destino)
    // O domínio .usp.br garante que ele sobrescreva qualquer outro cookie do sistema
    document.cookie = "googtrans=/pt/en; path=/; domain=.usp.br";
    document.cookie = "googtrans=/pt/en; path=/";
    
    // Recarrega para aplicar
    window.location.reload();
}

// FUNÇÃO PARA VOLTAR PARA PORTUGUÊS (LIMPEZA TOTAL)
function resetParaPortugues() {
    // Lista de domínios para varrer e deletar cookies antigos que causam conflito
    var dominios = [window.location.hostname, '.usp.br', '.fmrp.usp.br'];
    
    dominios.forEach(function(dom) {
        // Expira o cookie em todos os caminhos possíveis
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + dom;
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/trge/; domain=" + dom;
    });

    // Limpeza final de cookie sem domínio
    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
    
    // Recarrega a página no estado original
    window.location.reload();
}

// NOVA FUNÇÃO: Verifica o idioma ao carregar a página
function checkActiveLang() {
    const cookies = document.cookie.split('; ');
    const langCookie = cookies.find(row => row.startsWith('googtrans='));
    
    const btnEn = document.getElementById('btn-en');
    const btnPt = document.getElementById('btn-pt');

    // Se o cookie contiver '/en', o negrito vai para o EN, senão vai para o PT
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
}

// Executa a verificação assim que a página termina de carregar
window.addEventListener('load', checkActiveLang);