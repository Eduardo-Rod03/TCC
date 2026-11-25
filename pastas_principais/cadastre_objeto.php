
<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nomeObjeto = trim($_POST["nomeObjeto"] ?? "");
    $descricao = trim($_POST["descricao"] ?? "");
    $categoria = $_POST["categoria"] ?? "";
    $local = trim($_POST["local"] ?? "");
    $status = $_POST["status"] ?? "";
    $nomeUsuario = trim($_POST["nomeUsuario"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if (
        $nomeObjeto && $descricao && $categoria &&
        $local && $status && $nomeUsuario &&
        filter_var($email, FILTER_VALIDATE_EMAIL)
    ) {

        if (isset($_FILES["imagem"]) &&
            $_FILES["imagem"]["error"] === UPLOAD_ERR_OK) {

            $tiposPermitidos = [
                "image/jpeg" => "jpg",
                "image/png" => "png",
                "image/webp" => "webp"
            ];

            $tipo = mime_content_type($_FILES["imagem"]["tmp_name"]);

            if (
                isset($tiposPermitidos[$tipo]) &&
                $_FILES["imagem"]["size"] <= 5 * 1024 * 1024
            ) {

                $pasta = dirname(__DIR__) . "/imagens/";

                if (!is_dir($pasta)) {
                    mkdir($pasta, 0755, true);
                }

                $nomeImagem = uniqid("objeto_") . "." . $tiposPermitidos[$tipo];

                if (move_uploaded_file(
                    $_FILES["imagem"]["tmp_name"],
                    $pasta . $nomeImagem
                )) {
                    $mensagem = "Objeto cadastrado com sucesso!";
                } else {
                    $mensagem = "Erro ao salvar a imagem.";
                }

            } else {
                $mensagem = "Imagem inválida ou maior que 5 MB.";
            }

        } else {
            $mensagem = "Selecione uma imagem.";
        }

    } else {
        $mensagem = "Preencha todos os campos corretamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastrar objeto | Findly</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f3f6fc;
            color: #101d38;
        }

        /* CABEÇALHO */

        header {
            background: #101d38;
            padding: 20px 8%;
        }

        header a {
            color: white;
            text-decoration: none;
            font-size: 22px;
            font-weight: bold;
        }

        /* CONTEÚDO */

        .container {
            max-width: 800px;
            margin: 45px auto;
            padding: 0 20px;
        }

        .titulo {
            margin-bottom: 25px;
        }

        .titulo h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .titulo p {
            color: #526078;
            font-size: 15px;
        }

        /* FORMULÁRIO */

        .formulario {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.04);
        }

        .grupo {
            margin-bottom: 20px;
        }

        .grupo label {
            display: block;
            margin-bottom: 9px;
            font-weight: bold;
            font-size: 14px;
        }

        .grupo input,
        .grupo select,
        .grupo textarea {
            width: 100%;
            padding: 13px;
            border: 1px solid #dce1e9;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            background: white;
        }

        .grupo input:focus,
        .grupo select:focus,
        .grupo textarea:focus {
            border-color: #2457ed;
        }

        .grupo textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* SUBTÍTULOS */

        .subtitulo {
            font-size: 18px;
            margin: 30px 0 20px;
            color: #101d38;
        }

        /* BOTÃO */

        .botao {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            background: #2457ed;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .botao:hover {
            background: #1743c5;
        }

        /* MENSAGEM */

        .mensagem {
            background: #e8f0ff;
            color: #1743c5;
            padding: 13px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* RESPONSIVIDADE */

        @media (max-width: 600px) {

            .container {
                margin: 30px auto;
            }

            .formulario {
                padding: 22px;
            }

            .titulo h1 {
                font-size: 24px;
                }
            }
            .btn-entrar {
        position: absolute;
        top: 15px;
        right: 20px;

        background-color: #2563eb;
        color: white;

        padding: 12px 25px;
        border-radius: 10px;

        text-decoration: none;
        font-size: 15px;
        font-weight: 600;

        transition: 0.3s;
    }

    .btn-entrar:hover {
        background-color: #1d4ed8;
    }
     .logo {
            font-size: 28px;
            font-weight: 800;
            color: white;
        }

        .logo span {
            color: #5680ff;
        }
    </style>
</head>

<body>

      <header>
        <div class="logo">Find<span>ly.</span></div>
    </header>

    <main class="container">

        <div class="titulo">
            <h1>Cadastrar objeto</h1>
            <p>
                Informe os dados do objeto perdido ou encontrado.
                Ajude alguém a recuperá-lo!
            </p>
        </div>

        <section class="formulario">

            <?php if ($mensagem): ?>
                <div class="mensagem">
                    <?= htmlspecialchars($mensagem) ?>
                </div>
            <?php endif; ?>

            <form method="POST" enctype="multipart/form-data">

                <h2 class="subtitulo">Informações do objeto</h2>

                <div class="grupo">
                    <label>Nome do objeto</label>
                    <input
                        type="text"
                        name="nomeObjeto"
                        placeholder="Ex: Mochila preta"
                        required
                    >
                </div>

                <div class="grupo">
                    <label>Descrição</label>
                    <textarea
                        name="descricao"
                        placeholder="Descreva as características do objeto..."
                        required
                    ></textarea>
                </div>

                <div class="grupo">
                    <label>Categoria</label>
                    <select name="categoria" required>
                        <option value="">Selecione uma categoria</option>
                        <option value="Eletrônicos">Eletrônicos</option>
                        <option value="Acessórios">Acessórios</option>
                        <option value="Material escolar">Material escolar</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>

                <div class="grupo">
                    <label>Onde perdeu ou encontrou?</label>
                    <input
                        type="text"
                        name="local"
                        placeholder="Ex: Biblioteca, sala 02..."
                        required
                    >
                </div>

                <div class="grupo">
                    <label>Situação do objeto</label>
                    <select name="status" required>
                        <option value="">Selecione</option>
                        <option value="Perdido">Perdido</option>
                        <option value="Encontrado">Encontrado</option>
                    </select>
                </div>

                <h2 class="subtitulo">Dados para contato</h2>

                <div class="grupo">
                    <label>Nome completo</label>
                    <input
                        type="text"
                        name="nomeUsuario"
                        placeholder="Digite seu nome"
                        required
                    >
                </div>

                <div class="grupo">
                    <label>E-mail</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="seuemail@email.com"
                        required
                    >
                </div>

                <h2 class="subtitulo">Imagem do objeto</h2>

                <div class="grupo">
                    <label>Selecione uma foto</label>
                    <input
                        type="file"
                        name="imagem"
                        accept="image/jpeg,image/png,image/webp"
                        required
                    >
                </div>

                <button type="submit" class="botao">
                    Cadastrar objeto
                </button>

            </form>

        </section>

    </main>
                <a href="index.php" class="btn-entrar">voltar para o inicio</a>
</body>
</html>
