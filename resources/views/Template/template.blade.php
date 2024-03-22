<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSI CRUD Laravel</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
    @yield('content')

    <div class="ml-4 text-center text-sm">
        Laravel v {{ Illuminate\Foundation\Application::VERSION}} PHP  v {{PHP_VERSION}}
    </div>
</body>
</html>