<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
    <div class=" dropdown-header noti-title">
        <h6 class="text-overflow m-0">Bienvenido!</h6>
    </div>
    <a href="{{ url('/profile') }}" class="dropdown-item">
        <i class="ni ni-single-02 text-orange"></i>
        <span>Mi Perfil</span>
    
    <div class="dropdown-divider"></div>
    <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout3').submit();" >
        <i class="ni ni-user-run text-orange"></i>
        <span>Cerrar Sesion</span>
    </a>
    
    <form id="logout3" action="{{route('logout')}}" method="POST" stlye="display: none;">
        @csrf
    </form>
</div>