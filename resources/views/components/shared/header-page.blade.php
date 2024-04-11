<header class="mb-8 flex justify-between items-center">
    <div>
        <h1>{{ $title }}</h1>
        <h1>{{ $description }}</h1>
        {{-- estamos recibiendo lo que se escribio en el index.blade.php --}}
    </div>
    <a href="{{ route($path) }}" class="btn-primary">{{ $button }}</a>
</header>
