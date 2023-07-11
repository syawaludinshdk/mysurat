<?= $this->extend('v_layout') ?>

<?= $this->section('content') ?>
<div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">My Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2><?= session()->get('nama_user');?></h2>
              <h3><?= session()->get('bag_user');?></h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Data Pribadi</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8"><?= session()->get('nama_user');?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Bagian</div>
                    <div class="col-lg-9 col-md-8"><?= session()->get('bag_user');?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Alamat Rumah</div>
                    <div class="col-lg-9 col-md-8"><?= session()->get('alamat_user');?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nomor Telepon</div>
                    <div class="col-lg-9 col-md-8"><?= session()->get('telp_user');?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8"><?= session()->get('jk_user');?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Email</div>
                    <div class="col-lg-9 col-md-8"><?= session()->get('email_user');?></div>
                  </div>
                </div>


            </div>
          </div>

        </div>
      </div>
    </section>

<?= $this->endSection() ?>
