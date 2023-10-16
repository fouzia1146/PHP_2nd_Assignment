<?php 
    include_once 'Book.php';
    include_once 'Customer.php';
    $newCustomer = new Customer(1, "fouzia", "zilani","fouzia11");
    echo $newCustomer."\n"; 
    echo '<br>';
    $shim = new Customer(23, "Shim", "Sinthia", "shim@gmail.com");
    echo $shim;
?>