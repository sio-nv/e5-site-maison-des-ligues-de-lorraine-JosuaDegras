<!--La page suit le modèle de page "modele.blade.php"-->
@extends('layout.modele_gest')

<!-- Commence ici le corps de la page -->
@section('content')


<!-- Content -->
<article>
  <header class="section background-primary">
    <div class="line">
      <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Tableau de bord de gestion</h1>
      <p class="margin-bottom-0 text-size-16">Le gestionnaire peut mettre à jour les listes des salles, clients ou réservations. Il peut aussi gérer la bibliothèque.</p>
    </div>
  </header>
  <section class="section background-white">
    <div class="line">
      <h2 class="text-size-50  text-m-size-40 text-center">Les chiffres</h2>
      <hr class="break-small background-primary break-center">
      <div class="margin margin-top-bottom-50">
        <div class="s-12 m-12 l-3">
          <div class="block">
            <div class="count-to">
              <span class="timer h1 text-size-50  text-m-size-40">?</span>
              <p class="h1 text-size-20 margin-top-10 text-dark text-thin">salles</p>
            </div>
          </div>
        </div>
        <div class="s-12 m-12 l-3">
          <div class="block">
            <div class="count-to">
              <span class="timer h1 text-size-50  text-m-size-40">?</span>
              <p class="h1 text-size-20 margin-top-10 text-dark text-thin">clients</p>
            </div>
          </div>
        </div>
        <div class="s-12 m-12 l-3">
          <div class="block">
            <div class="count-to">
              <span class="timer h1 text-size-50  text-m-size-40">?</span>
              <p class="h1 text-size-20 margin-top-10 text-dark text-thin">partenaires</p>
            </div>
          </div>
        </div>
        <div class="s-12 m-12 l-3">
          <div class="block">
            <div class="count-to">
              <span class="timer h1 text-size-50  text-m-size-40">?</span>
              <p class="h1 text-size-20 margin-top-10 text-dark text-thin">ouvrages</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</article>
<!-- termine le corps de la page -->
@endsection