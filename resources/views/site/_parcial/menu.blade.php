<nav id="mobile-menu">
    <ul class="ul-menu">
        <div>
            <li class="has-dropdown active menu-thumb">
                <a href="{{ route('site.home') }}">Home<!-- <i class="fas fa-angle-down"></i>--></a>
            </li>
        </div>

        <div>
            <li>
                <a href="{{ route('site.abouts_us') }}">Sobre Nós</a>
            </li>
        </div>

        <div>
            <li class="has-dropdown">
                <a href="{{ route('site.gallery') }}">Galeria</a>
            </li>
        </div>

        <div>
            <li>
                <a href="{{ route('site.reservation') }}">Carros</a>
            </li>
        </div>
    </ul>
</nav>
