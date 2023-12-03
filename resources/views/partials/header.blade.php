  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo me-auto">
        <a href="{{ route('home') }}"><img src="{{ asset('img/logo_ivlf.png') }}" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar order-last order-lg-0">        
        <ul>  
          <li><a href="{{ route('home') }}">Inicio</a></li>
          <li class="dropdown"><a href="#">Nosotros<i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/church/1">Quiénes Somos</a></li>
            <li><a href="/church/2">Nuestra Misión</a></li>
            <li><a href="/church/3">Nuestro Objetivo General</a></li>
            <li><a href="/church/4">Nuestros Propósitos</a></li>
            <li><a href="/church/5">Nuestros Valores</a></li>
            <li><a href="/church/6">Nuestras Prioridades</a></li>
            <li><a href="/church/7">Equipo Pastoral</a></li>
           </ul>
          </li>
          <li class="dropdown"><a href="#">Ministerios<i class="bi bi-chevron-down"></i></a>
           <ul>
            <li><a href="/ministry/1">Adoración</a></li>
            <li><a href="/ministry/2">Enseñanza</a></li>
            <li><a href="/ministry/3">Amigos de Jesús</a></li>
            <li><a href="/ministry/4">Grupos de Conexión</a></li>
            <li><a href="/ministry/5">Misericordia</a></li>
            <li><a href="/ministry/6">Jóvenes y Juveniles</a></li>
            <li><a href="/ministry/7">Evangelismo</a></li>
            <li><a href="/ministry/8">Hombres</a></li>
            <li><a href="/ministry/9">Mujeres</a></li>
            <li><a href="/ministry/10">Casa de Oración</a></li>
           </ul>
          </li>
          <li><a href="{{ route('activities') }}">Actividades</a></li>
          <li class="dropdown"><a href="#">Santa Biblia<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/testament/1">Antiguo Testamento</a></li>
              <li><a href="/testament/2">Nuevo Testamento</a></li>
            </ul>
           </li>
           <li><a href="{{ route('contacts') }}">Peticiones</a></li>
         </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="header-social-links d-flex align-items-center">
        <a href="https://www.google.com/url?q=https%3A%2F%2Fwww.facebook.com%2FIglesia-vi%25C3%25B1a-la-florida-258422480861743%2F&sa=D&sntz=1&usg=AFQjCNGhENEPNI1p1pXSSdp75jXA54kGQQ" title="Iglesia Viña La Florida" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.google.com/url?q=https%3A%2F%2Fwww.instagram.com%2Figlesiavlf%2F&sa=D&sntz=1&usg=AFQjCNEoGqtuhv5bHG0We49J0b2E4dGRVw" title="Iglesia Viña La Florida" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC8eby6qsxkAz_svi5CIPgGA" title="Canal Iglesia Viña La Florida" class="youtube"><i class="bi bi-youtube"></i></a>
        <a href="https://api.whatsapp.com/send?phone=56998719210" title="Contactar con Iglesia Viña La Florida" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
      </div>
    </div>
  </header><!-- End Header -->