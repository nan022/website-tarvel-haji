<?= $this->session->flashdata('msg'); ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Konfirmasi Pemesanan</h4>
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
                    <a href="#">Data Pemesanan</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label>Maskapai :</label>
                                            <h5><?= $this->session->userdata('maskapai'); ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Harga :</label>
                                            <h5><?= "Rp " . number_format($this->session->userdata('harga'),0,',','.');  ?>
                                                /pax</h4>
                                        </div>
                                    </div>
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


                        <div class="row" style="margin-top:-1.3em;">

                            <div class="col-md-12">
                                <form action="<?= base_url('transaksi/add_pemesanan'); ?>" method="POST" >

                                    <input type="hidden" class="form-control" name="id_paket"
                                        value="<?= $this->session->userdata('id_paket'); ?>" >

                                    <input type="hidden" class="form-control" name="available_seat"
                                        value="<?= $this->session->userdata('available_seat'); ?>" >

                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Masukkan Kode Referal </label> &nbsp;(Jika tidak ada bisa diisi dengan 0)
                                                <input type="text" class="form-control" id="kode_ref" name="kode_ref"
                                                    placeholder="Kode Referal" required>
                                                <small id="textDanger" class="text-danger"></small>
                                                <small id="textSuccess" class="text-success"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="control-group after-add-row">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nama Jamaah</label>
                                                    <input type="text" class="form-control" name="nama[]"
                                                        placeholder="Nama jamaah" required>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>NIK</label>
                                                    <input type="number" class="form-control" name="nik[]"
                                                        placeholder="NIK jamaah" required>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>NO. WA</label>
                                                    <input type="number" class="form-control" name="no_wa[]"
                                                        placeholder="No. WA jamaah" required>
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
                                                            placeholder="Nama jamaah" >
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>NIK</label>
                                                        <input type="text" class="form-control" name="nik[]"
                                                            placeholder="NIK jamaah" >
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>NO. WA</label>
                                                        <input type="text" class="form-control" name="no_wa[]"
                                                            placeholder="No. WA jamaah" >
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
                                            <a href="<?= base_url('data_paket'); ?>" class="btn btn-danger btn-sm btn-rounded float-right">Batal </a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>