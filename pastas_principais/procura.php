
<?php
$objetos = [
    [
        "nome" => "Mochila preta",
        "categoria" => "Acessórios",
        "local" => "Escola",
        "status" => "Encontrado",
         "imagem" => "Mochila.jpg"

    ],
    [
        "nome" => "Celular Samsung",
        "categoria" => "Eletrônicos",
        "local" => "Biblioteca",
        "status" => "Perdido",
        "imagem" => "celular.jpg"
    ],
    [
        "nome" => "Garrafa azul",
        "categoria" => "Outros",
        "local" => "Academia",
        "status" => "Encontrado",
        "imagem" => "garrafa.jpg"
    ]
];

$pesquisa = $_GET["busca"] ?? "";
$categoria = $_GET["categoria"] ?? "";

$resultados = array_filter($objetos, function($objeto) use ($pesquisa, $categoria) {
    $nomeConfere = stripos($objeto["nome"], $pesquisa) !== false;
    $categoriaConfere = $categoria === "" || $objeto["categoria"] === $categoria;

    return $nomeConfere && $categoriaConfere;
});
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurar objetos | Findly</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fc;
            margin: 0;
            color: #101d36;
        }

        header {
            background: #101d36;
            color: white;
            padding: 22px 8%;
        }

        header a {
            color: white;
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
        }

        main {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .pesquisa {
            display: flex;
            gap: 10px;
            margin: 30px 0;
        }

        input, select, button {
            padding: 13px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        input {
            flex: 1;
            min-width: 0;
        }

        button {
            background: #2457e8;
            color: white;
            border: none;
            cursor: pointer;
        }

        .objeto {
            background: white;
            padding: 22px;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0 3px 12px #00000008;
        }

        .status {
            color: #2457e8;
            font-weight: bold;
        }

        @media (max-width: 600px) {
            .pesquisa {
                flex-direction: column;
            }
        }
        .objeto {
    display: flex;
    align-items: center;
    gap: 20px;
    }

    .objeto img {
        width: 130px;
        height: 130px;
        object-fit: cover;
        border-radius: 10px;
    }


    .informacoes {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .informacoes h3,
    .informacoes p {
        margin: 0;
    }
    header {
            width: 100%;
            display: flex;
            padding: 4%
            justify-content: space-a round;
            alingn-items : left;
            position: fixed;
            z-index: 99;
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


<main>

    <h1>Encontre seu objeto</h1>

    <p>Pesquise entre os objetos perdidos e encontrados.</p>

    <form method="GET" class="pesquisa">

        <input
            type="text"
            name="busca"
            placeholder="Digite o nome do objeto..."
            value="<?= htmlspecialchars($pesquisa) ?>"
        >

        <select name="categoria">
            <option value="">Todas as categorias</option>
            <option value="Acessórios">Acessórios</option>
            <option value="Eletrônicos">Eletrônicos</option>
            <option value="Outros">Outros</option>
        </select>

        <button type="submit">Pesquisar</button>

    </form>

    <h2>Resultados da pesquisa</h2>

    <?php if (count($resultados) > 0): ?>

        <?php foreach ($resultados as $objeto): ?>

            <div class="objeto">
                <img src="../imagens/<?= htmlspecialchars($objeto["imagem"]) ?>" 
     alt="<?= htmlspecialchars($objeto["nome"]) ?>">

                <h3><?= htmlspecialchars($objeto["nome"]) ?></h3><br>

                <p>Categoria: <?= htmlspecialchars($objeto["categoria"]) ?></p><br>

                <p>Local: <?= htmlspecialchars($objeto["local"]) ?></p><br>

                <p class="status">
                    <?= htmlspecialchars($objeto["status"]) ?>
                </p>

            </div>

        <?php endforeach; ?>

    <?php else: ?>

        <p>Nenhum objeto encontrado. Tente outra pesquisa!</p>

    <?php endif; ?>

</main>

</body>
</html>
