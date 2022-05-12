<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Instructores CNCA</title>
    <style>
      .bg-naranja{
        background-color: rgb(249 115 22);
      }
     .form-control:focus {
        border-color: #f97316;
        box-shadow: 0px 0px 14px 1px #F97316
    }
    .subtitulo{
      font-size: 1.5rem;
    } 
    </style>
  </head>
  <body>
    <h1 class="bg-naranja text-white text-center p-2">Instructores del programa</h1>
    <div class="container">
        @yield("contenido")
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>