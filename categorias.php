<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="tabelas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Gestão de Categorias</title>
</head>
<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>

        <main>
            <div class="table-responsive">
                <div class="header-table">
                    <div class="header-title">
                        <h2>Categorias</h2>
                        <p>Gerencie os temas das postagens do blog.</p>
                    </div>
                    <a href="#" class="btn-add">
                        <i class="fas fa-plus-circle"></i> Adicionar Categoria
                    </a>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome da Categoria</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Programação</td>
                            <td><span class="badge-ativo">Ativo</span></td>
                            <td>
                                <button class="btn-icon"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon" style="color: #e74c3c;"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Hardware</td>
                            <td><span class="badge-ativo">Ativo</span></td>
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