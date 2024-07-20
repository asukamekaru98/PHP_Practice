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

    Staff4::deposit(100);
    Staff4::deposit(150);

    echo Staff4::$piggyBank, "円になりました<br>";

    $hana = new Staff4("花", 21);
    $hana->latePanalty();
    echo Staff4::$piggyBank, "円になりました<br>";

    ?>
    </pre>
</body>

</html>