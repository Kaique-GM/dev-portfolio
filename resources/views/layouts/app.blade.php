<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">


    <title>{{ $title ?? 'Meu Projeto' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-zinc-950 text-white min-h-screen flex flex-col relative">

    <livewire:components.load-screen />

    <livewire:components.navbar />

    <main class="flex-1 w-full max-w-6xl mx-auto px-6 py-10">
        {{ $slot }}
    </main>

    <livewire:components.footer />

    @livewireScripts
</body>

</html>