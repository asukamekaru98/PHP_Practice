<?php

class Staff2
{
    public string $name;
    public int $age;

    public function hello()
    {
        if (is_null($this->name)) {
            echo "こんにちは！", "<br>";
        } else {
            echo "こんにちは！{$this->name}さん", "<br>";
        }
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

    $hana = new Staff2();
    $taro = new Staff2();
    $ryo = new Staff2();

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
    $ryo->hello();
    ?>
    </pre>
</body>

</html>