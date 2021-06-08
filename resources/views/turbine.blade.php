<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Laravel</title>
</head>

<body class="antialiased bg-indigo-100">
    <h1>Inspection results</h1>

    <ol class="space-y-2">
        @foreach ($results as $result)
        <li class="bg-white inline-block px-4 py-3 rounded shadow">{{ $result }}</li>
        @endforeach
    </ol>
</body>

</html>
