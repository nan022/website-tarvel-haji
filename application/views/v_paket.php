<?= $this->session->flashdata('msg'); ?>
<!-- Page Content -->
<div class="page-heading-paket header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Paket</h1>
                <span>Kami memberikan paket yang sesuai harapan dan yang Anda inginkan</span>
            </div>
        </div>
    </div>
</div>

<div class="more-info about-info">
    <div class="container">

        <div class="row package-title">
            <div class="col-md-12">
                <?php if($pemesanan == 'show') { ?>
                <div class="section-heading">
                    <h2>Lakukan Transaksi Pemesanan</h2>
                    <span>Silahkan mengisi data pemesanan Anda.</span>
                </div>
                <?php }else{ ?>
                <div class="section-heading">
                    <h2>Paket Sesuai Kemauan</h2>
                    <span>Kami menyediakan beberapa pilihan untuk memastikan fasilitas selama beribadah adalah sesuai yang Anda inginkan.</span>
                </div>
                <?php } ?>
            </div>
        </div>

        <?php if($pemesanan != 'show') { ?>
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
        <?php } ?>

        <?php if($pemesanan == 'show') { ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img width="100%"
                                    src="<?= base_url(); ?>assets/asset_paket/<?= $this->session->userdata('poster'); ?>">
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" style="background-color:#f3f3f3; border-radius:3px;">
                                            <label>Nama Akun Pemesan :</label>
                                            <h5><?= $this->session->userdata('nama'); ?> </h4>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Nama Paket :</label>
                                            <h5><?= $this->session->userdata('nama_paket'); ?> </h4>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Durasi :</label>
                                            <h5><?= $this->session->userdata('durasi'); ?></h4>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Hotel :</label>
                                            <h5><?= $this->session->userdata('hotel'); ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Total Seat :</label>
                                            <h5><?= $this->session->userdata('total_seat'); ?> pax</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Available Seat :</label>
                                            <h5><?= $this->session->userdata('available_seat'); ?> pax</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Berangkat dari :</label>
                                            <h5><?= $this->session->userdata('berangkat'); ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Maskapai :</label>
                                            <h5><?= $this->session->userdata('maskapai'); ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Harga :</label>
                                            <h5><?= "Rp " . number_format($this->session->userdata('harga'),0,',','.');  ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5><b>LIST PESERTA JAMAAH</b></h5>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:-1.3em;">

                            <div class="col-md-12">
                                <form action="<?= base_url('paket/add_pemesanan'); ?>" method="POST">

                                    <input type="hidden" class="form-control" name="id_paket"
                                        value="<?= $this->session->userdata('id_paket'); ?>">

                                    <input type="hidden" class="form-control" name="available_seat"
                                        value="<?= $this->session->userdata('available_seat'); ?>">

                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Masukkan Kode Referal </label> &nbsp;(Jika tidak ada bisa diisi dengan 0)
                                                <input type="text" class="form-control" id="kode_ref_by" name="kode_ref"
                                                    placeholder="Kode Referal" required>
                                                <small id="textDanger" class="text-danger"></small>
                                                <small id="textSuccess" class="text-success"></small>
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-2">
                                            <div class="form-group mt-4">
                                               <a class="btn btn-sm  btn-info mt-2 pt-1 pb-1 text-light" onclick="cekRef()">Cek Referal</a>
                                            </div>
                                        </div> -->

                                    </div>

                                    <div class="control-group after-add-row">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nama Jamaah</label>
                                                    <input type="text" class="form-control" name="nama[]"
                                                        placeholder="Nama jamaah">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>NIK</label>
                                                    <input type="number" class="form-control" name="nik[]"
                                                        placeholder="NIK jamaah">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>NO. WA</label>
                                                    <input type="number" class="form-control" name="no_wa[]"
                                                        placeholder="No. WA jamaah">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <br>
                                                    <button class="btn btn-primary btn-sm mt-1 add-row" type="button">
                                                        <i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Jamaah
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="copy invisible" style="margin-bottom:-4em;">
                                        <div class="control-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Nama Jamaah</label>
                                                        <input type="text" class="form-control" name="nama[]"
                                                            placeholder="Nama jamaah">
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>NIK</label>
                                                        <input type="text" class="form-control" name="nik[]"
                                                            placeholder="NIK jamaah">
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>NO. WA</label>
                                                        <input type="text" class="form-control" name="no_wa[]"
                                                            placeholder="No. WA jamaah">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>&nbsp;</label>
                                                        <br>
                                                        <button class="btn btn-secondary mt-1 btn-sm remove"
                                                            type="button"><i class="fa fa-minus"></i>&nbsp;&nbsp;Hapus
                                                            Baris</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit"
                                                class="btn btn-success btn-sm btn-rounded float-right ml-3">Simpan Data
                                            </button>
                                            <a href="<?= base_url('paket'); ?>"
                                                class="btn btn-danger btn-sm btn-rounded float-right">Batal </a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>

<hr />
<br>
<!-- <div class="partners">
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