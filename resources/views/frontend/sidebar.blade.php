<div class="col-md-3 col-sm-12 col-xs-12">
    <div class="shop-left-sidebar">
        <div class="single-left-widget">
            <div class="section-title">
                <a href="/catalogos"><h4>catálogo</h4></a>
                <ul>
                    @forelse($catalogues as $catalogue)
                    <li><a href="/catalogos/{{ $catalogue->id }}/categorias/" class="show-submenu">{{ $catalogue->title }}</a>
                        <ul class="submenu submenu">
                            @foreach($categories as $category)
                            <li><a href="#">{{ $category->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @empty
                    <li><a href="/" class="show-submenu">Aun no tenemos catálogos disponibles...</a>
                        <ul class="submenu submenu">
                            <li><a href="/">home</a></li>
                        </ul>
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>