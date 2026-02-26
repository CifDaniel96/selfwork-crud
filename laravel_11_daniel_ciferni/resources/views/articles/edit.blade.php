<x-layout>
    <div class="container py-5">
        <h1 class="mb-4">Modifica articolo</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('articles.update', $article) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input
                    type="text"
                    name="title"
                    class="form-control"
                    value="{{ old('title', $article->title) }}"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Contenuto</label>
                <textarea
                    name="content"
                    class="form-control"
                    rows="7"
                >{{ old('content', $article->content) }}</textarea>
            </div>

            <button class="btn btn-primary">Salva modifiche</button>
            <a class="btn btn-outline-secondary" href="{{ route('articles.show', $article) }}">Annulla</a>
        </form>
    </div>
</x-layout>