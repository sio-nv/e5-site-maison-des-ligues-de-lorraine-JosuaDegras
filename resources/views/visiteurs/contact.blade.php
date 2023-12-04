<!--La page suit le modèle de page "modele.blade.php"-->
@extends('layout.modele')

<!-- Commence ici le corps de la page -->
@section('content')


<!-- Content -->
<article>
  <header class="section background-dark">
    <div class="line">
      <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Contactez-nous</h1>   
    </div>
  </header>
  <div class="section background-white">
    <div class="line margin-bottom-60">
      <div class="margin">
        <div class="s-12 m-12 l-4 margin-m-bottom">
          <div class="padding-2x block-bordered border-radius">
            <div class="float-left hide-s">
              <i class="icon-sli-location-pin icon3x text-primary"></i>
            </div>
            <div class="margin-left-70 margin-s-left-0 margin-bottom">
              <h3 class="margin-bottom-0">Addresse</h3>
              <p>Responsive Street 7<br>
                London / UK / Europe
              </p>
            </div>
          </div>
        </div>
        <div class="s-12 m-12 l-4 margin-m-bottom">
          <div class="padding-2x block-bordered border-radius">
            <div class="float-left hide-s">
              <i class="icon-sli-envelope icon3x text-primary"></i>
            </div>
            <div class="margin-left-70 margin-s-left-0 margin-bottom">
              <h3 class="margin-bottom-0">E-mail</h3>
              <p>contact@m2l.com<br>
                secretariat@m2l.com
              </p>
            </div>
          </div>
        </div>
        <div class="s-12 m-12 l-4 margin-m-bottom">
          <div class="padding-2x block-bordered border-radius">
            <div class="float-left hide-s">
              <i class="icon-sli-phone icon3x text-primary"></i>
            </div>
            <div class="margin-left-70 margin-s-left-0">
              <h3 class="margin-bottom-0">Téléphones</h3>
              <p><span class="text-primary">Infoline: 0800 4521 800 50</span><br>
                Secrétariat: 0450 5896 625 16<br>
                Secrétariat 2: 0798 6546 465 15
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="line">
      <div class="margin">
        <!-- Contact Form -->
        <div class="s-12 m-12 l-6">
          <h2 class="margin-bottom-10">Laissez un message</h2>
          <form name="contactForm" class="customform" method="post">
            <div class="line">
              <div class="margin">
                <div class="s-12 m-12 l-6">
                  <input name="email" class="required email" placeholder="Votre e-mail" title="Your e-mail" type="text" />
                  <p class="email-error form-error">Veuillez saisir votre adresse e-mail.</p>
                </div>
                <div class="s-12 m-12 l-6">
                  <input name="name" class="name" placeholder="Votre nom" title="Your name" type="text" />
                  <p class="name-error form-error">Veuillez saisir votre nom.</p>
                </div>
              </div>
            </div>
            <div class="s-12">
              <input name="subject" class="subject" placeholder="Objet" title="Subject" type="text" />
              <p class="subject-error form-error">Veuillez saisir un objet.</p>
            </div>
            <div class="s-12">
              <textarea name="message" class="required message" placeholder="Votre message" rows="3"></textarea>
              <p class="message-error form-error">Veuillez saisir votre message.</p>
            </div>
            <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
          </form>
        </div>
        <div class="s-12 m-12 l-4">
          <h2 class="margin-bottom-10">Heures d'ouverture</h2>
          <div class="s-6">
            <p class="text-size-16">
              Lundi<br>
              Mardi<br>
              Mercredi<br>
              Jeudi<br>
              Vendredi<br>
              Samedi<br>
              Dimanche
            </p>
          </div>
          <div class="s-6">
            <p class="text-size-16 text-strong">
              08.00-18.00<br>
              08.00-18.00<br>
              08.00-18.00<br>
              08.00-18.00<br>
              08.00-14.00<br>
              08.00-14.00<br>
              Fermé
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Section 2 -->
    <section class="full-width">
    <div class="s-12 m-12 l-6">
      <img src="{{asset('/img/header-ligue.png')}}" alt="">
    </div>


     <!-- Map -->
     <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">  	  
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1435.874029686599!2d6.187290254594111!3d48.697748567454184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47949753fe1190d5%3A0x10a5fb99a3724f0!2sLorraine!5e0!3m2!1sfr!2sfr!4v1668991848990!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0"></iframe>


          </div>
        </div>

  </section>
</article>
<!-- termine le corps de la page -->
@endsection