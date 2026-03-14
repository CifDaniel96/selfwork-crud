<x-layout>
    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <p class="text-secondary mb-1">MotorPulse • Articolo</p>
                <h1 class="display-6 fw-bold mb-0">{{ $article->title }}</h1>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('articles.index') }}" class="btn btn-outline-light">
                    ← Indietro
                </a>

                <a href="{{ route('articles.edit', $article) }}" class="d-flex align-items-center btn btn-warning">
                    Modifica
                </a>
            </div>
        </div>

        <div class="card border-0 shadow-lg bg-dark text-light">
            <div class="card-body p-4 p-md-5">
                <p class="text-secondary mb-3">
                    Pubblicato: {{ $article->created_at?->format('d/m/Y H:i') }}
                </p>
                
                <div class="fs-5 lh-lg">
                    {{ $article->content }}
                </div>
                <strong><p>Autore: {{ $article->user->name }}</p></strong>
                
                <hr class="border-secondary my-4">

                <div class="d-flex justify-content-end">
                    <form method="POST" action="{{ route('articles.destroy', $article) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">
                            Elimina articolo
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-layout>