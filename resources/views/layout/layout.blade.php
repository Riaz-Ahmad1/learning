<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- <title> {{config('app.name')}} </title> -->
    <title> @yield('title') </title>
    @include('layout.head')
  </head>

<body>

@include('layout.header')
@include('layout.sidebar')

@yield('content')

@include('layout.footer')

</body>
</html>