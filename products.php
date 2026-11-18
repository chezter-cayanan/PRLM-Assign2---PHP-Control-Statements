
<?php
// Water bottle products
$store = "Water Bottle Store";

$bottles = [
    'Plastic Water Bottle' => 20,
    'Glass Water Bottle' => 50,
    'Sports Water Bottle' => 100
];

// Variables and operators
$total = $bottles['Plastic Water Bottle'] + $bottles['Sports Water Bottle'];
$discount = $total * 0.10;
$finalPrice = $total - $discount;
?>
