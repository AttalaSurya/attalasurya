<!DOCTYPE html>
<html lang="en">
    <style>
        * {
            text-decoration: none;
        }
    </style>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Attala Surya Prima Amanda" />
        <title>AIoT For Kids</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styleskids.css" rel="stylesheet" />
        <link href="css/footer.css" rel="stylesheet" />
        <link href="css/ani.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand logoo" href="#page-top"><img src="assets/img/b.png" alt="..."/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse fade-mayancepet" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-0 py-lg-0">
                        <li class="nav-item" style="width: auto;"><a class="nav-link" href="#AIoTStarterKit">AIoT Starter Kit</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">AIoT NextGen</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">AIoT Games</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://linktr.ee/aiottechnologyindonesia" target="_blank">Say Hi !</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="margin-bottom: 0%;">
            <div class="container">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="a" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>
                    
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="files/news/motorikal.png" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>
                    
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="a" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
        </header>
        <!-- Dua-->
        <section class="bg-light" style="margin: 0%; padding: 0%; background-image: url(assets/img/duaa.png); background-repeat:no-repeat; background-size: cover; min-height: 80vw;">
            <div class="container">
            </div>
        </section>
        <!-- Services-->
        <section class="page-section bg-light" id="AIoTStarterKit">
            <div class="container">
                <div class="text-center">
                    <img class="img-fluid" src="assets/img/starter.png" alt="...">
                    <h2 class="section-heading">AIoT Starter Kit</h2>
                    <h3 class="section-subheading text-muted">AIoT Starter Kit adalah paket yang didesain khusus untuk anak-anak yang berisi komponen dan alat untuk dirancang menjadi sebuah karya yang dilengkapi dengan petunjuk perancangan.</h3>
                </div>
                <div class="row">
                    <div class="justify-content-center p-2 " style="text-align: center;">
                        <button id="iot" onclick="ganti_isi(this)" style="height: 4vh; width: auto;">IoT Starter Kit</button>
                        <button id="robotik" onclick="ganti_isi(this);" style="height: 4vh; width: auto;">Robotik Starter Kit</button>
                    </div>
                </div>
                <div class="row" style="margin-top: 2vh;">
                    <div id="isi_iot" class="isi_iot">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <!-- Portfolio item 1-->
                                <div class="AIoTStarterKit-item">
                                    <a class="AIoTStarterKit-link" data-bs-toggle="modal" href="#AIoTStarterKitModal1">
                                        <div class="AIoTStarterKit-hover">
                                            <div class="AIoTStarterKit-hover-content"><i class="fas fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/AIoTStarterKit/1.jpg" alt="..." />
                                    </a>
                                    <div class="AIoTStarterKit-caption">
                                        <div class="AIoTStarterKit-caption-heading">Basic IoT Kit #1</div>
                                        <div class="AIoTStarterKit-caption-subheading text-muted">Illustration</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <!-- AIoTStarterKit item 2-->
                                <div class="AIoTStarterKit-item">
                                    <a class="AIoTStarterKit-link" data-bs-toggle="modal" href="#AIoTStarterKitModal2">
                                        <div class="AIoTStarterKit-hover">
                                            <div class="AIoTStarterKit-hover-content"><i class="fas fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/AIoTStarterKit/2.jpg" alt="..." />
                                    </a>
                                    <div class="AIoTStarterKit-caption">
                                        <div class="AIoTStarterKit-caption-heading">Basic IoT Kit #2</div>
                                        <div class="AIoTStarterKit-caption-subheading text-muted">Miniatur Smart Home</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <!-- AIoTStarterKit item 3-->
                                <div class="AIoTStarterKit-item">
                                    <a class="AIoTStarterKit-link" data-bs-toggle="modal" href="#AIoTStarterKitModal3">
                                        <div class="AIoTStarterKit-hover">
                                            <div class="AIoTStarterKit-hover-content"><i class="fas fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/AIoTStarterKit/3.jpg" alt="..." />
                                    </a>
                                    <div class="AIoTStarterKit-caption">
                                        <div class="AIoTStarterKit-caption-heading">Advanced IoT Kit #1</div>
                                        <div class="AIoTStarterKit-caption-subheading text-muted">Automatic Pet Feeder</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                                <!-- AIoTStarterKit item 4-->
                                <div class="AIoTStarterKit-item">
                                    <a class="AIoTStarterKit-link" data-bs-toggle="modal" href="#AIoTStarterKitModal4">
                                        <div class="AIoTStarterKit-hover">
                                            <div class="AIoTStarterKit-hover-content"><i class="fas fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/AIoTStarterKit/4.jpg" alt="..." />
                                    </a>
                                    <div class="AIoTStarterKit-caption">
                                        <div class="AIoTStarterKit-caption-heading">Advanced IoT Kit #2</div>
                                        <div class="AIoTStarterKit-caption-subheading text-muted">Air Quality Monitoring</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="isi_robotik" class="isi_robotik">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
                                <!-- AIoTStarterKit item 5-->
                                <div class="AIoTStarterKit-item">
                                    <a class="AIoTStarterKit-link" data-bs-toggle="modal" href="#AIoTStarterKitModal5">
                                        <div class="AIoTStarterKit-hover">
                                            <div class="AIoTStarterKit-hover-content"><i class="fas fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/AIoTStarterKit/5.jpg" alt="..." />
                                    </a>
                                    <div class="AIoTStarterKit-caption">
                                        <div class="AIoTStarterKit-caption-heading">Basic Robotic Kit #1</div>
                                        <div class="AIoTStarterKit-caption-subheading text-muted">Kontrol Servo dan Motor</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <!-- AIoTStarterKit item 6-->
                                <div class="AIoTStarterKit-item">
                                    <a class="AIoTStarterKit-link" data-bs-toggle="modal" href="#AIoTStarterKitModal6">
                                        <div class="AIoTStarterKit-hover">
                                            <div class="AIoTStarterKit-hover-content"><i class="fas fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/AIoTStarterKit/6.jpg" alt="..." />
                                    </a>
                                    <div class="AIoTStarterKit-caption">
                                        <div class="AIoTStarterKit-caption-heading">Basic Robotik Kit #2</div>
                                        <div class="AIoTStarterKit-caption-subheading text-muted">Monitoring Sensor IF</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <img class="img-fluid" src="assets/img/nextgen2.png" alt="...">
                    <h2 class="section-heading">AIoT NextGen</h2>
                    <h3 class="section-subheading text-muted">AIoT Next Gen sebagai program bimbingan pembelajaran secara langsung guna pengembangan ilmu teknologi mereka dengan media berupa AIoT Starter Kit</h3>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-header text-black text-center">Internet of Things Mentoring</h5>
                                    <img class="img-fluid" src="assets/img/iot.png" alt="..." style="height: 15vh; width: auto;">
                                    <p style="margin-top: 20px; text-align:left">Pelajar diberikan bimbingan terkait pembelajaran materi Internet of Things oleh pengajar dari mahasiswa sesuai jurusannya</p>
                                    <a><button id="kurikulum_iot" onclick="tampil_kurikulum(this)" style="font-family: 'Concert One', cursive;">Kurikulum</button></a>
                                    <a><button id="roadmap_iot" onclick="tampil_roadmap(this)" style="font-family: 'Concert One', cursive;">Roadmap</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-header text-black text-center">Robotik Mentoring</h5>
                                    <img class="img-fluid" src="assets/img/robotik.png" alt="..." style="height: 15vh; width: auto;">
                                    <p style="margin-top: 20px; text-align:left">Pelajar diberikan bimbingan terkait pembelajaran materi robotik oleh pengajar dari mahasiswa sesuai jurusannya</p>
                                    <a><button id="kurikulum_robotik" onclick="tampil_kurikulum(this)" style="font-family: 'Concert One', cursive;">Kurikulum</button></a>
                                    <a><button id="roadmap_robotik" onclick="tampil_roadmap(this)" style="font-family: 'Concert One', cursive;">Roadmap</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-header text-black text-center">Coding Mentoring</h5>
                                    <img class="img-fluid" src="assets/img/coding.png" alt="..." style="height: 15vh; width: auto;">
                                    <p style="margin-top: 20px; text-align:left">Pelajar akan diberikan bimbingan mengenai Coding oleh pengajar dari mahasiswa sesuai jurusannya</p>
                                    <a><button id="kurikulum_coding" onclick="tampil_kurikulum(this)" style="font-family: 'Concert One', cursive;">Kurikulum</button></a>
                                    <a><button id="roadmap_coding" onclick="tampil_roadmap(this)" style="font-family: 'Concert One', cursive;">Roadmap</button></a>
                                </div>
                            </div>
                        </div> <!-- Akhir NextGen -->
                    </div>
                    <!-- Isi Kurikulum -->
                    <div id="isikurikulum_iot" class="col" style="display: none;">
                        <br>
                        <div class="card"> 
                            <h1 style="font-family: 'Concert One', cursive;"><br>Kurikulum IoT</h1>
                            <img src="assets/img/k_iot.png">
                        </div>
                    </div>
                    <div id="isikurikulum_robotik" class="col" style="display: none;">
                        <br>
                        <div class="card">
                            <h1 style="font-family: 'Concert One', cursive;"><br>Kurikulum Robotik</h1>
                            <img src="assets/img/k_robotik.png">
                        </div>
                    </div>
                    <div id="isikurikulum_coding" class="col" style="display: none;">
                        <br>
                        <div class="card">
                            <h1 style="font-family: 'Concert One', cursive;"><br>Kurikulum Coding</h1>
                            <img src="assets/img/k_coding.png">
                        </div>
                    </div>
                    <!-- Isi Roadmap -->
                    <div id="isiroadmap_iot" class="col" style="display: none;"> <!-- Isi Kurikulum -->
                        <h1 style="font-family: 'Concert One', cursive;"><br/>Roadmap IoT</h1>
                        <img src="assets/img/r_iot.webp" style="width: 50%;">
                    </div>
                    <div id="isiroadmap_robotik" class="col" style="display: none;">
                        <h1 style="font-family: 'Concert One', cursive;"><br/>Roadmap Robotik</h1>
                        <img src="assets/img/r_robotik.webp" style="width: 50%;">
                    </div>
                    <div id="isiroadmap_coding" class="col" style="display: none;">
                        <h1 style="font-family: 'Concert One', cursive;"><br/>Roadmap Coding</h1>
                        <img src="assets/img/r_coding.webp" style="width: 50%;">
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <img class="img-fluid" src="assets/img/gim.png" alt="...">
                    <h2 class="section-heading text-uppercase">AIoT Games</h2>
                    <h3 class="section-subheading text-muted">Gim Edukasi dengan tema yang menarik untuk membantu anak dalam memahami banyak mata pelajaran</h3>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="d-flex flex-column">
                                <div class="p-2"><img src="assets/img/gim1.png" alt="" style="max-height: 80%;"></div>
                                <div class="p-2"><img src="assets/img/pla.png" alt="" style="max-height: 10vh;"></div>
                              </div>
                        </div>
                            <div class="col">
                                <div class="d-flex flex-column">
                                    <div class="p-2 gim" style="width: 200%;"><img src="assets/img/gim2.png" alt="" style="width: 100%;"></div>
                                    <div class="p-2 gim" style="text-align: center; width: 200%;"><img src="assets/img/pla.png" alt="" style="max-height: 10vh;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="files/team/abdul.jpg" alt="..." />
                            <h4>Abdul Latif Priyadi</h4>
                            <br/>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/latif.fadil/" aria-label=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class="fab fa-linkedin-in"></i></a> 
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="files/team/wahono.jpg" alt="..." />
                            <h4>Wahono Aji Warjono</h4>
                            <br/>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="files/team/attala.jpg" alt="..." />
                            <h4>Attala Surya Prima Amanda</h4>
                            <br/>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/attala.surya/" aria-label="Attala Surya Prima Amanda Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/attalasurya001/" aria-label="Attala Surya Prima Amanda Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/attala-surya-prima-amanda-75b505194/" aria-label="Attala Surya Prima Amanda LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="files/team/alivia.jpg" alt="..." />
                        <h4>Alivia Khofifah</h4>
                        <br/>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/aliviviak/" aria-label=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/alivia.khofifah.14/" aria-label=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/alivia-khofifah-a30514194/" aria-label=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="files/team/beka.jpg" alt="..." />
                        <h4>Rebekka Siswandina Sari</h4>
                        <br/>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="files/team/caca.jpg" alt="..." />
                        <h4>Salsabila Ananda Putri</h4>
                        <br/>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">-</p></div>
                </div>
            </div>
        </section>
        <!-- 
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; PT. AIoT EduTech Indonesia</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer> -->
        <footer class="site-footer bg-bagianbawah"  style="min-height:20vh">
            <div class="container">
              <div class="row">
                <div class="col-md-4 mt-4 mb-4">
                  <img src="assets/img/b.png" style="width: 40%; margin-left: -10px;" alt="">
                  <h3 class="footer-heading text-light" style="margin-top: 10px;">PT. AIoT Technology Indonesia</h3>
                  <p class="text-light">Jalan Kampung Petoran No. 18 Gg. Kepuh, Jebres, Surakarta, Jawa Tengah (57126)<br>
                    Telp (+62)81213463771 <br>
                    Email : aiotteknologi@gmail.com</p>
                </div>
                    <div class="col-md-4 mt-4 mb-4">
                        <div class="text-center">
                        <img class="img-fluid" style="width: 240px;" src="assets/kontak.png" alt="..."><br><br>
                        <a href="//wa.me/081213463771/" target='_blank' style="text-decoration: none;">
                            <img class="img-fluid" style="width: 60px" src="assets/wa.png" alt="...">
                        </a>
                        <a href="//www.instagram.com/aiotforkids/" target='_blank'>
                            <img class="img-fluid" style="width: 55px; margin-left: 20px;" src="assets/ig.webp" alt="...">
                        </a>
                        </div>
                    </div>
                  <div class="col-md-4 mt-4 mb-4">
                    <h3 class="footer-heading text-light">Maps</h3>
                    <iframe src="https://www.google.com/maps/embed/v1/view?zoom=17&center=-7.5606%2C110.8488&key=AIzaSyANAwNrhDfoN0FBT2yvjacK2Ofj7rY7Hp4" style="max-width:300; max-height:200" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                  <!-- <p style="color: white;"> @attala.surya</p> -->
                </div>
                <div class="col-lg-4" style="color: white;">Copyright &copy; PT. AIoT Technology Indonesia</div>
              </div>
            </div>
          </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
         <!-- AIoTStarterKit Modals-->
        <!-- AIoTStarterKit item 1 modal popup-->
        <div class="AIoTStarterKit-modal modal fade-cepet" id="AIoTStarterKitModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal fade-cepet" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="tesani3">Basic IoT Kit #1</h2>
                                    <p class="item-intro text-muted">-</p>
                                    <img class="img-fluid d-block mx-auto tesani1" src="assets/img/AIoTStarterKit/1.jpg" alt="..." />
                                    <br/>
                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                <div class="card-body">
                                                <h3 class="card-title level1 text-white">Level 1</h3>
                                                <p style="margin: 0; margin-bottom: 7px;"><strong>Pengenalan Mikrokontroller</strong></p>
                                                    <p style="text-align: left; margin: 0;">
                                                        - 1 Kertas Petunjuk<br/>
                                                        - 1 Node MCU ESP8266<br/>
                                                        - 1 Resistor 220 Ohm <br/>
                                                        - 1 Breadboard <br/>
                                                        - 1 set Jumper<br/>
                                                        - 1 Kabel Micro USB<br/> 
                                                        - 1 LED</p>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                 <div class="card-body">
                                                  <h3 class="card-title level2 text-white">Level 2</h3>
                                                  <p style="margin: 0; margin-bottom: 7px;"><strong>Pengenalan Sensor</strong></p>
                                                      <p style="text-align: left; margin: 0;">
                                                       - 1 Kertas Petunjuk<br/>
                                                       - 1 Sensor Raindrop<br/>
                                                      - 1 Sensor Suhu<br/>
                                                      - 1 Sensor DHT11<br/>
                                                      </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                <div class="card-body">
                                                <h3 class="card-title karun text-white">Harta Karun</h3>
                                                    <p style="text-align: center; font-size: 4vh; margin-top: 20px;">
                                                        ?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AIoTStarterKit item 2 modal popup-->
        <div class="AIoTStarterKit-modal modal fade-cepet" id="AIoTStarterKitModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal fade-cepet" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="tesani3">Basic IoT Kit #2</h2>
                                    <p class="item-intro text-muted">-</p>
                                    <img class="img-fluid d-block mx-auto tesani1" src="assets/img/AIoTStarterKit/2.jpg" alt="..." />
                                    <br/>
                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                <div class="card-body">
                                                <h3 class="card-title level1 text-white">Level 1</h3>
                                                <p style="margin: 0; margin-bottom: 7px;"><strong>Merangkai Miniatur Rumah</strong></p>
                                                    <p style="text-align: left; margin: 0;">
                                                        - 1 Kertas Petunjuk<br/>
                                                        - 1 Set Miniatur Rumah<br/></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                 <div class="card-body">
                                                  <h3 class="card-title level2 text-white">Level 2</h3>
                                                  <p style="margin: 0; margin-bottom: 7px;"><strong>Pengenalan Mikrokontroller</strong></p>
                                                      <p style="text-align: left; margin: 0;">
                                                       - 1 Kertas Petunjuk<br/>
                                                       - 1 Sensor Raindrop<br/>
                                                      - 10 LED<br/>
                                                      - 10 Resistor 220 Ohm<br/>
                                                      - 1 set Jumper<br/>
                                                      - 1 Breadboard<br/>
                                                      - 1 Kabel Micro USB<br/>
                                                      </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                <div class="card-body">
                                                <h3 class="card-title karun text-white">Harta Karun</h3>
                                                    <p style="text-align: center; font-size: 4vh; margin-top: 20px;">
                                                        ?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AIoTStarterKit item 3 modal popup-->
        <div class="AIoTStarterKit-modal modal fade-cepet" id="AIoTStarterKitModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal fade-cepet" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="tesani3">Advanced IoT Kit #1</h2>
                                    <p class="item-intro text-muted">Automatic Pet Feeder</p>
                                    <img class="img-fluid d-block mx-auto tesani1" src="assets/img/AIoTStarterKit/3.jpg" alt="..." />
                                    <br/>
                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                <div class="card-body">
                                                <h3 class="card-title level1 text-white">Level 1</h3>
                                                <p style="margin: 0; margin-bottom: 7px;"><strong>Mikrokontroller dan sensor</strong></p>
                                                    <p style="text-align: left; margin: 0;">
                                                        - 1 Kertas Petunjuk<br/>
                                                        - 1 NodeMCU ESP8266<br/>
                                                        - 1 Sensor PIR<br/>
                                                        - 1 Speaker 0.25W, 8 Ohms<br/>
                                                        - 1 set Jumper<br/>
                                                        - 1 Breadboard<br/>
                                                        - 1 Kabel Mikro USB<br/>
                                                    </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                 <div class="card-body">
                                                  <h3 class="card-title level2 text-white">Level 2</h3>
                                                  <p style="margin: 0; margin-bottom: 7px;"><strong>Mekanik</strong></p>
                                                      <p style="text-align: left; margin: 0;">
                                                       - 1 Kertas Petunjuk<br/>
                                                       - 1 Servo MG996<br/>
                                                       - 1 Penampung Makanan<br/>
                                                      </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                <div class="card-body">
                                                <h3 class="card-title karun text-white">Harta Karun</h3>
                                                    <p style="text-align: center; font-size: 4vh; margin-top: 20px;">
                                                        ?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AIoTStarterKit item 4 modal popup-->
        <div class="AIoTStarterKit-modal modal fade-cepet" id="AIoTStarterKitModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal fade-cepet" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="tesani3">Advanced IoT Kit #2</h2>
                                    <p class="item-intro text-muted">Air Quality Monitoring</p>
                                    <img class="img-fluid d-block mx-auto tesani1" src="assets/img/AIoTStarterKit/3.jpg" alt="..." />
                                    <br/>
                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                <div class="card-body">
                                                <h3 class="card-title level1 text-white">Level 1</h3>
                                                <p style="margin: 0; margin-bottom: 7px;"><strong>Mikrokontroller dan Sensor</strong></p>
                                                    <p style="text-align: left; margin: 0;">
                                                        - 1 Kertas Petunjuk<br/>
                                                        - 1 NodeMCU ESP32<br/>
                                                        - 1 Sensor MQ-9<br/>
                                                        - 1 Sensor MQ-135<br/>
                                                        - 1 Set Jumper<br/>
                                                        - 1 Breadboard<br/>
                                                        - 1 Kabel Micro USB<br/>
                                                    </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                 <div class="card-body">
                                                  <h3 class="card-title level2 text-white">Level 2</h3>
                                                  <p style="margin: 0; margin-bottom: 7px;"><strong>Packaging</strong></p>
                                                      <p style="text-align: left; margin: 0;">
                                                       - 1 Kertas Petunjuk<br/>
                                                       - 1 Kotak Packaging<br/>
                                                      </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card h-100 tesani2">
                                                <div class="card-body">
                                                <h3 class="card-title karun text-white">Harta Karun</h3>
                                                    <p style="text-align: center; font-size: 4vh; margin-top: 20px;">
                                                        ?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AIoTStarterKit item 5 modal popup-->
        <div class="AIoTStarterKit-modal modal fade" id="AIoTStarterKitModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Basic Robotik Kit #1</h2>
                                    <p class="item-intro text-muted">Kontrol servo dan motor</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/AIoTStarterKit/5.jpg" alt="..." />
                                    <p>- ESP8266<br/>
                                        - Jumper
                                        - PCB
                                        - Motor Servo
                                        - Motor Driver L298N
                                        - Motor DC<br/></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AIoTStarterKit item 6 modal popup-->
        <div class="AIoTStarterKit-modal modal fade" id="AIoTStarterKitModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Basic Robotik Kit #2</h2>
                                    <p class="item-intro text-muted">Penggunaan dan Monitoring Sensor IF</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/AIoTStarterKit/6.jpg" alt="..." />
                                    <p>- esp8266<br/>
                                        - Sensor IF
                                        - LED
                                        - Resistor
                                        - Jumper
                                        - PCB<br/></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/tralala.js"></script>
    </body>
</html>
