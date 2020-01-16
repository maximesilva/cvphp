<?php
$title = 'Contact';
$description = 'Bonjour, bienvenu sur le site de Maxime Silva, pour me contacter c\'est par ici.';
$main = '<main class="bg-light" style="min-height: calc(100vh - 306px);">
    <div class="container">
        <form action="https://httpbin.org/post" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPrénom">Prénom :</label>
                    <input type="text" class="form-control" id="inputPrénom" placeholder="" name="prenon" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputNom">Nom :</label>
                    <input type="text" class="form-control" id="inputNom" placeholder="" name="nom" required>
                </div>
            </div>

            <div class="row m-1">
                <div class="col-12 col-md-3">Civilité :</div>
                <div class="form-check col-6 col-md-3">
                    <input class="form-check-input" type="radio" name="civilite" id="inlineRadio1"
                           value="Monsieur">
                    <label class="form-check-label m-" for="inlineRadio1">Monsieur</label>
                </div>
                <div class="form-check col-6 col-md-3">
                    <input class="form-check-input" type="radio" name="civilite" id="inlineRadio2"
                           value="Madame">
                    <label class="form-check-label" for="inlineRadio2">Madame</label>
                </div>
                </div>
            </div>
            <div class="form-group col-6">
                <label for="inputeMail">eMail :</label>
                <input type="email" class="form-control" id="inputeMail" name="eMail" required>
            </div>

            <div class="form-group col-6">
                <label for="inputAdresse">Adresse :</label>
                <input type="text" class="form-control" id="inputAdresse" name="adresse" placeholder="">
            </div>
            <div class="form-group col-6">
                <div class="form-group">
                    <label for="inputVille">Ville :</label>
                    <input type="text" class="form-control" name="ville" id="inputVille">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputMotif">Motif de contact :</label>
                    <select id="inputMotif" class="form-control" name="motif">
                        <option selected>Sélectionnez...</option>
                        <option>Commercial</option>
                        <option>Technique</option>
                        <option>Réclamation</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleFormControlTextarea1">Autre :</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Précisez"
                              name="autre"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-dark">Envoyez</button>

        </form>
    </div>
</main>';


