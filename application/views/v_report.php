<?= $this->session->flashdata('msg'); ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Report</h4>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <?php if($status == 'report_representatif'){?>
                        <form action="<?= base_url('transaksi/filter_data_representatif'); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-3">
                                    <lable>Start Date</label>
                                        <input type="date" name="start_date" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <lable>End Date</label>
                                        <input type="date" name="end_date" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <lable>Representatif</label>
                                        <select class="form-control input" id="kode_ref" name="kode_ref" required>
                                            <option>Kode Representatif</option>
                                            <?php 
                                                    $no = 1;
                                                    foreach($data_ref as $s){ 
                                                        $ed = base64_encode($s['id_representatif']);
                                                ?>
                                            <option value="<?= $s['kode_ref'] ?>">
                                                <?=$s['nama'] . " : " . $s['kode_ref'] ?></option>
                                            <?php } ?>
                                        </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary btn-sm mt-4">Cari Data</button>
                                </div>
                            </div>
                        </form>
                        <?php } else { ?>
                        <form action="<?= base_url('transaksi/filter_data'); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-5">
                                    <lable>Start Date</label>
                                        <input type="date" name="start_date" class="form-control" required>
                                </div>
                                <div class="col-md-5">
                                    <lable>End Date</label>
                                        <input type="date" name="end_date" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary btn-sm mt-4">Cari Data</button>
                                </div>
                            </div>
                            <?php } ?>
                        </form>
                       
                        <div class="table-responsive mt-4">
                            <table id="tables-report" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Pemesan</th>
                                        <th>Nama Paket</th>
                                        <th>Jumlah Jamaah</th>
                                        <th>Harga</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Uang Muka</th>
                                        <th>Angsuran 1</th>
                                        <th>Angsuran 2</th>
                                        <th>Angsuran 3</th>
                                        <th>Kode Referal</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($data_transaksi as $s){ 
                                            $ed = base64_encode($s['id_user']);
                                    ?>
                                    <tr id="<?= $ed; ?>">
                                        <td><?= $no++ ?></td>
                                        <td><?= $s['nama_pemesan'] ?></td>
                                        <td><?= $s['nama_paket'] ?></td>
                                        <td><?= $s['jumlah'] ?></td>
                                        <td><?= $s['jumlah']*$s['total_harga'] ?></td>
                                        <td><?= $s['created_at']?></td>
                                        <td>
                                            <?php
                                            $dp = $s['dp'];
                                                if ($dp == 0) {?>
                                           <a href="#" class="badge badge-md badge-secondary"> Belum Membayar</a>
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
                                            <a href="#" class="badge badge-md badge-secondary"> Belum Membayar</a>
                                            <!-- <a href="#" class="btn btn-secondary btnBayar1 btn-sm"> Bayar <i
                                                    class="icon-note"></i></a> -->
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
                                                <a href="#" class="badge badge-md badge-secondary"> Belum Membayar</a>
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
                                                <a href="#" class="badge badge-md badge-secondary"> Belum Membayar</a>
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
                                            <div classs="btn-group" role="group">
                                                <a href="#" title="" class="btn btn-info btn-sm editCustomer mb-2">
                                                    <i class="fas fa-eye"></i>&nbsp;&nbsp;Detail
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
            </div>
        </div>
    </div>
</div>