@extends('layouts.index')

@section('content')

    <body>
        <h1>home</h1>

        <form action="{{ route('home.store') }}" method="post">
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


        <h1>My DATA :</h1>
        <hr>
        @foreach ($homes as $home)
            <p>name:{{ $home->name }} , email :{{ $home->email }} , password: {{ $home->password }}</p>
            <a href="{{ route('home.show', $home) }}">update</a>
            <hr>
        @endforeach


    </body>
@endsection
