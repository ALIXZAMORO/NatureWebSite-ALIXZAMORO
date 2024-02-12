<?php

include "./templates/header.tpl.php";
// Création de la variable récupérant l'article associé au nom du monstre
$post = getPostByMonsterName($_GET['monster']);

?>

<!-- Monster card-->
<main class="w-75 align-self-center m-auto d-flex flex-column">
    <h1 class="text-light"><?= $post["name"] ?></h1>
    <section class="text-bg-light bg-gradient border border-warning d-flex flex-xs-row align-items-center">
        <!--Monster picture -->
        <img src="<?= $post["picture"] ?>" class="img-fluid p-2" alt="">
        <!-- Monster informations-->
        <div class="monster__infos p-3">
            <div>
                <h5>Nom</h5>
                <p><?= $post["name"] ?></p>
            </div>
            <div>
                <h5>Date de création</h5>
                <p><?= $post["creationDate"] ?></p>
            </div>
            <div>
                <h5>Description</h5>
                <p><?= $post["description"] ?></p>
            </div>
            <div>
                <h5>Films</h5>
                <ul>
                    <?php foreach ($post["movies"] as $movie) : ?>
                        <li><?= $movie ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <a href="./index.php" class="btn btn-warning my-3">Retour</a>

    <?php

    include "./templates/footer.tpl.php";

    ?>