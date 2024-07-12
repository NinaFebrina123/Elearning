<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ParkirMas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="text-end text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                    <a href="login.html"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <!-- Navbar start -->
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>ParkirMas</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                   
        </nav>

        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{asset('frontend/img/carousel-2.jpg')}}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="display-2 text-capitalize text-white mb-4">Welcome to ParkirMas</h1>
                                <p class="mb-5 fs-5">ParkirMas merupakan aplikasi yang dimiliki oleh Kampus
                                    STT Terpadu Nurul Fikri yang dapat memudahkan Anda mencari tempat parkir saat
                                    berkunjung ke STT Terpadu Nurul Fikri. Aplikasi ini digunakan untuk menjamin tingkat
                                    keamanan kendaraan Anda.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 3px solid; border-color: #13357B; border-radius: 2px;">
                            <img src="{{asset('frontend/img/gallery-3.jpg')}}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="section-about-title pe-3">About Us</h5>
                        <h1 class="mb-4">Welcome to <span class="text-primary">ParkirMas</span></h1>
                        <p class="mb-4"> ParkirMas hadir sebagai platform online yang inovatif untuk memudahkan akses
                            informasi dan layanan parkir di lingkungan kampus. Platform ini dirancang untuk meningkatkan
                            kenyamanan pengguna, efisiensi pengelolaan parkir, dan keamanan kendaraan.</p>
                        <p class="mb-4">Penerapan ParkirMas diharapkan dapat mendukung terciptanya kampus yang lebih
                            teratur dan nyaman, di mana sivitas akademika dan pengunjung dapat fokus pada kegiatan
                            belajar mengajar dan aktivitas lainnya tanpa perlu khawatir dengan masalah parkir.</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="about.html">Read More</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->










        <!-- Gallery Start -->
        <div class="container-fluid gallery py-5 my-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Our Gallery</h5>
                <h1 class="mb-4">Layanan Parkir/Area Parkir</h1>
                <p class="mb-0">Layanan parkir kampus menyediakan area strategis dan aman untuk kendaraan mahasiswa dan
                    dosen dengan kapasitas memadai dan pengawasan ketat, memastikan kenyamanan dan akses mudah ke
                    berbagai fasilitas akademik.
                </p>
            </div>
            <div class="tab-class text-center">

                <div class="tab-content">
                    <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('frontend/img/gallery-1.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('frontend/img/gallery-1.jpg')}}" data-lightbox="gallery-1" class="my-auto"><i
                                                class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('frontend/img/gallery-2.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('frontend/img/gallery-2.jpg')}}" data-lightbox="gallery-2" class="my-auto"><i
                                                class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('frontend/img/gallery-3.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('frontend/img/gallery-3.jpg')}}" data-lightbox="gallery-3" class="my-auto"><i
                                                class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('frontend/img/gallery-4.png')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('frontend/img/gallery-4.png')}}" data-lightbox="gallery-4" class="my-auto"><i
                                                class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('frontend/img/gallery-5.png')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('frontend/img/gallery-5.png')}}" data-lightbox="gallery-5" class="my-auto"><i
                                                class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End -->

        <!-- Tour Booking Start -->
        <div class="container-fluid booking py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="section-booking-title pe-3">Daftar</h5>
                        <h1 class="text-white mb-4">Daftar Online</h1>
                        <p class="text-white mb-4">Selamat datang di sistem pendaftaran kendaraan kampus. Dengan
                            mendaftarkan kendaraan Anda secara online, Anda dapat menikmati akses parkir yang mudah dan
                            teratur di lingkungan kampus kami. Proses pendaftaran ini membantu kami memastikan keamanan
                            dan keteraturan di area parkir kampus, serta memberikan kenyamanan bagi semua pengguna.
                        </p>
                        <p class="text-white mb-4">Setelah pendaftaran berhasil, Anda akan menerima konfirmasi dan
                            informasi lebih lanjut mengenai akses parkir Anda. Daftarkan kendaraan Anda sekarang dan
                            nikmati kemudahan serta kenyamanan akses parkir di kampus. Terima kasih atas kerjasama Anda
                            dalam menjaga keamanan dan keteraturan area parkir kampus kita.
                        </p>
                        <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-white mb-3">Form Daftar Kenderaan</h1>
                        <p class="text-white mb-4">Pastikan kendaraan Anda terdaftar untuk menikmati akses parkir yang
                            mudah dan nyaman di lingkungan kampus. Dengan mendaftarkan kendaraan Anda, Anda membantu
                            kami memastikan keamanan dan keteraturan di area parkir kampus.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Nama Pemilik</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="select1">
                                            <option value="1">Mahasiswa</option>
                                            <option value="2">Dosen</option>

                                        </select>
                                        <label for="select1">Status</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="select1">
                                            <option value="1">Sistem Informasi</option>
                                            <option value="2">Teknik Informatika</option>
                                            <option value="3">Bisnis Digital</option>

                                        </select>
                                        <label for="select1">Prodi</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="select1">
                                            <option value="1">Motor</option>
                                            <option value="2">Mobil</option>

                                        </select>
                                        <label for="select1">Jenis Kenderaan</label>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-white border-0" id="name"
                                                placeholder="Your Name">
                                            <label for="name">Merk Kenderaan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control bg-white border-0" id="datetime"
                                                placeholder="Date & Time" data-target="#date3"
                                                data-toggle="datetimepicker" />
                                            <label for="datetime">Pelat Kenderaan</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary text-white w-100 py-3"
                                            type="submit">Daftar</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
        <!-- Tour Booking End -->

       <!-- Travel Guide Start -->
       <div class="container-fluid guide py-5 bg-white">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Petugas ParkirMas</h5>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('frontend/img/guide-1.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Vlad</h4>
                                <p class="mb-0">Mengatur Parkir Motor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('frontend/img/guide-2.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>

                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Niki</h4>
                                <p class="mb-0">Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('frontend/img/guide-3.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>

                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Thomas</h4>
                                <p class="mb-0">Mengatur Keuangan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('frontend/img/guide-4.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>

                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Budi</h4>
                                <p class="mb-0">Mengatur Parkir Mobil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Travel Guide End -->



    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Testimonial</h5>
                <h1 class="mb-0">Our Clients Say!!!</h1>
            </div>
            <div class="testimonial-carousel owl-carousel">
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">"Sejak menggunakan Web Parkir Kampus, saya tidak perlu lagi repot mencari tempat parkir di kampus. Saya bisa melihat ketersediaan tempat parkir secara real-time dan memesan tempat di area yang saya inginkan. Pembayarannya pun mudah dan praktis, bisa dilakukan secara online. Terima kasih Web Parkir Kampus!"
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="{{asset('frontend/img/testimonial-1.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">Holland</h5>
                        <p class="mb-0">Mahasiswa Sistem Informasi</p>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">"Web Parkir Kampus sangat membantu saya dalam mengelola area parkir di kampus. Saya dapat memantau ketersediaan tempat parkir dengan mudah dan meminimalisir terjadinya kemacetan. Sistem reservasi tempat parkir juga sangat efektif dalam mengatur parkir untuk acara-acara khusus. Terima kasih Web Parkir Kampus!"
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="{{asset('frontend/img/testimonial-2.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">lily</h5>
                        <p class="mb-0">Karyawan kampus</p>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">"Web Parkir Kampus membuat saya merasa lebih aman saat parkir di kampus. Sistem parkir elektroniknya membantu mencegah pencurian kendaraan. Saya juga dapat dengan mudah melaporkan masalah parkir melalui aplikasi mobile. Terima kasih Web Parkir Kampus!"
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="{{asset('frontend/img/testimonial-3.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">Lulu</h5>
                        <p class="mb-0">Mahasiswa Teknik Informatika</p>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">"Web Parkir Kampus sangat user-friendly dan mudah digunakan. Saya dapat mengakses informasi parkir dan melakukan transaksi dengan mudah dan cepat. Terima kasih Web Parkir Kampus!"
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="{{asset('frontend/img/testimonial-4.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">Lylu</h5>
                        <p class="mb-0">Mahasiswa Bisnis Digital</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i>  Jl. Setu Indah No.116, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451</a>
                            <a href=""><i class="fas fa-globe me-2"></i> nurulfikri.ac.id</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Careers</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Press</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Gift Cards</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Magazine</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">ParkirMas</a>, All
                        right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                            href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="index.html" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>