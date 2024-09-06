<?php

$mysql = new mysqli('localhost', 'root', '', 'renseignements');

$pro_datas = $mysql -> query('SELECT * FROM nourritures');

$res = $pro_datas -> fetch_all(MYSQLI_ASSOC);
?>



<?php include __DIR__ ."/header.html.php"?>


<div class="hero-section">
    <div class="hero-content">
        <h1>La Meilleure Nourriture pour Votre Lapin</h1>
        <p>Découvrez notre sélection de délices spécialement conçus pour maintenir votre lapin en pleine forme.</p>
        <a href="#products" class="btn-hero">Voir Nos Produits</a>
    </div>
</div>

<div id="products" class="title">
    <h1>Découvrez Nos Délices à Base de Lapin</h1>
</div>

<div class="pro-container">

<?php foreach($res as $key){ ?>
    <div class="nourriture-box">
        <div class="pro-img">
            <a href="details.php?pro-img-name=<?=$key['pro-img-name']?>&pro-name=<?=$key['pro-name']?>&pro-price=<?=$key['pro-price']?>"><img src="./img/nourritures/<?= $key['pro-img-name']; ?>" alt="nourriture-de-lapin"></a>
        </div>
        <div class="pro-desc">
            <p class="pro-name"><?= $key['pro-name']; ?></p>
            <p class="pro-price"><?= $key['pro-price']; ?></p>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
        </div>
    </div>

    <?php } ?>


</div>



<?php include __DIR__ ."/footer.html.php"?>








