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


<div class="tradutor-box notranslate">

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
        includedLanguages: 'en,es',
        autoDisplay: false
    }, 'google_translate_element');
}

function traduzirSite(lang) {
    if (lang === 'pt') {
        apagarCookieTraducao();
        location.reload();
        return;
    }

    localStorage.setItem('idioma_site', lang);

    document.cookie = "googtrans=/pt/" + lang + "; path=/";
    document.cookie = "googtrans=/pt/" + lang + "; path=/; domain=sol.fmrp.usp.br";
    document.cookie = "googtrans=/pt/" + lang + "; path=/; domain=.fmrp.usp.br";

    setTimeout(function () {
        const combo = document.querySelector(".goog-te-combo");

        if (combo) {
            combo.value = lang;
            combo.dispatchEvent(new Event("change"));
        } else {
            location.reload();
        }
    }, 500);
}

function apagarCookieTraducao() {
    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=sol.fmrp.usp.br";
    document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=.fmrp.usp.br";

    localStorage.removeItem('idioma_site');
}

window.addEventListener('load', function () {
    const idioma = localStorage.getItem('idioma_site');

    if (idioma && idioma !== 'pt') {
        setTimeout(function () {
            document.cookie = "googtrans=/pt/" + idioma + "; path=/";
            document.cookie = "googtrans=/pt/" + idioma + "; path=/; domain=sol.fmrp.usp.br";
            document.cookie = "googtrans=/pt/" + idioma + "; path=/; domain=.fmrp.usp.br";

            const combo = document.querySelector(".goog-te-combo");

            if (combo) {
                combo.value = idioma;
                combo.dispatchEvent(new Event("change"));
            }
        }, 1000);
    }
});
</script>


<script
src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>


