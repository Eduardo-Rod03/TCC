

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Findly | Encontre o que perdeu</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f7fc;
            color: #101d36;
        }

        /* CABEÇALHO */

        header {
            background: #101d36;
            color: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
            color: white;
        }

        .logo span {
            color: #5680ff;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        nav a {
            color: #dce4f5;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #5680ff;
        }

        .btn-login {
            background: #2457e8;
            padding: 11px 22px;
            border-radius: 8px;
            color: white;
        }

        /* APRESENTAÇÃO */

        .hero {
            background: #101d36;
            color: white;
            text-align: center;
            padding: 100px 20px 110px;
        }

        .hero h1 {
            font-size: 45px;
            font-weight: 800;
            max-width: 800px;
            margin: auto;
            line-height: 1.3;
        }

        .hero h1 span {
            color: #5680ff;
        }

        .hero p {
            color: #bdc9df;
            margin: 20px auto 30px;
            max-width: 600px;
            font-size: 16px;
        }

        /* PESQUISA */

        .search-box {
            background: white;
            max-width: 650px;
            margin: auto;
            padding: 8px;
            display: flex;
            border-radius: 12px;
            gap: 8px;
        }

        .search-box input {
            flex: 1;
            border: none;
            outline: none;
            padding: 15px;
            font-size: 14px;
            min-width: 0;
        }

        .search-box button {
            background: #2457e8;
            color: white;
            border: none;
            padding: 14px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
        }

        /* CONTEÚDO */

        .container {
            max-width: 1150px;
            margin: auto;
            padding: 70px 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #758198;
        }

        /* CARDS */

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #e7ebf3;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(16,29,54,0.08);
        }

        .card-icon {
            width: 55px;
            height: 55px;
            background: #eaf0ff;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            margin-bottom: 20px;
        }

        .card h3 {
            font-size: 19px;
            margin-bottom: 10px;
        }

        .card p {
            color: #758198;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .card a {
            color: #2457e8;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        /* COMO FUNCIONA */

        .how {
            background: white;
            padding: 70px 20px;
        }

        .steps {
            max-width: 1000px;
            margin: 40px auto 0;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            text-align: center;
        }

        .step-number {
            background: #eaf0ff;
            color: #2457e8;
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 18px;
            font-weight: 800;
            font-size: 20px;
        }

        .steps p {
            color: #758198;
            font-size: 14px;
            margin-top: 10px;
        }

        /* CHAMADA FINAL */

        .cta {
            background: #2457e8;
            color: white;
            text-align: center;
            padding: 65px 20px;
        }

        .cta h2 {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .cta p {
            margin-bottom: 25px;
            color: #e2eaff;
        }

        .cta a {
            display: inline-block;
            background: white;
            color: #2457e8;
            padding: 13px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
        }

        /* RODAPÉ */

        footer {
            background: #101d36;
            color: #bdc9df;
            padding: 30px 8%;
            text-align: center;
            font-size: 13px;
        }

        footer strong {
            color: white;
        }

        /* CELULAR */

        @media (max-width: 750px) {
            header {
                flex-direction: column;
                gap: 20px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .cards, .steps {
                grid-template-columns: 1fr;
            }

            .search-box {
                flex-direction: column;
            }

            .search-box button {
                width: 100%;
            }
        }

    </style>
</head>

<body>

    
    <header>
        <div class="logo">Find<span>ly.</span></div>

        <nav>
            <a href="#inicio">Início</a>
            <a href="#categorias">Categorias</a>
            <a href="#como-funciona">Como funciona</a>
            <a href="#contato">Contato</a>
            <a href="Login.php" class="btn-login">Entrar</a>
            <p>vai dar certo</p>
        </nav>
    </header>

    

    <section class="hero" id="inicio">

        <h1>Perdeu algo? <span>O Findly encontra!</span></h1>

        <p>
            Conectamos pessoas a objetos perdidos e encontrados.
            Sua próxima descoberta pode estar aqui.
        </p>

        <div class="search-box">
            <input type="text" placeholder="O que você está procurando?">
            <button onclick="alert('Em breve: pesquisa de objetos!')">
                Pesquisar
            </button>
        </div>

    </section>

    

    <section class="container" id="categorias">

        <div class="section-title">
            <h2>Como podemos ajudar?</h2>
            <p>Escolha uma opção para começar.</p>
        </div>

        <div class="cards">

            <div class="card">
                <div class="card-icon">🔎</div>
                <h3>Objetos perdidos</h3>
                <p>
                    Procure objetos que foram perdidos
                    em escolas, empresas e locais públicos.
                </p>
                <a href="procura.php">Procurar objetos →</a>
            </div>

            <div class="card">
                <div class="card-icon">📦</div>
                <h3>Objetos encontrados</h3>
                <p>
                    Consulte objetos encontrados
                    por outras pessoas e disponíveis para identificação.
                </p>
                <a href="encontrado.php">Ver encontrados →</a>
            </div>

            <div class="card">
                <div class="card-icon">➕</div>
                <h3>Cadastrar objeto</h3>
                <p>
                    Encontrou algo? Cadastre o objeto
                    para ajudar a devolver ao seu verdadeiro dono.
                </p>
                <a href="cadastre de objetos.php">Cadastrar agora →</a>
            </div>

        </div>

    </section>

   

    <section class="how" id="como-funciona">

        <div class="section-title">
            <h2>Como funciona o Findly?</h2>
            <p>Três passos simples para conectar pessoas e objetos.</p>
        </div>

        <div class="steps">

            <div>
                <div class="step-number">1</div>
                <h3>Cadastre ou pesquise</h3>
                <p>Informe o objeto perdido ou encontrado.</p>
            </div>

            <div>
                <div class="step-number">2</div>
                <h3>Encontre uma correspondência</h3>
                <p>O sistema ajuda a identificar possíveis correspondências.</p>
            </div>

            <div>
                <div class="step-number">3</div>
                <h3>Recupere seu objeto</h3>
                <p>Entre em contato e combine a devolução com segurança.</p>
            </div>

        </div>

    </section>

   

    <section class="cta" id="contato">
        <h2>Ajude alguém a encontrar o que perdeu.</h2>
        <p>Uma pequena atitude pode fazer uma grande diferença.</p>
        <a href="#">Começar agora</a>
    </section>

    <!-- RODAPÉ -->

    <footer>
        <strong>Findly.</strong>
        <p>Conectando pessoas e reencontrando histórias.</p>
        <p>© 2026 Findly. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
