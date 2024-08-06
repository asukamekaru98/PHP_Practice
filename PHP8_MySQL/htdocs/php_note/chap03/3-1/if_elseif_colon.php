<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>コロンで区切ったif</title>
</head>

<body>
    <?php
    $age = 25;
    ?>
    <?php if ($age <= 15) : ?>
        15歳以下は500YEN<br>
    <?php elseif ($age <= 19) : ?>
        16際以上19歳以下は2000YEN<br>
    <?php else : ?>
        20以上は2500円<br>
    <?php endif; ?>

</body>

</html>