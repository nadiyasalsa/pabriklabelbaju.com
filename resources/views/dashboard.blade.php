@extends('layouts.app')

@section('content')

<section class="container my-5">
    <div class="card p-4 shadow-sm">
        <h1>Dashboard Admin</h1>
        <p>Selamat datang di halaman dashboard Pabrik Label Baju.</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">
                Logout
            </button>
        </form>
    </div>
</section>

@endsection