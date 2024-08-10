<?php
require_once("Runner.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>クラスを利用する</title>
</head>

<body>
    <pre>
    <?php
    $runner1 = new Runner(name: "福士", age: 23);
    $runner1->who();
    ?>
    </pre>
</body>

</html>