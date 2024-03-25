<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Styles -->
    <style>
        /* Customize here if needed */
    </style>
</head>

<body class="font-sans antialiased">
    <header class="bg-blue-500 shadow container mx-auto flex justify-between py-3">
        <a href="{{ route('Home') }}" class="text-white text-lg font-bold">PSI Laravel</a>
        <nav class="">
            <ul class="flex gap-4">
                <li class="text-white text-lg font-bold">
                    <a href="{{ route('Despesa.listar') }}" class="text-white text-lg font-bold">Listar Despesas</a>
                </li>
                <li class="text-white text-lg font-bold">
                    <a href="{{ route('Despesa.create') }}" class="text-white text-lg font-bold">Cadastrar Despesa</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="py-4">
        @yield('content')
        <div class="ml-4 text-center text-sm">
           Desenvolvido com Laravel v {{ Illuminate\Foundation\Application::VERSION}} PHP v {{PHP_VERSION}}
        </div>
    </main>
</body>

</html>