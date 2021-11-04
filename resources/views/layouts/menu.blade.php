<li class="nav-item">
    <a href="{{ route('citas.index') }}"
       class="nav-link {{ Request::is('citas*') ? 'active' : '' }}">
        <p>Vue:Citas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('citasdetalles.index') }}"
       class="nav-link {{ Request::is('citasdetalles*') ? 'active' : '' }}">
        <p>Vue:Citasdetalles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('doctors.index') }}"
       class="nav-link {{ Request::is('doctors*') ? 'active' : '' }}">
        <p>Vue:Doctor</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pacientes.index') }}"
       class="nav-link {{ Request::is('pacientes*') ? 'active' : '' }}">
        <p>Vue:Pacientes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('usuarios.index') }}"
       class="nav-link {{ Request::is('usuarios*') ? 'active' : '' }}">
        <p>Vue:Usuarios</p>
    </a>
</li>


