<?php

include "./templates/header.tpl.php";
include(__DIR__ . "/utils/data.php");

?>

<!-- Grid with characters cards -->
<main class="container text-center my-3">
    <section class="row row-cols-1 row-col-sm-2 row-cols-md-3 row-cols-lg-4 m-auto">

        <!-- Using foreach loop to import monsters data -->
        <?php foreach ($monsters as $monster) : ?>

            <article class="col my-4 d-flex justify-content-center">
                <div class="card border-warning" style="width: 18rem;">
                    <img src="<?= $monster["picture"] ?>" class="card-img-top" alt="<?= $monster['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $monster["name"] ?></h5>
                        <p class="card-text"><?= substr($monster["description"], 0, 150) . "..." ?></p>
                        <a href="<?= $monster['articleLink'] ?>" class="btn btn-warning">Voir la fiche</a>
                    </div>
                </div>
            </article>

        <?php endforeach; ?>

        <?php

        include "./templates/footer.tpl.php";

        ?>