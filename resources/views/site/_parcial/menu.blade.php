<nav id="mobile-menu">
    <ul>
        <li class="has-dropdown active menu-thumb">
            <a href="{{ route('site.home') }}">
                Home 
                <!-- <i class="fas fa-angle-down"></i>-->
            </a>

        </li>

        <li>
            <a href="{{route('site.abouts_us')}}">Sobre Nós</a>
        </li>

        <li class="has-dropdown">
            <a href="{{route('site.gallery')}}">
                Galeria
            </a>
        </li>

        <li>
            <a href="{{route('site.reservation')}}">
                Carros
            </a>   
        </li>  
    </ul>
</nav>
