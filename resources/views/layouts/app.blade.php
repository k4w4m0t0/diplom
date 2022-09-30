<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body style="background-color: white">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
          <a class="navbar-brand text-info" href="/">Модуль абитуриента</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-decoration-none text-info" aria-current="page" href="{{ route('main_index') }}">Список абитуриентов</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none text-info" aria-current="page" href="{{ route('abi_create') }}">Добавление абитуриента</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none text-info" aria-current="page" href="#"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- @dd($main_data) --}}


    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </div>
</body>
</html>