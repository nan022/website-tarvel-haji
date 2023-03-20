<?= $this->session->flashdata('msg'); ?>
  <div class="content">
    <div class="panel-header bg-primary-gradient">
      <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
          <div>
            <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
            <h5 class="text-white op-7 mb-2"><i>Ibadah umrah ke ibadah umrah berikutnya adalah penggugur (dosa) di
                antara keduanya.... (HR al-Bukhari dan Muslim).</i></h5>
          </div>
          <div class="ml-md-auto py-2 py-md-0">
            <a href="#" class="btn btn-white btn-border btn-round btn-sm"><?= date('d F, Y (l)') ?></a>
          </div>
        </div>
      </div>
    </div>

    <div class="page-inner mt--5">
      <?php if($this->session->userdata('role') == 'admin'){ ?>


      <div class="row row-card-no-pd mt--2">
        <div class="col-sm-6 col-md-4">
          <div class="card card-stats card-round">
            <div class="card-body ">
              <div class="row">
                <div class="col-5">
                  <div class="icon-big text-center">
                    <i class="flaticon-add-user text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-stats">
                  <div class="numbers">
                    <p class="card-category">Jumlah Customer</p>
                    <h4 class="card-title"><?= $jumlah_customer ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="card card-stats card-round">
            <div class="card-body ">
              <div class="row">
                <div class="col-5">
                  <div class="icon-big text-center">
                    <i class="flaticon-profile-1 text-success"></i>
                  </div>
                </div>
                <div class="col-7 col-stats">
                  <div class="numbers">
                    <p class="card-category">Jumlah Representatif</p>
                    <h4 class="card-title"><?= $jumlah_representatif ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="card card-stats card-round">
            <div class="card-body">
              <div class="row">
                <div class="col-5">
                  <div class="icon-big text-center">
                    <i class="flaticon-presentation text-danger"></i>
                  </div>
                </div>
                <div class="col-7 col-stats">
                  <div class="numbers">
                    <p class="card-category">Jumlah Transaksi</p>
                    <h4 class="card-title"><?= $jumlah_transaksi ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <?php } ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-head-row">
                <div class="card-title">Data Pesanan</div>
              </div>
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <table id="tables-transaksi" class="display table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Pemesan</th>
                      <th>Nama Paket</th>
                      <th>Jumlah Jamaah</th>
                      <th>Kode Referal</th>
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
                      <td><span class="badge badge-md badge-dark"><?= $s['kode_ref'] ?></span></td>
                      <td>
                        <?php if($s['status'] == 1){ ?>
                        <span class="badge badge-md badge-info">Memesan</span>
                        <?php }else if($s['status'] == 2){ ?>
                        <span class="badge badge-md badge-success">Lunas</span>
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