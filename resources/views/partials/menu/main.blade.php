<ul class="navbar-nav mr-auto">
    <li class="nav-item {{ request()->route()->getName() == 'shop.index' ? 'active': '' }}">
        <a class="nav-link" href="{{ route('shop.index') }}">Productos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/nosotros">Acerca de</a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link" href="/cart">
            Carrito 
            
        </a>
    </li>
</ul>