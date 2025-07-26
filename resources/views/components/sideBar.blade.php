{{-- <div class=" col-lg-4 col-md-5 px-3 py-3">
        <div class="sidebar-widget">
            <h3 class="widget-title">Categorie</h3>
            <ul class="categories-list">
                @foreach ($sidebarCat as $category)
                <li><a href="#">{{$category['nome']}} <span class="badge bg-light text-dark">{{$category['span']}}</span></a></li>
                @endforeach
               
            </ul>
        </div>
        </div> --}}

{{--   ovvero $sidebarCat la metto come valore della variabile :category in  <x-sideBar :category="$sidebarCat" />
        e questa $category la metto nel foreach al posto di sidebarCat --}}


    <div class="sidebar-widget">
        <h3 class="widget-title">Categorie</h3>
        <ul class="categories-list">
            @foreach ($category as $cat)
                <li>
                    <a href="#">
                        {{ $cat['nome'] }}
                        <span class="badge bg-light text-dark">{{ $cat['span'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

