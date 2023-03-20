<!-- Page Content -->
<?= $this->session->flashdata('msg_front'); ?>
<!-- Banner Starts Here -->
<div class="main-banner header-text" id="top">
  <div class="Modern-Slider">
    <!-- Item -->
    <div class="item item-1">
      <div class="img-fill">
        <div class="text-content">
          <h4>Bersama Anda<br>Menuju Baitullah</h4>
          <p>Tenangkan hatimu dalam beribadah dan kami akan mengelola kenyamanan perjalananmu.</p>
          <!-- <p style="margin-top:-2em;">Izin Umroh 163 </p> -->
          <a href="<?= base_url('login'); ?>" class="filled-button">Daftar Sekarang</a>
        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item item-2">
      <div class="img-fill">
        <div class="text-content">
          <h6>PT MUDAH MENUJU BAITULLAH</h6>
          <h4>Umrah Premium<br>&amp; sesuai Syariat</h4>
          <p>Layanan ibadah Umrah, tur Asia-Eropa dan Group ticketing, dengan fasilitas yang nyaman dan berkelas</p>
          <a href="<?= base_url('paket'); ?>" class="filled-button">Lihat Layanan</a>
        </div>
      </div>
    </div>
    <!-- // Item -->
  </div>
</div>
<!-- Banner Ends Here -->


<div class="whyus">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Mengapa Memilih MMB ?</h2>
          <span>Sesuai dengan nama MMB, kami akan mendukung perjalanan Jamaah menuju Baitullah sehingga amanah, nyaman
            dan mudah.</span>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-item">
          <div class="down-content">
            <img src="<?= base_url();?>assets/template/images/legal-paper-mmb.png">
            <h4>Terpercaya</h4>
            <p>Sudah berpengalaman mengirim Jamaah sejak 2019 dengan testimoni dan rekam jejak yang sangat baik.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-item">
          <div class="down-content">
            <img src="<?= base_url();?>assets/template/images/trust-mmb.png">
            <h4>Sesuai Syariat Islam</h4>
            <p>Semua kegiatan yang dilakukan mulai dari Manasik hingga Ibadah Umrah InsyaAllah sesuai Tuntunan Syariat
              Islam.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="service-item">
          <div class="down-content">
            <img src="<?= base_url();?>assets/template/images/service-mbb.png">
            <h4>Layanan Berkelas</h4>
            <p>Menyiapkan fasilitas yang berstandar tinggi dan nyaman, sehingga Jamaah hanya perlu fokus untuk
              beribadah.</p>
          </div>
        </div>
      </div>

      <!-- End row -->
    </div>
  </div>
</div>

<!-- End Why Us -->

<!-- Package -->
<div class="package">
  <div class="container">
    <div class="row package-title">
      <div class="col-md-6">
        <div class="section-heading">
          <h2>Paket Sesuai Kemauan</h2>
          <span>Kami menyediakan beberapa pilihan untuk memastikan fasilitas selama beribadah adalah sesuai yang Anda
            inginkan.</span>
        </div>
      </div>
      <div class="col-md-6">
        <a href="<?= base_url('paket'); ?>" class="btn btn-md filled-button float-right mt-4">Lihat Semua Paket</a>
      </div>
    </div>


    <div class="row">

      <?php 
    foreach($data_paket_travel as $s){ 
    $ed = base64_encode($s['id_paket']);
    $poster = $s['poster'];
?>

      <div class="col-md-4 mt-2">
        <div class="package-item">
          <img src="<?= base_url();?>assets/asset_paket/<?= $s['poster'] ?>" alt="Poster Paket">
          <div class="down-content">
            <h4><?= $s['nama_paket'] ?></h4>
            <div class="title pt-3 pb-2">
              <div class="address-time">
                <span><i class="fa fa-calendar"></i>
                  <p>Jadwal Berangkat</p>
                </span>
                <span>
                  <?= date("d-m-Y", strtotime($s['jadwal']));  ?>
                </span>
              </div>
              <div class="address-time">
                <span><i class="fa fa-clock-o"></i>
                  <p>Durasi Paket</p>
                </span>
                <span>
                  <?= $s['durasi'] ?>
                </span>
              </div>
              <div class="address-time">
                <span><i class="fa fa-building-o"></i>
                  <p>Hotel</p>
                </span>
                <p>
                  <?php if($s['hotel'] == '1') { ?>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <?php }else if($s['hotel'] == '2'){ ?>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <?php }else if($s['hotel'] == '3'){?>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <?php }else if($s['hotel'] == '4'){?>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <?php }else if($s['hotel'] == '5'){ ?>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <?php } ?>
                </p>
              </div>
              <div class="address-time">
                <span><i class="fa fa-user"></i>
                  <p>Total Seat</p>
                </span>
                <span>
                  <?= $s['total_seat'] ?> pax
                </span>
              </div>
              <div class="address-time" style="font-weight:600;">
                <span><i class="fa fa-user"></i>
                  <p>Available Seat</p>
                </span>
                <span>
                  <?= $s['available_seat'] ?> pax
                </span>
              </div>
              <div class="address-time">
                <span><i class="fa fa-map-marker"></i>
                  <p>Berangkat Dari</p>
                </span>
                <span>
                  <?= $s['berangkat'] ?>
                </span>
              </div>

              <div class="address-time">
                <span><i class="fa fa-plane"></i>
                  <p>Maskapai</p>
                </span>
                <span>
                  <?= $s['maskapai'] ?>
                </span>
              </div>
              <div class="address-time" style="font-weight:600;">
                <span><i class="fa fa-money"></i>
                  <p>Harga</p>
                </span>
                <span>
                  <?= "Rp " . number_format($s['harga'],0,',','.');  ?> /pax
                </span>
              </div>

            </div>
            <div class="col-md-12 text-center">
              <a href="<?= base_url('paket/pilih_paket/'); ?><?= $ed ?>" class="filled-button"><i
                  class="fa fa-plus mr-2"></i>Daftar Sekarang</a>
            </div>
          </div>
        </div>
      </div>

      <?php } ?>
    </div>

  </div>
</div>
</div>

<div class="fun-facts">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="left-content">
          <span>Sekilas Tentang Kami</span>
          <h2>PT MUDAH MENUJU BAITULLAH</h2>
          <p>Memberikan Fasilitas & Pelayanan yang terbaik demi kenyamanan Ibadah Anda.
            <br><br>Perusahaan berdiri secara resmi pada Tahun 2000 dengan nama PT. Mudah Menuju Baitullah. Kami adalah
            Perusahaan yang bergerak di bidang Jasa Umrah dan Travel, Jasa Land Arrangement Saudi
            <!-- <br><br>Dengan Izin : afds dfgd.</p> -->
        </div>
      </div>
      <div class="col-md-6 align-self-center">
        <iframe width="500" height="400" src="https://www.youtube.com/embed/XJBibv9_FBI?autoplay=1">
        </iframe>
      </div>
    </div>
  </div>
</div>

<div class="more-info">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="<?= base_url();?>assets/template/images/logo-mmb.jpg" title="5" alt="5">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span><em>VISI DAN MISI</em> PT MUDAH MENUJU BAITULLAH</span>
                <h2>VISI</h2>
                <p style="margin-top:-1.5em;">Sebagai biro Umrah yang memberikan pelayanan secara berkualitas, berkelas,
                  dan tentunya sesuai dengan
                  Syariat.
                </p>
                <h2 style="margin-top:-0.5em;">MISI</h2>
                <p style="margin-top:-1.5em;">
                  <ul style="list-style:initial">
                    <li>Mengedepankan aspek Syariat dalam setiap layanan ibadah Umrah</li>
                    <li> Memastikan kepuasan Jamaah dengan memberikan fasilitas yang berkelas</li>
                    <li>Menyiapkan pemandu yang sesuai sunnah dan syariat</li>
                    <li>Menyediakan tur Asia-Eropa sebagai pilihan perjalanan</li>
                    <li>Mengatur setiap perjalanan secara profesional dan amanah.</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Testimoni <em>Jamaah</em></h2>
          <span>Pendapatat para jamaah yang telah menggunakan jasa kami dalam umrah <br>dan berwisata di timur
            tengah</span>
        </div>
      </div>
      <div class="col-md-12">
        <div class="owl-testimonials owl-carousel">

          <div class="testimonial-item">
            <div class="inner-content">
              <h4>Sri Marlina</h4>
              <p>"Ikut program umroh, Alhamdulillah pelayanan nya memuaskan serta fasilitas nya lengkap."</p>
            </div>
            <img src="<?= base_url();?>assets/template/images/testimoni.png" alt="testimoni">
          </div>

          <div class="testimonial-item">
            <div class="inner-content">
              <h4>Abdul Rifana</h4>
              <p>"Semoga kedepan PT MMB semakin amanah, dan maju, serta pelayanan nya lebih ditambah."</p>
            </div>
            <img src="<?= base_url();?>assets/template/images/testimoni.png" alt="testimoni">
          </div>

          <div class="testimonial-item">
            <div class="inner-content">
              <h4>Tanti Fitriani</h4>
              <p>"Sangan baik pelayanan yang diberikan, baik kepengurusan dan bimbingan perjalanan yang lengkap."</p>
            </div>
            <img src="<?= base_url();?>assets/template/images/testimoni.png" alt="testimoni">
          </div>

          <div class="testimonial-item">
            <div class="inner-content">
              <h4>Maumunah</h4>
              <p>"Travel umrah dengan layanan yang baik, amanah, dan herga yang kompetitif. rekomendasi nih."</p>
            </div>
            <img src="<?= base_url();?>assets/template/images/testimoni.png" alt="testimoni">
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<hr />
<br>
<!-- 
<div class="partners">
  <div class="container">
    <div class="row" stye="text-align:center;">
      <div class="col-md-12" stye="text-align:center;">
        <div class="section-heading" stye="text-align:center;">
          <h2 stye="text-align:center;">Partner <em>Kami</em></h2>
          <span>Partner yang bekerjasama dengan PT Mudah Menuju Baitullah</span>
        </div>
        <div class="owl-partners owl-carousel">
          <div class="partner-item">
            <img src="<?= base_url();?>assets/template/images/partner-1.jpg" title="1" alt="1">
          </div>

          <div class="partner-item">
            <img src="<?= base_url();?>assets/template/images/partner-2.jpg" title="2" alt="2">
          </div>

          <div class="partner-item">
            <img src="<?= base_url();?>assets/template/images/partner-3.jpg" title="3" alt="3">
          </div>

          <div class="partner-item">
            <img src="<?= base_url();?>assets/template/images/partner-4.jpg" title="4" alt="4">
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<?php if ($this->session->flashdata('success_login')): ?>
<script>
  swal({
    title: "Selamat Datang",
    text: "Anda berhasil login, di PT MUDAH MENUJU BAITULLAH",
    button: true,
    timer: 5000,
    icon: 'success',
    confirmButtonText: 'Cool'
  });
</script>
<?php endif; ?>


<?php if ($this->session->flashdata('success_daftar')): ?>
<script>
  swal({
    title: "Selamat Datang",
    text: "Anda berhasil mendaftar, di PT MUDAH MENUJU BAITULLAH",
    button: true,
    timer: 5000,
    icon: 'success',
    confirmButtonText: 'Cool'
  });
</script>

<?php endif; ?>