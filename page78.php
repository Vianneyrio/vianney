<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 76</title>
    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Formulaire de Souhait</h1>
        <form method="post" action="cible_formulaire.php" class="mt-4">
            <fieldset class="border p-4 rounded">
                <legend class="w-auto">Vos coordonnées</legend>
                <div class="mb-3">
                    <label for="nom" class="form-label">Quel est votre nom ?</label>
                    <input type="text" name="nom" id="nom" class="form-control" tabindex="10" />
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Quel est votre prénom ?</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" tabindex="20" />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Quel est votre e-mail ?</label>
                    <input type="email" name="email" id="email" class="form-control" tabindex="30" />
                </div>
            </fieldset>
            <fieldset class="border p-4 rounded mt-4">
                <legend class="w-auto">Votre souhait</legend>
                <div class="mb-3">
                    <label class="form-label">Faites un souhait que vous voudriez voir exaucé :</label>
                    <div class="form-check">
                        <input type="radio" name="souhait" value="riche" id="riche" class="form-check-input" tabindex="40" />
                        <label class="form-check-label" for="riche">Être riche</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="souhait" value="celebre" id="celebre" class="form-check-input" tabindex="50" />
                        <label class="form-check-label" for="celebre">Être célèbre</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="souhait" value="intelligent" id="intelligent" class="form-check-input" tabindex="60" />
                        <label class="form-check-label" for="intelligent">Être <strong>encore</strong> plus intelligent</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="souhait" value="autre" id="autre" class="form-check-input" tabindex="70" />
                        <label class="form-check-label" for="autre">Autre...</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="precisions" class="form-label">Si "Autre", veuillez préciser :</label>
                    <textarea name="precisions" id="precisions" class="form-control" cols="40" rows="4" tabindex="80"></textarea>
                </div>
            </fieldset>
            <div class="d-flex justify-content-between mt-3">
                <button type="submit" class="btn btn-primary">Soumettre</button>
                <button type="reset" class="btn btn-secondary">Réinitialiser</button>
            </div>
        </form>
    </div>

    <!-- Lien vers le JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
