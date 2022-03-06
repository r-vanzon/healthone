<?php
function getTime()
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM opening_times");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, 'Time');
}
