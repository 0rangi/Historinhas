<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2&ordf; Avaliação do 1&ordm;bimestre</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container text-center py-5">
        @component('navbar')

    </div>
    <div class="container py-5">
        <main role="main" class="py-4">
            @hasSection('content')
                @yield('content')
            @endif
        </main>
    </div>

</body>
</html>

