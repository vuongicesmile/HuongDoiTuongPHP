<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testing PHP OOP code</h1>
    <?php
    
    class Product {
        public $description;
        public $price;
        public $inventory;
        public $onsale;

        public function buyProduct($amount) {
            $this->inventory -= $amount;
        }
    }
    $prod1 = new Product();
    $prod1->description = "Carrots";
    $prod1->price = 1.50;
    $prod1->inventory = 10;
    $prod1->onsale= false;
    echo "just add $prod1->description";

    ?>
</body>
</html>