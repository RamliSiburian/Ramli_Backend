<div class="container">
    <div class="form d-flex justify-content-center mt-5">
        <form action="<?= BASEURL; ?>/article/addArticle" method="post" enctype="multipart/form-data" class="w-50 shadow p-3 rounded">
            <div class="top d-flex gap-3">
                <a class="fs-2 text-danger" href="<?= BASEURL ?>/article" style="text-decoration: none;"> Kembali</a>
                <p class="fs-2 fw-bold">Form Tambah Artikel</p>
            </div>
            <hr>
            <div class="form-group mb-3">
                <label for="image" class="form-label fw-bold"> Gambar </label>
                <input type="file" name="image" id="image" class="form-control" placeholder="gambar">
            </div>
            <div class="form-group mb-3">
                <label for="title" class="form-label fw-bold"> Judul </label>
                <input type="text" name="title" id="title" class="form-control" placeholder="judul">
            </div>
            <div class="form-group mb-3">
                <label for="description" class="form-label fw-bold"> Deskripsi </label>
                <input type="text" name="description" id="description" class="form-control" placeholder="deskripsi">
            </div>
            <div class="form-group mb-3">
                <label for="post_at" class="form-label fw-bold"> Tanggal upload </label>
                <input type="date" name="post_at" id="post_at" class="form-control" placeholder="username">
            </div>

            <button type="submit" name="submit" class="btn btn-success"> Simpan</button>
        </form>
    </div>
</div>