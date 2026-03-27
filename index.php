<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dash.css">
    <title>Dashboard - Blog CMS</title>
</head>
<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>

        <main>
            <section class="container-cards">
                <article>
                    <h2>Postagens</h2>
                    <p>Gerencie todos os artigos do seu blog.</p>
                    <a href="postagens.php" class="btn">Acessar</a>
                </article>
                <article>
                    <h2>Categorias</h2>
                    <p>Organize seus posts por temas.</p>
                    <a href="categorias.php" class="btn">Acessar</a>
                </article>
                <article>
                    <h2>Usuários</h2>
                    <p>Controle quem pode acessar o painel.</p>
                    <a href="usuarios.php" class="btn">Acessar</a>
                </article>
            </section>
        </main>
    </div>
    <?php include 'rodapé.php'; ?>
</body>
</html>