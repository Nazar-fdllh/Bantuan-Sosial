<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        h1 {
            color: #343a40;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <main>
        @yield('content')

        @yield('program') <!-- Placeholder untuk program -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<section class="container-fluid footer_section">
  <p>
    &copy; 2024 All Rights Reserved
    <a href="https://html.design/"> UAS DESAIN WEB 2024</a>
  </p>
</section>
</html>
