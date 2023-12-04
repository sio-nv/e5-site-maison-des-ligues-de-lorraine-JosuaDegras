<!--La page suit le modèle de page "modele.blade.php"-->
@extends('layout.modele')

<!-- Commence ici le corps de la page -->
@section('content')


<!-- Content -->

<!-- Caroussel -->
<header>
  <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
    <div class="item">
      <div class="s-12">
        <img src="img/header-ligue.png" alt="">
        <div class="carousel-content">
          <div class="content-center-vertical line">
            <div class="margin-top-bottom-80">
              <!-- Title -->
              <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">La maison des ligues de Lorraine<br></h1>
              <div class="s-12 m-10 l-8 center">
                <p class="text-white text-size-14 margin-bottom-10">Faire votre sport, organiser vos rencontres sportives. </p>
                <p class="text-white text-size-14 margin-bottom-40">Vous pouvez naviguer et vous informer au sujet de nos ligues : tennis, basket, voile et bien d'autres.  Rejoignez-nous ! </p>
              </div>
              <div class="line">
                <div class="s-12 m-12 l-3 center">
                  <a class="button button-white-stroke s-12" href="{{route('ligues')}}">Nos ligues</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Section 1 -->
<section class="section">
  <div class="line">
   
  </div>
  <div class="line">
    <div class="margin">
      <div class="s-12 m-12 l-2">
        <p class="h1 text-size-30 margin-m-bottom-30 text-primary text-line-height-1 text-right">We Are<br> Web Design Heroes</p>
      </div>
      <div class="s-12 m-12 l-5">
        <p class="text-size-14 margin-m-bottom-30 text-dark">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica. Dolor in hendrerit in vulputate velit esse molestie consequat. Mirum est notare quam littera gothica. </p>
      </div>
      <div class="s-12 m-12 l-5">
        <p class="text-size-14 text-dark">Mirum est notare quam littera gothica. Dolor in hendrerit in vulputate velit esse molestie consequat. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Dolor in hendrerit in vulputate velit esse molestie consequat.</p>
      </div>
    </div>
  </div>
</section>

<!-- Section 1 -->
<section class="section-small-padding background-white text-center">
  <div class="line">
    <div class="margin">
      <div class="s-12 m-12 l-4 margin-m-bottom">
        <div class="padding-2x block-bordered">
          <i class="icon-sli-shield icon3x text-dark center margin-bottom-30"></i>
          <h2 class="text-thin">Evenement phare 1</h2>
          <p class="margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
          <a class="button button-dark-stroke text-size-12" href="">Plus d'informations ? Cliquez ici !</a>
        </div>
      </div>
      <div class="s-12 m-12 l-4 margin-m-bottom">
        <div class="padding-2x block-bordered">
          <i class="icon-sli-umbrella icon3x text-dark center margin-bottom-30"></i>
          <h2 class="text-thin">Evenement phare 2</h2>
          <p class="margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
          <a class="button button-dark-stroke text-size-12" href="">Plus d'informations ? Cliquez ici !</a>
        </div>
      </div>
      <div class="s-12 m-12 l-4 margin-m-bottom">
        <div class="padding-2x block-bordered">
          <i class="icon-sli-home icon3x text-dark center margin-bottom-30"></i>
          <h2 class="text-thin">Evenement phare 3</h2>
          <p class="margin-bottom-30">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
          <a class="button button-dark-stroke text-size-12" href="">Plus d'informations ? Cliquez ici !</a>
        </div>
      </div>
    </div>
  </div>
</section>




<hr class="break margin-top-bottom-0">

<!-- Section 5 -->
<section class="section background-white text-center">
  <div class="line">
    <h2 class="text-size-50  text-m-size-40 text-center">Les ligues à l'honneur</h2>
    <hr class="break-small background-primary break-center">
    <div class="carousel-default owl-carousel carousel-wide-arrows">
      <div class="item">
        <div class="s-12 m-12 l-7 center text-center">
          <img class="image-testimonial-small" src="{{asset('/img/ligues/tennis.png')}}" alt="">
          <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
          <p class="h1 text-size-16">Scott Star / CEO / Company</p>
        </div>
      </div>
      <div class="item">
        <div class="s-12 m-12 l-7 center text-center">
          <img class="image-testimonial-small" src="{{asset('/img/ligues/board.png')}}" alt="">
          <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
          <p class="h1 text-size-16">Mark Stoner / Web Developer / Company</h5>
        </div>
      </div>
      <div class="item">
        <div class="s-12 m-12 l-7 center text-center">
          <img class="image-testimonial-small" src="{{asset('/img/ligues/rugby.png')}}" alt="">
          <p class="h1 margin-bottom text-size-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
          <p class="h1 text-size-16">Jane Naismith / Web Designer / Company</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- termine le corps de la page -->
@endsection