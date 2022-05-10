<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Instructores CNCA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <style>
        .bg-naranja {
            background-color: rgb(249 115 22);
        }
        .contain{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            place-items: center;
            padding: 1.25rem;
            margin-top: 1rem;
        }
        @media screen and (max-width:425px) {
            .contain{
                grid-template-columns: repeat(1, 1fr);
                gap: 5rem;
            }
        }
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-dark">

    <nav class="navbar navbar-expand-lg navbar-light bg-naranja ">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand fw-bold text-white" href="#">Instructores CNCA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-dark text-decoration-none fs-5">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-dark text-decoration-none fs-5">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>   
    </nav>

    <section class="contain ">
        <div>
            <h1 class="text-white">Aplicativo CNCA</h1>
            <p class="text-white">Con este aplicativo se podrá organizar información acerca de los instructores del centro nacional colombo aleman</p>
            <a href="{{ url('/articulos ') }}" class="button text-decoration-none p-2 bg-naranja border text-white rounded-3">Entrar</a>
        </div>
        <div class="w-1">
            <img class="img-fluid" src="{{URL::asset('assets/study.png')}}" type="image/svg" alt="img">
        </div>
    </section>
</body>

</html>