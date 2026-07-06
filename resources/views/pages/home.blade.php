@extends('layout.app')

@section('content')
.
<form action="/register" method="POST">

    @csrf

    <label>Name</label>
    <input type="text" name="name" value="{{ old('name') }}">

    @error('name')
        <p style="color:red">{{ $message }}</p>
    @enderror

    <br>

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}">

    @error('email')
        <p style="color:red">{{ $message }}</p>
    @enderror

    <br>

    <label>Password</label>
    <input type="password" name="password" value="{{ old('password') }}">

    @error('password')
        <p style="color:red">{{ $message }}</p>
    @enderror

    <br>

    <button type="submit">Register</button>

</form>
@endsection