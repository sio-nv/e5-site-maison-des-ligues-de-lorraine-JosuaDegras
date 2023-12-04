<!--La page suit le modèle de page "modele.blade.php"-->
@extends('layout.modele')

<!-- Commence ici le corps de la page -->
@section('content')


<!-- Content -->

<article>
  <header class="section background-dark">
    <div class="line">
      <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Les ouvrages</h1>
    
    </div>
  </header>


  <section class="section-top-padding full-width">
    <h2 class="text-size-50  text-m-size-40 text-center">Tous les genres littéraires</h2>
    <hr class="break-small background-primary break-center">
    <div class="tabs background-primary-hightlight">



      <div class="tab-item tab-active">
        <a class="tab-label">...</a>
        <div class="tab-content lightbox-gallery">

          @foreach ($leslivres as $livre)

          <div class="s-12 m-6 l-3">
            <a class="image-with-hover-overlay image-hover-zoom" href="{{asset('img/couvertures/livre.png')}}">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h2 class="text-thin">{{$livre->titre}}</h2>
                  <p>{{$livre->auteur}}</p>
                </div>
              </div>
              <img src="{{asset('/img/couvertures/livre.png')}}" alt="" title="{{$livre->titre}}" />
            </a>
          </div>

        
        @endforeach
        </div>
      </div>


    </div>
  </section>

</article>
<!-- termine le corps de la page -->
@endsection