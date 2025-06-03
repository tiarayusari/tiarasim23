<div class="content-wrapper">
  <section class="content-header">
    <h1>Data Pasien</h1>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Tanggal Kunjungan</th>
              <th>Dokter</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pasien as $p): ?>
              <tr>
                <td><?= $p->nama ?></td>
                <td><?= date('d-m-Y H:i', strtotime($p->tanggal_kunjungan)) ?></td>
                <td><?= $p->dokter ?></td>
                <td><a href="<?= base_url('home_pasien/detail/'.$p->id) ?>" class="btn btn-info btn-sm">Detail</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>