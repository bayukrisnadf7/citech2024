<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css">
  @vite('resources/css/app.css')
</head>
<body>
  <div>
    @if(!Request::is('login', 'register', 'member')) 
      @include('partials.navbar')
    @endif
  </div>
  <div class="mx-24">
    @yield('content')
  </div>
</body>
</html>
