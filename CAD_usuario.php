<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>

        <main>
            <section class="card-form">
                <header class="form-header">
                    <h2>Cadastrar Novo Usuário</h2>
                </header>

                <form action="insere_usuario.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Completo *</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite o nome completo" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group" style="flex: 1;">
                            <label for="senha">Senha *</label>
                            <input type="password" id="senha" name="senha" required>
                        </div>
                        <div class="form-group" style="flex: 1;">
                            <label for="nivel">Nível</label>
                            <select id="nivel" name="nivel">
                                <option value="user">Usuário</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save">Finalizar Cadastro</button>
                        <a href="usuarios.php" style="margin-left:10px;">Cancelar</a>
                    </div>
                </form>
            </section>
        </main>
    </div>

    <?php include 'rodapé.php'; ?>
</body>
</html>