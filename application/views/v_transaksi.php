<?= $this->session->flashdata('msg_transaksi'); ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Transaksi</h4>
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
                    <a href="#">Data Transaksi</a>
                </li>
            </ul>
        </div>
        <!-- Modal edit data DP-->
        <div class="modal fade bs-example-modal-lg" id="editDataTransaksiDp" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-label-left" name="frm_edit" id="frm_edit" method="POST"
                            action='<?php echo base_url()."transaksi/update_transaksi_dp"; ?>'>
                            <input type="hidden" id="id_dp" name="id_dp" class="form-control" />
                            <div class="item form-group">
                                <label class="control-label col-md-12 ">Uang Muka</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="dp" id="dp" required="required">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="hidden" name="id" id="id">
                                    <button type="submit" class="btn btn-info float-right">Simpan</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal edit data Angsuran 1-->
        <div class="modal fade bs-example-modal-lg" id="editDataTransaksiAngsuran1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-label-left" name="frm_edit" id="frm_edit" method="POST"
                            action='<?php echo base_url()."transaksi/update_transaksi_angsuran_1"; ?>'>
                            <input type="hidden" id="id_angsuran_1" name="id_angsuran_1" class="form-control" />
                            <div class="item form-group">
                                <label class="control-label col-md-12">Angsuran 1</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="angsuran_1" id="angsuran_1" required="required">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="hidden" name="id" id="id">
                                    <button type="submit" class="btn btn-info float-right">Simpan</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal edit data Angsuran 2-->
        <div class="modal fade bs-example-modal-lg" id="editDataTransaksiAngsuran2" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-label-left" name="frm_edit" id="frm_edit" method="POST"
                            action='<?php echo base_url()."transaksi/update_transaksi_angsuran_2"; ?>'>
                            <input type="hidden" id="id_angsuran_2" name="id_angsuran_2" class="form-control" />
                            <div class="item form-group">
                                <label class="control-label col-md-12">Angsuran 2</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="angsuran_2" id="angsuran_2" required="required">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="hidden" name="id" id="id">
                                    <button type="submit" class="btn btn-info float-right">Simpan</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal edit data Angsuran 3-->
        <div class="modal fade bs-example-modal-lg" id="editDataTransaksiAngsuran3" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-label-left" name="frm_edit" id="frm_edit" method="POST"
                            action='<?php echo base_url()."transaksi/update_transaksi_angsuran_3"; ?>'>
                            <input type="hidden" id="id_angsuran_3" name="id_angsuran_3" class="form-control" />
                            <div class="item form-group">
                                <label class="control-label col-md-12">Angsuran 3</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="angsuran_3" id="angsuran_3" required="required">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="hidden" name="id" id="id">
                                    <button type="submit" class="btn btn-info float-right">Simpan</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tables-transaksi" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Pemesan</th>
                                        <th>Nama Paket</th>
                                        <th>Jumlah Jamaah</th>
                                        <th>Harga</th>
                                        <th>Uang Muka</th>
                                        <th>Angsuran 1</th>
                                        <th>Angsuran 2</th>
                                        <th>Angsuran 3</th>
                                        <th>Kurang Bayar</th>
                                        <th>Kode Referal</th>
                                        <th>Tgl Transaksi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                    if($this->session->userdata("role") == 'admin') {?>
                                        <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($data_transaksi as $s){ 
                                            $ed = base64_encode($s['id_transaksi']);
                                            $total_harga = $s['jumlah']*$s['total_harga'];
                                    ?>
                                        <tr id="<?= $ed; ?>">
                                        <td><?= $no++ ?></td>
                                        <td><?=$s['nama_pemesan']?></td>
                                        <td><?= $s['nama_paket'] ?></td>
                                        <td><?= $s['jumlah'] ?></td>
                                        <td><?= $total_harga?></td>
                                        <td>
                                            <?php
                                            $dp = $s['dp'];
                                                if ($dp == 0) {?>
                                            <a href="#" class="btn btn-secondary btnBayarDp btn-sm"> Bayar &nbsp;<i
                                                    class="icon-note"></i></a>
                                            <?php }else {?>
                                            <span class="badge badge-md badge-info">Rp. <?= $s['dp'] ?></span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php
                                            $dp = $s['dp'];
                                            $angsuran_1 = $s['angsuran_1'];
                                                if ($dp == 0 && $angsuran_1 == 0) {?>
                                            <span class="badge badge-md badge-warning">Menunggu</span>
                                            <?php }else if ($angsuran_1 != 0){?>
                                            <span class="badge badge-md badge-info">Rp. <?= $s['angsuran_1'] ?></span>
                                            <?php }else{?>
                                            <a href="#" class="btn btn-secondary btnBayar1 btn-sm"> Bayar &nbsp;<i
                                                    class="icon-note"></i></a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php
                                            $angsuran_1 = $s['angsuran_1'];
                                            $angsuran_2 = $s['angsuran_2'];
                                                if ($angsuran_1 == 0 && $angsuran_2 == 0) {?>
                                            <span class="badge badge-md badge-warning">Menunggu</span>
                                            <?php }else if ($angsuran_2 != 0){?>
                                            <span class="badge badge-md badge-info">Rp. <?= $s['angsuran_2'] ?></span>
                                            <?php }else{?>
                                            <a href="#" class="btn btn-secondary btnBayar2 btn-sm"> Bayar &nbsp;<i
                                                    class="icon-note"></i></a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php
                                            $angsuran_2 = $s['angsuran_2'];
                                            $angsuran_3 = $s['angsuran_3'];
                                                if ($angsuran_2 == 0 && $angsuran_3 == 0) {?>
                                            <span class="badge badge-md badge-warning">Menunggu</span>
                                            <?php }else if ($angsuran_3 != 0){?>
                                            <span class="badge badge-md badge-info">Rp. <?= $s['angsuran_3'] ?></span>
                                            <?php }else{?>
                                            <a href="#" class="btn btn-secondary btnBayar3 btn-sm"> Bayar &nbsp;<i
                                                    class="icon-note"></i></a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php
                                            $total_harga_all = $total_harga-$s['dp']-$s['angsuran_1']-$s['angsuran_2']-$s['angsuran_3'];
                                            if($total_harga_all == 0){ ?>
                                                <span class="badge badge-md badge-secondary">Lengkap</span>
                                            <?php } else {?>
                                                <span class="badge badge-md badge-warning"><?= $total_harga-$s['dp']-$s['angsuran_1']-$s['angsuran_2']-$s['angsuran_3']?></span>
                                            <?php } ?>
                                        </td>
                                        <td><span class="badge badge-md badge-dark"><?= $s['kode_ref'] ?></span></td>
                                        <td class="text-center"> <?= date("d-m-Y", strtotime($s['created_at']));  ?></td>
                                        <td>
                                            <?php if($s['dp'] != 0 && $s['angsuran_1'] != 0 && $s['angsuran_2'] != 0 && $s['angsuran_3'] != 0){ ?>
                                            <span class="badge badge-md badge-success">Lunas</span>
                                            <?php }else if($s['status'] == 1){ ?>
                                            <span class="badge badge-md badge-info">Memesan</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('transaksi/detail_pemesanan/'); ?><?= $ed ?>"
                                                class="btn btn-primary btn-sm">Detail</a>

                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                
                                    <?php } else { ?>
                                        <tbody>
                                            <?php 
                                                $no = 1;
                                                foreach($data_transaksi as $s){ 
                                                    $ed = base64_encode($s['id_transaksi']);
                                            ?>
                                                <tr id="<?= $ed; ?>">
                                                <td><?= $no++ ?></td>
                                                <td><?=$s['nama_pemesan']?></td>
                                                <td><?= $s['nama_paket'] ?></td>
                                                <td><?= $s['jumlah'] ?></td>
                                                <td><?= $s['jumlah']*$s['total_harga']?></td>
                                                <td>
                                                    <?php
                                                    $dp = $s['dp'];
                                                        if ($dp == 0) {?>
                                                   <a href="#" class="btn btn-secondary btnBayarDP btn-sm"> Bayar <i class="icon-note"></i></a>
                                                    <?php }else {?>
                                                    <span class="badge badge-md badge-info">Rp. <?= $s['dp'] ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $dp = $s['dp'];
                                                    $angsuran_1 = $s['angsuran_1'];
                                                        if ($dp == 0 && $angsuran_1 == 0) {?>
                                                    <span class="badge badge-md badge-warning">Menunggu</span>
                                                    <?php }else if ($angsuran_1 != 0){?>
                                                    <span class="badge badge-md badge-info">Rp. <?= $s['angsuran_1'] ?></span>
                                                    <?php }else{?>
                                                        <a href="#" class="btn btn-secondary btnBayar1 btn-sm"> Bayar <i class="icon-note"></i></a>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $angsuran_1 = $s['angsuran_1'];
                                                    $angsuran_2 = $s['angsuran_2'];
                                                        if ($angsuran_1 == 0 && $angsuran_2 == 0) {?>
                                                    <span class="badge badge-md badge-warning">Menunggu</span>
                                                    <?php }else if ($angsuran_2 != 0){?>
                                                    <span class="badge badge-md badge-info">Rp. <?= $s['angsuran_2'] ?></span>
                                                    <?php }else{?>
                                                        <a href="#" class="btn btn-secondary btnBayar2 btn-sm"> Bayar <i class="icon-note"></i></a>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $angsuran_2 = $s['angsuran_2'];
                                                    $angsuran_3 = $s['angsuran_3'];
                                                        if ($angsuran_2 == 0 && $angsuran_3 == 0) {?>
                                                    <span class="badge badge-md badge-warning">Menunggu</span>
                                                    <?php }else if ($angsuran_3 != 0){?>
                                                    <span class="badge badge-md badge-info">Rp. <?= $s['angsuran_3'] ?></span>
                                                    <?php }else{?>
                                                        <a href="#" class="btn btn-secondary btnBayar3 btn-sm"> Bayar <i class="icon-note"></i></a>
                                                    <?php } ?>
                                                </td>
                                                <td><span class="badge badge-md badge-dark"><?= $s['kode_ref'] ?></span></td>
                                                <td class="text-center"> <?= date("d-m-Y", strtotime($s['created_at']));  ?></td>
                                                <td>
                                                    <?php if($s['dp'] != 0 && $s['angsuran_1'] != 0 && $s['angsuran_2'] != 0 && $s['angsuran_3'] != 0){ ?>
                                                    <span class="badge badge-md badge-success">Lunas</span>
                                                    <?php }else if($s['status'] == 1){ ?>
                                                    <span class="badge badge-md badge-info">Memesan</span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('transaksi/detail_pemesanan/'); ?><?= $ed ?>"
                                                        class="btn btn-primary btn-sm">Detail</a>
        
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>