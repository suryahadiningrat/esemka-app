<!DOCTYPE html>
<html>
<head>
    <title>Lowongan</title>
    <?php echo view('head_tags.public_head'); ?>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/views/jobs.css'>    
    <script src="/js/views/jobs.js"></script>
    <?php echo view('head_tags.pwa_head'); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container mt-2 mb-2">
            <div class="d-flex">
            
                <div class="hamburger-menu">
                    <input id="menu_toggle" type="checkbox" />
                    <label class="menu_btn" for="menu_toggle">
                        <span></span>
                    </label>
                    <div class="logo-head"> <a class="logo bold" href="#">nikerja!</a> </div>
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
                <div class="profile-dropdown">
                    <div class="profile-btn">
                        <img src="/assets/images/00092120.jpg">
                    </div>

                    <ul class="profile-menu">
                        <li class="profile-short-info">
                            <div class="profile-img">
                                <img src="/assets/images/00092120.jpg">
                            </div>
                            <div class="profile-name-status">
                                <span class="profile-name truncate-text">anonymous</span>
                                <div class="profile-status d-flex align-items-center">
                                    <span class="status">Active</span>
                                    <div class="dot green"></div>
                                </div>
                            </div>                            
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Edit Profile</a>
                        </li>
                        <li>
                            <a href="#">Lihat Profile</a>
                        </li>
                        <li>
                            <a href="#">Logout</a>
                        </li>
                        <li>
                            <a href="#">Bantuan</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="carousel-news" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-news" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="news-1 row d-flex align-items-center">
                        <div class="col-6">
                            <p>Temukan dan pilih pekerjaan yang sesuai dengan kriteria dan bidang yang anda geluti. </p>
                            <a href="#">View more</a>
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                            <img src="/assets/images/people_touch.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="search-input row">
            <div class="col-12 col-md-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-search"></i></div>
                    </div>
                    <input class="form-control" placeholder="Cari Lowongan">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                    </div>
                    <input class="form-control" placeholder="Cari Lokasi">
                </div>
            </div>
        </div>

        <div>
            <h4>Teknologi</h4><br>
            <div class="list-job row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/Tokopedia-Logo-Vector-VisualLogo.png">
                        <div class="card-body">
                            <h5 class="card-title text-truncate">UI / UX Designer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn" data-toggle="modal" data-target="#detail-job-modal">Lihat</a>
                        </div>
                        <div class="job-data" style="display: none;">
                            <data class="company-img">/assets/images/Tokopedia-Logo-Vector-VisualLogo.png</data>
                            <data class="job-name">UI / UX Designer</data>
                            <data class="job-location">Jakarta, Indonesia</data>
                            <data class="job-type">Remote</data>
                            <data class="job-salary">Rp. 10.000.000 - 15.000.000</data>
                            <data class="job-description">Frontend Engineers in GoMerchant will be responsible for managing web interfaces that are used by merchants for their operations from dashboard and their customers for performing payment. The scope includes both desktop and mobile landscape.</data>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/logo-gojek-baru-transparan.png">
                        <div class="card-body">
                            <h5 class="card-title text-truncate">Web Developer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn" data-toggle="modal" data-target="#detail-job-modal">Lihat</a>
                        </div>
                        <div class="job-data" style="display: none;">
                            <data class="company-img">/assets/images/logo-gojek-baru-transparan.png</data>
                            <data class="job-name">Web Developer</data>
                            <data class="job-location">Jakarta, Indonesia</data>
                            <data class="job-type">Full Time</data>
                            <data class="job-salary">Rp. 15.000.000 - 20.000.000</data>
                            <data class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tenetur quis doloribus eius unde! Ad minus excepturi laudantium quos aspernatur repudiandae, dolorem porro tenetur facilis, molestias velit quidem! Eos, nobis.</data>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/Microsoft_logo_525x525.png">
                        <div class="card-body">
                            <h5 class="card-title text-truncate">Cloud Engineer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn" data-toggle="modal" data-target="#detail-job-modal">Lihat</a>
                        </div>
                        <div class="job-data" style="display: none;">
                            <data class="company-img">/assets/images/Microsoft_logo_525x525.png</data>
                            <data class="job-name">Cloud Engineer</data>
                            <data class="job-location">Jakarta, Indonesia</data>
                            <data class="job-type">Full Time</data>
                            <data class="job-salary">Rp. 12.000.000 - 18.000.000</data>
                            <data class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tenetur quis doloribus eius unde! Ad minus excepturi laudantium quos aspernatur repudiandae, dolorem porro tenetur facilis, molestias velit quidem! Eos, nobis.</data>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/63281c2d-2454-4efe-94e9-acfec62ca40a_GoogleLogo.jpg">
                        <div class="card-body">
                            <h5 class="card-title text-truncate">Android Developer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn" data-toggle="modal" data-target="#detail-job-modal">Lihat</a>
                        </div>
                        <div class="job-data" style="display: none;">
                            <data class="company-img">/assets/images/63281c2d-2454-4efe-94e9-acfec62ca40a_GoogleLogo.jpg</data>
                            <data class="job-name">Android Developer</data>
                            <data class="job-location">Jakarta, Indonesia</data>
                            <data class="job-type">Part Time</data>
                            <data class="job-salary">Rp. 15.000.000 - 20.000.000</data>
                            <data class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tenetur quis doloribus eius unde! Ad minus excepturi laudantium quos aspernatur repudiandae, dolorem porro tenetur facilis, molestias velit quidem! Eos, nobis.</data>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detail-job-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="job-info">
                        <div class="company-img">
                            <img>
                        </div>
                        <div class="job-name-location">
                            <span class="job-name"></span>
                            <div class="job-location">
                                <i class="fa fa-map-marker-alt"></i>&nbsp;
                                <span></span>
                            </div>                        
                        </div>
                    </div>
                    <div class="job-type-salary row">
                        <div class="col-6">
                            <span class="job-side-head">Tipe</span>
                            <span class="job-side-detail"></span>
                        </div>
                        <div class="col-6">
                            <span class="job-side-head">Gaji</span>
                            <span class="job-side-detail"></span>
                        </div>
                    </div>
                    <div class="job-description">
                        <p></p>
                    </div>
                </div>
                <div class="modal-footer d-flex">
                    <button type="button" class="btn btn-favorite-job" data-dismiss="modal"><i class="far fa-heart"></i></button>
                    <button type="button" class="btn btn-apply-job ml-auto">Lamar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>