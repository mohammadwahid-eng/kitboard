<?php
if($_POST) {
    include 'database.php';
    $db = new Database();
    $db->insert("INSERT INTO kit_requests(name, request, date) VALUES(:name, :request, :date) ON DUPLICATE KEY UPDATE request = :request", ['name' => $_POST['name'], 'request' => $_POST['request'], 'date' => $_POST['date']]);
    echo "Data has updated successfully.";
} else {
    echo "Failed to update data.";
}