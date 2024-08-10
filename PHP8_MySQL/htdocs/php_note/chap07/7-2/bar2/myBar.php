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

    Staffbar2::deposit(100);
    Staffbar2::deposit(150);

    echo Staffbar2::$piggyBank, "円になりました", "<br>";

    $hana = new Staffbar2(name: "花", age: 21);
    $hana->latePenalty();

    echo Staffbar2::$piggyBank, "円になりました", "<br>";

    ?>
    </pre>
</body>

</html>