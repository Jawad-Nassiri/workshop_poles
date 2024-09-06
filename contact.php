
<?php include __DIR__ ."/header.html.php"?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main>
        <div id="formulaire">
            <form action="traitement.php" method="post">
                <li>
                    <label for="name">Nom</label>
                    <input type="text" id="nom" name="nom">
                </li>
                <li>
                    <label for="surname">Prenom</label>
                    <input type="text" id="prenom" name="prenom">
                </li>
                <li>
                    <label for="mail">Mail</label>
                    <input type="email" id="mail" name="mail">
                </li>
                <li>

                    <label for="client">Faites vous parti de notre clientèle ?</label>
                    <input type="radio" id="clientOui" name="client" value="oui" />
                    <label for="clientOui">oui</label>
                    <input type="radio" id="clientNon" name="client" value="non" />
                    <label for="clientNon">non</label>

                </li>
                <li>
                    <label for="info">renseignement sur:</label>
                    <select name="info" id="info">
                        <option value="nourriture">Nourriture </option>
                        <option value="jouets"> Jouets </option>
                        <option value="accessoires">Accessoires </option>
                    </select>
                </li>
                <li>
                    <label for="details">explication detaillé:</label>
                    <textarea id="story" name="details" rows="5" cols="33">
                </textarea>
                </li>


                <?php if (isset($_SESSION['error'])): ?>
                    <div class="error-message">
                        <?php
                        foreach ($_SESSION['error'] as $error) {
                            echo "<p>$error</p>";
                        }

                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php endif; ?>

                <button type="submit" name="envoi">Envoyer le message</button>




            </form>
        </div>

    </main>


</body>

</html>

<?php include __DIR__ ."/footer.html.php"?>
