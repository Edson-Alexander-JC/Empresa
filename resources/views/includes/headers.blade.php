<style>
    .active{
        color: red;
        font-weight: 800;
    }
</style>

<header>
    <nav>
        <ul>
            <li>
                <a href="{{route('acercade')}}" class="{{request()->routeIs('acercade') ? 'active' : ''}}">Acerca de nosotros</a>
            </li>
            
            <li>
                <a href="{{route('personal.index')}}" class="{{request()->routeIs('esclavos.*') ? 'active' : ''}}">Personal</a>
            </li>
            <li>
                <a href="{{route('contactenos')}}" class="{{request()->routeIs('contactenos') ? 'active' : ''}}">Contactenos</a>
            </li>
        </ul>
    </nav>
</header>