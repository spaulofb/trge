<?php
/****  Idiomas   
 * <div class="idiomas  notranslate">    
 *        <button onclick="traduzir('pt')"   >🇧🇷 PT</button>
    <button onclick="traduzir('en')"   >🇺🇸 EN</button>
</div>
 *   <div id="google_translate_element"></div>  -->
 * 
 * 
 * 
 * *****/
?>

<!--  <div id="google_translate_element"></div>  -->

<!-- Adicionamos a classe 'notranslate' na div pai -->
<div class="tradutor-custom-buttons notranslate">  
    <button id="btn-en"  onclick="traduzirIdioma('en')" class="btn-tradutor">
        <img src="https://flagcdn.com/us.svg" width="20" alt="USA"></button>

    <button id="btn-es" onclick="traduzirIdioma('en')" class="btn-tradutor">
        <img src="https://flagcdn.com/es.svg" width="20" alt="Espanha">
    </button>


    <button id="btn-pt"  onclick="resetParaPortugues()" class="btn-tradutor"><img src="https://flagcdn.com/br.svg" width="20" alt="Brasil"></button>
</div>

<div id="google_translate_element" style="display:none;"></div>


