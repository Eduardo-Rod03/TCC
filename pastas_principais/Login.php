
<?php
session_start();
$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $erro = "Login demonstrativo. Conecte um banco de dados para autenticar usuários.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Findly</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7ff;
            min-height: 100vh;
        }

        header {
            background: #101d38;
            padding: 24px;
            text-align: center;
        }

        .logo {
            font-size: 28px;
            font-weight: 800;
            color: white;
        }

        .logo span {
            color: #5680ff;
        }


        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 65px 20px;
        }

        .login {
            background: white;
            width: 100%;
            max-width: 430px;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.07);
        }

        .login h1 {
            text-align: center;
            color: #101d38;
            font-size: 28px;
            margin-bottom: 12px;
        }

        .subtitulo {
            text-align: center;
            color: #64748b;
            font-size: 14px;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        label {
            display: block;
            color: #101d38;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .campo {
            margin-bottom: 22px;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid #dce3f0;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #315cf4;
        }

        .senha-container {
            position: relative;
        }

        .senha-container input {
            padding-right: 80px;
        }

        .mostrar {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            color: #315cf4;
            cursor: pointer;
            font-weight: bold;
        }

        .esqueceu {
            text-align: right;
            margin-bottom: 25px;
        }

        a {
            color: #315cf4;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .entrar {
            width: 100%;
            background: #315cf4;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .entrar:hover {
            background: #244bd2;
        }

        .cadastro {
            margin-top: 25px;
            text-align: center;
            font-size: 14px;
            color: #64748b;
        }

        .voltar {
            margin-top: 25px;
            text-align: center;
        }

        .erro {
            background: #fff1f2;
            color: #be123c;
            padding: 12px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 20px;
        }

        @media (max-width: 480px) {
            .login {
                padding: 28px 22px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">
        Find<span>ly</span>
    </div>
</header>

<main class="container">

    <div class="login">

        <h1>Bem-vindo de volta!</h1>

        <p class="subtitulo">
            Entre na sua conta para continuar
            encontrando o que importa.
        </p>

        <?php if ($erro): ?>
            <div class="erro">
                <?= htmlspecialchars($erro) ?>
            </div>
        <?php endif; ?>

        <form method="POST">

            <div class="campo">
                <label for="email">E-mail</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Digite seu e-mail"
                    autocomplete="email"
                    required
                >
            </div>

            <div class="campo">
                <label for="senha">Senha</label>

                <div class="senha-container">
                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="Digite sua senha"
                        autocomplete="current-password"
                        required
                    >

                    <button
                        type="button"
                        class="mostrar"
                        onclick="mostrarSenha()"
                    >
                        Mostrar
                    </button>
                </div>
            </div>

            <div class="esqueceu">
                <a href="recuperar.php">
                    Esqueceu sua senha?
                </a>
            </div>

            <button type="submit" class="entrar">
                Entrar na minha conta
            </button>

        </form>

        <div class="cadastro">
            Ainda não tem uma conta?
            <a href="cadastro.php">Cadastre-se</a>
        </div>

        <div class="voltar">
            <a href="index.php">
                ← Voltar para o início
            </a>
        </div>

    </div>

</main>

<script>
    function mostrarSenha() {
        const senha = document.getElementById("senha");
        const botao = document.querySelector(".mostrar");

        if (senha.type === "password") {
            senha.type = "text";
            botao.textContent = "Ocultar";
        } else {
            senha.type = "password";
            botao.textContent = "Mostrar";
        }
    }
</script>

</body>
</html>
