<x-layout>
  <div class="container py-5">
    <div class="p-5 rounded-4 mp-surface">
      <div class="row align-items-center g-4">
        <div class="col-12 col-lg-8">
          <h1 class="display-5 fw-bold mb-3">MotorPulse</h1>
          <p class="lead mp-muted mb-4">
            Prove su strada, trackday e setup: dal grip alle linee perfette.
          </p>
          <div class="d-flex gap-2 flex-wrap">
            <a href="{{ route('articles.index') }}" class="btn btn-mp btn-lg">
              Esplora gli articoli
            </a>
            <a href="{{ route('articles.create') }}" class="btn btn-outline-light btn-lg">
              Scrivi un articolo
            </a>
          </div>
        </div>

        <div class="col-12 col-lg-4">
          <div class="p-4 rounded-4 border" style="border-color: var(--mp-border);">
            <div class="fw-semibold mb-2">Focus</div>
            <ul class="mp-muted mb-0">
              <li>Assetto & frenata</li>
              <li>Pneumatici e grip</li>
              <li>Motori e affidabilità</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>