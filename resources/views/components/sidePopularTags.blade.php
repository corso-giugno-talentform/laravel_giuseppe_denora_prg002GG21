<div class="sidebar-widget">
                        <h3 class="widget-title">Tag Popolari</h3>
                        <div class="tags-list">
                            @foreach ($category as $cat)
                                <a href="#" class="tag">{{ $cat['nome'] }}</a>
                            @endforeach

                        </div>
                    </div>


                  {{--   <x-sidPupularTags :category="$sidebarCat" /> --}}