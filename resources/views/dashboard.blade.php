<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h2>Bem-vindo ao Dashboard</h2>
    <button onclick="logout()">Sair</button>

    <script>
        // Verifica se o usuário está logado
        let token = localStorage.getItem('token');

        // Se não estiver logado, redireciona para a página de login
        if (!$token) {
            window.location.href = '/login';
        }

        // Função para fazer logout
        function logout() {
            localStorage.removeItem('token');
            alert('Deslogado com sucesso!');
            window.location.href = '/login';
        }
    </script>
</body>

</html>