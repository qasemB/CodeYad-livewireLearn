<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Laravel</title>
        @livewireStyles
    </head>
    <body class="antialiased">


        {{$slot}}




        @livewireScripts

        <script>
            window.livewire.on('handleShowAlertJs',function(){
                alert('aaa')
            })
        </script>

    </body>
</html>
