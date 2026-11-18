
<?php
require "products.php";

$productCount = count($bottles);

$stock = [
    'Plastic Water Bottle' => 15,
    'Glass Water Bottle' => 8,
    'Sports Water Bottle' => 0
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Bottle Store</title>
    <link rel="stylesheet" href="style.css?v=50">
</head>
<body>

<div class="store">

    <header>
        <h1><?php echo $store; ?></h1>
        <p>Stay Hydrated, Stay Healthy!</p>
    </header>

    <div class="content">

        <h2>Products:</h2>

        <?php foreach ($bottles as $name => $price) { ?>
            <p>
                <?php echo $name; ?>:
                ₱<?php echo $price; ?>

                <?php
                if ($stock[$name] == 0) {
                    echo "- Sold Out";
                } elseif ($stock[$name] <= 10) {
                    echo "- Low Stock";
                } else {
                    echo "- Available";
                }
                ?>
            </p>
        <?php } ?>

        <h2>Special Offer</h2>
        <p>Plastic + Sports Water Bottle: ₱<?php echo $total; ?></p>
        <p>Discount (10%): ₱<?php echo $discount; ?></p>
        <p>Final Price: ₱<?php echo $finalPrice; ?></p>

        <h2>Store Information</h2>
        <p>Total Products: <?php echo $productCount; ?></p>

        <h2>Discount Reminder</h2>

        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<p>Buy water bottles and save 10%!</p>";
        }
        ?>

    </div>

    <?php include "footer.php"; ?>

</div>

</body>
</html>
