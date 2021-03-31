<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2><?= isset($_GET['age']) ? "Age: {$_GET['age']}" : "no age" ?></h2>
    <?php
    if (isset($_GET['age']) && intval($_GET['age']) >= 18) {
    ?>
        <img src="./img/guide1.png" alt="" width="500px">
    <?php
    } else {
    ?>

        <img src="./img/photo.png" alt="" width="500px">
    <?php
    }
    ?>
</body>

</html>