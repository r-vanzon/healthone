<?php

global $params;
// Check if the user is an admin
if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    switch ($params[2]) {
        case 'products':
            $products = getAllProducts();
            include_once '../Templates/admin/products.php';
            break;
            
    }
}
else {
    // if not admin
    header("Location: /");
}


