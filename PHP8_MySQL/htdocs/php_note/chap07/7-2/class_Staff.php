<?php

class Staff
{
    public string $name;
    public int $age;

    public function hello()
    {
        echo "こんにちは！", "<br>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>クラスを定義する</title>
</head>

<body>
    <pre>
    <?php

    $hana = new Staff();
    $taro = new Staff();

    $hana->name = "花";
    $hana->age = 21;
    $taro->name = "太郎";
    $taro->age = 35;

    print_r($hana);
    echo "<br>";
    print_r($taro);
    echo "<br>";

    $hana->hello();
    $taro->hello();
    ?>
    </pre>
</body>

</html>