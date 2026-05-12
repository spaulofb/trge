<?php
/**   Departamento de Genética - FMRP/USP   ***/
// index.php (página inicial)
//
//  Caso sseion_start desativado - Ativar
if( !isset($_SESSION) ) {
     session_start();
}
//  SESSIONs
$BASE_URL = $_SESSION["BASE_URL"] ;
$BASE_PATH = $_SESSION["BASE_PATH"] ;
//
$ip_cliente = $_SERVER['REMOTE_ADDR'];
//
$ip_permitidos = ['143.107.143.231', '143.107.143.232', '143.107.143.251', '143.107.143.254'];
if( !in_array($ip_cliente, $ip_permitidos) ) {
    http_response_code(503);
    include $BASE_PATH.'includes/em-construcao.html';
    //
    exit;
}


//
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="google" content="notranslate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento TESTE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="<?php echo $BASE_URL; ?>js/tradutor.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>css/styleidiomas.css">
    <style>
        :root {
            --primary-green: #1a5c3a;
            --dark-green: #0f3d26;
            --light-green: #2d7a52;
            --accent-green: #4ade80;
            --bg-light: #f8f9fa;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            color: #333;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar-brand img {
            height: 55px;
        }

        .navbar {
            padding: 0.5rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar-nav .nav-link {
            color: #444;
            font-weight: 500;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding: 1rem 1rem !important;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus {
            color: var(--primary-green);
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .dropdown-item {
            font-size: 0.9rem;
            padding: 0.6rem 1.2rem;
        }

        .dropdown-item:hover {
            background-color: rgba(26, 92, 58, 0.08);
            color: var(--primary-green);
        }

        .lang-switch {
            font-size: 0.8rem;
            color: #666;
            text-decoration: none;
        }

        .lang-switch:hover {
            color: var(--primary-green);
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 600px;
            background: linear-gradient(90deg, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.2) 100%),
                        url('https://images.unsplash.com/photo-1579154204601-01588f351e67?w=1920&h=600&fit=crop') center/cover no-repeat;
            display: flex;
            align-items: center;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 0.5rem;
        }

        .hero-content .subtitle {
            font-size: 1.5rem;
            font-weight: 300;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.1rem;
            font-weight: 300;
            max-width: 400px;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn-green {
            background-color: var(--primary-green);
            color: white;
            border: 2px solid var(--primary-green);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .btn-green:hover {
            background-color: var(--dark-green);
            border-color: var(--dark-green);
            color: white;
            transform: translateY(-2px);
        }

        .btn-outline-light-custom {
            background-color: rgba(255,255,255,0.15);
            color: white;
            border: 1px solid rgba(255,255,255,0.4);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .btn-outline-light-custom:hover {
            background-color: rgba(255,255,255,0.25);
            color: white;
            transform: translateY(-2px);
        }

        .hero-indicators {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .hero-indicators span {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255,255,255,0.4);
            cursor: pointer;
            transition: all 0.3s;
        }

        .hero-indicators span.active {
            background: var(--accent-green);
            width: 25px;
            border-radius: 5px;
        }

        /* Feature Cards */
        .features-section {
            margin-top: -60px;
            position: relative;
            z-index: 10;
            padding-bottom: 3rem;
        }

        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 2rem 1.5rem;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.04);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 35px rgba(0,0,0,0.12);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 1rem;
        }

        .feature-icon svg {
            width: 100%;
            height: 100%;
        }

        .feature-card h5 {
            color: var(--primary-green);
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .feature-card p {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .feature-link {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: gap 0.3s;
        }

        .feature-link:hover {
            gap: 10px;
            color: var(--dark-green);
        }

        /* Section Labels */
        .section-label {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--primary-green);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-label::before {
            content: '';
            display: inline-block;
            width: 25px;
            height: 2px;
            background: var(--primary-green);
        }

        /* About Section */
        .about-section {
            padding: 4rem 0;
            background: var(--bg-light);
        }

        .about-section h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .about-section p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .about-img {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .about-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* News Section */
        .news-section {
            padding: 4rem 0;
        }

        .news-section .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .news-section h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #222;
        }

        .see-all-link {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .see-all-link:hover {
            color: var(--dark-green);
        }

        .news-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.06);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.04);
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .news-img {
            height: 160px;
            overflow: hidden;
        }

        .news-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .news-card:hover .news-img img {
            transform: scale(1.05);
        }

        .news-body {
            padding: 1.2rem;
        }

        .news-date {
            font-size: 0.75rem;
            color: #888;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .news-title {
            font-size: 0.95rem;
            font-weight: 600;
            color: #222;
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }

        .news-excerpt {
            font-size: 0.8rem;
            color: #666;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .news-link {
            color: var(--primary-green);
            text-decoration: none;
            font-size: 1.1rem;
        }

        .news-link:hover {
            color: var(--dark-green);
        }

        /* Research Section */
        .research-section {
            padding: 4rem 0;
            background: var(--bg-light);
        }

        .research-section h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 2.5rem;
        }

        .research-carousel {
            position: relative;
        }

        .research-item {
            text-align: center;
            padding: 1.5rem;
        }

        .research-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 1rem;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);
        }

        .research-icon svg {
            width: 35px;
            height: 35px;
        }

        .research-item h5 {
            font-size: 0.95rem;
            font-weight: 600;
            color: #222;
            margin-bottom: 0.5rem;
        }

        .research-item p {
            font-size: 0.8rem;
            color: #666;
            line-height: 1.5;
            max-width: 200px;
            margin: 0 auto;
        }

        .carousel-control-prev-custom,
        .carousel-control-next-custom {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            z-index: 10;
        }

        .carousel-control-prev-custom:hover,
        .carousel-control-next-custom:hover {
            background: var(--primary-green);
            border-color: var(--primary-green);
            color: white;
        }

        .carousel-control-prev-custom {
            left: -20px;
        }

        .carousel-control-next-custom {
            right: -20px;
        }

        /* Footer */
        .footer {
            background: var(--dark-green);
            color: rgba(255,255,255,0.8);
            padding: 4rem 0 1.5rem;
        }

        .footer-logo {
            height: 70px;
            margin-bottom: 1rem;
            filter: brightness(0) invert(1);
        }

        .footer-desc {
            font-size: 0.85rem;
            line-height: 1.6;
            max-width: 250px;
            color: rgba(255,255,255,0.7);
        }

        .footer h6 {
            color: white;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1.5rem;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 0.6rem;
        }

        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 0.8rem;
            font-size: 0.85rem;
            color: rgba(255,255,255,0.7);
        }

        .footer-contact-item i {
            margin-top: 3px;
            font-size: 0.9rem;
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 1.5rem;
        }

        .social-links a {
            width: 32px;
            height: 32px;
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 0.85rem;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: white;
            color: var(--dark-green);
            border-color: white;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 3rem;
            padding-top: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-bottom p {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.5);
            margin: 0;
        }

        .footer-bottom-links a {
            color: rgba(255,255,255,0.5);
            text-decoration: none;
            font-size: 0.8rem;
            margin-left: 1rem;
        }

        .footer-bottom-links a:hover {
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            .hero-content .subtitle {
                font-size: 1.2rem;
            }
            .features-section {
                margin-top: -30px;
            }
            .carousel-control-prev-custom {
                left: 0;
            }
            .carousel-control-next-custom {
                right: 0;
            }
        }




/*  ************************************************************  */
   :root{
      --green:#1f7a45;
      --green-dark:#0f5530;
      --green-soft:#eaf4ee;
      --text:#1d2430;
      --muted:#64707f;
      --bg:#f5f7f8;
      --card:#ffffff;
      --shadow:0 10px 28px rgba(16,24,40,.10);
      --radius:18px;
    }
    *{box-sizing:border-box}
    html,body{margin:0;padding:0;background:var(--bg);color:var(--text);font-family:Inter,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Arial,sans-serif}
    a{text-decoration:none;color:inherit}
    .page{max-width:1365px;margin:0 auto;background:#fff;overflow:hidden}
    .topbar{height:88px;display:flex;align-items:center;justify-content:center;background:#fff;border-bottom:1px solid #e6ece8;padding:0 22px}
    .topbar-inner{width:100%;max-width:1200px;display:flex;align-items:center;justify-content:space-between}
    .brand{display:flex;align-items:center;gap:14px}
    .brand-mark{width:34px;height:58px;position:relative}
    .brand-mark:before,
    .brand-mark:after{
      content:"";position:absolute;inset:0;border-radius:18px 18px 18px 18px;
      background:linear-gradient(180deg,var(--green) 0%,#2ea15d 100%);
      clip-path:polygon(53% 0%,72% 7%,61% 21%,47% 37%,38% 52%,29% 66%,18% 78%,34% 100%,11% 100%,0% 77%,10% 60%,22% 43%,35% 28%,45% 15%);
      transform:skewX(-7deg);
    }
    .brand-text{line-height:1}
    .brand-text .small{font-size:12px;color:#6a7885;letter-spacing:.02em}
    .brand-text .big{font-size:24px;font-weight:800;color:#17663a}
    .utility{display:flex;align-items:center;gap:18px;color:#596674;font-size:12px}
    .search{width:18px;height:18px;border:2px solid currentColor;border-radius:50%;position:relative;display:inline-block}
    .search:after{content:"";position:absolute;width:8px;height:2px;background:currentColor;right:-6px;bottom:-2px;transform:rotate(45deg);border-radius:2px}
    .navbar{height:54px;display:flex;align-items:center;justify-content:center;background:#fff;border-bottom:1px solid #eef2ef}
    .nav-inner{width:100%;max-width:1200px;display:flex;align-items:center;justify-content:center;gap:34px;font-size:14px;font-weight:600;color:#475463}
    .nav-item{display:flex;align-items:center;gap:6px}
    .caret{width:7px;height:7px;border-right:2px solid currentColor;border-bottom:2px solid currentColor;transform:rotate(45deg);margin-top:-3px}
    .hero{
      position:relative;min-height:520px;display:flex;align-items:stretch;
      background:
        linear-gradient(90deg, rgba(10,14,18,.82) 0%, rgba(16,22,29,.70) 36%, rgba(31,39,49,.30) 62%, rgba(31,39,49,.18) 100%),
        radial-gradient(circle at 76% 43%, rgba(255,255,255,.42) 0 8%, transparent 9%),
        linear-gradient(135deg,#0d1216 0%,#2b3239 36%,#dfe6e8 100%);
      overflow:hidden;
    }
    .hero::before{
      content:"";position:absolute;inset:auto -10% -5% 52%;
      width:60%;height:78%;
      background:
        linear-gradient(180deg,rgba(255,255,255,.15),rgba(255,255,255,.05)),
        radial-gradient(circle at 35% 20%, rgba(255,255,255,.26), transparent 24%),
        radial-gradient(circle at 60% 36%, rgba(255,255,255,.22), transparent 18%),
        linear-gradient(180deg,#12161b 0,#1d232a 35%,#2f3841 100%);
      transform:skewX(-10deg);
      filter:blur(1px);
      border-radius:28px;
      opacity:.55;
    }
    .hero::after{
      content:"";position:absolute;right:-4%;top:4%;width:44%;height:92%;
      background:
        radial-gradient(circle at 28% 24%, rgba(238,244,247,.95) 0 6%, transparent 7%),
        radial-gradient(circle at 31% 27%, rgba(255,255,255,.92) 0 12%, transparent 13%),
        radial-gradient(circle at 50% 20%, rgba(228,236,240,.9) 0 10%, transparent 11%),
        linear-gradient(180deg, rgba(223,230,235,.95) 0%, rgba(199,209,215,.87) 48%, rgba(236,239,241,.72) 100%);
      opacity:.8;
      clip-path:polygon(66% 0,100% 0,100% 100%,52% 100%,44% 84%,42% 67%,46% 44%,52% 28%,58% 16%);
      filter:blur(.2px);
    }
    .hero-inner{position:relative;z-index:1;max-width:1200px;margin:0 auto;width:100%;padding:72px 22px 64px;display:flex;align-items:flex-end}
    .hero-copy{max-width:560px;color:#fff}
    .accent{width:56px;height:4px;background:#2da45d;border-radius:999px;margin-bottom:20px}
    .hero h1{margin:0;font-size:56px;line-height:.98;letter-spacing:-.03em}
    .hero h2{margin:12px 0 18px;font-size:26px;line-height:1.1;font-weight:700}
    .hero p{margin:0 0 28px;max-width:420px;font-size:18px;line-height:1.45;color:rgba(255,255,255,.86)}
    .hero-actions{display:flex;gap:14px;align-items:center;flex-wrap:wrap}
    .btn{display:inline-flex;align-items:center;gap:10px;padding:14px 22px;border-radius:999px;font-weight:700;font-size:14px;transition:.2s ease}
    .btn-primary{background:var(--green);color:#fff;box-shadow:0 12px 24px rgba(31,122,69,.22)}
    .btn-primary:hover{background:#176339}
    .btn-outline{border:1.5px solid rgba(255,255,255,.4);color:#fff;background:rgba(255,255,255,.04)}
    .btn-outline:hover{background:rgba(255,255,255,.1)}
    .arrow{display:inline-block;border:solid currentColor;border-width:0 2px 2px 0;padding:3px;transform:rotate(-45deg)}
    .dots{position:absolute;left:50%;bottom:18px;transform:translateX(-50%);display:flex;gap:10px;z-index:2}
    .dots span{width:8px;height:8px;border-radius:50%;background:rgba(255,255,255,.48);display:block}
    .dots span.active{background:#2da45d;box-shadow:0 0 0 3px rgba(45,164,93,.18)}
    .cards-row{max-width:1200px;margin:-42px auto 0;padding:0 22px;display:grid;grid-template-columns:repeat(4,1fr);gap:18px;position:relative;z-index:3}
    .feature-card{
      background:#fff;border-radius:16px;padding:26px 20px 24px;box-shadow:var(--shadow);
      min-height:146px;border:1px solid #edf1ef;display:flex;flex-direction:column;justify-content:space-between
    }
    .feature-top{display:flex;align-items:center;gap:14px}
    .icon{
      width:42px;height:42px;border-radius:50%;border:2px solid #dfe8e1;display:grid;place-items:center;color:var(--green)
    }
    .icon svg{width:24px;height:24px;stroke:currentColor;fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
    .feature-card h3{margin:0 0 8px;font-size:15px;letter-spacing:.02em}
    .feature-card p{margin:0;color:var(--muted);font-size:13px;line-height:1.35}
    .feature-card .go{margin-left:auto;color:var(--green);font-size:24px;font-weight:300}
    .about{max-width:1200px;margin:64px auto 0;padding:0 22px;display:grid;grid-template-columns:1.03fr .97fr;gap:30px;align-items:center}
    .section-label{font-size:12px;font-weight:800;letter-spacing:.08em;color:var(--green);text-transform:uppercase;margin-bottom:12px}
    .about h2{margin:0 0 16px;font-size:34px;line-height:1.05;color:#243140}
    .about p{margin:0 0 22px;color:#5b6877;line-height:1.65;font-size:15px;max-width:560px}
    .photo{
      height:330px;border-radius:18px;overflow:hidden;box-shadow:var(--shadow);border:1px solid #edf2ef;
      position:relative;background:
        linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.08)),
        radial-gradient(circle at 34% 18%, rgba(43,87,52,.40), transparent 18%),
        linear-gradient(135deg,#d8e1d2 0%,#bfcfb5 36%,#f8f8f5 36%,#e9ece4 68%,#6f8a68 68%,#50704d 100%);
    }
    .photo:before{
      content:"";position:absolute;left:0;bottom:0;width:100%;height:28%;
      background:linear-gradient(180deg,rgba(255,255,255,0),rgba(255,255,255,.22));
    }
    .photo-sign{
      position:absolute;right:24px;bottom:30px;background:#fff;border-radius:8px;padding:10px 14px;
      box-shadow:0 6px 14px rgba(0,0,0,.12);font-size:14px;font-weight:700;color:#2d3744
    }
    .news{max-width:1200px;margin:66px auto 0;padding:0 22px}
    .section-head{display:flex;align-items:flex-end;justify-content:space-between;gap:20px;margin-bottom:18px}
    .section-head h2{margin:0;font-size:32px;line-height:1.05;color:#243140}
    .section-link{color:var(--green);font-weight:700;font-size:13px;display:flex;align-items:center;gap:8px}
    .news-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
    .news-card{
      background:#fff;border:1px solid #edf2ef;border-radius:14px;overflow:hidden;box-shadow:0 8px 18px rgba(16,24,40,.06);
      display:flex;flex-direction:column;min-height:240px
    }
    .thumb{height:120px;position:relative}
    .thumb.one{background:radial-gradient(circle at 30% 30%, #7d4bd9 0 12%, transparent 13%),radial-gradient(circle at 56% 48%, #2fd0ff 0 10%, transparent 11%),linear-gradient(135deg,#061421,#122b3b 55%,#03111d)}
    .thumb.two{background:linear-gradient(135deg,#dcdad2,#c8c4b8 50%,#9b8f79)}
    .thumb.three{background:linear-gradient(135deg,#d8e8f0,#9fc7dc 50%,#e2f0f7)}
    .thumb.four{background:radial-gradient(circle at 50% 50%, #9bf0c8 0 6%, transparent 7%), linear-gradient(135deg,#041a15,#143f30 60%,#06261d)}
    .thumb:after{
      content:"";position:absolute;inset:auto 12px 12px auto;width:34px;height:34px;border-radius:50%;
      background:rgba(255,255,255,.12);backdrop-filter:blur(4px)
    }
    .news-body{padding:14px 16px 16px;display:flex;flex-direction:column;gap:10px;flex:1}
    .date{font-size:11px;color:#8a95a3;font-weight:700;letter-spacing:.03em}
    .news-body h3{margin:0;font-size:16px;line-height:1.25;color:#233041}
    .news-body p{margin:0;color:#667381;font-size:13px;line-height:1.45}
    .news-body .go{margin-top:auto;color:var(--green);align-self:flex-end;font-size:24px}
    .research{max-width:1200px;margin:56px auto 0;padding:0 22px 54px}
    .research h2{margin:0 0 10px;font-size:32px;color:#243140}
    .tracks{
      margin-top:18px;display:grid;grid-template-columns:repeat(5,1fr);gap:16px;align-items:stretch
    }
    .track{
      background:#fff;border:1px solid #edf2ef;border-radius:16px;padding:18px 14px 16px;text-align:center;
      box-shadow:0 8px 18px rgba(16,24,40,.05)
    }
    .track .circle{
      width:52px;height:52px;border-radius:50%;border:2px solid #dfe8e1;margin:0 auto 12px;display:grid;place-items:center;color:var(--green)
    }
    .track svg{width:28px;height:28px;stroke:currentColor;fill:none;stroke-width:1.8;stroke-linecap:round;stroke-linejoin:round}
    .track h3{font-size:14px;margin:0 0 8px;color:#223040}
    .track p{margin:0;font-size:12px;line-height:1.42;color:#697685}
    .footer{
      background:linear-gradient(180deg,#0c4f2e,#07351f);color:#fff;padding:36px 22px 18px
    }
    .footer-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1.2fr .9fr .9fr 1fr;gap:28px}
    .footer .brand-text .small,.footer .brand-text .big{color:#fff}
    .footer p{color:rgba(255,255,255,.84);font-size:14px;line-height:1.55}
    .social{display:flex;gap:10px;margin-top:14px}
    .social span{width:30px;height:30px;border-radius:50%;border:1px solid rgba(255,255,255,.35);display:grid;place-items:center;font-size:12px}
    .footer h4{margin:0 0 14px;font-size:14px;letter-spacing:.06em;text-transform:uppercase;color:rgba(255,255,255,.92)}
    .footer a,.footer li{display:block;color:rgba(255,255,255,.82);font-size:14px;line-height:1.9}
    .footer ul{list-style:none;margin:0;padding:0}
    .contact-item{display:flex;gap:10px;align-items:flex-start;margin-bottom:10px;color:rgba(255,255,255,.86);font-size:14px;line-height:1.5}
    .contact-item .bullet{width:16px}
    .footer-bottom{
      max-width:1200px;margin:16px auto 0;padding-top:14px;border-top:1px solid rgba(255,255,255,.12);
      display:flex;justify-content:space-between;gap:14px;color:rgba(255,255,255,.7);font-size:12px;flex-wrap:wrap
    }

    @media (max-width: 1100px){
      .cards-row,.news-grid,.tracks,.footer-inner{grid-template-columns:repeat(2,1fr)}
      .about{grid-template-columns:1fr}
      .hero h1{font-size:46px}
    }
    @media (max-width: 720px){
      .topbar{height:auto;padding:16px 14px}
      .topbar-inner{gap:12px;flex-direction:column;align-items:flex-start}
      .navbar{height:auto;padding:12px 14px}
      .nav-inner{flex-wrap:wrap;gap:16px;justify-content:flex-start}
      .hero{min-height:auto}
      .hero-inner{padding:42px 14px 56px}
      .hero h1{font-size:38px}
      .hero h2{font-size:20px}
      .hero p{font-size:16px}
      .cards-row,.about,.news,.research{padding:0 14px}
      .cards-row,.news-grid,.tracks,.footer-inner{grid-template-columns:1fr}
      .section-head{align-items:flex-start;flex-direction:column}
      .photo{height:260px}
    }




    </style>
</head>
<body>

    <!-- Navbar -->
     <!-- Menu/Tradutor -->
     <?php include BASE_PATH.'includes/menu.php'; ?>

    <!-- Hero Section -->
 <div class="page">
    <header class="topbar">
      <div class="topbar-inner">
        <div class="brand">
          <div class="brand-mark" aria-hidden="true"></div>
          <div class="brand-text">
            <div class="small">FMRP - USP</div>
            <div class="big">Departamento de Genética</div>
          </div>
        </div>
        <div class="utility">
          <span>PT | EN</span>
          <span class="search" aria-hidden="true"></span>
        </div>
      </div>
    </header>

    <nav class="navbar">
      <div class="nav-inner">
        <div class="nav-item">DEPARTAMENTO <span class="caret"></span></div>
        <div class="nav-item">ENSINO <span class="caret"></span></div>
        <div class="nav-item">PESQUISA <span class="caret"></span></div>
        <div class="nav-item">LABORATÓRIOS <span class="caret"></span></div>
        <div class="nav-item">EQUIPE <span class="caret"></span></div>
        <div class="nav-item">CONTATO</div>
      </div>
    </nav>



    <section class="hero">
      <div class="hero-inner">
        <div class="hero-copy">
          <div class="accent"></div>
          <h1>Departamento de<br>Genética</h1>
          <h2>FMRP – USP</h2>
          <p>Excelência em ensino, pesquisa e inovação em genética.</p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="#">CONHEÇA O DEPARTAMENTO <span class="arrow"></span></a>
            <a class="btn btn-outline" href="#">LINHAS DE PESQUISA <span class="arrow"></span></a>
          </div>
        </div>
      </div>
      <div class="dots" aria-hidden="true"><span class="active"></span><span></span><span></span></div>
    </section>

    <section class="cards-row">
      <article class="feature-card">
        <div class="feature-top">
          <div class="icon">
            <svg viewBox="0 0 24 24"><path d="M4 19h16"/><path d="M6 19V9l6-4 6 4v10"/><path d="M9 19v-5h6v5"/></svg>
          </div>
        </div>
        <div>
          <h3>ENSINO</h3>
          <p>Graduação e Pós-graduação com excelência acadêmica.</p>
        </div>
        <div class="go">→</div>
      </article>
      <article class="feature-card">
        <div class="feature-top">
          <div class="icon">
            <svg viewBox="0 0 24 24"><path d="M9 3h6"/><path d="M10 3v4l-4 8a4 4 0 0 0 3.6 6h4.8a4 4 0 0 0 3.6-6l-4-8V3"/><path d="M8 14h8"/></svg>
          </div>
        </div>
        <div>
          <h3>PESQUISA</h3>
          <p>Produzindo conhecimento e promovendo inovação.</p>
        </div>
        <div class="go">→</div>
      </article>
      <article class="feature-card">
        <div class="feature-top">
          <div class="icon">
            <svg viewBox="0 0 24 24"><path d="M7 3v18"/><path d="M12 3v18"/><path d="M17 3v18"/><path d="M5 7h14"/><path d="M5 12h14"/><path d="M5 17h14"/></svg>
          </div>
        </div>
        <div>
          <h3>LABORATÓRIOS</h3>
          <p>Infraestrutura moderna e tecnologia de ponta.</p>
        </div>
        <div class="go">→</div>
      </article>
      <article class="feature-card">
        <div class="feature-top">
          <div class="icon">
            <svg viewBox="0 0 24 24"><path d="M3 18c1.8-3 4.3-4.5 7-4.5S14.2 15 16 18"/><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M19 18c-1-1.8-2.3-3-4-3.7"/><path d="M3 18h18"/></svg>
          </div>
        </div>
        <div>
          <h3>CORPO DOCENTE</h3>
          <p>Professores e pesquisadores altamente qualificados.</p>
        </div>
        <div class="go">→</div>
      </article>
    </section>

    <section class="about">
      <div>
        <div class="section-label">SOBRE NÓS</div>
        <h2>Excelência que transforma ciência</h2>
        <p>O Departamento de Genética da FMRP/USP tem uma longa trajetória dedicada à formação de profissionais, à produção de conhecimento e à contribuição para o avanço da genética e áreas correlatas.</p>
        <p>Unimos tradição e inovação para gerar impacto na ciência e na sociedade.</p>
        <a class="btn btn-primary" href="#" style="margin-top:6px;">SAIBA MAIS SOBRE O DEPARTAMENTO</a>
      </div>
      <div class="photo" role="img" aria-label="Imagem institucional do departamento">
        <div class="photo-sign">Departamento de<br>Genética</div>
      </div>
    </section>

    <section class="news">
      <div class="section-head">
        <div>
          <div class="section-label">NOTÍCIAS E DESTAQUES</div>
          <h2>Fique por dentro</h2>
        </div>
        <a class="section-link" href="#">VER TODAS AS NOTÍCIAS <span class="arrow"></span></a>
      </div>
      <div class="news-grid">
        <article class="news-card">
          <div class="thumb one"></div>
          <div class="news-body">
            <div class="date">20 MAI 2025</div>
            <h3>Estudo revela novo mecanismo genético em doenças raras</h3>
            <p>Pesquisa do departamento identifica vias celulares envolvidas em doenças genéticas neurológicas.</p>
            <div class="go">→</div>
          </div>
        </article>
        <article class="news-card">
          <div class="thumb two"></div>
          <div class="news-body">
            <div class="date">15 MAI 2025</div>
            <h3>Departamento promove simpósio sobre edição genômica</h3>
            <p>Evento reuniu pesquisadores nacionais e internacionais para discutir os avanços em CRISPR e suas aplicações.</p>
            <div class="go">→</div>
          </div>
        </article>
        <article class="news-card">
          <div class="thumb three"></div>
          <div class="news-body">
            <div class="date">05 MAI 2025</div>
            <h3>Novo artigo publicado em revista internacional</h3>
            <p>Trabalho da equipe de genética molecular é destaque na revista Genetics &amp; Development.</p>
            <div class="go">→</div>
          </div>
        </article>
        <article class="news-card">
          <div class="thumb four"></div>
          <div class="news-body">
            <div class="date">28 ABR 2025</div>
            <h3>Abertas as inscrições para pós-graduação 2026</h3>
            <p>Processo seletivo para Mestrado e Doutorado. Inscrições até 31/08.</p>
            <div class="go">→</div>
          </div>
        </article>
      </div>
    </section>

    <section class="research">
      <div class="section-label">NOSSAS LINHAS DE PESQUISA</div>
      <h2>Conhecimento que gera impacto</h2>
      <div class="tracks">
        <article class="track">
          <div class="circle">
            <svg viewBox="0 0 24 24"><path d="M12 3v18"/><path d="M8 7c2 0 4 1.5 4 3.5S10 14 8 14s-4 1.5-4 3.5S6 21 8 21"/><path d="M16 3c-2 0-4 1.5-4 3.5S14 10 16 10s4 1.5 4 3.5S18 17 16 17"/></svg>
          </div>
          <h3>Genética Molecular</h3>
          <p>Estudo dos mecanismos moleculares dos genes e suas funções.</p>
        </article>
        <article class="track">
          <div class="circle">
            <svg viewBox="0 0 24 24"><path d="M4 19l8-14 8 14"/><path d="M7 13h10"/></svg>
          </div>
          <h3>Genômica e Bioinformática</h3>
          <p>Análise de dados genômicos e desenvolvimento de ferramentas computacionais.</p>
        </article>
        <article class="track">
          <div class="circle">
            <svg viewBox="0 0 24 24"><circle cx="7" cy="8" r="3"/><circle cx="17" cy="8" r="3"/><circle cx="12" cy="16" r="3"/><path d="M9.5 9.8l1.5 3.2M14.5 9.8l-1.5 3.2"/></svg>
          </div>
          <h3>Biologia Celular</h3>
          <p>Investigação dos processos celulares em condições fisiológicas e patológicas.</p>
        </article>
        <article class="track">
          <div class="circle">
            <svg viewBox="0 0 24 24"><path d="M12 3c-2 3-3.5 4.7-3.5 7a3.5 3.5 0 1 0 7 0c0-2.3-1.5-4-3.5-7z"/><path d="M12 10v11"/></svg>
          </div>
          <h3>Genética de Plantas</h3>
          <p>Melhoramento genético e resistência a estresses bióticos e abióticos.</p>
        </article>
        <article class="track">
          <div class="circle">
            <svg viewBox="0 0 24 24"><path d="M4 19c2-3 4.5-4.5 8-4.5s6 1.5 8 4.5"/><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/></svg>
          </div>
          <h3>Genética de Populações e Evolução</h3>
          <p>Estudos sobre diversidade genética, evolução e conservação.</p>
        </article>
      </div>
    </section>




    <!-- Footer -->
     <?php include $BASE_PATH.'includes/footer.php'; ?>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>