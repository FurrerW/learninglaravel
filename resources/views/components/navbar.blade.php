<nav class="flex flex-row justify-between items-center p-4 border-b-2 border-rose-500">
    <ul class="">
        <li><a href="/"><img src="{{ asset('images/logo.png') }}" alt="logo" class="w-36"></a></li>
    </ul>
    <ul class="flex gap-x-4">
        <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'text-rose-500 font-bold' : 'hover:underline underline-offset-4 decoration-4 decoration-rose-500' }} ">Home</a></li>
        <li><a href="{{ route('blogs') }}" class="{{ Route::is('blogs') ? 'text-rose-500 font-bold' : 'hover:underline underline-offset-4 decoration-4 decoration-rose-500' }} ">Blogs</a></li>
        <li><a href="{{ route('about') }}" class="{{ Route::is('about') ? 'text-rose-500 font-bold' : 'hover:underline underline-offset-4 decoration-4 decoration-rose-500' }} ">About</a></li>
    </ul>
</nav>
