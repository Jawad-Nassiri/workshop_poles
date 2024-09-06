<?php include __DIR__ ."/header.html.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="traitement.php" method="POST" enctype="multipart/form-data">
            <label for="file">Choose a file:</label>
            <input type="file" id="file" name="file">

            <label for="pro-img-name">Image Name:</label>
            <input type="text" id="pro-img-name" name="pro-img-name">

            <label for="pro-name">Product Name:</label>
            <input type="text" id="pro-name" name="pro-name">

            <label for="desc">Description</label>
            <textarea name="desc" id="desc"></textarea>

            <label for="pro-price">Product Price:</label>
            <input type="text" id="pro-price" name="pro-price">

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>




<?php include __DIR__ ."/footer.html.php"?>
