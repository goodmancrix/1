<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo __DIR__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo __LINE__;
    echo '<br>';

    define('my_const', 3.14159);

    echo my_const;
    echo '<br>';

    ?>
</body>

</html>