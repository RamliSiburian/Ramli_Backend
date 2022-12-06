<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h3 class="fw-bold">List Artikel</h3>
            <hr>

            <a href="<?= BASEURL . '/article/addarticle' ?>" class="btn btn-primary mb-3">Tambah Artikel</a>
            <table class="table table-primary table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Post At</th>
                        <th scope="col">Author</th>
                        <th scope="col" colspan="2">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data['article'] as $article) : ?>
                        <tr>
                            <td scope="col"><?= $no++; ?></td>
                            <td scope="col"><?= $article['image']; ?></td>
                            <td scope="col"><?= $article['title']; ?></td>
                            <td scope="col"><?= $article['description']; ?></td>
                            <td scope="col"><?= $article['post_at']; ?></td>
                            <td scope="col"><?= $article['author']; ?></td>
                            <td scope="col">
                                <a href="#" class="btn btn-outline-warning w-100">Edit</a>
                            </td>
                            <td scope="col">
                                <a href="#" class="btn btn-outline-danger w-100">Edit</a>
                            </td>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>