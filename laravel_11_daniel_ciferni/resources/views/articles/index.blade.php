<x-layout>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 fw-bold mb-0">Articoli</h1>
            @auth
            <a href="{{ route('articles.create') }}" class="btn btn-dark">
                + Nuovo articolo
            </a>
            @endauth
        </div>

        @forelse ($articles as $article)
            <div class="mp-surface rounded-4 p-4 mb-3">
                <h2 class="h5 fw-bold mb-2">{{ $article->title }}</h2>
                <p class="mp-muted mb-3">{{ \Illuminate\Support\Str::limit($article->content, 160) }}</p>
                <a class="btn btn-outline-light btn-sm" href="{{ route('articles.show', $article) }}">Leggi</a>
            </div>
        @empty
            <p class="text-secondary">Ancora nessun articolo. Creane uno!</p>
        @endforelse
    </div>
</x-layout>