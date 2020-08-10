<?php
if($_POST) {
    include 'database.php';
    $db = new Database();
    $db->insert("INSERT INTO kit_delivered(name, quantity, date) VALUES(:name, :quantity, :date) ON DUPLICATE KEY UPDATE quantity = :quantity", ['name' => $_POST['name'], 'quantity' => $_POST['quantity'], 'date' => $_POST['date']]);
    echo "Data has updated successfully.";
} else {
    echo "Failed to update data.";
}