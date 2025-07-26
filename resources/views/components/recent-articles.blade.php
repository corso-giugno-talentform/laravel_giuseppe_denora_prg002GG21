 @props(['articlesRec'])
 
 <section id="articles" class="recent-articles">
        <div class="container">
            <h2 class="section-title">Articoli Recenti</h2>
            <div class="row">
                <!-- Article -->
                @foreach ($articlesRec as $article)
                 {{--   <x-cardsRecent :article='$article'></x-cardsRecent> --}}

                   <x-card :article='$article'  type="recent"/>
                @endforeach

            </div>
        </div>
    </section>

   {{--  <x-recent-articles :articles-rec="$articlesRec" /> --}}