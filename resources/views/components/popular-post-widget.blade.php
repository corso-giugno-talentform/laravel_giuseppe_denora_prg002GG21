<div class="sidebar-widget">
    <h3 class="widget-title">Articoli Popolari</h3>



    @foreach ($popular as $art)
        <div class="popular-post">
            <img src="{{ $art['immagine'] }}" class="popular-img" alt="Post popolare">
            <div>
                <a href="#" class="popular-title">{{ $art['nome'] }}</a>
                <p class="popular-date">{{ $art['data_pubblicazione'] }}</p>
            </div>
        </div>
    @endforeach
</div>

{{--    @foreach ($articlesEvid as $art) --}}
{{--  <x-popularPostWidget :$popular='$articlesEvid'/> --}}
