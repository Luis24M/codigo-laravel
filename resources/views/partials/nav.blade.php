<nav class="bg-slate-600 p-4">
    <ul class="text-white flex flex-row justify-around">
      <li class="{{ setActivo('home') }}"><a href="/">Home</a></li>
      <li class="{{ setActivo('nosotros') }}"><a href="/nosotros">Nosotros</a></li>
      <li class="{{ setActivo('servicios.*') }} {{ setActivo('servicios.show') }}"><a href="/servicios">Servicios</a></li>
      <li class="{{ setActivo('contacto') }}"><a href="/contacto">Contacto</a></li>
    </ul>
</nav>