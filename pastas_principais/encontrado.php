<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos encontrados | Findly</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f6f9;
            color: #1f2937;
        }

        /* --- BARRA SUPERIOR (IDÊNTICA À INICIAL) --- */
        .navbar {
            background-color: #0b192c;
            width: 100%;
            padding: 18px 0;
        }

        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 26px;
            font-weight: 800;
            color: #ffffff;
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .logo span {
            color: #4f7df3;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-link {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #ffffff;
        }

        .btn-nav {
            background-color: #2563eb;
            color: #ffffff;
            text-decoration: none;
            padding: 9px 20px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            transition: background-color 0.2s ease;
        }

        .btn-nav:hover {
            background-color: #1d4ed8;
        }

        /* --- CONTEÚDO PRINCIPAL --- */
        .container {
            max-width: 1100px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .header-titulo {
            text-align: center;
            margin-bottom: 30px;
        }

        .header-titulo h1 {
            font-size: 28px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 8px;
        }

        .header-titulo h1 span {
            color: #2563eb;
        }

        .header-titulo p {
            color: #6b7280;
            font-size: 14px;
        }

        /* --- BARRA DE PESQUISA --- */
        .search-box {
            display: flex;
            gap: 10px;
            max-width: 800px;
            margin: 0 auto 40px auto;
        }

        .search-box input {
            flex: 1;
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
            background-color: #ffffff;
        }

        .search-box input:focus {
            border-color: #2563eb;
        }

        .search-box button {
            background-color: #2563eb;
            color: #ffffff;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .search-box button:hover {
            background-color: #1d4ed8;
        }

        /* --- GRID DE CARDS --- */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            max-width: 900px;
            margin: 0 auto;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            border: 1px solid #e5e7eb;
        }

        .card img {
            max-width: 100%;
            border-radius: 4px;
            margin-bottom: 12px;
        }

        .card h3 {
            font-size: 16px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 6px;
        }

        .card p.descricao {
            font-size: 13px;
            color: #6b7280;
            margin-bottom: 12px;
        }

        .card .info {
            font-size: 12px;
            color: #4b5563;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .card .ver-detalhes {
            display: inline-block;
            margin-top: 12px;
            font-size: 13px;
            font-weight: 600;
            color: #2563eb;
            text-decoration: none;
        }

        .card .ver-detalhes:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Barra Superior -->
    <header class="navbar">
        <div class="navbar-container">
            <a href="index.php" class="logo">Find<span>ly.</span></a>
            
            <nav class="nav-menu">
             
                <a href="index.php" class="btn-nav">Voltar para o início</a>
            </nav>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <main class="container">
        <div class="header-titulo">
            <h1>Objetos <span>encontrados</span></h1>
            <p>Confira os objetos encontrados e encontre aquilo que você perdeu</p>
        </div>

        <!-- Formulário de Pesquisa -->
        <form class="search-box" method="GET" action="">
            <input type="text" name="busca" placeholder="Pesquisar objeto encontrado...">
            <button type="submit">Pesquisar</button>
        </form>

        <!-- Lista de Objetos (Cards) -->
        <div class="cards-grid">
            
            <!-- Card 1 -->
            <div class="card">
                <img src="caminho-da-imagem.jpg" alt="Objeto encontrado">
                <h3>Mochila preta</h3>
                <p class="descricao">Mochila encontrada próxima à biblioteca</p>
                <div class="info">📍 Biblioteca</div>
                <div class="info">📅 20/11/2025</div>
                <a href="#" class="ver-detalhes">Ver detalhes →</a>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="caminho-da-imagem.jpg" alt="Objeto encontrado">
                <h3>Garrafa azul</h3>
                <p class="descricao">Garrafa encontrada na quadra</p>
                <div class="info">📍 Quadra</div>
                <div class="info">📅 19/11/2025</div>
                <a href="#" class="ver-detalhes">Ver detalhes →</a>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src="caminho-da-imagem.jpg" alt="Objeto encontrado">
                <h3>Celular</h3>
                <p class="descricao">Celular encontrado no refeitório</p>
                <div class="info">📍 Refeitório</div>
                <div class="info">📅 02/11/2025</div>
                <a href="#" class="ver-detalhes">Ver detalhes →</a>
            </div>

        </div>
    </main>

</body>
</html>