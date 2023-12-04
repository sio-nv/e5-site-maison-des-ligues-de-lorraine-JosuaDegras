  <!-- MENU -->
  <header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-transparent-hightlight full-width sticky">
      <div class="s-12 l-2">
        <a href="{{route('home')}}" class="logo">
          <!-- Logo White Version -->
          <img class="logo-white" src="{{ asset('/img/logo_ligue.png') }}" alt="">
          <!-- Logo Dark Version -->
          <img class="logo-dark" src="{{ asset('/img/logo_ligue-dark.png') }}" alt="">
        </a>
      </div>
      <div class="top-nav s-12 l-10">

      <ul class="right chevron">
          <li><a href="{{route('gest-home')}}">Accueil</a></li>
          <li><a href="{{route('salle.index')}}">Les salles</a></li>
          <li><a href="">Les clients</a></li>
          <li><a href="">Les réservations</a></li>

          <li><a>Bibliothèque</a>
            <ul>
              <li><a href="">Voir les inscrits</a>
              <li><a href="">Voir les ouvrages</a></li>
              <li><a href="">Gestion des prêts</a></li>

    
            </ul>
          </li>

          <li class="bg-warning"><a href="{{route('home')}}">Retour au site</a></li>
      </ul>
      </div>
    </nav>
  </header>