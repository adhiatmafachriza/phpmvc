<div class="container mt-5">
    <div class="text-white col-md-6">
        <form action="<?= BASEURL; ?>/mahasiswa/update" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['mahasiswa']['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?= $data['mahasiswa']['nim']; ?>">
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['mahasiswa']['id']; ?>">
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
</div>