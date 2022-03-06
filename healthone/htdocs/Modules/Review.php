<?php
function saveReview($name,$description,$rating,$p_id) {
    //echo $name;echo $review; echo $stars;echo $p_id; die;
    global $pdo;
    $query=$pdo->prepare("INSERT INTO review (name, rating,description,product_id) VALUES (:n,:r,:d,:p)");
    $query->bindParam("n",$name);
    $query->bindParam("r",$rating);
    $query->bindParam("d",$description);
    $query->bindParam("p",$p_id);
    $query->execute();
}
function getReview($product_id){
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM review WHERE product_id = '$product_id'");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS);
}