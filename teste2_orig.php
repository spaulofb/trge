<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento de Genética</title>
<style>

.hero {
    position: relative;
    width: 100%;
    height: 320px;
    overflow: hidden;
}

/* Fundo */
.bg {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Logo (lado esquerdo centralizado) */
.logo {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    width: 140px;

    filter: drop-shadow(0 0 8px rgba(0,0,0,0.6));
}

/* Menu canto inferior direito */
.menu {
    position: absolute;
    bottom: 15px;
    right: 15px;
}

/* Botão */
.menu-btn {
    background: rgba(0,0,0,0.6);
    color: #fff;
    border: none;
    padding: 10px 14px;
    font-size: 20px;
    border-radius: 8px;
    cursor: pointer;
}

/* Lista escondida */
.menu-list {
    display: none;
    list-style: none;
    margin-top: 10px;
    padding: 10px;
    background: rgba(0,0,0,0.85);
    border-radius: 10px;
    color: white;
}

/* Itens */
.menu-list li {
    padding: 8px 10px;
    cursor: pointer;
}

/* Submenu */
.submenu {
    display: none;
    margin-top: 5px;
    margin-left: 10px;
    background: rgba(255,255,255,0.1);
    border-radius: 6px;
}

/* Hover submenu */
.has-sub:hover .submenu {
    display: block;
}

/* RESPONSIVO */
@media (min-width: 768px) {

    .hero {
        height: 400px;
    }

    .logo {
        width: 200px;
    }

    .menu-btn {
        display: none;
    }

    .menu-list {
        display: block;
        background: none;
        display: flex;
        gap: 15px;
    }

    .submenu {
        position: absolute;
    }
}



</style>
</head>
<body>

<div class="hero">

    <!-- Fundo (imagem ou vídeo) -->
    <img src="img/labmenu_logo_1024x264.png" class="bg">

    <!-- Logo -->
    <img src="img/logo_Depto_Genetica_transp_alt260.png" class="logo">

    <!-- Menu -->
    <div class="menu">
        <button class="menu-btn">☰</button>

        <ul class="menu-list">
            <li>Início</li>
            <li class="has-sub">
                Serviços ▸
                <ul class="submenu">
                    <li>Genética Clínica</li>
                    <li>Exames</li>
                    <li>Pesquisa</li>
                </ul>
            </li>
            <li>Contato</li>
        </ul>
    </div>

</div>


<script>
const btn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu-list');

btn.addEventListener('click', () => {
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
});
</script>


</body>
</html>