<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Departamento de Genética</title>

<style>

/* RESET */
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

/* HERO */
.hero {
    position: relative;
    width: 100%;
    height: 320px;
    /* overflow: hidden; */
      overflow: visible; /* 🔥 ESSENCIAL */
}

/* CONTEÚDO CENTRALIZADO */
.hero-content {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    height: 100%;
}

/* FUNDO */
/*
.bg {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
}   
*/
.bg {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;

    filter: brightness(1.25); /* 🔥 clareia a imagem */
}

/* OVERLAY ESCURO */
.hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.01);
}

/* LOGO */
.logo {
    position: absolute;
    top: 50%;
    left: 30px;
    transform: translateY(-50%);
    width: clamp(120px, 15vw, 200px);
    filter: drop-shadow(0 0 8px rgba(0,0,0,0.6));
    z-index: 2;
     /*  opacity: 0.9; leve transparência */
     mix-blend-mode: multiply; /* 🔥 remove branco visualmente */
}

/* MENU */
.menu {
    position: absolute;
    bottom: 15px;
    right: 15px;
    z-index: 2;
}

/* BOTÃO */
.menu-btn {
    background: rgba(0,0,0,0.6);
    color: #fff;
    border: none;
    padding: 10px 14px;
    font-size: 24px;
    border-radius: 8px;
    cursor: pointer;
    backdrop-filter: blur(6px);
    transition: 0.3s;
}

.menu-btn:hover {
    background: rgba(0,0,0,0.8);
}

/* MENU LISTA */
.menu-list {
    display: none;
    list-style: none;
    margin-top: 10px;
    padding: 10px;
    background: rgba(0,0,0,0.85);
    border-radius: 10px;
    color: white;

    opacity: 0;
    transform: translateY(10px);
    transition: all 0.3s ease;
}

.menu-list.show {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

/* ITENS */
.menu-list li {
    padding: 8px 10px;
    cursor: pointer;
}

/* SUBMENU */
.has-sub span {
    cursor: pointer;
}

.submenu {
    display: none;
    margin-top: 5px;
    margin-left: 10px;
    /* background: rgba(255,255,255,0.1);  */
    
    background: rgba(0,0,0,0.85);


    border-radius: 6px;

    min-width: 200px;      /* 🔥 ESSENCIAL */
    white-space: nowrap;   /* 🔥 NÃO QUEBRA TEXTO */

}

.submenu li {
    padding: 10px;
}


.has-sub.active .submenu {
    display: block;
}

/* MOBILE */
.has-sub.active .submenu {
    display: block;
    margin-top: 5px;
}

/* DESKTOP */
@media (min-width: 768px) {

    .hero {
        height: 400px;
    }


    .menu-btn {
        display: none;
    }

    .menu-list {
        display: flex !important;
        opacity: 1;
        transform: none;
        background: none;
        gap: 20px;
    }

    .menu-list li {
        position: relative;
    }

    /* SUBMENU DESKTOP */
 
    /*
    .submenu {
        position: absolute;
        top: 100%;
        left: 0;
        display: none;
        padding: 10px;
        */
        /* 🔥 garante espaço 
        min-width: 200px; 
    }
      */

    .submenu {
        position: absolute;
        top: calc(100% - 10px); /* 🔥 sobe um pouco */
        left: 0;

        margin-top: 0;         /* remove espaço extra */
        padding: 8px 0;

        background: rgba(0,0,0,0.9);
        border-radius: 6px;

        min-width: 200px;
        white-space: nowrap;
        z-index: 999;
    }



    .has-sub:hover .submenu {
        display: block;
    }
}

</style>
</head>

<body>

<div class="hero">

    <img src="img/labmenu_peq_1024x264.jpg" class="bg">

    <div class="hero-content">

        <img src="img/logo_Depto_Genetica_branca_alt260.png" class="logo">

        <div class="menu">
            <button class="menu-btn">☰</button>

            <ul class="menu-list">
                <li>Início</li>

                <li class="has-sub">
                    <span>Serviços ▸</span>
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
</div>

<script>

/* MENU MOBILE */
const btn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu-list');

btn.addEventListener('click', () => {
    menu.classList.toggle('show');
});

/* SUBMENU MOBILE */
document.querySelectorAll('.has-sub span').forEach(item => {
    item.addEventListener('click', () => {
        item.parentElement.classList.toggle('active');
    });
});

</script>

</body>
</html>

