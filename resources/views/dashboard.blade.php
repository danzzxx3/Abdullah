@extends('layouts.app')

@section('content')
<h2 class="mb-4">Selamat Datang, {{ auth()->user()->name }} 👋</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Total Produk</h5>
                <h2 class="text-primary">{{ $totalProducts ?? 0 }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Total User</h5>
                <h2 class="text-success">{{ $totalUsers ?? 0 }}</h2>
            </div>
        </div>
    </div>
</div>

@endsection
