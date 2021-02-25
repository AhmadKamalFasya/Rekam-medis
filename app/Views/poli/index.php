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
                <a href="/poli/create" class="label label-primary tambah-data">Tambah Data</a>
                <?php if(session()->getFlashdata('pesan')) : ?>
                  <div class="alert alert-success" role="alert" style="margin-top: 15px;">
                    <?= session()->getFlashdata('pesan') ?>
                  </div>
                <?php endif; ?>
                <hr>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Poli</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php $no = 1; ?>
                	<?php foreach($poli as $p) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $p['nama_poli'] ?></td>
                    <td>
                    	<span class="label <?php if($p['status'] == 1) { echo 'label-success'; }else{ echo 'label-danger';}	?> label-mini">
                    			<?php if ($p['status'] == 1) { ?>
                    				Aktif
                    			<?php }else{ ?>
                    				Non-Aktif
                    			<?php } ?>
                    	</span>
                    </td>
                    <td>
                      <a href="/poli/<?= $p['poli_id']; ?>" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                      <a href="/poli/edit/<?= $p['poli_id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <form action="/poli/<?= $p['poli_id'] ?>" method="post" style="display: inline-block;">
                        <?php csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?'); "><i class="fa fa-trash-o"></i></button>
                      </form>
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