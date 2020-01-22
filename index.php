<?php

/* ------- routeur -------- */
$route = [
    '' => 'cv',
    'hobby' => 'hobby',
    'video' => 'pitchvideo',
    'contact' => 'contact'
];
$valeurpage = '';


if (isset($_GET['page'])) {
    $page = $_GET['page'];

    if (isset($route[$page])) {
        $valeurpage = $route[$page];
    } else {
        $valeurpage = '404';
    }
} else {
    $valeurpage = 'cv';
}


/*if (isset($_GET['page'])) {
    $page = $_GET['page'];

    if ($page == '') {
        $nomfichier = 'cv';
    } elseif ($page == 'hobby') {
        $nomfichier = 'hobby';
    } elseif ($page == 'video') {
        $nomfichier = 'pitchvideo';
    } elseif ($page == 'contact') {
        $nomfichier = 'contact';
    } else {
        $nomfichier = '404';
    }
} else {
    $nomfichier = 'cv';
}*/

/* ------- include page -------- */

include 'pages/' . $valeurpage . '.php';

$tableau = [
    [
        'titre' => 'Accueil',
        'url' => '',
    ],
    [
        'titre' => 'Hobby',
        'url' => 'hobby',
    ],
    [
        'titre' => 'Video',
        'url' => 'video',
    ],
    [
        'titre' => 'Contact',
        'url' => 'contact',
    ],
];
/*if (isset($_POST['nom'])){
    echo 'FAUX';
}*/

/* --- Traitement HTML ---- */
include 'layout.php';
