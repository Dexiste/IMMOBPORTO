@include('include.head');

<body>
@include('include.search');

@include('include.header');

<!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Nos appartements a louer</h1>
              <span class="color-text-a">Grille nouveau</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('acceuil')}}">Acceuil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  nouveau grille
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="/fron/assets/img/post-1.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">Louer</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="{{route('blog-single')}}">Louer de bon appartement
                        <br> nouveau</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">20 Mai 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-b card-shadow nouveaus-box">
              <div class="img-box-b">
                <img src="/fron/assets/img/post-2.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="{{route('blog-single')}}" class="category-b">Louer</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="{{route('blog-single')}}">Louer de bon appartement
                        <br> nouveau</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">20 Mai 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-b card-shadow nouveaus-box">
              <div class="img-box-b">
                <img src="/fron/assets/img/post-3.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">Louer</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="{{route('blog-single')}}">Louer de bon appartement
                        <br> nouveau</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">20 Mai 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-b card-shadow nouveaus-box">
              <div class="img-box-b">
                <img src="/fron/assets/img/post-4.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">Louer</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="{{route('blog-single')}}">Louer de bon appartement
                        <br> nouveau</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">20 Mai 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-b card-shadow nouveaus-box">
              <div class="img-box-b">
                <img src="/fron/assets/img/post-5.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">Louer</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="{{route('blog-single')}}">Louer de bon appartement
                        <br> nouveau</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">20 Mai 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-b card-shadow nouveaus-box">
              <div class="img-box-b">
                <img src="/fron/assets/img/post-6.jpg" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">Louer</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="{{route('blog-single')}}">Louer de bon appartement
                        <br> new</a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">20 Mai 2021</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item next">
                  <a class="page-link" href="#">
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Blog Grid-->

  </main><!-- End #main -->
  @include('include.footer');

</body>

</html>