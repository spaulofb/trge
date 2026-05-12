<?php
/****  Idiomas   
 * <div class="idiomas  notranslate">    
 *        <button onclick="traduzir('pt')"   >🇧🇷 PT</button>
    <button onclick="traduzir('en')"   >🇺🇸 EN</button>
</div>
 *   <div id="google_translate_element"></div>  -->
 * *****/
?>

<!--  <div id="google_translate_element"></div>  -->

<!-- Adicionamos a classe 'notranslate' na div pai -->
<div class="tradutor-custom-buttons notranslate">  
    <button id="btn-en"  onclick="traduzirParaIngles()" class="btn-tradutor">🇺🇸 EN</button>
    <button id="btn-pt"  onclick="resetParaPortugues()" class="btn-tradutor">🇧🇷 PT</button>
</div>

<div id="google_translate_element" style="display:none;"></div>


