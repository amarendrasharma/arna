<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arna</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>
    <nav class="">
        <ul class="nav  justify-content-center bg-light py-3 list-unstyled">
            <span  class="nav-item nav-link" >  {{ menu('Tour') }}</span>
            <span  class="nav-item nav-link">  {{ menu('About') }}</span>
            <span  class="nav-item nav-link" > {{ menu('test') }}</span>
        </ul>
    </nav>
    @yield('content')
</body>
</html>