<?php
function checkLogin($email, $password){
    global $pdo;
    $sth = $pdo->prepare("SELECT email, role  FROM  users WHERE email = ? AND password = ?");
    $sth->bindParam(1, $email);
    $sth->bindParam(2, $password);
    $sth->setFetchMode(PDO::FETCH_CLASS, Login::class);
    $sth->execute();
    $user = $sth->fetch();
    return $user;
}