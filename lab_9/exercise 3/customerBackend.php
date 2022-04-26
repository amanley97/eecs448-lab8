<?php
    $numCC = $_POST["numCC"];
    $numLotto = $_POST["numLotto"];
    $numVacay = $_POST["numVacay"];

    echo '<html><head><title>Invoice</title><link rel="stylesheet" href="myStyle.css"></head>';
    echo '<body>';
    echo '<h1>Thank you for shopping with us</h1>';
    echo "<br>";
    echo "<br>";
    echo 'Credit Cards  ' . $numCC . ' at $60 each = $' . 60*$numCC;
    echo "<br>";
    echo "<br>";
    echo 'Lotto Tickets  ' . $numLotto . ' at $35 each = $' . 35*$numLotto;
    echo "<br>";
    echo "<br>";
    echo '"Vacations"  ' . $numVacay . ' at $100 each = $' . 100*$numVacay;
    echo "<br>";
    echo "<br>";

    switch ($_POST["shipping"]) {
        case '7-Day': 
            $shipping_cost = 0;
            break;
        case '3-Day':
            $shipping_cost = 5;
            break;
        case 'Overnight':
            $shipping_cost = 50;
            break;
    };
    echo 'Shipping  ' . $_POST["shipping"] . '  $' . $shipping_cost;
    echo "<br>";
    echo "<br>";
    echo '<b>Total Cost $' . ((60*$numCC)+(35*$numLotto)+(100*$numVacay)+$shipping_cost) . '</b>';
    echo "<br>";
    echo "<br>";
    echo "</body></html>"

?>
<img src="assets/dog.jpeg">