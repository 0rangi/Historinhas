<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uau</title>
    @vite(['resources/js/app.js'])
</head>
<body>
 
        @component('navbar')
        @endcomponent
        <main role="main" class="py-4">
        @hasSection('content')
            @yield('content')
        @endif
    </main>
    
   

</body>
</html>

