<?= $this->session->flashdata('msg'); ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Paket</h4>
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
                    <a href="#">Data Paket</a>
                </li>
            </ul>
        </div>

        <?php if($this->session->userdata("role") == "admin"){ ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">

                        <div class="d-flex align-items-center">
                            <h4 class="pt-2">Paket Travel</h4>
                            <button class="btn btn-primary btn-round ml-auto btn-sm" data-toggle="collapse"
                                aria-expanded="false" data-target="#addDataPaket">
                                <i class="fa fa-plus"></i>
                                Tambah Data Paket
                            </button>
                        </div>
                    </div>

                    <div class="collapse" id="addDataPaket">
                        <form enctype="multipart/form-data" method="POST"
                            action="<?= base_url('data_paket/add_paket'); ?>">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><i class="fas fa-suitcase-rolling"></i>&nbsp;&nbsp;&nbsp;Nama
                                                Paket</label>
                                            <input type="text" name="nama_paket" class="form-control"
                                                placeholder="Nama paket" required
                                                oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;Jadwal
                                                Keberangkatan</label>
                                            <input type="date" class="form-control" name="jadwal"
                                                placeholder="Jadwal keberangkatan" required
                                                oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><i class="far fa-clock"></i>&nbsp;&nbsp;&nbsp;Durasi Paket</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="number" name="durasi" class="form-control"
                                                        placeholder="Durasi paket" required
                                                        oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                        oninput="setCustomValidity('')">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="pt-2">/hari</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><i class="far fa-building"></i>&nbsp;&nbsp;&nbsp;Bintang
                                                Hotel</label>
                                            <select name="hotel" class="form-control" required
                                                oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                                <option value="1">Bintang 1 - ★</option>
                                                <option value="2">Bintang 2 - ★★</option>
                                                <option value="3">Bintang 3 - ★★★</option>
                                                <option value="4">Bintang 4 - ★★★★</option>
                                                <option value="5">Bintang 5 - ★★★★★</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;Total Seat</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="number" name="total_seat" class="form-control"
                                                        placeholder="Total seat" required
                                                        oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                        oninput="setCustomValidity('')">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="pt-2"> pax</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><i class="fas fa-user-friends"></i>&nbsp;&nbsp;&nbsp;Available
                                                Seat</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="number" name="available_seat" class="form-control"
                                                        placeholder="Available seat" required
                                                        oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                        oninput="setCustomValidity('')">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="pt-2"> pax</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><i class="fas fa-plane-departure"></i>&nbsp;&nbsp;&nbsp;Berangkat
                                                dari Kota</label>
                                            <input type="text" name="berangkat" class="form-control"
                                                placeholder="Berangkat dari Kota" required
                                                oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><i class="fas fa-plane"></i>&nbsp;&nbsp;&nbsp;Maskapai</label>
                                            <input type="text" name="maskapai" class="form-control"
                                                placeholder="Nama maskapai" required
                                                oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><i class="fas fa-user-friends"></i>&nbsp;&nbsp;&nbsp;Harga Paket</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input type="number" name="harga" class="form-control"
                                                        placeholder="Harga paket" required
                                                        oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                        oninput="setCustomValidity('')">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="pt-2"> /pax</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><i class="fas fa-image"></i>&nbsp;&nbsp;&nbsp;Poster Paket</label>
                                            <input type="file" name="poster" class="form-control"
                                                placeholder="Nama maskapai" required
                                                oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                            <small class="text-danger">*ukuran poster wajib 1080px x 1080px</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-success btn-sm btn-rounded float-right">Simpan
                                            Data</button>
                                        <a data-toggle="collapse" aria-expanded="false" data-target="#addDataPaket"
                                            class="btn btn-danger btn-sm btn-rounded mr-3 float-right text-light">Batal</a>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>

                    <?php if($status == "edit_paket"){ ?>
                    <?php 
                            foreach($data_paket_travel as $s){ 
                            $ed = base64_encode($s['id_paket']);
                            $poster =$s['poster'];
                        ?>
                    <form enctype="multipart/form-data" method="POST"
                        action="<?= base_url('data_paket/proses_edit_data_paket'); ?>">
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="id" value="<?= $ed ?>">
                                <input type="hidden" name="poster_id" value="<?= $poster ?>">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><i class="fas fa-image"></i>&nbsp;&nbsp;&nbsp;Poster Sebelumnya</label>
                                        <br>
                                        <img width="50%"
                                            src="<?= base_url(); ?>assets/asset_paket/<?= $s['poster']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mt-5">
                                        <label><i class="fas fa-image"></i>&nbsp;&nbsp;&nbsp;Poster Paket</label>
                                        <input type="file" name="poster_update" class="form-control">
                                        <small class="text-danger">*ukuran poster wajib 1080px x 1080px</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><i class="fas fa-suitcase-rolling"></i>&nbsp;&nbsp;&nbsp;Nama
                                            Paket</label>
                                        <input type="text" name="nama_paket" value="<?= $s['nama_paket'] ?>"
                                            class="form-control" placeholder="Nama paket" required
                                            oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;Jadwal
                                            Keberangkatan</label>
                                        <input type="date" class="form-control"
                                            value="<?= $s['jadwal'];  ?>" name="jadwal"
                                            placeholder="Jadwal keberangkatan" required
                                            oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><i class="far fa-clock"></i>&nbsp;&nbsp;&nbsp;Durasi Paket</label>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <input type="number" name="durasi" value="<?= $s['durasi'] ?>"
                                                    class="form-control" placeholder="Durasi paket" required
                                                    oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                    oninput="setCustomValidity('')">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="pt-2">/hari</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><i class="far fa-building"></i>&nbsp;&nbsp;&nbsp;Bintang Hotel</label>
                                        <select name="hotel" class="form-control" required
                                            oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                            <?php if($s['hotel'] == '1') { ?>
                                            <option value="1" selected>Bintang 1 - ★</option>
                                            <option value="2">Bintang 2 - ★★</option>
                                            <option value="3">Bintang 3 - ★★★</option>
                                            <option value="4">Bintang 4 - ★★★★</option>
                                            <option value="5">Bintang 5 - ★★★★★</option>
                                            <?php }else if($s['hotel'] == '2'){ ?>
                                            <option value="1">Bintang 1 - ★</option>
                                            <option value="2" selected>Bintang 2 - ★★</option>
                                            <option value="3">Bintang 3 - ★★★</option>
                                            <option value="4">Bintang 4 - ★★★★</option>
                                            <option value="5">Bintang 5 - ★★★★★</option>
                                            <?php }else if($s['hotel'] == '3'){?>
                                            <option value="1">Bintang 1 - ★</option>
                                            <option value="2">Bintang 2 - ★★</option>
                                            <option value="3" selected>Bintang 3 - ★★★</option>
                                            <option value="4">Bintang 4 - ★★★★</option>
                                            <option value="5">Bintang 5 - ★★★★★</option>
                                            <?php }else if($s['hotel'] == '4'){?>
                                            <option value="1">Bintang 1 - ★</option>
                                            <option value="2">Bintang 2 - ★★</option>
                                            <option value="3">Bintang 3 - ★★★</option>
                                            <option value="4" selected>Bintang 4 - ★★★★</option>
                                            <option value="5">Bintang 5 - ★★★★★</option>
                                            <?php }else if($s['hotel'] == '5'){ ?>
                                            <option value="1">Bintang 1 - ★</option>
                                            <option value="2">Bintang 2 - ★★</option>
                                            <option value="3">Bintang 3 - ★★★</option>
                                            <option value="4">Bintang 4 - ★★★★</option>
                                            <option value="5" selected>Bintang 5 - ★★★★★</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;Total Seat</label>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <input type="number" name="total_seat" value="<?= $s['total_seat'] ?>"
                                                    class="form-control" placeholder="Total seat" required
                                                    oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                    oninput="setCustomValidity('')">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="pt-2"> pax</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><i class="fas fa-user-friends"></i>&nbsp;&nbsp;&nbsp;Available
                                            Seat</label>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <input type="number" name="available_seat"
                                                    value="<?= $s['available_seat'] ?>" class="form-control"
                                                    placeholder="Available seat" required
                                                    oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                    oninput="setCustomValidity('')">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="pt-2"> pax</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><i class="fas fa-plane-departure"></i>&nbsp;&nbsp;&nbsp;Berangkat
                                            dari</label>
                                        <input type="text" name="berangkat" value="<?= $s['berangkat'] ?>"
                                            class="form-control" placeholder="Berangkat dari" required
                                            oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><i class="fas fa-user-friends"></i>&nbsp;&nbsp;&nbsp;Harga</label>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <input type="number" name="harga" value="<?= number_format($s['harga'],0,'.','.');  ?>"
                                                    class="form-control" placeholder="Harga per-orang" required
                                                    oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                                    oninput="setCustomValidity('')">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="pt-2">/pax</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><i class="fas fa-plane"></i>&nbsp;&nbsp;&nbsp;Maskapai</label>
                                        <input type="text" name="maskapai" value="<?= $s['maskapai'] ?>"
                                            class="form-control" placeholder="Nama maskapai" required
                                            oninvalid="this.setCustomValidity('Inputan tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-sm btn-rounded float-right">Simpan
                                        Data</button>
                                    <a href="<?= base_url('data_paket'); ?>"
                                        class="btn btn-danger btn-sm btn-rounded mr-3 float-right text-light">Batal</a>
                                </div>
                            </div>

                        </div>
                    </form>
                    <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>


        <?php if($status != "edit_paket"){ ?>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php 
                        foreach($data_paket_travel as $s){ 
                        $ed = base64_encode($s['id_paket']);
                        $poster = $s['poster'];
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="<?= base_url();?>assets/asset_paket/<?= $s['poster'] ?>"
                                alt="Card image cap">

                            <div class="card-body ml-1 mr-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3><b><?= $s['nama_paket'] ?></b></h3>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-7 font-weight-bold">
                                        <i class="fas fa-calendar-alt"></i>&nbsp; Keberangkatan
                                    </div>
                                    <div class="col-md-5 text-right">
                                        <p><?= date("d-m-Y", strtotime($s['jadwal']));  ?></p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="far fa-clock" aria-hidden="true"></i>&nbsp; Durasi
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p><?= $s['durasi'] ?></p>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="far fa-building" aria-hidden="true"></i>&nbsp; Hotel
                                    </div>
                                    <div class="col-md-7 text-right">
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
                                </div>

                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="fas fa-users" aria-hidden="true"></i>&nbsp; Total seat
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p><?= $s['total_seat'] ?> pax</p>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="fas fa-user-friends" aria-hidden="true"></i>&nbsp; Available
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p><?= $s['available_seat'] ?> pax</p>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="fas fa-plane-departure" aria-hidden="true"></i>&nbsp;
                                        Berangkat
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p style="text-transform: uppercase"><?= $s['berangkat'] ?></p>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="fas fa-plane" aria-hidden="true"></i>&nbsp; Maskapai
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p><?= $s['maskapai'] ?></p>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="far fa-money-bill-alt" aria-hidden="true"></i>&nbsp; Harga
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p><?= "Rp " . number_format($s['harga'],0,',','.');  ?> /pax</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <?php if($this->session->userdata("role") == "admin") { ?>
                                        <button onclick="delClickPaket('<?= $ed ?>,<?= $poster ?>')"
                                            class="btn btn-outline-danger btn-sm btn-round mr-3">Delete
                                            Data</button>

                                        <a href="<?= base_url('data_paket/edit_data_paket/'); ?><?= $ed ?>"
                                            class="btn btn-outline-primary btn-sm btn-round">Edit
                                            Data</a>
                                        <?php } ?>
                                        <?php if($this->session->userdata("role") == "customer") { ?>
                                        <a href="<?= base_url('data_paket/pilih_paket/'); ?><?= $ed ?>"
                                            class="btn btn-primary btn-sm btn-round">Pilih Paket Travel</a>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>