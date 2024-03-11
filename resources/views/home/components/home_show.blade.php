@extends('layouts.index')

@section('content')
    <h1>hello from show page the persen selected is : {{ $home->name }}</h1>

    <form action="{{ route('home.update' , $home) }}" method="post">
        @csrf
        @method("PUT")
        <label for="">name :
            <input value="{{ $home->name }}" name="name" type="name">
        </label>

        <label for="">email :
            <input  value="{{ $home->email }}" name="email" type="email">
        </label>

        <label for="">password :
            <input value="{{ $home->password }}" name="password" type="password">
        </label>
        <button>update</button>
    </form>
@endsection