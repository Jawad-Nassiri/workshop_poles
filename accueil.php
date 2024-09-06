<?php

$pdo = new mysqli('localhost', 'root', '' , 'renseignements');

$datas = $pdo->query("SELECT * FROM produits");

$res = $datas->fetch_all(MYSQLI_ASSOC);

?>





<?php include __DIR__ ."/header.html.php"?>


<div class="hero">
    <h1>Welcome to Rabbit Farm</h1>
    <p>Découvrez la meilleure cuisine du monde</p>
    <a href="#product" class="btn hero-btn">Découvrez Notre Menu</a>
</div>

<div class="container">
    <?php foreach($res as $r){ ?>
    <div class="box">
        <div class="img_box">
            <img src="./img/<?=$r['pro-img-name']?>" alt="food">
        </div>
        <div class="desc_box" id="product">
            <p class="food_name"><?= $r['pro-name']?></p>
            <p class="food_desc"><?= $r['description']?></p>
            <p class="food_desc">€<?= $r['pro-price']?></p>
            <a class="btn aqua" href="#">Choisir</a>
        </div>
    </div>
    <?php } ?>
</div>


<?php include __DIR__ ."/footer.html.php"?>



