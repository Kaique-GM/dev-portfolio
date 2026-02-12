<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jersey+15&display=swap" rel="stylesheet">


    <title>{{ $title ?? 'Meu Projeto' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen flex flex-col relative">

    <livewire:components.load-screen />

    <livewire:components.navbar />

    <main>
        {{ $slot }}
    </main>

    <livewire:components.footer />

    @livewireScripts
</body>

</html>