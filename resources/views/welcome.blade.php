<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Learning Laravel</title>
</head>
<body class="bg-neutral-800 text-neutral-100 h-screen">
    <nav class="flex flex-row justify-between items-center p-4 border-b-2 border-rose-500">
        <ul class="">
        <li><a href="/"><img src="{{ asset('images/logo-dark.jpg') }}" alt="logo" class="w-36"></a></li>
        </ul>
        <ul class="flex gap-x-4">
            <li><a href="/">Home</a></li>
            <li><a href="/about">Blog</a></li>
            <li><a href="/contact">About</a></li>
        </ul>
    </nav>
    <header class="flex flex-col place-items-center justify-center gap-y-2 h-96">
        <h1 class=" text-6xl font-black">Learning Laravel</h1>
        <h2 class="text-rose-500 text-xl">Building a blog with Laravel so I can talk about learning Laravel</h2>
    </header>
</body>
</html>
