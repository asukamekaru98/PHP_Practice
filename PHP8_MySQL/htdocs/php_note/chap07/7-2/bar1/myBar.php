<?php

require_once("Staff.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>クラスメンバーを使う</title>
</head>

<body>
    <pre>
    <?php

    $hana = new Staffbar1("花", 21);
    $taro = new Staffbar1("太郎", 35);

    $hana->hello();
    $taro->hello();
    ?>
    </pre>
</body>

</html>