<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire MMFilmes Clone</title>
    <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}">

    @vite('resources/css/app.css')
</head>

<body class="antialiased font-sans w-screen h-screen bg-[#191919] text-white">
    <x-header />
    <main>
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>