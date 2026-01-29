<?php
require_once 'db.php';

function getAllCars() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM cars ORDER BY price_per_day ASC");
    return $stmt->fetchAll();
}

function formatPrice($price) {
    return number_format($price, 2, ',', ' ') . ' ₽';
}
?>