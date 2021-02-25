<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

	<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> DATA PASIEN</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Table Data Pasien</h4>
                <hr>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>JK</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Nama KK</th>
                    <th>No BPJS</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php $no = 1; ?>
                	<?php foreach($pasien as $p) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $p['nama_pasien']; ?></td>
                    <td><?= $p['tempat_lahir']; ?></td>
                    <td><?= $p['tanggal_lahir']; ?></td>
                    <td><?= $p['jenis_kelamin']; ?></td>
                    <td><?= $p['agama']; ?></td>
                    <td><?= $p['alamat']; ?></td>
                    <td><?= $p['no_hp']; ?></td>
                    <td><?= $p['nama_kk']; ?></td>
                    <td><?= $p['no_bpjs']; ?></td>
                    <td>
                      <a href="" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
               <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
  </section>

<?= $this->endSection(); ?>