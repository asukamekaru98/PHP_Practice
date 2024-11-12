<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>コロンで区切ったswitch</title>
</head>

<body>
    <?php
    $color = "red";
    ?>

    <?php switch ($color):
        case "green": ?>
            緑は120円<br>
            <?php break; ?>

        <?php
        case "red": ?>
            赤は150円<br>
            <?php break; ?>

        <?php
        default: ?>
            20以上は2500円<br>
            <?php break; ?>
    <?php endswitch; ?>

</body>

</html>