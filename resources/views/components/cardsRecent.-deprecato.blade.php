 <div class="col-lg-3 col-md-6">


                        <div class="recent-card">
                            <div class="position-relative">
                                <img src="{{ $article['immagine'] }}" class="recent-img" alt="">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-success mb-2">{{ $article['span'] }}</span>
                                <h5 class="card-title">{{ $article['nome'] }}</h5>
                                <div class="d-flex justify-content-between mt-3">
                                   {{--  <p class="post-date">{{ $article['data_pubblicazione'] }}</p> --}}
                                   <a href="/article/recent/{{ $article['slug'] }}">Leggi →</a>

                                </div>
                            </div>
                        </div>

                    </div>

                    {{--   <x-cardsRecent :article='$article'></x-cardsRecent> --}}