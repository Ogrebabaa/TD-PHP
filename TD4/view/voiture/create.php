<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Voiture</title>
</head>
<body>
    <form method="get" action="routeur.php">
        <fieldset>
            <legend>Mon Formulaire: </legend>
            <p>
                <label for="immat_id">Immatriculation</label>:
                <input type="text" name="immat" id="immat_id" required>
            </p>
            <p>
                <label for="marque_id">Marque</label>:
                <input type="text" name="marque" id="marque_id" required>
            </p>
            <p>
                <label for="couleur_id">Couleur</label>:
                <input type="text" name="couleur" id="couleur_id" required>
            </p>
            <input type="hidden" id="action" name="action" value="created">
            <p>
                <input type="submit" value="Envoyer">
            </p>
        </fieldset>
    </form>
</body>
</html>

