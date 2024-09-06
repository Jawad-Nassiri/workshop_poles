<?php
session_start();

$bdd_connection = new mysqli('localhost', 'root', '', 'renseignements');

if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_FILES['file']) && !empty($_POST['pro-img-name']) && !empty($_POST['pro-name']) && !empty($_POST['desc']) && !empty($_POST['pro-price'])) {

        $file = $_FILES['file'];
        $pro_img_name = htmlspecialchars($_POST['pro-img-name']);
        $pro_name = htmlspecialchars($_POST['pro-name']);
        $description = htmlspecialchars($_POST['desc']);
        $pro_price = htmlspecialchars($_POST['pro-price']);



        if (move_uploaded_file($_FILES['file']['tmp_name'], 'img/' . $pro_img_name)) {
            $query = "INSERT INTO produits (`pro-img-name`, `pro-name`, `description`, `pro-price`) VALUES ('$pro_img_name', '$pro_name', ' $description', $pro_price)";
            $request = $bdd_connection->query($query);
            if ($request) {
                header('Location: admin-form.php');
            } else {
                echo 'Erreur lors de l\'insertion';
            }
        } else {
            echo 'Erreur lors de la tentative de téléchargement';
        }
    }
}









// Page Form contact 
////////////////////////////////// 




session_start();

$msql = new mysqli('localhost', 'root', '', 'renseignements');

if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['envoi'])) {



    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $client = htmlspecialchars($_POST['client']);
    $info = htmlspecialchars($_POST['info']);
    $details = htmlspecialchars($_POST['details']);

    $errors = [];

    if (strlen($nom) > 20 || strlen($nom) < 2) {
        $errors[] = "Le nom est trop long.";
    }
    if (strlen($prenom) > 20 || strlen($prenom) < 2) {
        $errors[] = "Le prénom est trop long.";
    }
    if (($client) != "oui" && ($client) != "non") {
        $errors[] = "Le choix est dehors des demandes,le choix doit être 'oui' ou 'non'.";
    }
    if (($info) !=  "nourriture" && ($info) != "jouets" &&  ($info) != "accessoires") {
        $errors[] = "Vous etes sorti des choix";
    }
    if (strlen($details) > 255) {
        $errors[] = "La description est trop longue.";
    }

    if (!empty($errors)) {
        $_SESSION['error'] = $errors;
        header("location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $request = $msql->prepare("INSERT INTO retours(nom,prenom,mail,client,info,details) VALUES (?,?,?,?,?,?)");
        $request->bind_param('ssssss', $nom, $prenom, $mail, $client, $info,$details);

        if ($request->execute()) {
            header("Location: resultat.php");
            exit();
        } else {
            echo "erreur" . $msql->error;
        }
    }

    exit();
}







