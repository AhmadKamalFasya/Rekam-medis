<?= $this->extend('templates/index');  ?>

<?= $this->section('content'); ?>
  <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> DATA REKAM MEDIS PASIEN</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"> Data Table Rekam Medis Pasien</i></h4>
                <a href="/rekammedis/create" class="label label-primary tambah-data">Tambah Data</a>
                <hr>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th class="numeric">Pasien Id</th>
                      <th class="numeric">Poli Id</th>
                      <th class="numeric">Nip</th>
                      <th class="numeric">Tanggal Registrasi</th>
                      <th>Keluhan</th>
                      <th>Pemeriksaan Fsk</th>
                      <th>Diagnosa</th>
                      <th>Tindakan</th>
                      <th>Status Penyakit</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php $no = 1; ?>
                  	<?php foreach($rmedis as $r) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $r['pasien_id']; ?></td>
                      <td class="numeric"><?= $r['poli_id']; ?></td>
                      <td class="numeric"><?= $r['nip']; ?></td>
                      <td class="numeric"><?= $r['tanggal_registrasi']; ?></td>
                      <td class="numeric"><?= $r['keluhan']; ?></td>
                      <td class="numeric"><?= $r['pemeriksaan_fisik']; ?></td>
                      <td class="numeric"><?= $r['diagnosa']; ?></td>
                      <td class="numeric"><?= $r['tindakan']; ?></td>
                      <td><?= $r['status_penyakit']; ?></td>
                      <td>
                      	<button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
	                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
	                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>
                <?php endforeach; ?>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
      </section>
      <!-- /wrapper -->
    </section>
<?= $this->endSection(); ?>