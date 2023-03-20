<?= $this->session->flashdata('msg'); ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Representatif</h4>
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
                    <a href="#">Data Representatif</a>
                </li>
            </ul>
        </div>

        <!-- Modal Add Representatif -->
        <div class="modal fade" id="addDataRepresentatif" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">
                                TAMBAH DATA REPRESENTATIF</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Nama<span class="text-danger">*</span></label>
                                    <input type="text" id="nama" class="form-control" placeholder="Nama"
                                        oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input type="email" id="email" class="form-control" placeholder="Email" required
                                        oninvalid="this.setCustomValidity('Email tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <label>Password<span class="text-danger">*</span></label>
                                    <input type="text" id="password" class="form-control" placeholder="Password"
                                        required oninvalid="this.setCustomValidity('Password tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                    <input type="date" id="tgl_lahir" class="form-control" placeholder="Nama" required
                                        oninvalid="this.setCustomValidity('Tanggal Lahir tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <label>Nomor Whatsapp<span class="text-danger">*</span></label>
                                    <input type="text" id="nm_wa" class="form-control" placeholder="Nama" required
                                        oninvalid="this.setCustomValidity('Nomor Whatsapp tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <label>Kode Representatif<span class="text-danger">*</span></label>
                                    <input type="text" id="code_ref" class="form-control" readonly />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary btn-sm saveRepresentatif">Simpan
                            Data</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Data Representatif -->
        <div class="modal fade" id="editDataRepresentatif" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">
                                EDIT DATA REPRESENTATIF</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <input type="hidden" id="id_user_edit" class="form-control" />
                                <div class="col-sm-4">
                                    <label>Nama<span class="text-danger">*</span></label>
                                    <input type="text" id="nama_edit" class="form-control" placeholder="Nama"
                                        oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input type="email" id="email_edit" class="form-control" placeholder="Email"
                                        required oninvalid="this.setCustomValidity('Email tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4">
                                    <label>Username<span class="text-danger">*</span></label>
                                    <input type="text" id="username_edit" class="form-control" placeholder="Username"
                                        required oninvalid="this.setCustomValidity('Username tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <label>Password<span class="text-danger">*</span></label>
                                    <input type="text" id="password_edit" class="form-control" value="*********"
                                        required oninvalid="this.setCustomValidity('Password tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                    <input type="date" id="tgl_lahir_edit" class="form-control"
                                        required oninvalid="this.setCustomValidity('Tanggal Lahir tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <label>Nomor Whatsapp<span class="text-danger">*</span></label>
                                    <input type="text" id="nm_wa_edit" class="form-control" placeholder="Nomor Whatsapp" required
                                        oninvalid="this.setCustomValidity('Nomor Whatsapp tidak boleh kosong')"
                                        oninput="setCustomValidity('')" />
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <label>Kode Referal<span class="text-danger">*</span></label>
                                    <input type="text" id="code_ref_edit" class="form-control" readonly />
                                    <h6 style="font-size:11px">*Referal gabungan dari inputan nama + tgl lahir</h6>
                                </div>
                              
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary btn-sm saveEditRepresentatif">Simpan Perubahan
                            Data</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <?php 
                    $cek = $this->session->userdata("role");
                    if($cek == "representatif"){
                ?>

                <?php 
                    foreach($data_representatif_by_id as $s){ 
                ?>
                    <?php if($s['tgl_lahir'] == "" || $s['kode_ref'] == "" || $s['nm_wa'] == "") { ?>
                        <div class="alert alert-warning mb-4" role="alert">
                            <b>SILAHKAN DI LENGKAPI DATA PROFIL ANDA</b>
                        </div>
                    <?php } ?>
                <?php } ?>

               
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://smktibaliglobalsingaraja.sch.id/wp-content/uploads/2020/05/Whasapp_07-w1400h1400-e1590062007221.jpg"
                                alt="Card image cap">

                            <?php 
                                foreach($data_representatif_by_id as $s){ 
                                    $ed = base64_encode($s['id_user']);
                            ?>
                            <div class="card-body ml-2 mr-2">
                                <div class="row">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp; Nama
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p><?= $s['nama'] ?></p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="fa fa-envelope-open" aria-hidden="true"></i>&nbsp; Email
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p><?= $s['email'] ?></p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Username
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p><?= $s['username'] ?></p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; Tgl Lahir
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p>
                                            <?php if($s['tgl_lahir'] == 0000-00-00 || NULL){ echo "<span class='badge badge-md badge-warning'>Belum diisi</span>"?>
                                            <?php }else{ ?>
                                            <?= date("d-m-Y", strtotime($s['tgl_lahir']));  ?>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="fab fa-whatsapp" aria-hidden="true"></i>&nbsp; Whatsapp
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p><?= $s['nm_wa'] ?></p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:-0.6em">
                                    <div class="col-md-5 font-weight-bold">
                                        <i class="fa fa-gift" aria-hidden="true"></i>&nbsp; Kode Representatif
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <p><?= $s['kode_ref'] ?></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button onclick="editClickRepresentatif('<?= $ed ?>')"
                                            class="btn btn-outline-primary btn-sm btn-round">Edit
                                            Data</button>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <?php }else if($this->session->userdata("role") == "admin"){ ?>

                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-primary btn-round ml-auto btn-sm" data-toggle="modal"
                                data-target="#addDataRepresentatif">
                                <i class="fa fa-plus"></i>
                                Tambah Data Representatif
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tables-representatif" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nomor Whatsapp</th>
                                        <th>Kode Ref</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($data_representatif as $s){ 
                                            $ed = base64_encode($s['id_user']);
                                    ?>

                                    <tr id="<?= $ed; ?>">
                                        <td><?= $no++ ?></td>
                                        <td><?= $s['nama'] ?></td>
                                        <td><?= $s['email'] ?></td>
                                        <td><?= $s['username'] ?></td>
                                        <td><?= $s['password'] ?></td>
                                        <td>
                                            <?php if($s['tgl_lahir'] == 0000-00-00 || NULL){ echo "<span class='badge badge-md badge-warning'>Belum diisi</span>"?>
                                            <?php }else{ ?>
                                            <?= date("d-m-Y", strtotime($s['tgl_lahir']));  ?>
                                            <?php } ?>
                                        </td>
                                        <td><?= $s['nm_wa'] ?></td>
                                        <td><span class="badge badge-md badge-dark"><?= $s['kode_ref'] ?></span></td>
                                        <td>
                                            <div classs="btn-group" role="group">
                                                <a href="#" title="" class="btn btn-info btn-sm editRepresentatif mb-2">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                            </div>
                                            <div classs="btn-group" role="group">
                                                <a href="#" title=""
                                                    class="btn btn-danger delRepresentatif btn-sm mb-2">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>