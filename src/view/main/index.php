<?php include(__DIR__ . '/../header.php'); ?>

<div class="container">
    <?php foreach ($articles as $article) { ?>
        <div class="card mb-3 mt-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://agence-de-traduction.org/wp-content/uploads/2016/05/Article.jpg" class="img-fluid rounded-start" alt="...">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article->getTitle() ?></h5>
                        <p class="card-text"><?= $article->getContent() ?></p>
                    </div>
                </div>

            </div>
        </div>
    <?php } ?>
</div>

<?php include(__DIR__ . '/../footer.php'); ?>