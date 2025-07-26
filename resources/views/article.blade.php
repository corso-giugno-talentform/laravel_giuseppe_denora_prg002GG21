<x-main>
     <x-slot name="title">
      Wellness Blog | Articolo
    </x-slot>


    <!-- Article Detail -->
    <section class="article-detail" id="article-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="article-header">
                        <span class="badge bg-success badge-pill mb-3">{{ $article['span'] }}</span>
                        <h1 class="article-title">{{ $article['nome'] }}</h1>
                        <div class="article-meta">
                            <img src="{{ $article['autore_img'] }}" alt="Autore">
                            <div class="ms-3">
                                <p class="author-name mb-0">{{ $article['autore'] }}</p>
                                <p class="post-date">{{ $article['data_pubblicazione'] }} •
                                    {{ $article['data_aggiornamento'] }} • {{ $article['durata_lettura'] }}</p>
                            </div>
                        </div>
                    </div>

                    <img src="{{ $article['immagine'] }}" class="article-img" alt="">

                    <div class="article-content">
                        <p>{{ $article['descrizione'] }}.</p>

                        <h3>Che cos'è esattamente?</h3>
                        <p>{{ $article['contenuto'] }}</p>

                        <blockquote>
                            {{ $article['citazione'] }}
                        </blockquote>

                        <h3>I Benefici Scientificamente Provati</h3>
                        <p>Numerosi studi hanno dimostrato </p>
                        <ul class="mb-4">
                            @foreach ($article['benefici'] as $beneficio)
                                <li>{{ $beneficio }}</li>
                            @endforeach


                        </ul>

                        <h3>Ricorda </h3>
                        <ul class="mb-4">
                            @foreach ($article['sottotitoli'] as $sottotitolo)
                                <li>{{ $sottotitolo }}</li>
                            @endforeach


                        </ul>


                        <h3>{{ $article['esercizio_guidato']['titolo'] }}</h3>
                        <p>{{ $article['esercizio_guidato']['descrizione'] }}</p>
                        <ol>
                            @foreach ($article['esercizio_guidato']['passaggi'] as $passaggio)
                                <li>{{ $passaggio }}</li>
                            @endforeach
                        </ol>


                        </ol>

                        <div class="mt-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="tags-list">

                                    @foreach ($article['sottotitoli'] as $sottotitolo)
                                        <a href="#" class="tag">{{ $sottotitolo }}</a>
                                    @endforeach

                                </div>
                                <div class="social-icons">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 sidebar">
                    <!-- About Widget -->
                    <x-about />

                    <!-- Categories sidebar  -->

                    <x-sideBar :category="$sidebarCat" />

                    <!-- Popular Posts Widget -->
                    <div >
                        <x-popular-post-widget :popular="$articlesEvid" />
                    </div>




                    <x-sidePopularTags :category="$sidebarCat" />
                    <!-- Newsletter Widget -->
                    <x-newsLetterWid />
                </div>
            </div>
        </div>
    </section>

     <!-- Recent Articles -->
     <x-recent-articles :articles-rec="$articlesRec" />


</x-main>
