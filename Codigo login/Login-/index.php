<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
    <nav class="navbar bg-dark d-flex justify-content-center align-items-center" style="height: 8vh;">
    <h1 class="text-white m-0">Login</h1>
</nav>
    </header>
    <main class="container mt-4">
        <form action="login.php" method="post" class="form d-flex flex-column align-items-center gap-3">
            <div class="mb-3 w-50">
                <label for="user" class="form-label">Usuário:</label>
                <input type="text" class="form-control" name="user" id="user">
            </div>
            <div class="mb-3 w-50">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <div class="mb-3">
                <input type="submit" value="VERIFICAR" class="btn btn-primary" id="veri" name="verificar">
            </div>
            

        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>