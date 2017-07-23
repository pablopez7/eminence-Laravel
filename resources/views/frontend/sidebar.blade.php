<div class="shop-left-sidebar">
    <div class="single-left-widget">
        <div class="section-title">
            <a href="/catalogos"><h3 class="text-center">CATÁLOGO</h3></a>
            <ul>
                @foreach ($catalogues as $catalogue)
                    <li><a href="#" class="show-submenu">{{ $catalogue->title }}</a>
                        <ul class="submenu submenu">
                            <li class="text-center"><a href="/catalogos/{{ $catalogue->id }}/categorias/"><h5>Ver Todas las Categorias</h5></a></li>
                            @foreach ($catalogue->categories as $category)
                                <li><a href="/catalogos/{{ $catalogue->id }}/categorias/{{ $category->id }}/productos/">{{ $category->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
