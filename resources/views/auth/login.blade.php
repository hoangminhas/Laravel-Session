@extends('layouts.master')
@section('title', 'Login')
@section('content')
<form action="{{ route('auth.login') }}" method="post">
    @csrf
    Email:
    <input type="text" name="email" value="{{ $email }}">
    Password:
    <input type="password" name="password" value="{{ $password }}">
    <button type="submit">Login</button>
</form>
@endsection
