<!--La page suit le modèle de page "modele.blade.php"-->
@extends('layout.modele_gest')

<!-- Commence ici le corps de la page -->
@section('content')
<article>
  <header class="section background-primary">
    <div class="line">
      <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Les salles de la M2L</h1>
      <p class="margin-bottom-0 text-size-16"> Tous les bâtiments.</p>
    </div>
  </header>


  <section class="section background-white">


  <div class="line text-center">

  <div class="s-12 m-12 l-10 margin-bottom-30 ">
  <a class="button button-black-stroke text-size-20 margin-bottom-30 " href="{{route('salle.create')}}">Ajouter une nouvelle salle</a>
  </div>

            <div class="margin">
                

            @foreach($lessalles as $salle)

           

              <div class="s-12 m-12 l-5 margin-bottom-30 ">
                <div class="padding-2x background-dark" >
                  <!--<i class="icon-sli-shield icon3x text-white margin-bottom-30"></i>-->
                  <h2 class="text-thin"><a href="{{route('salle.show',['salle'=>$salle->numeroSalle])}}">{{$salle->nom}} </a>: {{$salle->capacite}} places </h2>
                 

                  <p class="margin-bottom-30">
                    
                    Description
                

                </p>
                    <a class="button button-white-stroke text-size-12" href="{{route('salle.edit',['salle'=>$salle->numeroSalle])}}">Modifier la salle</a>
                  <a class="button button-white-stroke text-size-12" href="">Supprimer la salle</a>
                
                </div>
              </div>
            @endforeach

            </div>
        </div>
 </section> 
      </article>
<!-- termine le corps de la page -->
@endsection