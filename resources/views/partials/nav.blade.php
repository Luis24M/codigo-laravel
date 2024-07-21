<nav class="bg-slate-600 p-4">
    <ul class="text-white flex flex-row justify-around">
      <li class="{{ setActivo('home') }}"><a href="/">Home</a></li>
      <li class="{{ setActivo('nosotros') }}"><a href="/nosotros">Nosotros</a></li>
      <li class="{{ setActivo('servicios.*') }} {{ setActivo('servicios.show') }}"><a href="/servicios">Servicios</a></li>
      <li class="{{ setActivo('contacto') }}"><a href="/contacto">Contacto</a></li>
      @guest
        <li><a href="{{ route('login') }}">Login</a></li>
      @else
        <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        @endguest
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
      @csrf
    </form>
</nav>