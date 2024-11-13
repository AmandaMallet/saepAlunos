<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a href="index.php">
            <h1>Gereciamento de Alunos</h1>
        </a>
        <div class="menu">
            <a href="cadastroUsuario.php">
                <h2>Cadastro de Usuários</h2>
            </a>
            <a href="cadastroAlunos.php">
                <h2>Cadastro de Alunos</h2>
            </a>
            <a href="index.php">
                <h2>Gerenciar Alunos</h2>
            </a>
        </div>
    </header>
    <main class="mainUsuario">
        <form method="post" action="cadastrarUsuario.php">
            <h1>Cadastro de Usuários</h1>
            <label>Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label>Email:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" id="cadastrar" value="Cadastrar">
            <?php if (isset($_GET['sucesso'])) { ?>
                <p>
                    <?php
                    if ($_GET['sucesso'] == 1) {
                        echo "Cadastro feito com sucesso!";
                    }
                    ?>
                </p>
            <?php } ?>
        </form>
    </main>
    <script src="script.js"></script>
</body>

</html>