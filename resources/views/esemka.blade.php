<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="/Aset/style.css">
    <link rel="stylesheet" href="/Aset/responsive.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/Aset/script.js"></script>
    
    <title>Esemka</title>

    <?php echo view('head_tags.pwa_head'); ?>
    
  </head>
  <body id="body">    
    <div class="preloader">
        <div class="loading">
            <div class="bouncing-ball">
            </div>
            <p>Mohon Tunggu...</p>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container mt-2 mb-2">
            <div class="d-flex">
            
                <div class="hamburger-menu">
                    <input id="menu_toggle" type="checkbox" />
                    <label class="menu_btn" for="menu_toggle">
                        <span></span>
                    </label>
                    <div class="logo-head"> <a class="logo bold" href="#">esemka</a> </div>
                    <ul class="menu_box bold">
                        <li class="logo-bg"></li>
                        <li><a href="#" class="menu_item"><i class="fas fa-home">&nbsp;</i> Home</a></li>
                        <li><a href="{{ route('login')}}" class="menu_item"><i class="fas fa-user-lock">&nbsp;</i> Login</a></li>
                        <li><a href="{{ route('register')}}" class="menu_item"><i class="fas fa-clipboard-list">&nbsp;</i> Daftar</a></li>
                        <li><a href="#features" class="menu_item"><i class="fas fa-toolbox">&nbsp;</i> Fitur</a></li>
                        <li><a href="#" class="menu_item"><i class="fas fa-question">&nbsp;</i> Tentang Kami</a></li>
                    </ul>
                    <div class="bodyblack" id="bodyblack">
                    </div>
                </div>
                

            </div>
            <div class="text-right">
                <a href="#">
                    <span class="btn button button-5 button-5b icon-search button-blue">
                        <i class="fa fa-search"></i>
                        <span>Cari Lowongan</span>
                    </span>
                </a>
            </div>
        </div>
    </nav>
    
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item carousel-img1 active"></div>
            <div class="carousel-caption row align-items-center">
                <div class="col-12 col-sm-6 carousel-prop-left">
                    <h1 class="text-center bold"> Jutaan Perusahaan Sedang Mencari Karyawannya Disini </h1>
                </div>
                <div class="col-12 col-sm-6 carousel-prop-right">
                    <img id="ilustrasi" src="/Aset/online-cv.svg" alt="Cari Pekerjaanmu Sekarang">
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-2 mb-5">
        
        <h2 class="content-header text-center bold mt-5 pt-3 mb-4" id="features">Fitur - Fitur Esemka </h2>

        <div class="content-item">
            <div class="row justify-content-around mt-4">
                <a class="features m-3" href="portofolio">
                    <div class="features-content d-flex w-100 mt-2 mb-2">
                        <div class="features-icon text-center">
                            <i alt="icon" class="fas fa-image"></i>
                        </div>
                        <div class="text-left features-text">
                            <h4 class="bold">Portofolio</h4>
                            <p>Buat Portofoliomu Sendiri dengan Menarik</p>
                        </div>
                    </div>
                </a>

                <a class="features m-3" href="portofolio">
                    <div class="features-content d-flex w-100 mt-2 mb-2">
                        <div class="features-icon text-center">
                            <i alt="icon" class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="text-left features-text">
                            <h4 class="bold">CV</h4>
                            <p>Buat CV dengan Tampilan Menarik</p>
                        </div>
                    </div>
                </a>
             
               <a class="features m-3" href="portofolio">
                    <div class="features-content d-flex w-100 mt-2 mb-2">
                        <div class="features-icon text-center">
                            <i alt="icon" class="fas fa-swatchbook"></i>
                        </div>
                        <div class="text-left features-text">
                            <h4 class="bold">Cari Magang</h4>
                            <p>Cari Tempat Magang dengan Mudah</p>
                        </div>
                    </div>
                </a>

                <a class="features m-3" href="portofolio">
                    <div class="features-content d-flex w-100 mt-2 mb-2">
                        <div class="features-icon text-center">
                            <i alt="icon" class="fas fa-users"></i>
                        </div>
                        <div class="text-left features-text">
                            <h4 class="bold">Rekrut Massal</h4>
                            <p>Rekrut Massal dengan Soal</p>
                        </div>
                    </div>
                </a>

                <a class="features m-3" href="portofolio">
                    <div class="features-content d-flex w-100 mt-2 mb-2">
                        <div class="features-icon text-center">
                            <i alt="icon" class="fas fa-briefcase"></i>
                        </div>
                        <div class="text-left features-text">
                            <h4 class="bold">Interview</h4>
                            <p>Buat Jadwal Interview via Aplikasi</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
                
        <h2 class="content-header text-center bold mt-5 pt-3 mb-4">Review Pengguna</h2>
                
        <div class="content-item">
            
            <div class="row justify-content-around mt-4 parent-reviews">
                <a class="col-6 col-sm-2 reviews my-3 mx-1" href="portofolio">
                    <div class="reviews-content w-100 my-2">
                        <div class="reviews-icon">
                            <i alt="icon" class="fas fa-user"></i>
                        </div>
                        <div class="reviews-text text-left pb-4">
                            <h4 class="bold">Rifqi Surya</h4>
                            <p>Mencari tempat Magang tanpa harus berkeliling</p>
                        </div>
                    </div>
                    <br>
                    <p class="reviews-status">Siswa</p>
                </a>

                <a class="col-6 col-sm-2 reviews my-3 mx-1" href="portofolio">
                    <div class="reviews-content w-100 my-2">
                        <div class="reviews-icon">
                            <i alt="icon" class="fas fa-user"></i>
                        </div>
                        <div class="reviews-text text-left pb-4">
                            <h4 class="bold">Muh. Rizqi</h4>
                            <p>Simple dengan 3 kali klik saya bisa melamar</p>
                        </div>
                    </div>
                    <br>
                    <p class="reviews-status">Siswa</p>
                </a>

                <a class="col-6 col-sm-2 reviews my-3 mx-1" href="portofolio">
                    <div class="reviews-content w-100 my-2">
                        <div class="reviews-icon">
                            <i alt="icon" class="fas fa-user"></i>
                        </div>
                        <div class="reviews-text text-left pb-4">
                            <h4 class="bold">Louis Cahya</h4>
                            <p>HRD memuji CV saya :D</p>
                        </div>
                    </div>
                    <br>
                    <p class="reviews-status">Siswa</p>
                </a>

                <a class="col-6 col-sm-2 reviews my-3 mx-1" href="portofolio">
                    <div class="reviews-content w-100 my-2">
                        <div class="reviews-icon">
                            <i alt="icon" class="fas fa-building"></i>
                        </div>
                        <div class="reviews-text text-left pb-4">
                            <h4 class="bold">Gojek</h4>
                            <p>Kami lebih mudah mencari karyawan</p>
                        </div>
                        <br>
                        <p class="reviews-status">Perusahaan</p>
                    </div>
                </a>

                <a class="col-6 col-sm-2 reviews my-3 mx-1" href="portofolio">
                    <div class="reviews-content w-100 my-2">
                        <div class="reviews-icon">
                            <i alt="icon" class="fas fa-building"></i>
                        </div>
                        <div class="reviews-text text-left pb-4">
                            <h4 class="bold">Tokopedia</h4>
                            <p>Memudahkan kami melihat portofolio pelamar</p>
                        </div>
                        <br>
                        <p class="reviews-status">Perusahaan</p>
                    </div>
                </a>


            </div>
        </div>
        
        <h2 class="content-header text-center bold mt-5 pt-3 mb-4">Didukung Oleh</h2>
          <div class="content-item">
            <div class="row justify-content-around mt-4">
                <a class="col-6 col-sm-4 support" href="https://www.kemdikbud.go.id/" target="_blank">
                    <div class="support-content w-100 mt-2 mb-2">
                        <div class="support-image text-center">
                            <img src="/Aset/kemendikbud-logo.png">
                        </div>
                        <div class="support-text text-center">
                            <h4 class="bold">Kemdikbud</h4>
                        </div>
                    </div>
                </a>

                 <a class="col-6 col-sm-4 support" href="https://www.smkn2solo.sch.id/" target="_blank">
                    <div class="support-content w-100 mt-2 mb-2">
                        <div class="support-image text-center">
                            <img src="/Aset/smkn2-logo.png">
                        </div>
                        <div class="support-text text-center">
                            <h4 class="bold">SMK N 2 Surakarta</h4>
                        </div>
                    </div>
                </a>

                 <a class="col-6 col-sm-4 support" href="https://www.kemnaker.go.id/" target="_blank">
                    <div class="support-content w-100 mt-2 mb-2">
                        <div class="support-image text-center">
                            <img src="/Aset/kemenaker-logo.png">
                        </div>
                        <div class="support-text text-center">
                            <h4 class="bold">Kemenaker</h4>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
    
    <footer class="pt-5 foot-landing">
        <div class="container pb-5 pt-4 w-100 d-block"> 
            <a class="logo bold" href="#">esemka</a>
            {{-- <div class="container d-flex w-100 pb-5 foot-landing2">  --}}
            <div class="row justify-content-around py-4">
                <div class="row col-12 col-md-6 foot-left">
                    <a href="tentang-kami">Tentang Kami</a>
                    <a href="hubungi-kami">Kontak Kami</a>
                    <a href="fitur">Layanan</a>
                </div>
                <div class="row col-12 col-md-6 foot-right text-right">
                    <a href="syarat-ketentuan">Support</a>
                    <a href="pusat bantuan">Terms & Condition</a>
                    <a href="kebijakan privasi">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
        <p class="copyright pt-1 pb-5 bold text-center">&copy; 2020 Crewsakan Tech All Rights Reserved</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>