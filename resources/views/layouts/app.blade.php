<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Blog')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <header class="mb-6">
            <h1 class="text-4xl font-bold">@yield('header', 'Blog')</h1>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
