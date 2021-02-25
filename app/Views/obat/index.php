<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
	
	<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> DATA OBAT</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-message" role="alert">
                  <?= session()->getFlashdata('pesan') ?>
                </div>
              <?php endif; ?>
                <h4><i class="fa fa-angle-right"></i> Table Data Obat</h4>
                <a href="/obat/create" class="label label-primary tambah-data">Tambah Data</a>
                <hr>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php $no = 1; ?>
                	<?php foreach($obat as $o) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $o['nama_obat'] ?></td>
                    <td><?= $o['jenis_obat'] ?></td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                      <a href="/obat/delete/<?= $o['obat_id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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