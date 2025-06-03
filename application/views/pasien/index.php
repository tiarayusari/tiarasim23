<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pasien</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Pasien</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <a href="<?= base_url('index.php/pasien/tambah'); ?>" class="btn btn-primary mb-3">Tambah Pasien</a>
                <?php if (!empty($pasien)): ?>
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No. Telepon</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Dokter</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pasien as $p): ?>
                                <tr>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['jenis_kelamin']; ?></td>
                                    <td><?= $p['alamat']; ?></td>
                                    <td><?= $p['no_telepon']; ?></td>
                                    <td><?= $p['tanggal_kunjungan']; ?></td>
                                    <td><?= $p['dokter']; ?></td>
                                    <td><?= $p['status']; ?></td>
                                    <td>
                                        <a href="<?= base_url('index.php/pasien/edit/' . $p['id']); ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="<?= base_url('index.php/pasien/hapus/' . $p['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus pasien ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>Tidak ada data pasien.</p>
                <?php endif; ?>
            </div>

            <div class="card-footer">
                <!-- opsional: pagination atau keterangan tambahan -->
            </div>
        </div>
    </section>
</div>