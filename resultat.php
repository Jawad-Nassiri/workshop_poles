<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire_resultat</title>

    <style>
        /* Style global */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('bg.jpg');
            background-size: cover;
        }

        /* Style du conteneur principal */
        main {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style du conteneur de retour */
        .retour {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        /* Style des titres */
        .retour h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #28a745;
        }

        /* Style des paragraphes */
        .retour p {
            font-size: 16px;
            color: #333;
        }

        /* Pour s'assurer que tout est bien centré */
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <main>
        <div class="retour">
            <h3>
                Le message a bien été envoyé !
            </h3>
            <p>nous reviendrons vers vous avec une réponse.</p>
            <br>
            <a href="../accueil.php">retour vers le menu</a>

        </div>



    </main>
</body>

</html>