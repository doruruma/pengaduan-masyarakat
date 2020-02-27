<div class="swal" data-type="<?= $this->session->flashdata('type') ?>" data-text="<?= $this->session->flashdata('text') ?>"></div>

<div class="container" style="margin-top:40px">
  <div class="row justify-content-center">
    
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="h4 text-center font-weight-bold mb-3">REGISTER MASYARAKAT</div>
      <div class="card shadow-sm border-light">
        <div class="card-body">
          <form action="" method="POST">

          <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" name="nik" id="nik" class="form-control form-control-sm" value="<?= set_value('nik') ?>">
            <small class="text-danger"><?= form_error('nik') ?></small>
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control form-control-sm" value="<?= set_value('nama') ?>">
            <small class="text-danger"><?= form_error('nama') ?></small>
          </div>

          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control form-control-sm" value="<?= set_value('username') ?>">
            <small class="text-danger"><?= form_error('username') ?></small>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control form-control-sm">
            <small class="text-danger"><?= form_error('password') ?></small>
          </div>

          <div class="form-group">
            <label for="telp">Telepon</label>
            <input type="text" name="telp" id="telp" class="form-control form-control-sm" placeholder="+62" value="<?= set_value('telp') ?>">
            <small class="text-danger"><?= form_error('telp') ?></small>
          </div>

          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Submit</button>
          </div>

          </form>
        </div>
      </div>
    </div>

  </div>
</div>