<div class="content-wrapper">
  <section class="content-header">
    <h1>Detail Pasien</h1>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-body">
        <table class="table">
          <tr><th>Nama</th><td><?= $pasien->nama ?></td></tr>
          <tr><th>Tanggal Lahir</th><td><?= $pasien->tanggal_lahir ?></td></tr>
          <tr><th>Alamat</th><td><?= $pasien->alamat ?></td></tr>
          <tr><th>No Telepon</th><td><?= $pasien->no_telepon ?></td></tr>
          <tr><th>Keluhan</th><td><?= $pasien->keluhan ?></td></tr>
          <tr><th>Tanggal Kunjungan</th><td><?= $pasien->tanggal_kunjungan ?></td></tr>
          <tr><th>Dokter</th><td><?= $pasien->dokter ?></td></tr>
          <tr><th>Status</th><td><?= $pasien->status ?></td></tr>
        </table>
      </div>
    </div>
  </section>
</div>