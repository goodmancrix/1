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
    echo __dir__;
    echo '<br>';
    echo __file__;
    echo '<br>';
    echo __line__;
    echo '<br>';

    define ('my_const', 3.14159);

    echo my_const;

    ?>
</body>

</html>