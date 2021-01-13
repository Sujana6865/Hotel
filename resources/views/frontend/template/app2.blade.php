<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    {{-- header --}}
    @include('navbar.nav')

    {{-- main --}}
    <main class="container mx">
        @yield('content')
    </main>


    {{-- footer --}}
    <div class="bg-black flex">
      <div>
        <h1>Hotel Dharan kitchen</h1>
        <div></div>
      </div>
      <div>

      </div>
      <div>

      </div>
      <div>

      </div>
  </div>
</body>
</html>