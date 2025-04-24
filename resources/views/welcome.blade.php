<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Learning Laravel</title>
</head>
<body class="bg-neutral-800 text-neutral-100">
    <div class="mx-auto max-w-lg xl:max-w-2xl">
        <x-navbar></x-navbar>
        <header class="flex flex-col place-items-center justify-center gap-y-2 pt-32">
            <h1 class=" text-6xl font-bold">Learning Laravel</h1>
            <h2 class="text-rose-500 text-xl">Building a blog with Laravel so I can talk about learning Laravel</h2>
            <img src="{{ asset('images/laravel-meme.jpg') }}" alt="laravel meme" class="pt-16 w-128">
        </header>
    </div>
</body>
</html>
