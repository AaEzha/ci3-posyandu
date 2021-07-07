 
 <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Masuk</h5>
            <?= $this->session->flashdata('message'); ?>
            <form class="form-signin" action="<?= base_url('auth'); ?>" method="post">
              <div class="form-label-group">
                <!-- <label for="username">Username</label> -->
                <input type="text" id="username" name="username" class="form-control mb-2" placeholder="Username" required autofocus>
              </div>

              <div class="form-label-group">
                <!-- <label for="password">Kata Sandi</label> -->
                <input type="password" id="password" name="password" class="form-control mb-2" placeholder="Password" required>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Masuk</button>
              <a href="<?= base_url('/'); ?>">Kembali</a>
            </form>
          </div>
        </div>
      </div>
    </div>
