<?php

class Staff3
{
    public $name;
    public $age;

    function __construct($name, $age)
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

    $hana = new Staff3("花", 21);
    $taro = new Staff3("太郎", 35);

    $hana->hello();
    $taro->hello();
    ?>
    </pre>
</body>

</html>