<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h3 class="fw-bold text-center">Article Today</h3>
            <hr>
            <div class="articles d-flex gap-4">
                <?php foreach ($data['article'] as $article) : ?>
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title"><?= $article['title']; ?></h5>
                                <h6 class="card-title"><?= $article['post_at']; ?></h6>
                                <p class="card-text"><?= $article['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>