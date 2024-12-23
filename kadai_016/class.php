<!DOCTYPE html>
<html lang=ja">

<head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food
        {
            //property
            private $name;
            private $price;

            //construct
            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }

            //method priceの出力を返す
            public function show_price()
            {
                echo $this->price;
            }
        }
        class Animal
        {
            //property
            private $name;
            private $height;
            private $weight;

            //construct
            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            //method heightを返す
            public function show_height()
            {
                echo $this->height;
            }
        }

        $chocolate = new Food('チョコレート', 1000);
        $dog = new Animal('イヌ', 38, 8);

        print_r($chocolate);
        echo '<br>';
        print_r($dog);
        echo '<br>';

        echo $chocolate->show_price();
        echo $dog->show_height();
        ?>
    </p>
</body>

</html>