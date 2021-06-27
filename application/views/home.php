
<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
    
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php echo $this->session->flashdata('message'); ?>
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="home" class="logo">
                            PuyStore
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">About</a></li>
                            <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Testimonials</a>
                            </li>                           
                            <li><a href="autentifikasi/index" >Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Solusi Untuk Handphone rusak <em>Anda</em></h1>
                        <p>Kami <a href="#contact-us">PuyStore </a> siap untuk memperbaiki <a href="#">kerusakan</a>.
                           Ponsel anda</p> 
                        <a href="#about" class="main-button-slider">AYO CARI MASALAHMU!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="<?=base_url('assets')?>/images/features-icon-1.png" alt="">
                            <h4>Ganti LCD</h4>
                            <p> Ciri-Ciri LCD anda bermasalah

                                LCD Ponsel anda bergaris?

                                Ada spot hitam / berwarna di layar Ponsel anda? 

                                Layar Ponsel anda bergerak tidak normal atau bergeser sendiri pada saat tidak disentuh?

                                Touchscreen Ponsel anda tidak berfungsi dengan baik?

                                LCD Ponsel anda pecah atau retak akibat terkena benturan?

                                Jika anda mengalami salah satu masalah di atas, maka tampaknya anda membutuhkan jasa Service LCD Ponsel atau lebih tepatnya jasa Servis Ganti LCD Ponsel.

                                Anda harus mengganti satu set LCD Ponsel. 
                                <p><marquee>Hubungi kami jika LCD Anda Bermasalah kami siap menangani!!!</marquee></p>
                            </p>     
                            <button class="main-button" style="margin-top: 20px"
                            data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-plus"></i> Order</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="<?=base_url('assets')?>/images/features-icon-2.png" alt="">
                            <h4>Kerusakan Software</h4>
                            <p>
                            • Restart Sendiri
                                    Smartphone restart-restart sendiri, serta tidak dapat ke menu utama. Ini juga salah satu ciri android rusak bagian software.

                                • Overheat / Panas
                                    Ponsel pintar android akan panas berlebihan atau bahasa inggrisnya Overheat. Jika mengalami seperti ini, pembaruan perangkat lunak menjadi hal yang wajib, silahkan simak cara mengatasi android overheat Disini

                                • Nge-LAG
                                    Nge-LAG disini bisa berupa Lemot, Layar LCD tidak menampilkan gambar atau Blank, bahkan sering di temui android tiba-tiba menutup aplikasi.

                                
                                <p><marquee>Hubungi kami jika Sofware Anda Bermasalah kami siap menangani!!!</marquee></p>

                            </p>
                            <button class="main-button" style="margin-top: 20px"
                            data-toggle="modal" data-target="#exampleModal2"><i class="fa fa-plus"></i> Order</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="<?=base_url('assets')?>/images/features-icon-3.png" alt="">
                            <h4>Kerusakan Hardware</h4>
                            <p> Ciri-ciri Hardware anda Rusak!!

                                1. Port USB Connector Atau Port Charger
                                    Masalah {hardware} yang sering ditemui oleh pengguna smartphone kebanyakan adalah masalah pada port charger yang tidak berfungsi. Kerusakan ini biasanya terjadi akibat pengguna yang memakai smartphonenya sambil mengisi daya tanpa memperhatikan port USB yang tidak sejajar dengan sambungan charger-nya.
                                2. LCD Atau Layar Android Pecah
                                    Kerusakan pada LCD biasaya terjadi akibat smartphone terjatuh, tergencet, atau terhantam 
                                    <p><marquee>Hubungi kami jika Hardware Anda Bermasalah kami siap menangani!!!</marquee></p>

                                </p>
                            <button class="main-button" style="margin-top: 20px"
                            data-toggle="modal" data-target="#exampleModal3"><i class="fa fa-plus"></i> Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    
    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Apa yang Mereka Pikirkan <em>Tentang Kami</em></h2>
                        <p>Ini adalah Testimonials dari pelanggan kamu</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Author One"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Cesarrio Aldi Anggara</h4>
                                <p>PUYSTORE sangat terbaik, dengan sekali analisa kerusakan, langsung eksekusi dan langsung bisa di pakai lagi ponsel saya</p>
                                <span>12180573</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Second Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>M. Daffa Kurniawan</h4>
                                <p>"Iphone saya langsung enak kembali setelah di perbaiki di Puystore"</p>
                                </br>
                                <span>192849285</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Author Third"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Asluki</h4>
                                <p>“LCD saya yang awal nya pecah, sekarang sudah mulus, Terimakasih Puystore”</p>
                                </br>
                                <span>192847294</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Fourth Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Faisal Abdau</h4>
                                <p>"Service ponsel tercepat yang pernah ada"</p>
                                </br>
                                </br>
                                <span>New Villager</span>
                            </div>
                        </div>
                        
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Author Third"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Jemi Dwi</h4>
                                <p>“Service center dengan penanganan yang sangat cepat, service di tempat lain bsa ber hari hari, di sini sehari selesai”</p>
                                <span>192847294</span>
                            </div>
                        </div>
                        
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Author Third"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Dhafa Arya Sena</h4>
                                <p>“Handphone yang semulanya hang, dan tidak bisa nyala. sekarang sudah bisa untuk push RANK mobile legends lagi”</p>
                                <span>192847294</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->


   

    <!-- jQuery -->
    <script src="<?=base_url('assets')?>/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?=base_url('assets')?>/js/popper.js"></script>
    <script src="<?=base_url('assets')?>/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?=base_url('assets')?>/js/owl-carousel.js"></script>
    <script src="<?=base_url('assets')?>/js/scrollreveal.min.js"></script>
    <script src="<?=base_url('assets')?>/js/waypoints.min.js"></script>
    <script src="<?=base_url('assets')?>/js/jquery.counterup.min.js"></script>
    <script src="<?=base_url('assets')?>/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="<?=base_url('assets')?>/js/custom.js"></script>


<!-- Modal 1-->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Input Order</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'home/tambah_aksi1' ?>">

            <div class="form-group">
                <label>Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" require>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" id="kategori" name="kategori" class="form-control" readonly value="Ganti LCD">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" id="keterangan" name="keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>        
      </div>
    </div>
  </div>
</div>

<!-- Modal 2-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Input Order</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'home/tambah_aksi1' ?>">

            <div class="form-group">
                <label>Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" require>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" id="kategori" name="kategori" class="form-control" readonly value="Kerusakan Software">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" id="keterangan" name="keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>        
      </div>
    </div>
  </div>
</div>

<!-- Modal 3-->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Input Order</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'home/tambah_aksi1' ?>">

            <div class="form-group">
                <label>Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" require>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" id="kategori" name="kategori" class="form-control" readonly value="Kerusakan Hardware">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" id="keterangan" name="keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>        
      </div>
    </div>
  </div>
</div>



</body>
</html>