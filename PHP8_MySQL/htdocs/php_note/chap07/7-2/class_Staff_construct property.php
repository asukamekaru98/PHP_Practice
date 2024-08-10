<?php

class Staff4
{
    function __construct(public string $name, public int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function hello()
    {
        if (is_null($this->name)) {
            echo "こんにちは！", "<br>";
        } else {
            echo "こんにちは、{$this->name}です！", "<br>";
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

    $hana = new Staff4(name: "花", age: 21);
    $taro = new Staff4(name: "太郎", age: 35);

    $hana->hello();
    $taro->hello();
    ?>
    </pre>
</body>

</html>