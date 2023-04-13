<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/asset/img/apple.svg" type="image/x-icon" />
    <!-- untuk menampilkan logo diatas website -->

    <title>Apple (Indonesia)</title>

    <link rel="stylesheet" href="/asset/vendor/bootstrap/dist/css/bootstrap.min.css" />
    <!-- frontawoseme temlate dari web untuk font -->
    <link rel="stylesheet" href="/asset/vendor/fontawesome/css/all.min.css" />
    <!-- aos animate -->
    <link rel="stylesheet" href="/asset/vendor/aos/dist/aos.css" />
    <!-- custom css memakai style.css -->
    <link rel="stylesheet" href="/asset/css/style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-2">
      <!-- navbar-light bg-white untuk menghilangkan navbar bagian atas menjadi warna putih  -->
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"><i class="fa-brands fa-apple"></i></a>
        <!-- <span class="primary">APP</span>LE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <!-- ms auto untuk membuat about kenanan -->
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="/">Home</a>
              <!-- ditambahkan active untuk dipanggil di css style biar bisa ganti warna -->
            </li>
            <!-- ini untuk dropdown item template dari bootstrap -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bolder dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="about">About Us</a></li>
                <li><a class="dropdown-item" href="team">Our Team</a></li>
                <li><a class="dropdown-item" href="testimoni">Testimoni</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link fw-bolder" href="service">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- endnavbar -->

    <!-- breadcumbs -->
    <div class="breadcumbs py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Team</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Team</li>
                </ol>
            </div>
        </div>
    </div>
        <!-- endbreadcumbs -->

   

        <!-- team -->
        <div class="teams bg-light py-5">
          <div class="container">
            <div class="title-container">
              <h2 class="text-center fw-bold">OUR TEAM</h2>
            </div>
            <p class="text-center mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt ex dolores, earum, laborum nisi itaque quibusdam sed debitis nulla optio eveniet et doloribus sequi accusamus officiis distinctio. Molestias, explicabo enim?</p>
            <!-- pengunaan about us container didalam about us agar garis dibawahnya yg ada di css stay -->
            <div class="row">
              @foreach ($teams as $team)
                  
              <div class="col-md-3" data-aos="fade-up">
                <div class="card" style="width: 18rem">
                  <img src="/asset/img/y1.jpeg" class="card-img-top" alt="..." />
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{$team->title}}</h5>
                    <p class="card-text text-muted">{{$team->description}}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div >
        </div>
        <!-- endteam -->

       

     <!-- footer -->
     <footer class="mt-5">
      <div class="footer-top bg-dark text-white p-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <h2 class="fw-bold">{{$contact->name}}</h2>
              <p>{{$contact->description}}</p>
              <strong>Phone</strong> : <span>{{$contact->telepon}}</span>
              <br />
              <strong>Email</strong> : <span>{{$contact->email}}</span>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Our Product</h4>
              <ul class="list-group list-unstyled">

                @foreach ($services as $service)
                    
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    {{$service->title}}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Our Product</h4>
              <ul class="list-group list-unstyled">
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    Mac
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    iPad
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    iPhone
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    Watch
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    AirPods
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h4 class="fw-bold">Join Our Newsletter</h4>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint, eaque.</p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="yourmail@example.com" />
                <button class="btn btn-subscribe text-white" type="button" id="inputGroupFileAddon04">Subscribe</button>
              </div>
            </div>
            <!-- untuk ngelik kembali kehome -->
          </div>
        </div>
      </div>
      <div class="footer-down bg-darker text-white px-5 py-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <!-- untuk mengatur warna begraoud hitamnya melalui css juga -->
              <div class="copyright">&copy; Copyright <strong>Apple</strong>. All Right Reserved</div>
              <div class="credits">Designed By Me</div>
            </div>
            <div class="col-md-5">
              <div class="sosial-link float-end">
                <!-- float end untuk menaro logo diakhir kanan -->
                <a href="" class="mx-2">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-youtube fa-2x"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer> 
      <!-- endfooter -->
  
      <!-- to top -->
      <a href="#" class="btn-to-top p-2">
        <i class="fa fa-chevron-up"></i>
      </a>
      <!-- end to top -->
  
      <!-- <div class="vh-50"></div>
      untuk baris putih kosong dipaling bawah  -->
  
      <script src="/asset/vendor/jquery/jquery-3.6.4.min.js"></script>
      <script src="/asset/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="/asset/vendor/fontawesome/js/all.min.js"></script>
      <script src="/asset/vendor/mansory/masonry.pkgd.min.js"></script>
      <script src="/asset/vendor/aos/dist/aos.js"></script>
      <script src="/asset/vendor/isotope/isotope.pkgd.min.js"></script>
      <script src="/asset/js/app.js"></script>
      <!-- script untuk asset bootsrtap dan font awasome -->
    </body>
    </html>
    