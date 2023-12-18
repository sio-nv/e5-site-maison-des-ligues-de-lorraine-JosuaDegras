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
          <li><a href="{{route('home')}}">Accueil</a></li>
          <li><a href="{{route('ligues')}}">Nos ligues</a>
            <ul>
              <li><a>La ligue de basket</a></li>
              <li><a>La ligue de voile</a></li>
              <li><a>La ligue de tennis</a></li>
              <li><a>La ligue de volley ball</a></li>
              <li><a>La ligue de plongée</a></li>
              <li><a>La ligue de de bowling</a></li>
            </ul>

          </li>
          <li><a>Plan des locaux</a>

          </li>
          <li><a>La bibliothèque</a>
            <ul>
              <li><a href="{{route('genre' , ['type' => 'tous'])}}">Parcourir les ouvrages</a>
              <li><a href="">Gérer vos prêts</a></li>
            </ul>
          </li>
          <li><a href="{{route('evenements')}}">Planning</a></li>
          <li><a href="{{route('contact')}}">Nous contacter</a></li>

          <li class="bg-warning"><a href="{{route('gest-home')}}">Tableau de bord de gestion</a></li>
        </ul>
      </div>
    </nav>
  </header>