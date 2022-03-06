<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId):array
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products WHERE category_id = ?");
    $query->bindParam(1, $categoryId);
    $query ->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, 'Product');
}

function getProduct(int $productId)
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $sth->bindParam(1, $productId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, "Product")[0];
}
function getAllProducts():array
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM products ORDER BY category_id');
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Product');
}


// func add
    // $pdo
    // $query = $pdo ==> prepare(INSERT INTO tablename (vars, ) VALUES(vars, ))
    // $query ==> bind(argsnumber, $var)
    // $query ==> execute()
// func end


function