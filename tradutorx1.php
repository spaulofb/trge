<?php
//
//  Tradutor - v20260515
//
/**
 *   <div class="tradutor-custom-buttons notranslate">  
*      <button id="btn-en"  onclick="traduzirParaIngles()" class="btn-tradutor"><img src="https://flagcdn.com/us.svg" width="20" alt="USA"></button>
*     <button id="btn-pt"  onclick="resetParaPortugues()" class="btn-tradutor"><img src="https://flagcdn.com/br.svg" width="20" alt="Brasil"></button>
*  </div>
*
*  <div id="google_translate_element" style="display:none;"></div>
* 
*/
?>
<!-- GOOGLE TRADUTOR -->

<style>

.tradutor-box {
    position: fixed;
    top: 15px;
    right: 15px;
    z-index: 99999;

    display: flex;
    gap: 6px;
}

.tradutor-box button {
    border: none;
    background: #1a5c3a;
    color: white;

    padding: 6px 10px;

    border-radius: 6px;

    font-size: 13px;
    font-weight: bold;

    cursor: pointer;

    transition: 0.3s;
}

.tradutor-box button:hover {
    background: #0f3d26;
}

/* ESCONDE BARRA DO GOOGLE */

.goog-te-banner-frame.skiptranslate {
    display: none !important;
}

body {
    top: 0px !important;
}

.goog-te-gadget {
    display: none !important;
}

iframe.goog-te-banner-frame {
    display: none !important;
}

</style>


<div class="tradutor-box  notranslate">

    <button onclick="traduzirSite('pt')">
        <img src="https://flagcdn.com/br.svg" width="20" alt="Brasil">
    </button>

    <button onclick="traduzirSite('en')">
        <img src="https://flagcdn.com/us.svg" width="20" alt="USA">
    </button>

    <button onclick="traduzirSite('es')">
        <img src="https://flagcdn.com/es.svg" width="20" alt="Espanha">
    </button>

</div>


<div id="google_translate_element" style="display:none;"></div>

<script>

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'pt',
        includedLanguages: 'pt,en,es',
        autoDisplay: false
    }, 'google_translate_element');
}

function traduzirSite(lang) {
    // 1. Salva a preferência no localStorage
    localStorage.setItem('idioma_site', lang);

    // 2. Limpa TODOS os cookies antigos para evitar o travamento de idiomas
    apagarCookieTraducao();

    // 3. Se for diferente de português, aplica o novo cookie de forma idêntica em ambos os escopos
    if (lang !== 'pt') {
        document.cookie = "googtrans=/pt/" + lang + "; path=/";
        document.cookie = "googtrans=/pt/" + lang + "; path=/; domain=" + location.hostname;
        document.cookie = "googtrans=/pt/" + lang + "; path=/; domain=." + location.hostname;
    }

    // 4. Recarrega a página para aplicar a tradução
    location.reload();
}

function apagarCookieTraducao() {
    // Remove o cookie limpando todas as variações possíveis de domínio
    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + location.hostname;
    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=." + location.hostname;
}

// Garante a persistência do idioma ao navegar pelas páginas internas
window.addEventListener('load', function () {
    const idioma = localStorage.getItem('idioma_site');

    if (idioma && idioma !== 'pt') {
        // Aplica exatamente a mesma regra de escrita adotada na função principal
        document.cookie = "googtrans=/pt/" + idioma + "; path=/";
        document.cookie = "googtrans=/pt/" + idioma + "; path=/; domain=" + location.hostname;
        document.cookie = "googtrans=/pt/" + idioma + "; path=/; domain=." + location.hostname;
    }
});

</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
