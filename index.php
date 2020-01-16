<?php

/* ------- routeur -------- */
if (isset($_GET['page'])) {
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
}

/* ------- include page -------- */

include 'pages/' . $nomfichier . '.php';

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

/* --- Traitement HTML ---- */
include 'layout.php';
