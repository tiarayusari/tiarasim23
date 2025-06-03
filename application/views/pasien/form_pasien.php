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
                        <li class="breadcrumb-item active">Formulir Pendaftaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Formulir Pendaftaran Pasien</h3>
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
                <form action="<?php echo base_url('pasien/submit'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat lengkap" required>
                    </div>

                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="form-group">
                        <label for="keluhan">Keluhan Penyakit</label>
                        <textarea class="form-control" name="keluhan" id="keluhan" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_kunjungan">Tanggal & Jam Kunjungan</label>
                        <input type="datetime-local" class="form-control" name="tanggal_kunjungan" id="tanggal_kunjungan" required>
                    </div>

                    <div class="form-group">
                        <label for="dokter">Dokter Spesialis</label>
                        <select class="form-control" name="dokter" id="dokter" required>
                            <option value="">-- Pilih Dokter --</option>
                            <option value="Spesialis Anak">Spesialis Anak</option>
                            <option value="Spesialis Umum">Spesialis Umum</option>
                            <option value="Spesialis Saraf">Spesialis Saraf</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Daftar Sekarang</button>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                Pastikan data yang Anda isi sudah benar sebelum mengirimkan formulir.
            </div>
        </div>
    </section>
</div>