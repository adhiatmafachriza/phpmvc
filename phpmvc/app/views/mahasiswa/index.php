<div class="container mt-4">
    <div class="text-white row">
        <div class="col-md-8">
            <h2>Daftar Mahasiswa</h2>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
            <button type="button" data-bs-toggle="modal" data-bs-target="#formModal" class="btn btn-primary py-2 px-3">Tambah data mahasiswa</button>
        </div>
    </div>

    <div class="mt-4">
        <!-- table -->
        <table class="table table-dark table-striped">
            <!-- table header -->
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <!-- end table header -->
            <!-- table body -->
            <tbody>
                <?php foreach($data['mhs'] as $mahasiswa): ?>
                    <tr>
                        <th scope="row"><?= $mahasiswa['id']; ?></th>
                        <td><?= $mahasiswa['nama']; ?></td>
                        <td><?= $mahasiswa['nim']; ?></td>
                        <td>
                            <a href="<?= BASEURL ?>/mahasiswa/delete/<?= $mahasiswa['id']; ?>" class="badge bg-danger" style="text-decoration:none">hapus</a>
                            <a href="<?= BASEURL ?>/mahasiswa/edit/<?= $mahasiswa['id']; ?>" class="badge bg-warning" style="text-decoration:none">ubah</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <!-- end table body -->
        </table>
        <!-- end table -->
    </div>

    <!-- modal -->
    <div class="modal fade" tabindex="-1" id="formModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah data mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- form -->
                <form action="<?= BASEURL; ?>/mahasiswa/create" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
</div>