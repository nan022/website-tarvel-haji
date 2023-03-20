<?= $this->session->flashdata('msg'); ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Detail Transaksi</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="<?= base_url('panel'); ?>">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data Detail Transaksi</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" id="print-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img width="100%"
                                    src="<?= base_url(); ?>assets/asset_paket/<?= $this->session->userdata('poster'); ?>">
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <?php foreach($data_all_transaksi as $s){ ?>

                                    <div class="col-md-12">
                                        <div class="form-group" style="background-color:#f3f3f3; border-radius:3px;">
                                            <label>Nama Akun Pemesan :</label>
                                            <h5><?= $s['nama_pemesan'] ?></h4>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Nama Paket :</label>
                                            <h5><?= $s['nama_paket'] ?></h4>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Durasi :</label>
                                            <h5><?= $s['durasi'] ?></h4>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Hotel :</label>
                                            <h5><?= $s['hotel'] ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Total Seat :</label>
                                            <h5><?= $s['total_seat'] ?> pax</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Available Seat :</label>
                                            <h5><?= $s['available_seat'] ?> pax</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Berangkat dari :</label>
                                            <h5><?= $s['berangkat'] ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Maskapai :</label>
                                            <h5><?= $s['maskapai'] ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Harga :</label>
                                            <h5><?= "Rp " . number_format($s['harga'],0,',','.');  ?>
                                                /pax</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Kode Referal :</label>
                                            <h5> <span class="badge badge-md badge-dark"><?= $s['kode_ref'] ?></span></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h5><b>LIST PESERTA JAMAAH</b></h5>
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:-0.5em">
                            <?php foreach($data_all_calon_customer as $s){ ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    ◉
                                    <label>Nama Jamaah</label>
                                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $s['nama'] ?> </h5>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>NIK Jamaah</label>
                                    <h5> <?= $s['nik'] ?> </h5>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>No. WA Jamaah</label>
                                    <h5> <?= $s['no_wa'] ?> </h5>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="form-group bg-info">
                                    <h3 class="text-light pt-1">Total Pemesanan : <b><?= "Rp " . number_format($jumlah_pesanan,0,',','.');  ?></b></h3>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-info mt-3" onclick="printCard()"><i class="icon-printer"></i>  Cetak Transaksi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>