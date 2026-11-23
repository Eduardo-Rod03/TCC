<?php
$objetos = [
    [
        "nome" => "Mochila preta",
        "categoria" => "Acessórios",
        "local" => "Biblioteca",
        "data" => "20/11/2026",
        "imagens" => "Mochila.jpg",
        "descricao" => "Mochila encontrada próxima à biblioteca."
    ],
    [
        "nome" => "Garrafa azul",
        "categoria" => "Utensílios",
        "local" => "Quadra",
        "data" => "19/11/2026",
       "imagens" => "garrafa.jpg",
        "descricao" => "Garrafa encontrada na quadra."
    ],
    [
        "nome" => "Celular",
        "categoria" => "Utensílios",
        "local" => "Refeitorio",
         "descricao" => "Celular encontrada no refeitorio.",
        "data" => "19/11/2026",
       "imagens" => "celular.jpg"
       
    ],
   
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos encontrados | Findly</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin: 0;
            background: #f4f7fc;
            font-family: Arial, sans-serif;
            color: #101d38;
        }

        .container-encontrados {
            max-width: 1100px;
            margin: 60px auto;
            padding: 20px;
        }

        .cabecalho {
            text-align: center;
            margin-bottom: 35px;
        }

        .cabecalho h1 {
            font-size: 32px;
        }

        .cabecalho span {
            color: #3265f5;
        }

        .pesquisa {
            display: flex;
            gap: 10px;
            margin: 25px 0;
        }

        .pesquisa input {
            flex: 1;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .pesquisa button {
            background: #285cf4;
            color: white;
            border: none;
            padding: 15px 25px;
            border-radius: 10px;
            cursor: pointer;
        }

        .lista-objetos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
        }

        .objeto {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .objeto img {
            width: 100%;
            height: 190px;
            object-fit: cover;
        }

        .informacoes {
            padding: 20px;
        }

        .informacoes h3 {
            margin-top: 0;
        }

        .informacoes p {
            color: #68758e;
            font-size: 14px;
        }

        .detalhes {
            display: inline-block;
            margin-top: 10px;
            color: #285cf4;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container-encontrados">

    <div class="cabecalho">
        <h1>Objetos <span>encontrados</span></h1>
        <p>Confira os objetos encontrados e encontre aquilo que você perdeu.</p>
    </div>

    <div class="pesquisa">
        <input type="text" placeholder="Pesquisar objeto encontrado...">
        <button>Pesquisar</button>
    </div>

    <div class="lista-objetos">

        <?php foreach ($objetos as $objeto): ?>

        <div class="objeto">

            <img src="<?= $objeto['imagens'] ?>" alt="Objeto encontrado">

            <div class="informacoes">

                <h3><?= $objeto['nome'] ?></h3>

                <p><?= $objeto['descricao'] ?></p>

                <p>📍 <?= $objeto['local'] ?></p>

                <p>📅 <?= $objeto['data'] ?></p>

                <a href="#" class="detalhes">Ver detalhes →</a>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</div>

</body>
</html>
