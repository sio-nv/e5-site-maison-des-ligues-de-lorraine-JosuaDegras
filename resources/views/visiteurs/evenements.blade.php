<!--La page suit le modèle de page "modele.blade.php"-->
@extends('layout.modele')

<!-- Commence ici le corps de la page -->
@section('content')
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Evènements à la maison des ligues.</h1>
       
          </div>  
        </header>
        <div class="section background-white"> 
          <div class="line">  
            <h2 class="text-size-40 margin-bottom-30">Premier</h2>
            <hr class="break-small background-primary margin-bottom-30">
          
            <div class="line margin-top-30">
              <div class="margin">
                <div class="s-12 m-6 l-6">
                  <img src="{{ asset('/img/evenements/eve1.jpg') }}" alt="">
                
                </div>
                <div class="s-12 m-6 l-6">
                  <p class="margin-top-30">
                  Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; 
                  est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                  Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc 
                  putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc 
                  nobis videntur parum clari, fiant sollemnes in futurum.
                  </p>
                </div>
              </div>
            </div>      
          </div>
        </div> 
      </article>
    <!-- termine le corps de la page -->
@endsection