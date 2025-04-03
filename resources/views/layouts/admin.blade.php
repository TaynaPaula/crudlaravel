<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Ceravida</title>
</head>

<body>
    <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sobre</a>
                <span>Ceravida</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="#">Aparelho de Jantar</a>
                        <a class="nav-link" href="#">Pratos</a>
                        <a class="nav-link" href="#">Pets</a>
                        <a class="nav-link" href="#">Servir</a>
                        <a class="nav-link" href="#">Chá e Café</a>
                        <a class="nav-link" href="">Minha Conta</a>
                        <a class="nav-link active" aria-current="page" href="{{ route('user.index') }}">Home</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
