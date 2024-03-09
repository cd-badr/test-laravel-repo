<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
    </head>
    <body>
        <h1>home</h1>


        <form action="{{ route("home.store") }}" method="post">
            @csrf
            <label for="">name :
                <input name="name" type="name">
            </label>

            <label for="">email :
                <input name="email" type="email">
            </label>

            <label for="">password :
                <input name="password" type="password">
            </label>
            <button>go</button>
        </form>
        

        <h1>test data seeders :</h1>
        @foreach ($homes as $home)
            <p>{{ $home->name }} <br> {{ $home->age }}</p>
        @endforeach
            
        
    </body>
</html>
