<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

	<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> DATA PEGAWAI</h3>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Table Data Pegawai</h4>
                <hr>
                <thead>
                  <tr>
                  	<th>No</th>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Tmpt Lahir</th>
                    <th>Tgl Lahir</th>
                    <th>Status</th>
                    <th>Spesialis</th>
                    <th>JK</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php $no = 1; ?>
                	<?php foreach($pegawai as $p) : ?>
                  <tr>
                  	<td><?= $no++; ?></td>
                    <td><?= $p['nip']; ?></td>
                    <td class="hidden-phone"><?= $p['nama_pegawai']; ?></td>
                    <td><?= $p['jabatan']; ?></td>
                    <td><?= $p['tempat_lahir']; ?></td>
                    <td><?= $p['tanggal_lahir']; ?></td>
                    <td><?= $p['status']; ?></td>
                    <td><?= $p['spesialis']; ?></td>
                    <td><?= $p['jenis_kelamin']; ?></td>
                    <td><?= $p['agama']; ?></td>
                    <td><?= $p['alamat']; ?></td>
                    <td><?= $p['no_hp']; ?></td>
                    <td>
                      <a href="/pegawai/<?= $p['pegawai_id']; ?>" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
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