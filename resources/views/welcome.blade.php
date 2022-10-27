<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Pomodoro</title>
</head>

<body>
  <main class="container mt-5">
    <div class="text-center">
      <div class="card">
        <div class="card-header ">
          <h1>Pomodoro</h1>
        </div>

        <div class="card-body">
          <h2>00:00</h2>
        </div>
  
        <div class="card-footer text-center">
          <button class="btn btn-success">
            <i class="tim-icons icon-check-2"></i> START
            </button>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
