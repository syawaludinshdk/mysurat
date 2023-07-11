<?= $this->extend('v_layout') ?>

<?= $this->section('content') ?>
    <div class="pagetitle">
      <h1>List Surat Masuk Hari Ini</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Surat</a></li>
          <li class="breadcrumb-item active">Surat Masuk</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="card-title">  
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahsurat">
                Tambah Surat
                </button>
              </div>

                    <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif;?>
                    <?php if(session()->getFlashdata('danger')):?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('danger') ?>
                        </div>
                    <?php endif;?>

          
              <!-- modal tambah -->
              <form action="tambahsurat" method="post" enctype="multipart/form-data">
              <div class="modal fade" id="tambahsurat" tabindex="-1">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Surat Baru</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <b>Pastikan File Surat / Lampiran / Lampiran Pendukung Berbentuk PDF dengan Maks. 5MB</b><p>
                      </div>
                      <div class="row">
                        <div class="col-lg-2 col-sm-12 col-md-12 mb-2">
						              <label>Nomor Agenda</label>
                          <input type="text" class="form-control" placeholder="Agenda" name="agenda" id="inputagendasurat" readonly/>
					              </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-2">
						              <label>Nomor Surat</label>
                          <input type="text" class="form-control" placeholder="Nomor Surat" name="surat" id="inputnomorsurat"/>
					              </div>
                        <div class="col-lg-3 col-sm-12 col-md-12 mb-3">
						              <label>Tanggal Surat</label>
                          <input type="date" class="form-control" placeholder="Tanggal Surat" name="tanggal_surat" id="inputtanggalsurat"/>
					              </div>
                        <div class="col-lg-3 col-sm-12 col-md-12 mb-3">
						              <label>Tanggal Diterima Surat</label>
                          <input type="datetime-local" class="form-control" placeholder="Tanggal Surat Diterima" name="tanggal_terima_surat" id="inputtanggalterima"/>
					              </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-sm-12 col-md-12 mb-6">
						              <label>Perihal Surat</label>
                          <input type="text" class="form-control" placeholder="Perihal Surat" name="perihal_surat" id="inputperihal"/>
					              </div>
                        <div class="col-lg-6 col-sm-12 col-md-12 mb-6">
						              <label>Instansi Surat</label>
                          <input type="text" class="form-control" placeholder="Instansi Surat" name="instansi_surat" id="inputinstansi"/>
					              </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						              <label>Upload file Surat</label>
                          <input type="file" class="form-control" placeholder="Upload Surat" name="file" id="file"/>
					              </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						              <label>Upload file Lampiran</label>
                          <input type="file" class="form-control" placeholder="Upload Lampiran" name="lampiran1" id="lampiran1"/>
					              </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						              <label>Upload file Lampiran Pendukung</label>
                          <input type="file" class="form-control" placeholder="Upload Lampiran" name="lampiran2" id="lampiran2"/>
					              </div>
                      </div>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <h5 class="modal-title">Disposisi Surat Masuk</h5>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-sm-12 col-md-12 mb-6">
						              <label>Disposisi Walikota</label>
                          <input type="text" class="form-control" placeholder="Masukkan Disposisi Walikota" name="dispowali" id="inputdispowali"/>
					              </div>
                        <div class="col-lg-6 col-sm-12 col-md-12 mb-6">
						              <label>Disposisi Sekda</label>
                          <input type="text" class="form-control" placeholder="Masukkan Disposisi Sekda" name="disposekda" id="inputdisposekda"/>
					              </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						              <label>Disposisi Asisten 1</label>
                          <input type="text" class="form-control" placeholder="Masukkan Disposisi Asisten Pemerintahan dan Kesejahteraan Rakyat" name="dispoasis1" id="inputdispoasis1"/>
					              </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
                          <label>Disposisi Asisten 2</label>
                          <input type="text" class="form-control" placeholder="Masukkan Disposisi Asisten Perekonomian dan Pembangunan" name="dispoasis2" id="inputdispoasis2"/>
					              </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
                          <label>Disposisi Asisten 3</label>
                          <input type="text" class="form-control" placeholder="Masukkan Disposisi Asisten Administrasi Umum" name="dispoasis3" id="inputdispoasis3"/>
					              </div>
                      </div>
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Extra Large Modal-->
              </form>
            
              <div class="row">
                  <div class="col-lg-2 col-sm-12 col-md-12 mb-2">
						        <label>Nomor Agenda</label>
                    <input type="text" class="form-control search-input-text1" placeholder="Nomor Agenda" name="agenda" id="nomor_agenda"/>
					        </div>
                  <div class="col-lg-2 col-sm-12 col-md-12 mb-2">
						        <label>Nomor Surat</label>
                    <input type="text" class="form-control search-input-text2" placeholder="Nomor Surat" name="surat" id="nomor_surat"/>
					        </div>
                  <div class="col-lg-2 col-sm-12 col-md-12 mb-2">
						        <label>Tanggal Surat</label>
                    <input type="date" class="form-control search-input-text3" placeholder="Tanggal" name="tanggal" id="tanggal_surat"/>
					        </div>
                  <div class="col-lg-2 col-sm-12 col-md-12 mb-2">
						        <label>Instansi</label>
                    <input type="text" class="form-control search-input-text4" placeholder="Nama Instansi" name="instansi" id="instansi_surat"/>
					        </div>
                  <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						        <label>Perihal</label>
                    <input type="text" class="form-control search-input-text5" placeholder="Perihal Surat" name="perihal" id="perihal_surat"/>
					        </div>
                </div>
              <!-- Table with stripped rows -->
              <table class="table table-striped table-bordered" style="width:100%" id="tabelsurat">
                <thead>
                  <tr>
                    <th scope="col">Agenda</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">Tanggal Surat</th>
                    <th scope="col">Tanggal Diterima</th>
                    <th scope="col">Instansi</th>
                    <th scope="col">Perihal</th>
                    <th scope="col">Subbag</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if($surat): ?>
                  <?php foreach ($surat as $a): ?>
                    <tr>
                      <td><?php echo $a['agenda_surat']; ?></td>
                      <td><?php echo $a['nomor_surat']; ?></td>
                      <td><?php echo $a['tgl_surat']; ?></td> 
                      <td><?php echo $a['tgl_diterima_surat']; ?></td>
                      <td><?php echo $a['instansi_surat']; ?></td>
                      <td><?php echo $a['perihal_surat']; ?></td>
                      <td>
                        <?php 
                          if ($a['subbag'] = 'NULL'){
                            echo "N/A";
                          } else{
                            $a['subbag'];
                          } ?></td>
                      <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editsurat-<?= $a['agenda_surat'] ?>">Edit</button>
                        <a href="<?= base_url('surat/hapussurat/'.$a['agenda_surat']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                      </td>
                  </tr>
            
            <form action="<?= base_url('surat/editsurat/'.$a['agenda_surat']) ?>" method="post" enctype="multipart/form-data">
              <div class="modal fade" id="editsurat-<?= $a['agenda_surat'] ?>" tabindex="-1">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Surat Baru</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <b>Pastikan File Surat / Lampiran / Lampiran Pendukung Berbentuk PDF dengan Maks. 5MB</b><p>
                      </div>
                      <div class="row">
                        <div class="col-lg-2 col-sm-12 col-md-12 mb-2">
						              <label>Nomor Agenda</label>
                          <input type="text" class="form-control" placeholder="Agenda" name="agenda" id="inputagendasurat" value="<?= $a['agenda_surat'] ?>" readonly/>
					              </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-2">
						              <label>Nomor Surat</label>
                          <input type="text" class="form-control" placeholder="Nomor Surat" name="surat" id="inputnomorsurat" value="<?= $a['nomor_surat'] ?>"/>
					              </div>
                        <div class="col-lg-3 col-sm-12 col-md-12 mb-3">
						              <label>Tanggal Surat</label>
                          <input type="date" class="form-control" placeholder="Tanggal Surat" name="tanggal_surat" id="inputtanggalsurat" value="<?= $a['tgl_surat'] ?>"/>
					              </div>
                        <div class="col-lg-3 col-sm-12 col-md-12 mb-3">
						              <label>Tanggal Diterima Surat</label>
                          <input type="datetime-local" class="form-control" placeholder="Tanggal Surat Diterima" name="tanggal_terima_surat" id="inputtanggalterima" value="<?= $a['tgl_diterima_surat'] ?>"/>
					              </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-sm-12 col-md-12 mb-6">
						              <label>Perihal Surat</label>
                          <input type="text" class="form-control" placeholder="Perihal Surat" name="perihal_surat" id="inputperihal" value="<?= $a['perihal_surat'] ?>"/>
					              </div>
                        <div class="col-lg-6 col-sm-12 col-md-12 mb-6">
						              <label>Instansi Surat</label>
                          <input type="text" class="form-control" placeholder="Instansi Surat" name="instansi_surat" id="inputinstansi" value="<?= $a['instansi_surat'] ?>"/>
					              </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						              <label>Upload file Surat</label>
                          <input type="file" class="form-control" placeholder="Upload Surat" name="file" id="file"/>
					              </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						              <label>Upload file Lampiran</label>
                          <input type="file" class="form-control" placeholder="Upload Lampiran" name="lampiran1" id="lampiran1"/>
					              </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						              <label>Upload file Lampiran Pendukung</label>
                          <input type="file" class="form-control" placeholder="Upload Lampiran" name="lampiran2" id="lampiran2"/>
					              </div>
                      </div>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <h5 class="modal-title">Disposisi Surat Masuk</h5>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-sm-12 col-md-12 mb-6">
						              <label>Disposisi Walikota</label>
                          <input type="text" class="form-control" placeholder="Masukkan Disposisi Walikota" name="dispowali" id="inputdispowali"/>
					              </div>
                        <div class="col-lg-6 col-sm-12 col-md-12 mb-6">
						              <label>Disposisi Sekda</label>
                          <input type="text" class="form-control" placeholder="Masukkan Disposisi Sekda" name="disposekda" id="inputdisposekda"/>
					              </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						              <label>Disposisi Asisten 1</label>
                          <input type="text" class="form-control" placeholder="Masukkan Disposisi Asisten Pemerintahan dan Kesejahteraan Rakyat" name="dispoasis1" id="inputdispoasis1"/>
					              </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
                          <label>Disposisi Asisten 2</label>
                          <input type="text" class="form-control" placeholder="Masukkan Disposisi Asisten Perekonomian dan Pembangunan" name="dispoasis2" id="inputdispoasis2"/>
					              </div>
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
                          <label>Disposisi Asisten 3</label>
                          <input type="text" class="form-control" placeholder="Masukkan Disposisi Asisten Administrasi Umum" name="dispoasis3" id="inputdispoasis3"/>
					              </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						              <h5><label>Disposisi Kabag</label></h5>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Ke Saya</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Koordinasikan</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Pantau Progressnya</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Rapat - Koordinasikan</label>
                          </div>
					              </div>
                        <div class="col-lg-8 col-sm-12 col-md-12 mb-8">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Pelajari</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Segera! Jangan Terlambat</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Siapkan</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Infokan</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Tindaklanjuti</label>
                          </div>
					              </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 mb-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Untuk Diketahui (UDK)</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Untuk Menjadi Perhatian (UMP)</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Hadir</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Ikut Hadir</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dispokabag[]">
                            <label class="form-check-label">Laporkan Hasilnya</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-12 mb-4">
						              <label>Disposisi Diteruskan Ke :</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="subbag[]">
                            <label class="form-check-label">Dilaksanakan Kepala Bagian</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="subbag[]">
                            <label class="form-check-label">PUD</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="subbag[]">
                            <label class="form-check-label">BTHK</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="subbag[]">
                            <label class="form-check-label">Kerjasama</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Extra Large Modal-->
              </form>
                  <?php endforeach;?>
                  <?php endif;?>
                  
                </tbody>
              </table>
              </div>
            </div>
          </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>  
              
        </div>
      </div>
    </section>
  
    <?= $this->endSection() ?>
    