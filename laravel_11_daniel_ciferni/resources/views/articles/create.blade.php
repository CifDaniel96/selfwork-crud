<x-layout>
    <div class="container">
        <h1 class="h4 mb-4">Nuovo Articolo</h1>

        <form action="{{ route('articles.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Contenuto</label>
                <textarea name="content" class="form-control" rows="6" required></textarea>
            </div>

            <button class="btn btn-dark">Salva</button>
        </form>
    </div>
</x-layout>