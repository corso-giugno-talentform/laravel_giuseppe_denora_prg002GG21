@props([
    'article',
    'type' => 'featured',
    'letto' => false
])

@php
    $isFeatured = $type === 'featured';
@endphp

<div class="{{ $isFeatured ? 'col-lg-4' : 'col-lg-3' }} col-md-6  ">
   {{--  <div class="{{ $type === 'featured' ? 'featured-card' : 'recent-card' }}"> --}}
    <div class="{{ $isFeatured ? 'featured-card' : 'recent-card' }} {{ $letto ? 'border border-success' : '' }}">
        <div class="position-relative">
            <img src="{{ $article['immagine'] }}" class="{{ $isFeatured ? 'featured-img' : 'recent-img' }}"
                alt="{{ $article['nome'] }}">

            @if($letto)
                <span class="badge bg-secondary position-absolute top-0 end-0 m-2">Letto</span>
            @endif

            @if ($isFeatured)
                <span class="category-badge">{{ $article['span'] }}</span>
            @endif
        </div>
        <div class="card-body">
            @if ($isFeatured)
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


{{-- aggiungi classe se serve il js article-card"  aggiungi data-id="{{ $article['slug'] }}  --}}




{{-- @props([
    'article',
    'type' => 'featured', // default: 'featured'
])

@php
    $isFeatured = $type === 'featured';
@endphp

<div class="{{ $isFeatured ? 'col-lg-4' : 'col-lg-3' }} col-md-6">
    <div class="{{ $isFeatured ? 'featured-card' : 'recent-card' }}">
        <div class="position-relative">
            <img src="{{ $article['immagine'] }}" class="{{ $isFeatured ? 'featured-img' : 'recent-img' }}"
                alt="{{ $article['nome'] }}">
            @if ($isFeatured)
                <span class="category-badge">{{ $article['span'] }}</span>
            @endif
        </div>
        <div class="card-body">
            @if ($isFeatured)
                <h3 class="card-title">{{ $article['nome'] }}</h3>
                <p class="card-text">{{ $article['descrizione'] }}.</p>
                <a href="/article/evidenza/{{ $article['slug'] }}" class="btn btn-outline-primary">Leggi tutto</a>


                <div class="author-info">
                    <img src="{{ $article['autore_img'] }}" class="author-img" alt="Autore">
                    <div>
                        <p class="author-name">{{ $article['autore'] }}</p>
                        <p class="post-date">{{ $article['data_pubblicazione'] }} • {{ $article['durata_lettura'] }}
                        </p>
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
</div> --}}


{{--  <x-card :article="$article" type="featured" />
 <x-card :article="$article" type="recent" />
 --}}


{{--  <div class="col-lg-4 col-md-6">
                        <div class="featured-card">
                            <div class="position-relative">
                                <img src="{{ $article['immagine'] }}" class="featured-img" alt="">
                                <span class="category-badge">{{ $article['span'] }}</span>

                            </div>
                            <div class="card-body">
                                <h3 class="card-title">{{ $article['nome'] }}</h3>
                                <p class="card-text">{{ $article['descrizione'] }}.</p>
                               <a href="/article/evidenza/{{ $article['slug'] }}"  class="btn btn-outline-primary">Leggi tutto</a>

                                    
                                <div class="author-info">
                                    <img src="{{$article['autore_img']}}" class="author-img"
                                        alt="Autore">
                                    <div>
                                        <p class="author-name">{{ $article['autore'] }}</p>
                                        <p class="post-date">{{$article['data_pubblicazione']}} •  {{$article['durata_lettura']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6">


                        <div class="recent-card">
                            <div class="position-relative">
                                <img src="{{ $article['immagine'] }}" class="recent-img" alt="">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">{{ $article['span'] }}</span>
                                <h5 class="card-title">{{ $article['nome'] }}</h5>
                                <div class="d-flex justify-content-between mt-3">
                                  
                                   <a href="/article/recent/{{ $article['slug'] }}">Leggi →</a>

                                </div>
                            </div>
                        </div>

                    </div> --}}
