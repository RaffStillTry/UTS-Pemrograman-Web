@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="login-box">
        <h1>Taskly</h1>
        <p class="subtitle">Task Management Sederhana</p>

        @include('partials.alert')

        <form method="POST" action="{{ route('login.proses') }}">
            @csrf

            <label for="username">Username</label>
            <input type="text" id="username" name="username"
                   value="{{ old('username') }}" placeholder="Masukkan username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password"
                   placeholder="Masukkan password" required>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
@endsection