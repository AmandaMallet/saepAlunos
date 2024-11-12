<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerencimento</title>
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
    <main class="mainGerenciar">
        <section class="turma1">
            <h2>Turma 1</h2>
            <div class="aluno">
                <label>Nome:</label>
                <label>Email:</label>
                <label>Professor:</label>
                <label>Turma:</label>
                <label>PCD:</label>
                <div class="botoes">
                    <button>Editar</button>
                    <button>Excluir</button>
                </div>
                <div class="status">
                    <select name="status" id="status">
                        <option value="ativo">Ativo</option>
                        <option value="desativado">Desativado</option>
                    </select>
                    <button>Alterar Status</button>
                </div>
            </div>
        </section>
        <section class="turma2"></section>
        <section class="turma3"></section>
    </main>
    <script src="script.js"></script>
</body>

</html>