<!-- Container -->
<div class="container">
<br>

<!-- Card 1 -->
<div class="card mx-auto">
    <div class="card-body">

        <!-- Text -->
        <h3 class="display-5 text-center"> Visi & Misi</h3>
        <p></p>

       <!-- Card 3 -->
       <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Sub Card 1 -->
        <?php foreach($visi as $v): ?>
        <div class="col">
            <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $v->Judul_Artikel; ?></h5><hr>
                <p class="card-text" style="text-align:justify"> <?= $v->Isi_Artikel; ?></p>
                <a class="text float-right" href="<?= base_url('Anak');?>">Arahkan web</a>
                <a class="btn btn-sm float-end" style="background-color:#FCCA46" href="<?= base_url('Visi/edit/'.$v->Kode_Artikel);?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php foreach($misi as $m): ?>
        <div class="col">
            <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $m->Judul_Artikel; ?></h5><hr>
                <p class="card-text" style="text-align:justify"> <?= $m->Isi_Artikel; ?></p>
                <a class="text float-left" href="<?= base_url('Anak');?>">Arahkan web</a>
                <a class="btn btn-sm float-end" style="background-color:#FCCA46" href="<?= base_url('Visi/edit/'.$m->Kode_Artikel);?>" role="button" onclick="return confirm('Apakah yakin data ingin dirubah?');"onclick="return confirm('Apakah yakin data ingin dirubah?');">Ubah</a>
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

