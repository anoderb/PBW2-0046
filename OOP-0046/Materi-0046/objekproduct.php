<?php
    require_once "product.php"; 
    require_once "productturunan.php";

    
    $product = new product("APPLE",2000);

    
    echo $product->getname();
    echo "<br>";
    echo $product->getprice();

    $product2 = new produkturunan("NANAS",3000);
    $product2->info();
?>