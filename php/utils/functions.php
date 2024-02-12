<?php

// Création d'une fonction pour récupérer nos article
function getPostByMonsterName($monsterName)
{
    // Récupération de la racine de notre dossier via __DIR__
    include(__DIR__ . '/data.php');

    $post = $monsters[$monsterName];
    // $post représente un article trouvé via le nom du monstre passé dans l'URL
    // $post = $monsters[$monsterName];

    return $post;
}

// BONUS - changer le nom de la page en fonction du paramètre d'URL
function getPageNameByMonsterName()
{
    // On importe le fichiers de données
    include(__DIR__ . '/data.php');

    // On crée une variable contenant le nom de page par défaut
    $name = 'le site des monstres';

    // On utilise la fonction `array_key_exists`
    if (array_key_exists('monster', $_GET)) {
        return $name = $monsters[$_GET['monster']]['name'];
    }

    // Dans tous les cas, on renvoie notre variable
    return $name;
}

function getRandomIcon()
{
    // On récupère notre tableau de données
    include(__DIR__ . '/data.php');

    // Faire une fonction qui va nous retourner
    // un élément au hasard dans notre tableau 'icons' pour
    // changer l'icone de notre site à chaque changement de page
    $index = mt_rand(0, count($icons) - 1);

    // On renvoie une icone au hasard
    return $icons[$index];
}
