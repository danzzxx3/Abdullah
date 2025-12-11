<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f5f6fa;
        }
        .sidebar {
            height: 100vh;
            background: #343a40;
            padding-top: 20px;
            color: #fff;
        }
        .sidebar a {
            color: #ddd;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
        }
        .sidebar a:hover {
            background: #495057;
            color: #fff;
        }
        .content {
            padding: 30px;
        }
    </style>

</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center mb-4">E-Commerce</h4>

        <a href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
        <a href="/products"><i class="bi bi-box"></i> Kelola Produk</a>

        <hr class="bg-light">

        <form action="{{ route('logout') }}" method="POST" class="m-2">
            @csrf
            <button class="btn btn-danger w-100">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="content flex-grow-1">
        @yield('content')
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
