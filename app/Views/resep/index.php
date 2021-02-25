<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

	<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> DATA POLI</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Table Data Poli</h4>
                <a href="/resep/create" class="label label-primary tambah-data">Tambah Data</a>
                <hr>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Dosis</th>
                    <th>Cara Pakai</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php $no = 1; ?>
                	<?php foreach($resep as $r) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $r['nama_obat']; ?></td>
                    <td><?= $r['dosis']; ?>x sehari</td>
 					<td><?= $r['cara_pakai']; ?></td>
 					<td><?= $r['keterangan']; ?></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
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