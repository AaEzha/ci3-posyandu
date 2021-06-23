<!-- Container -->
<div class="container">
<br>

<!-- Card 1 -->
<div class="card mx-auto">
    <div class="card-body">
    <h1 class="display-5 text-center"> Selamat Datang, Syahdillah T.A! </h1><p></p>

        <!-- Card 2 -->
        <?php foreach($Home as $H): ?>
            <div class="card mx-auto" style="width: 40rem;">
                <div class="card-body">
            <h5 class="text-center"> <?= $H->Judul_Artikel?> </h5>
                <hr class="mx-auto" width="30%" >
                <h6 class="text-left lh-base" style="text-align:justify"> <?= $H->Isi_Artikel; ?></h6>
                <!-- Button -->
                <a class="btn btn-sm float-end" style="background-color:#FCCA46" href="<?= base_url('Home/edit/'.$H->Kode_Artikel);?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
                <!-- Penutup Card 2 -->
                </div>
            </div>
            <?php endforeach; ?>
        <!-- Enter -->
        <br>
        <hr>
        <p></p>

        <!-- Text -->
        <h3 class="display-5 text-center"> Pilih Kegiatan Posyandu! </h3>
        <br>

        <!-- Card 3 -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Sub Card 1 -->
        <?php foreach($home as $h): ?>
        <div class="col">
            <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $h->Judul_Artikel; ?></h5><hr>
                <p class="card-text" style="text-align:justify"> <?= $h->Isi_Artikel; ?></p>
                <a class="text float-right" href="<?= base_url('Anak');?>">Arahkan web</a>
                <a class="btn btn-sm float-end" style="background-color:#FCCA46" href="<?= base_url('Home/edit/'.$h->Kode_Artikel);?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php foreach($HOME as $HOME): ?>
        <div class="col">
            <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $HOME->Judul_Artikel; ?></h5><hr>
                <p class="card-text" style="text-align:justify"> <?= $HOME->Isi_Artikel; ?></p>
                <a class="text float-left" href="<?= base_url('Hamil');?>">Arahkan web</a>
                <a class="btn btn-sm float-end" style="background-color:#FCCA46" href="<?= base_url('Home/edit/'.$HOME->Kode_Artikel);?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php foreach($HoMe as $home): ?>
        <div class="col">
            <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $home->Judul_Artikel; ?></h5><hr>
                <p class="card-text" style="text-align:justify"> <?= $home->Isi_Artikel; ?></p>
                <a class="text float-left" href="<?= base_url('Akseptor');?>">Arahkan web</a><a class="btn btn-sm float-end " style="background-color:#FCCA46" href="<?= base_url('Home/edit/'.$home->Kode_Artikel);?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- Penutup Card 3 -->
        </div>
        <p></p>
    <!-- Penutup Card 1 -->
    </div>
</div>

<!-- Penutup Container -->
</div>
  <br>
  <br>

