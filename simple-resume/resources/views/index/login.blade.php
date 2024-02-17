<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Вход</title>
</head>
<body>
    <main class="login-container">
        <h2>Вход</h2>
        <form action="{{ route('login') }}" method="post" class="form">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required autocomplete="email">
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password" placeholder="Пароль" required autocomplete="current-password">
            <button type="submit" aria-label="Войти">Войти</button>
        </form>
    </main>
</body>
</html>