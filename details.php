<?php include __DIR__ ."/header.html.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="product-container">
        <div class="product-header">
            <h1>Détails du Produit</h1>
        </div>
        <div class="product-detail">
            <div class="product-image">
                <img src="./img/nourritures/<?=$_GET['pro-img-name']?>" alt="">
            </div>
            <div class="product-info">
                <h2><?=$_GET['pro-name']?></h2>
                <p>Description détaillée du produit. Ce produit est conçu pour répondre aux besoins des lapins, offrant une combinaison parfaite de confort, durabilité et amusement. Idéal pour tous types de lapins.</p>
                <p class="price">€<?=$_GET['pro-price']?></p>
                <button class="btn-buy">Ajouter au Panier</button>
            </div>
        </div>
    </div>
</body>
</html>
<?php include __DIR__ ."/footer.html.php"?>
