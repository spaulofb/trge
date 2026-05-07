<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Departamento de Genética</title>
<!-- Importando a fonte Montserrat do Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');    

body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

/* BANNER 100% */
.banner {
    position: relative;
    width: 100%;
    /*  height: 320px;   */
    height: 402px;
}

.banner::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3); /* Escurece o vídeo em 30% */
    z-index: 1;
}


/* IMAGEM */
/*
.bg {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
*/
    /* filter: brightness(1.2);  */  
/*    filter: brightness(1.25) contrast(1.1);
}
*/

/* Ajuste para que o vídeo/imagem de fundo se comporte corretamente */
.bg {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Mantém a proporção sem distorcer */
    z-index: 0; /* Garante que fique atrás de tudo */
    
    /* Filtros que você já estava usando */
    filter: brightness(1.25) contrast(1.1);
}





/* LOGO AGORA SOBRE A IMAGEM */
/*
.logo {
    position: absolute;
    left: 20px;  */  /* 🔥 canto esquerdo */
/*    
    top: 50%;
    transform: translateY(-50%);
    height: 120px;
    opacity: 0.95;  
     filter: drop-shadow(0 0 10px rgba(0,0,0,0.6));
}
*/     

/* CONTAINER DO LOGO */


.logo-box {
    position: absolute;

    /*  top: 50%;
    transform: translateY(-50%);
    */

    /* margin-left: 10px;  */
    margin-top: 4px;
    margin-left: 20px;

    /*  width: 25%;  */
    width: auto;
    height: auto;

    display: flex;
    /*  align-items: center;   */
    align-items: flex-start;  

    /*  justify-content: center;  
    *    justify-content: flex-start;
    */
   

     gap: 12px; /* espaço entre logo e texto */

    color: white;


    /* 🔥 AQUI ESTÁ O FADE */
    /*
    background: linear-gradient(
        to right,
        rgba(0,0,0,0.6),
        rgba(0,0,0,0.3),
        rgba(0,0,0,0)
    );
    */
}

/* Garante que o logo e o menu fiquem ACIMA dessa camada escura */
.logo-box, .menu {
    z-index: 2;
}



/* IMAGEM DO LOGO */
.logo {
    display:block;
    width: auto;
    /*  width: 100%;
    *  height: 92%;   
    */
     max-height: 92%;
    object-fit: contain; /* 🔥 NÃO DEFORMA */
    margin-left:2px;
}

.logo-texto {
    position: absolute; /* 🔥 faz sobrepor */
    display: flex;
    flex-direction: column;
    font-family: 'Montserrat', sans-serif;  
     text-shadow: 0 2px 6px rgba(0,0,0,0.7);
     /*  margin-top: 4px;  */
      transform: translate(60px,4px); /* ajuste fino */    
      white-space: nowrap; 
}

/* Linha principal */
.linha1 {
    font-size: 26px;
    font-weight: 600;
}

/* Linha menor */
.linha2 {
    font-size: 22px;
    font-weight: 400;
}


/* MENU */
.menu {
    position: absolute;
    bottom: 15px;
    right: 20px;
}

/* MENU HORIZONTAL */
.menu-list {
    list-style: none;
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 10px 15px;

    background: rgba(0,0,0,0.5);
    border-radius: 10px;
    backdrop-filter: blur(6px);
}

/* LINKS */
.menu-list a {
    color: #fff;
    text-decoration: none;
}

/* SUBMENU */
.menu-list li {
    position: relative;
}

.submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0; /* mantém alinhado com o item pai */

    background: rgba(0,0,0,0.9);
    border-radius: 6px;
    min-width: 180px;

    padding: 5px 0; /* 🔥 diminui espaço lateral */
}


.submenu li a {
     display: block;  
     position: relative;
    padding: 10px;
     /*    padding: 8px 12px;  🔥 mais justo */
     transition: 0.2s;
}


.submenu li a:hover {
    background: rgba(255,255,255,0.15);
    padding-left: 16px; /* 🔥 leve movimento */
}

.submenu li a::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 3px;
    height: 100%;
    background: #00aaff;
    opacity: 0;
    transition: 0.2s;
}

.submenu li a:hover::before {
    opacity: 1;
}


.menu-list > li > a:hover {
    color: #00aaff;
}

/* HOVER */
.has-sub:hover .submenu {
    display: block;
}


.menu-toggle {
    display: none;
    font-size: 22px;
    color: white;
    background: rgba(0,0,0,0.6);
    padding: 8px 12px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}

/* botão serviços */
.submenu-btn {
    background: none;
    border: none;
    color: #fff;
    font: inherit;
    cursor: pointer;
    padding: 10px;
    width: 100%;
    text-align: left;
}



/* 📱 MOBILE */
@media (max-width: 768px) {

  /* remove hover no mobile */
    .has-sub:hover .submenu {
        display: none;
    }


    .submenu {
        position: static;
    }

    /* menu vertical */
    .menu-list {
        flex-direction: column;
        display: none;
    }

    .menu-list.active {
        display: flex;
    }

    .menu-toggle {
        display: block;
        margin-bottom: 5px;
    }


    /* submenu controlado por clique */
    .has-sub.active .submenu {
        display: block !important; /* Garante a exibição */
        position: static; /* Faz o menu "empurrar" os itens de baixo, melhor no mobile */
        width: 100%;
        background: rgba(255,255,255,0.1); /* Um fundo leve para destacar os sub-itens */
    }

    .submenu li a {
        padding-left: 10px; /* Recuo para parecer uma sub-lista */
    }



}

</style>
</head>

<body>


<header>

    <div class="banner">

        <!-- IMAGEM GRANDE     <img src="img/labmenu_peq_1024x264.jpg" class="bg">    -->
      <video autoplay muted loop playsinline class="bg">
          <source src="video/video_lab_aluna.mp4" type="video/mp4">
           Seu navegador não suporta vídeos.
      </video>


                
        <!-- CONTAINER DO LOGO -->
        <div class="logo-box">
            <!-- LOGO AGORA DENTRO DA IMAGEM 
             <img  src="img/logo_Depto_Genetica_transp_alt260_sem_texto.png" class="logo">   -->
             <img  src="img/logo_52x108.png" class="logo">  


    <div class="logo-texto">
        <span class="linha1">Departamento de Genética</span>
        <span class="linha2">FMRP/USP</span>
    </div>

        </div>


        <!-- MENU -->
        <nav class="menu">

            <button class="menu-toggle">☰</button>


            <ul class="menu-list">

                <li><a href="#">Início</a></li>

                <li class="has-sub">
                    <a href="#" >Serviços ▾</a>
                    <ul class="submenu">
                        <li><a href="#">Genética Clínica</a></li>
                        <li><a href="#">Exames</a></li>
                        <li><a href="#">Pesquisa</a></li>
                    </ul>
                </li>

                <li><a href="#">Contato</a></li>

            </ul>
        </nav>

    </div>

</header>


<script>
const toggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu-list');

// Abre/Fecha o menu principal (Hambúrguer)
toggle.addEventListener('click', (e) => {
    e.stopPropagation();
    menu.classList.toggle('active');
});

// SUBMENU (Clique no item Serviços)
document.querySelectorAll('.has-sub > a').forEach(link => {
    link.addEventListener('click', (e) => {
        // Verifica se estamos no mobile (largura menor que 768px)
        if (window.innerWidth <= 768) {
            e.preventDefault(); // Impede o link '#' de pular a página
            e.stopPropagation();

            const parent = link.parentElement;

            // Opcional: Fecha outros submenus abertos ao abrir um novo
            document.querySelectorAll('.has-sub').forEach(item => {
                if (item !== parent) {
                    item.classList.remove('active');
                }
            });

            // Ativa/Desativa o submenu atual
            parent.classList.toggle('active');
        }
    });
});

// Fecha o menu se clicar em qualquer lugar fora dele
document.addEventListener('click', () => {
    menu.classList.remove('active');
    document.querySelectorAll('.has-sub').forEach(item => item.classList.remove('active'));
});

</script>


</body>
</html>

