<!--La page suit le modèle de page "modele_pages.blade.php"-->
@extends('layout.modele_gest')

<!-- Commence ici le corps de la page -->
@section('content')
<article>
  <header class="section background-primary">
    <div class="line">
      <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Ajouter une nouvelle salle</h1>
    </div>
  </header>


  <section class="section background-white">


  <div class="line text-center">

            <div class="margin">

    <form name="nouvelle_salle" method="POST" action="{{route('salle.store')}}">
            {{csrf_field()}}


            <div class="s-12 m-12 l-12 margin-bottom-30 ">
                <div class="padding-2x background-dark">
                    <p class="margin-bottom-30">
                        Veuillez saisir les informations de la salle :
                    </p>
                    <table class="text-dark">
                        <tr>
                            <td>
                                <h2 class="text-thin"> <label for="numerosalle"> Numéro</label> :
                            </td>
                            <td> <input name="numerosalle" type="text"></input> </h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="text-thin"> <label for="nom"> Nom</label> :
                            </td>
                            <td> <input name="nom" type="text"></input> </h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="text-thin"> <label for="capacite"> Capacité</label> :
                            </td>
                            <td><input name="capacite" type="number"></input></h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="text-thin"> <label for="equipements"> Equipements </label> :
                            </td>
                            <td> <input name="equipements" type="text"></input></h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="text-thin"><label for="services"> Services </label> :
                            </td>
                            <td><input name="services" type="text"></input> </h2>
                            </td>
                        </tr>
                        {{--<tr><td><h2 class="text-thin"> <label for="batiment"> Bâtiment </label> :</td><td> <input name="batiment" type="text"></input> </h2></td></tr>--}}
                        {{--E5 liste déroulante pour le bâtiment--}}
                        <tr>
                            <td>
                                <h2 class="text-thin"> <label for="batiment"> Bâtiment </label> :
                            </td>
                            <td>
                                <select name="batiment">

                                    @foreach($batiments as $salle)
                                    <option value="{{$salle->batiment}}">{{$salle->batiment}}</option>
                                    @endforeach
                                </select>
                                </h2>
                            </td>
                        </tr>
                        {{--Fin E5 liste déroulante pour le bâtiment--}}
                    </table>

                    <input name="_token" type="hidden" value="{{csrf_token()}}"></input><br>

                    <div class="text-center">
                        <input type="submit" value="sauvegarder"></input>
                    </div>

                </div>
            </div>


        </form>


    </section>
</article>
<!-- termine le corps de la page -->
@endsection