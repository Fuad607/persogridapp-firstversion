<html>
<head>
    <meta charset="utf-8">
    <title>PersoGrid</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/assets/js/bootstrap.js">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body  >

@include('inc.navbar')
<div class="contain">
<div class="main_container">





     @yield('content')




</div>

    <div class= "foot">
        @include('inc.footer')
    </div>

</div>


</body>

</html>