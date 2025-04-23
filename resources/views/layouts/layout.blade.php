<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("titolo")</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include("partials.header")
    @yield("hero")
    <section style="background-color: #1c1c1c">
        <div class="container">
    @yield("contenuto")
        </div>
    </section>
    @yield("contenuto2")

    @include("partials.footer")
    
</body>
</html>