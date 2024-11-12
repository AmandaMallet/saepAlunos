<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Alunos</title>
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
    <main class="mainAlunos">
        <form>
            <h1>Cadastro de Alunos</h1>
            <label>Nome:</label>
            <input type="text" id="nome" name="nome">
            <label>Descrição:</label>
            <input type="text" id="descricao" name="descricao">
            <label>Professor:</label>
            <select name="usuario" id="usuario">
                <option value="professor1">Professor1</option>
                <option value="professor2">Professor2</option>
            </select>
            <label>Turma:</label>
            <select name="turma" id="turma">
                <option value="professor1">Turma1</option>
                <option value="professor2">Turma2</option>
                <option value="professor3">Turma3</option>
            </select>
            <label>PCD:</label>
            <select name="pcd" id="pcd">
                <option value="sim-pcd">Não</option>
                <option value="nao-pcd">Sim</option>
            </select>
            <label>Status:</label>
            <select name="status" id="status">
                <option value="ativo">Ativo</option>
                <option value="desativado">Desativado</option>
            </select>
            <input type="submit" id="cadastrar" value="Cadastrar">
        </form>
    </main>
    <script src="script.js"></script>
</body>

</html>