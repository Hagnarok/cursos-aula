<?php ?>
<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="/public/css/default.css">

<head>
    <meta charset="UTF-8">
    <title>Plataforma de Cursos</title>
    <link rel="stylesheet" href="/assets/style.css">
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 0; background: #f5f7fa; color: #333; }
        header { background: #0a3d62; color: #fff; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        header h1 { margin: 0; font-size: 1.5rem; }
        nav a { color: #fff; text-decoration: none; margin: 0 1rem; transition: 0.3s; }
        nav a:hover { color: #82ccdd; }
        .container { max-width: 1100px; margin: 2rem auto; padding: 0 1rem; }

        .card-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); 
            gap: 1.5rem; 
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%; 
            transition: transform 0.2s;
        }
        .card:hover { transform: translateY(-4px); }

        .card-img {
            width: 100%;
            height: 430px; 
            overflow: hidden;
            text-align: center;
        }
        .card-img img {
            
            width: 100%;
            height: auto; 
            object-fit: contain; 
        }


        .card-body {
            padding: 1rem;
            margin-top: auto; 
        }

        .card-body h3 { margin: 0 0 0.5rem 0; font-size: 1.1rem; }
        .card-body h3 a { color: #0a3d62; text-decoration: none; }
        .card-body h3 a:hover { text-decoration: underline; }
        .card-body p { margin: 0.25rem 0; font-size: 0.9rem; }

        .btn-voltar {
            display: inline-block;
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            background: #0a3d62;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .btn-voltar:hover { background: #082a45; }

        footer { text-align: center; padding: 2rem; color: #777; }
    </style>
</head>
<body>
<header>
    <h1>🎓 Plataforma de Cursos</h1>
    <nav>
        <a href="/public/cursos.php?area=programming">Programação</a>
        <a href="/public/cursos.php?area=design">Design</a>
        <a href="/public/cursos.php?area=business">Negócios</a>
    </nav>
</header>
<main class="container">
