

<x-main>

      <x-slot name="title">
      Wellness Blog | Il tuo spazio per benessere e salute
    </x-slot>
    <!-- Hero Section -->
<x-hero/>

    <!-- Featured Articles -->
    <section class="featured-articles" id="articles">
        <div class="container">
            <h2 class="section-title">Articoli in Evidenza</h2>
            <div class="row">

                <!-- Article in evidenza -->
                @foreach ($articlesEvid as $article)
                   
          {{--   <x-cardEvid :article='$article'></x-cardEvid> --}}
          {{-- <x-card :article='$article'  type="featured"/> --}}
            <x-card :article="$article" type="featured" :letto="$article['letto']" />

                @endforeach
            </div>
        </div>
    </section>


    <!-- parte centrale  -->
    <div class="container py-4   ">
    <div class="row">

     <!-- Immagine 2/3 -->
        <div class="col-lg-8 col-md-7  mb-4  ">
            <img src="https://images.unsplash.com/photo-1535914254981-b5012eebbd15?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8d2VsbG5lc3N8ZW58MHx8MHx8fDA%3D"
                alt="" class="img-fluid rounded shadow w-100 object-fit">
        </div>
      
        <div class="col-lg-4 col-md-5 px-3 py-3">
             <x-sideBar :category="$sidebarCat" />
            <div>

      

</div>
    </div>


    <!-- Recent Articles -->
 

     <x-recent-articles :articles-rec="$articlesRec" />

</x-main>
