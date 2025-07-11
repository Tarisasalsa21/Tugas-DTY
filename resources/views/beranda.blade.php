@extends('layouts.app')

@section('content')

  <section id="hero" class="hero section dark-background">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active">
        <img src="{{ asset('sailor/assets/img/hero-carousel/dty1.png') }}" alt="Produksi Benang DTY">
        <div class="carousel-container">
          <h2>Welcome to DTY Indorama<br></h2>
          <p>Pusat Pelatihan Vokasi dan Produksi Benang Polyester Terdepan yang Mengintegrasikan Pendidikan dengan Kebutuhan Industri Global.</p>
          <a href="#about" class="btn-get-started">Jelajahi Lebih Lanjut</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{ asset('sailor/assets/img/hero-carousel/dty4.jpeg') }}" alt="Benang Polyester">
        <div class="carousel-container">
          <h2>Drawn Texturised Yarn (DTY) Berkualitas Tinggi</h2>
          <p>Dengan elastisitas superior, daya tahan tinggi, dan tekstur lembut, benang DTY kami menjadi pilihan utama untuk beragam aplikasi tekstil modern.</p>
          <a href="#main-product" class="btn-get-started">Lihat Produk</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{ asset('sailor/assets/img/hero-carousel/Indorama.jpg') }}" alt="Mahasiswa di Pabrik">
        <div class="carousel-container">
          <h2>Mencetak Tenaga Ahli Profesional</h2>
          <p>Melalui konsep "Link and Match", kami membekali mahasiswa dengan kompetensi praktik yang relevan untuk menjawab tantangan industri.</p>
          <a href="#features" class="btn-get-started">Lihat Fitur Kami</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span></a>
      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next"><span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span></a>
      <ol class="carousel-indicators"></ol>

    </div>
  </section><main class="main">

    <section id="about" class="about section">
      <div class="container text-center" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title">
              <h2>About Us</h2>
              <p>🏢 Profil DTY Indorama</p>
            </div>
            <p class="about-intro">
              Sebagai pionir Teaching Factory di bawah naungan Politeknik Enjinering Indorama (PEI), DTY Indorama berfungsi sebagai pusat produksi benang poliester sekaligus fasilitas pelatihan vokasi terintegrasi. Kami berkomitmen untuk mencetak sumber daya manusia dengan kompetensi unggul yang selaras dengan dinamika industri tekstil global.
            </p>
          </div>
        </div>
        <div class="row gy-4 mt-5">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="vision-mission-box">
              <h5>🎯 Visi Kami</h5>
              <p>Menjadi pusat unggulan pendidikan vokasi berbasis industri yang mampu mencetak lulusan siap kerja dan berdaya saing global di bidang teknologi tekstil.</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="vision-mission-box">
              <h5>🎯 Misi Kami</h5>
              <p>Menyelenggarakan pendidikan vokasi yang berorientasi industri, meningkatkan kompetensi melalui magang dan sertifikasi, serta menghasilkan produk DTY yang memenuhi standar kualitas internasional.</p>
            </div>
          </div>
        </div>
      </div>
    </section><section id="features" class="features section light-background">
      <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
          <h2>Features</h2>
          <p>✨ Keunggulan Kami</p>
        </div>
        <div class="row">
          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="nav-tabs-container">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item"><a class="nav-link active show" data-bs-toggle="tab" href="#tab-1"><i class="bi bi-cpu"></i><h4>Teknologi Modern</h4></a></li>
                <li class="nav-item mt-2"><a class="nav-link" data-bs-toggle="tab" href="#tab-2"><i class="bi bi-patch-check"></i><h4>Kontrol Kualitas</h4></a></li>
                <li class="nav-item mt-2"><a class="nav-link" data-bs-toggle="tab" href="#tab-3"><i class="bi bi-globe"></i><h4>Standar Internasional</h4></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Peralatan Berstandar Industri</h3>
                <p>Fasilitas kami dilengkapi dengan mesin produksi modern yang identik dengan yang digunakan di industri tekstil skala besar, memastikan pengalaman belajar yang relevan dan aplikatif.</p>
                <img src="{{ asset('sailor/assets/img/features-1.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Jaminan Mutu di Setiap Tahapan</h3>
                <p>Kami menerapkan sistem Quality Assurance yang ketat, mulai dari seleksi bahan baku hingga pengujian produk jadi, untuk memastikan setiap gulung benang memenuhi standar kualitas tertinggi.</p>
                <img src="{{ asset('sailor/assets/img/features-2.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Koneksi dan Peluang Global</h3>
                <p>Melalui jaringan Indorama Ventures yang luas, kami membuka peluang magang internasional bagi mahasiswa berprestasi, salah satunya di Trevira GmbH, Jerman, untuk memperkuat wawasan dan kesiapan kerja global.</p>
                <img src="{{ asset('sailor/assets/img/features-3.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><section id="main-product" class="main-product section">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Our Product</h2>
          <p>🏭 Profil Produk Unggulan</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <img src="{{ asset('sailor/assets/img/benang1.jpeg') }}" class="product-image" alt="Produk Benang DTY">
            <h4 class="product-title">Drawn Texturised Yarn (DTY)</h4>
            <p class="product-description">
              DTY adalah benang filamen poliester yang diproduksi dengan memproses Partially Oriented Yarn (POY) melalui mesin teksturisasi. Proses ini memberikan sifat bulky, elastisitas tinggi, dan retensi panas yang baik. Benang DTY kami tersedia dalam berbagai denier dan filamen, cocok untuk aplikasi tenun (weaving) maupun rajut (knitting).
            </p>
            <a href="#" class="read-more"><span>Unduh Spesifikasi Teknis</span><i class="bi bi-download"></i></a>
          </div>
        </div>
      </div>
    </section><section id="services" class="services section light-background">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Process</h2>
          <p>⚙️ Tahapan Proses Produksi</p>
        </div>
        <div class="row gy-4">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100"><div class="service-item d-flex position-relative h-100"><i class="bi bi-box-seam icon flex-shrink-0"></i><div><h4 class="title"><a href="#">1. POY Loading</a></h4><p class="description">Seleksi dan pemuatan bahan baku Partially Oriented Yarn (POY) ke creel sebagai input utama mesin teksturisasi.</p></div></div></div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200"><div class="service-item d-flex position-relative h-100"><i class="bi bi-bezier2 icon flex-shrink-0"></i><div><h4 class="title"><a href="#">2. Splicing</a></h4><p class="description">Penyambungan ujung benang POY untuk memastikan aliran material yang kontinu dan tanpa putus selama proses berjalan.</p></div></div></div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300"><div class="service-item d-flex position-relative h-100"><i class="bi bi-arrow-repeat icon flex-shrink-0"></i><div><h4 class="title"><a href="#">3. Texturizing & Drawing</a></h4><p class="description">Benang ditarik dan diberi tekstur melalui pemanasan dan pendinginan untuk menciptakan sifat keriting (crimp) dan elastisitas.</p></div></div></div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400"><div class="service-item d-flex position-relative h-100"><i class="bi bi-check2-all icon flex-shrink-0"></i><div><h4 class="title"><a href="#">4. Winding & Oiling</a></h4><p class="description">Benang DTY yang sudah jadi digulung ke dalam cones (bobbins) sambil diberi lapisan minyak untuk pelumasan pada proses selanjutnya.</p></div></div></div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="500"><div class="service-item d-flex position-relative h-100"><i class="bi bi-funnel icon flex-shrink-0"></i><div><h4 class="title"><a href="#">5. Quality Inspection</a></h4><p class="description">Pemeriksaan kualitas visual dan lab pada setiap gulungan untuk memastikan keseragaman, kekuatan, dan spesifikasi lainnya.</p></div></div></div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="600"><div class="service-item d-flex position-relative h-100"><i class="bi bi-grid-3x3-gap icon flex-shrink-0"></i><div><h4 class="title"><a href="#">6. Packing & Segregation</a></h4><p class="description">Pengemasan produk jadi dan penyortiran berdasarkan grade kualitas sebelum siap didistribusikan ke pelanggan.</p></div></div></div>
        </div>
      </div>
    </section><section id="portfolio" class="portfolio section">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Product Utilization</h2>
          <p>Aplikasi Produk DTY</p>
        </div>
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-apparel">Apparel</li>
            <li data-filter=".filter-home">Home Textile</li>
            <li data-filter=".filter-automotive">Automotive</li>
          </ul>
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-apparel"><img src="{{ asset('sailor/assets/img/masonry-portfolio/masonry-portfolio-1.jpg') }}" class="img-fluid" alt=""><div class="portfolio-info"><h4>Sportswear & Activewear</h4><p>Untuk pakaian olahraga yang elastis</p></div></div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-home"><img src="{{ asset('sailor/assets/img/masonry-portfolio/masonry-portfolio-2.jpg') }}" class="img-fluid" alt=""><div class="portfolio-info"><h4>Upholstery & Furnishing</h4><p>Kain pelapis sofa dan furnitur</p></div></div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-apparel"><img src="{{ asset('sailor/assets/img/masonry-portfolio/masonry-portfolio-3.jpg') }}" class="img-fluid" alt=""><div class="portfolio-info"><h4>Outerwear</h4><p>Jaket, setelan, dan pakaian luar</p></div></div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-automotive"><img src="{{ asset('sailor/assets/img/masonry-portfolio/masonry-portfolio-4.jpg') }}" class="img-fluid" alt=""><div class="portfolio-info"><h4>Kain Otomotif</h4><p>Untuk pelapis jok dan interior mobil</p></div></div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-home"><img src="{{ asset('sailor/assets/img/masonry-portfolio/masonry-portfolio-5.jpg') }}" class="img-fluid" alt=""><div class="portfolio-info"><h4>Home Textiles</h4><p>Tirai, seprai, dan taplak meja</p></div></div>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-apparel"><img src="{{ asset('sailor/assets/img/masonry-portfolio/masonry-portfolio-6.jpg') }}" class="img-fluid" alt=""><div class="portfolio-info"><h4>Pakaian Dalam</h4><p>Bahan yang lembut dan nyaman di kulit</p></div></div>
          </div>
        </div>
      </div>
    </section><section id="clients" class="clients section light-background">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Our Clients</h2>
          <p>Dipercaya oleh Industri Terkemuka</p>
        </div>
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-2 col-md-3 col-6"><div class="client-logo-item"><img src="{{ asset('sailor/assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div></div>
          <div class="col-lg-2 col-md-3 col-6"><div class="client-logo-item"><img src="{{ asset('sailor/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div></div>
          <div class="col-lg-2 col-md-3 col-6"><div class="client-logo-item"><img src="{{ asset('sailor/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div></div>
          <div class="col-lg-2 col-md-3 col-6"><div class="client-logo-item"><img src="{{ asset('sailor/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div></div>
        </div>
      </div>
    </section><section id="testimonials" class="testimonials section">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Testimonials</h2>
          <p>Apa Kata Mereka Tentang Kami</p>
        </div>
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><div class="testimonial-item"><img src="{{ asset('sailor/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt=""><h3>Saul Goodman</h3><h4>Mahasiswa Magang</h4><p><i class="bi bi-quote quote-icon-left"></i><span>Pengalaman di DTY Indorama luar biasa. Saya belajar langsung tentang standar industri yang sesungguhnya, bukan hanya teori di kelas.</span><i class="bi bi-quote quote-icon-right"></i></p></div></div>
            <div class="swiper-slide"><div class="testimonial-item"><img src="{{ asset('sailor/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt=""><h3>Sara Wilsson</h3><h4>Perwakilan Industri</h4><p><i class="bi bi-quote quote-icon-left"></i><span>Lulusan yang pernah berlatih di DTY Indorama memiliki etos kerja dan pemahaman proses yang sangat baik. Mereka siap pakai.</span><i class="bi bi-quote quote-icon-right"></i></p></div></div>
            <div class="swiper-slide"><div class="testimonial-item"><img src="{{ asset('sailor/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt=""><h3>Jena Karlis</h3><h4>Alumni</h4><p><i class="bi bi-quote quote-icon-left"></i><span>Fasilitas Teaching Factory di sini benar-benar mempersiapkan saya untuk tantangan di dunia kerja. Sangat berkesan!</span><i class="bi bi-quote quote-icon-right"></i></p></div></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><section id="contact" class="contact section light-background">
      <div class="container section-title text-center" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Hubungi Kami</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-5">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200"><i class="bi bi-geo-alt flex-shrink-0"></i><div><h3>Alamat</h3><p>Kawasan Industri Kembang Kuning, Purwakarta, Jawa Barat</p></div></div>
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300"><i class="bi bi-telephone flex-shrink-0"></i><div><h3>Telepon</h3><p>+62 264 200 345</p></div></div>
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400"><i class="bi bi-envelope flex-shrink-0"></i><div><h3>Email</h3><p>info@dtyindorama.com</p></div></div>
          </div>
          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4"><div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Nama Anda" required=""></div><div class="col-md-6 "><input type="email" class="form-control" name="email" placeholder="Email Anda" required=""></div><div class="col-md-12"><input type="text" class="form-control" name="subject" placeholder="Subjek Pesan" required=""></div><div class="col-md-12"><textarea class="form-control" name="message" rows="6" placeholder="Pesan Anda" required=""></textarea></div><div class="col-md-12 text-center"><div class="loading">Loading</div><div class="error-message"></div><div class="sent-message">Your message has been sent. Thank you!</div><button type="submit">Kirim Pesan</button></div></div>
            </form>
          </div>
        </div>
      </div>
    </section></main>

@endsection