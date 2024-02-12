<?php

include(__DIR__ . '/../utils/functions.php');

$pageName = getPageNameByMonsterName();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Webpage's icon-->
    <!-- On ajoute une icone au hasard à chaque rechargement de page -->
    <link type="image/png" sizes="32x32" rel="icon" href="<?= getRandomIcon() ?>">

    <title>NatureWebSite - <?= $pageName ?></title>
</head>

<body class="min-vh-100 d-flex flex-column">
    <!-- Header -->
    <header class="container-fluid px-0">
        <!-- Navbar with title -->
        <nav class="navbar text-bg-warning">
            <div class="container-fluid px-4">
                <!-- On met une icône aléatoire à chacun des rechargements de notre page -->
                <a class="navbar-brand fw-bold d-flex flex-row align-items-center" href="./index.php"><img src="<?= getRandomIcon() ?>" class="shake-left-right" />NatureWebSite</a>
            </div>
        </nav>
    </header>