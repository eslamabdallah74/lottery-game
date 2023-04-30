<!DOCTYPE html>
<html>
<head>
    <title>Lottery Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body>
    <div class="container">
        @livewire('playing-game')
    </div>

    @livewireScripts

</body>
</html>
