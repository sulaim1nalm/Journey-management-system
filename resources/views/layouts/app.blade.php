<!DOCTYPE html>
<html>
<head>
    <title>Journey Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">JMS</a>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
