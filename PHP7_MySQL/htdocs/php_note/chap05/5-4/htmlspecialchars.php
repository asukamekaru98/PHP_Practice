<?php
$msg = "東京<->京都 'Eat & Run' ツアー";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>エンティティ変換</title>
</head>

<body>
    <?php
    echo htmlspecialchars($msg, ENT_QUOTES, 'UFT-8');
    ?>

</body>

</html>