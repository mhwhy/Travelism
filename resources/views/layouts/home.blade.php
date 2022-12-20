<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    @include('style.stylehome')

    <title>Travelism</title>
    <link rel="shortcut icon" href="{{ asset('/img/mylogo.png') }}" type="image/x-icon">
</head>
<body>
   @include('layouts.navbarfront')
      <!-- END nav -->
    <div class="content">
        @yield('content')



    </div>

    @include('layouts.footer')




    @include('style.jshome')
</body>
</html>
