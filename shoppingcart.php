<?php

include 'webshop.php';

$head = 'Winkelwagentje';

function showCartHeader() {
    echo '<h2>Winkelwagentje</h2>';
}

function showCartContent() {
$total = 0;
$cartContent = getCartContent();
var_dump($cartContent);
}
      
