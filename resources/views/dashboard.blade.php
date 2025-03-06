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
        function logout() {
            localStorage.removeItem('token');
            alert('Deslogado com sucesso!');
            window.location.href = '/login';
        }
    </script>
</body>
</html>
