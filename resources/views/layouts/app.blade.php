<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Blog')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <header class="mb-5">
            <h1 class="title">@yield('header', 'Blog')</h1>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
