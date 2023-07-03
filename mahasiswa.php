<button type="button" class="btn btn-outline-success my-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
    <i class="fa fa-plus" aria-hidden="true"></i> Tambah
</button>
<table id="example" class="table table-striped table-bordered table-light">
    <thead class="table-dark">
        <tr>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Data</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $m) : ?>
            <tr>
                <td style="vertical-align: middle;"><?= $m['nim'] ?></td>
                <td style="vertical-align: middle;"><?= $m['nama'] ?></td>
                <td style="vertical-align: middle;">
                    <?= $m['angkatan'] . ' / ' . $m['semester'] . ' <br> IPK : ' . $m['ipk'] ?></td>
                <td style="vertical-align: middle;"><?= $m['email'] ?></td>
                <td style="vertical-align: middle;"><?= $m['telepon'] ?></td>
                <td style="vertical-align: middle;">
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $m['nim'] ?>">
                        <i class="fa fa-edit" aria-hidden="true"></i> Edit
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $m['nim'] ?>">
                        <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <input type="hidden" name="_method" value="tambah">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="angkatan" class="form-label">Angkatan</label>
                                <select class="form-select" name="angkatan" id="angkatan">
                                    <option value="">Pilih</option>
                                    <?php for ($i = (date('Y') - 10); $i <= date('Y'); $i++) : ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="number" class="form-control" id="semester" name="semester">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="ipk" class="form-label">IPK</label>
                                <input type="number" class="form-control" id="ipk" name="ipk">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="number" class="form-control" id="telepon" name="telepon">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i aria-hidden="true"></i> Tambah
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<?php foreach ($mahasiswa as $m) : ?>
    <div class="modal fade" id="editModal<?= $m['nim'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">Edit Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <input type="hidden" name="_method" value="update">
                        <input type="hidden" name="_nim" value="<?= $m['nim']; ?>">
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim" value="<?= $m['nim'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $m['nama'] ?>">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="angkatan" class="form-label">Angkatan</label>
                                    <select class="form-select" name="angkatan" id="angkatan">
                                        <option value="">Pilih</option>
                                        <?php for ($i = (date('Y') - 10); $i <= date('Y'); $i++) : ?>
                                            <option value="<?= $i; ?>" <?= $m['angkatan'] == $i ? 'selected' : ''; ?>><?= $i; ?>
                                            </option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="semester" class="form-label">Semester</label>
                                    <input type="number" class="form-control" id="semester" name="semester" value="<?= $m['semester'] ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="ipk" class="form-label">IPK</label>
                                    <input type="number" class="form-control" id="ipk" name="ipk" value="<?= $m['ipk'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $m['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="number" class="form-control" id="telepon" name="telepon" value="<?= $m['telepon'] ?>">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal -->
<?php foreach ($mahasiswa as $m) : ?>
    <div class="modal fade" id="hapusModal<?= $m['nim']; ?>" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="hapusModalLabel">Hapus Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <p><?= $m['nama']; ?></p>
                    <form method="post" action="">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_nim" value="<?= $m['nim']; ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                        Hapus</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>