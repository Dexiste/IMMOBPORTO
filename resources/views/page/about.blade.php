@include('include.head');

<body>
@include('include.search');

@include('include.header');
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Principe de fonctionnement de l'agence IMMOBPORTO</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Acceuil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  A propos
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="/fron/assets/img/slide-about-1.jpg" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">ImmobPorto
                <span></span>
                <br> Depuis 2017
              </h3>
              <p>Satisfaire les clients et les propriétaires</p>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="/fron/assets/img/about-2.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                  <span>ImmobPorto, nos Propriétés </span>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">Avec
                    <span class="color-d">nous</span> soyez
                    <br> à l'aise.
                  </h3>
                </div>
                <p class="color-text-a">
                Vous recherchez une maison, un appartement (meublé ou non), un terrain ou un bureau/espace commercial à Cotonou
                 ou partout au Bénin. Faîtes confiance à notre agence immobilière pour vous le trouver rapidement.
                IMMOB-PORTO Immobilier met à votre disposition son réseau et son expérience dans l’immobilier et la construction au Bénin.

               

                </p>
                <p class="color-text-a">
                Vous êtes résident ou de la diaspora ? 
                Nos équipes vous accompagnent dans tous vos projets d’investissement, de rénovation et de construction de bien immobilier.
                Vous avez en projet d’acheter un bien immobilier (parcelle, terrain, maison) ? Nous vous proposons d’effectuer pour vous la recherche de biens et de vous faire bénéficier de notre expertise.IMMOBPORTO Immobilier vous trouvera l’opportunité de rêve, celle qui vous fera économiser de l’argent et qui ne causera aucun soucis de type litige. Notre service juridique y veille, nous travaillons pour vous.

Le service comprend l’étude de votre projet immobilier, recherche, visite, vérification des biens, détail des charges, négociation du prix d’achat.
En cas de rénovation prévue, nous vous accompagnerons également dans la réalisation des travaux à effectuer

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =======Team Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Rencontrer notre équipe</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="/fron/assets/img/agent-7.jpg" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="{{route('agent-single')}}" class="link-two">SAIZONNOU Pricilia
                        <br> Escala</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Chers utilisateur, je suis à votre service. 
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Tél: </strong> +229 97294172
                    </p>
                    <p>
                      <strong>Email: </strong> pricilia@gmail.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="/fron/assets/img/agent-6.jpg" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="{{route('agent-single')}}" class="link-two">Christin TOUNDONOU
                        <br> Darw</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                  Chers utilisateur, je suis à votre service. 
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Tél: </strong> +229 61123580
                    </p>
                    <p>
                      <strong>Email: </strong> christin@gmail.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="/fron/assets/img/agent-5.jpg" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="{{route('agent-single')}}" class="link-two">Charline Degbegni
                        <br> Cascada</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                  Chers utilisateur, je suis à votre service. 
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Tél: </strong> +229 96587412
                    </p>
                    <p>
                      <strong>Email: </strong> charline@gmail.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('include.footer');

  

</body>

</html>