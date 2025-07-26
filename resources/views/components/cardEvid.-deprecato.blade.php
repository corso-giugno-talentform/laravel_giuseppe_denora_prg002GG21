 <div class="col-lg-4 col-md-6">
                        <div class="featured-card">
                            <div class="position-relative">
                                <img src="{{ $article['immagine'] }}" class="featured-img" alt="Yoga">
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