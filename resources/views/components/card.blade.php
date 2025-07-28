@props([
    'article',
    'type' => 'featured',
    'letto' => false
])



<div class="{{ $type === 'featured' ?'col-lg-4' : 'col-lg-3' }} col-md-6  ">

    <div class="{{ $type === 'featured'? 'featured-card' : 'recent-card' }} {{ $letto ? 'border border-success' : '' }}">
        <div class="position-relative">
            <img src="{{ $article['immagine'] }}" class="{{ $type === 'featured' ? 'featured-img' : 'recent-img' }}"
                alt="{{ $article['nome'] }}">

            @if($letto)
                <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Letto</span>
            @endif

            @if ($type === 'featured')
                <span class="category-badge">{{ $article['span'] }}</span>
            @endif
        </div>
        <div class="card-body">
            @if ($type === 'featured')
                <h3 class="card-title">{{ $article['nome'] }}</h3>
                <p class="card-text">{{ $article['descrizione'] }}.</p>
                <a href="/article/evidenza/{{ $article['slug'] }}" class="btn btn-outline-primary">Leggi tutto</a>
                <div class="author-info">
                    <img src="{{ $article['autore_img'] }}" class="author-img" alt="Autore">
                    <div>
                        <p class="author-name">{{ $article['autore'] }}</p>
                        <p class="post-date">{{ $article['data_pubblicazione'] }} • {{ $article['durata_lettura'] }}</p>
                    </div>
                </div>
            @else
                <span class="badge bg-success mb-2">{{ $article['span'] }}</span>
                <h5 class="card-title">{{ $article['nome'] }}</h5>
                <div class="d-flex justify-content-between mt-3">
                    <a href="/article/recent/{{ $article['slug'] }}">Leggi →</a>
                </div>
            @endif
        </div>
    </div>
</div>
