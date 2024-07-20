<?php
require_once("Runnner.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>クラスを利用する</title>
</head>

<body>
    <?php
    $runner1 = new Runner("福士", 22);
    print_r($runner1);
    ?>
</body>

</html>