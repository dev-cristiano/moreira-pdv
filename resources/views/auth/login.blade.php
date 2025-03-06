<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moreira::Login</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <h2>Login</h2>
    <form id="loginForm">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Entrar</button>
    </form>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            axios.post('/api/login', {
                    email: email,
                    password: password
                })
                .then(response => {
                    alert('Login bem-sucedido! Token armazenado.');
                    localStorage.setItem('token', response.data.token);
                    window.location.href = '/dashboard'; // Redireciona após login
                })
                .catch(error => {
                    alert('Erro ao fazer login! Verifique suas credenciais.');
                });
        });
    </script>
</body>

</html>