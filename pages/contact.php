<?php
$title = 'Contact';
$description = 'Bonjour, bienvenu sur le site de Maxime Silva, pour me contacter c\'est par ici.';

$name = '';
$firstname = '';
$civilite = '';
$monsieurchecked = '';
$madamechecked = '';
$mail = '';
$adresse = '';
$ville = '';
$motif = '';
$message = '';
$erreurname = '';
$erreurfirstname = '';
$erreurcivilite = '';
$erreurmail = '';
$erreuradresse = '';
$erreurville = '';
$erreurmotif = '';
$erreurmessage = '';
$minlength = 'minlength="5"';
$valideform = true;

//-------Contrôle---------//
if (!empty($_POST)) { // si le tableau n'est pas vide
    if (!empty($_POST['prenom'])) { // si le tableau index prenom n'est pas vide
        $name = $_POST['prenom']; // j'écris dans la variable le contenu
    } else {
        $valideform = false;
        $erreurname = 'Attention champ Prénom vide';
    }
    if (!empty($_POST['nom'])) {
        $firstname = $_POST['nom'];
    } else {
        $valideform = false;
        $erreurfirstname = 'Attention champ Nom vide';
    }
    if (!empty($_POST['civilite'])) {
        $civilite = $_POST['civilite'];
        if ($civilite == 'Monsieur') {
            $monsieurchecked = 'checked';
        } else {
            $madamechecked = 'checked';
        }
    } else {
        $valideform = false;
        $erreurcivilite = 'Attention champ Civilité vide';
    }

    if (!empty($_POST['eMail'])) {
        $mail = $_POST['eMail'];
    } else {
        $valideform = false;
        $erreurmail = 'Attention champ eMail vide';
    }
    if (!empty($_POST['adresse'])) {
        $adresse = $_POST['adresse'];
    } else {
        $valideform = false;
        $erreuradresse = 'Attention champ Adresse vide';
    }
    if (!empty($_POST['ville'])) {
        $ville = $_POST['ville'];
    } else {
        $valideform = false;
        $erreurville = 'Attention champ Ville vide';
    }
    if (!empty($_POST['motif'])) {
        $motif = $_POST['motif'];
    } else {
        $valideform = false;
        $erreurmotif = 'Attention champ Motif vide';
    }

    if (!empty($_POST['message'])) {
        $message = $_POST['message'];
    } else {
        $valideform = false;
        $erreurmessage = 'Attention champ message vide';
    }
}
if ($valideform == true){
    file_put_contents('donneeformulaire.txt');
}



$main = '<main class="bg-light" style="min-height: calc(100vh - 306px);">
    <div class="container">
        <form action="index.php?page=contact" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPrénom">Prénom :</label>
                    <input type="text" class="form-control" id="inputPrénom" placeholder="" name="prenom" value="' . $name . '">
                    ' . $erreurname . '
                </div>
                <div class="form-group col-md-6">
                    <label for="inputNom">Nom :</label>
                    <input type="text" class="form-control" id="inputNom" placeholder="" name="nom" value="' . $firstname . '">
                    ' . $erreurfirstname . '
                </div>
            </div>

            <div class="row m-1 text-center">
                <div class="col-12 col-md-3">Civilité :</div>
                <div class="form-check col-6 col-md-3">
                    <input class="form-check-input" type="radio" name="civilite" id="inlineRadio1"
                           value="Monsieur" ' . $monsieurchecked . '>
                    <label class="form-check-label m-" for="inlineRadio1" >Monsieur</label>
                </div>
                <div class="form-check col-6 col-md-3">
                    <input class="form-check-input" type="radio" name="civilite" id="inlineRadio2"
                           value="Madame" ' . $madamechecked . '>
                    <label class="form-check-label" for="inlineRadio2">Madame</label>
                    
                </div>
                ' . $erreurcivilite . '
            </div>
            <div class="form-group col-12">
                <label for="inputeMail">eMail :</label>
                <input type="email" class="form-control" id="inputeMail" name="eMail" value="' . $mail . '">
                ' . $erreurmail . '
            </div>

            <div class="form-group col-12">
                <label for="inputAdresse">Adresse :</label>
                <input type="text" class="form-control" id="inputAdresse" name="adresse" placeholder="" value="' . $adresse . '">
                ' . $erreuradresse . '
            </div>
            <div class="form-group col-12">
                <div class="form-group">
                    <label for="inputVille">Ville :</label>
                    <input type="text" class="form-control" name="ville" id="inputVille" value="' . $ville . '">
                    ' . $erreurville . '
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputMotif">Motif de contact :</label>
                    <select id="inputMotif" class="form-control" name="motif">
                        <option>'. $motif .'</option>
                        <option>Commercial</option>
                        <option>Technique</option>
                        <option>Réclamation</option>
                    </select>
                    '. $erreurmotif .'
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlTextarea1">Autre :</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="message" placeholder="Précisez">' . $message . '</textarea>
                    ' . $erreurmessage . '
                </div>
            </div>

            <button type="submit" class="btn btn-dark">Envoyez</button>

        </form>
    </div>
</main>';


