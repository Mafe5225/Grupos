<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <title>Grupos de estudiantes</title>
</head>
<body>
    <main class="vh-100">
        <h1 class="text-center pt-5">Grupos de estudiantes</h1>
        <div class="mt-5 d-flex justify-content-evenly">
            <a href="{{ route('cursos.index') }}" class="btn btn-primary">Cursos</a>
            <a href="" class="btn btn-primary">Generar grupos</a>

        </div>
    </main>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>