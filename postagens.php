<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="tabelas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Gestão de Postagens</title>
</head>
<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>

        <main>
            <div class="table-responsive">
                <div class="header-table">
                    <div class="header-title">
                        <h2>Postagens</h2>
                        <p>Visualize e edite os artigos publicados no blog.</p>
                    </div>
                    <a href="#" class="btn-add">
                        <i class="fas fa-plus-circle"></i> Nova Postagem
                    </a>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Conteúdo (Resumo)</th>
                            <th>Categoria</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Introdução ao PHP</td>
                            <td>Nesta aula aprendemos a modularizar...</td>
                            <td>Programação</td>
                            <td><span class="badge-ativo">Ativo</span></td>
                            <td>
                                <button class="btn-icon"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon" style="color: #e74c3c;"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Melhores CPUs de 2026</td>
                            <td>Análise completa dos novos processadores...</td>
                            <td>Hardware</td>
                            <td><span class="badge-inativo">Rascunho</span></td>
                            <td>
                                <button class="btn-icon"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon" style="color: #e74c3c;"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <?php include 'rodapé.php'; ?>
</body>
</html>