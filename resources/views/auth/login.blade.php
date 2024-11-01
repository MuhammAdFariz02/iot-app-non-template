@extends('layouts.master-without-nav')

@section('title', 'Login - Sistem Monitoring Pencahayaan Otomatis')

@section('css')
    <!-- CSS Khusus untuk Login -->
    <style>
        .login-container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection

@section('content')
<div class="login-container">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title text-center mb-4">Login Sistem Monitoring</h4>
                
                <!-- Form Login -->
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                    </div>
                    <div class="text-center m-3">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
                
                <!-- Link Lupa Password -->
                <div class="text-center mt-3">
                    <a href="#" class="text-muted">Lupa Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection