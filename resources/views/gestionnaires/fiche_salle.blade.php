<!--La page suit le modèle de page "modele_pages.blade.php"-->
@extends('layout.modele_gest')

<!-- Commence ici le corps de la page -->
@section('content')
<article>
  <header class="section background-primary">
    <div class="line">
      <h1 class="text-white margin-top-bottom-10 text-size-30 text-line-height-1">Les salles de la M2L</h1>
      <p class="margin-bottom-0 text-size-16"> Tous les bâtiments.</p>
    </div>
  </header>


  <section class="section background-white">

  <h1>Salle {{$salle_choisie->nom}} (bâtiment {{$salle_choisie->batiment}})</h1>

  <h2>{{$salle_choisie->capacite}} places disponibles</h2>

  <table>
    <tr>
        <td>
            La salle présente les équipements suivant : {{$salle_choisie->equipements}}.
        </td>
    </tr>
    <tr>
        <td>
            La salle propose les services suivant : {{$salle_choisie->services}}.          
        </td>
    </tr>

    <tr>
        <td>
            <img src="{{ asset($salle_choisie->photo) }} " width="100px" alt="photo de la salle">
        </td>
    </tr>
  
  
  </table>

</section> 
      </article>
<!-- termine le corps de la page -->
@endsection