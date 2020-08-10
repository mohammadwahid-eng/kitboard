<?php
    include 'database.php';
    $db = new Database();
    $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

    function get_total_request_by($person) {
        $db = new Database();
        $starting_date  = date("Y-m-d", strtotime("last week monday"));
        $ending_date    = date("Y-m-d", strtotime("last week friday"));
        $data = $db->select("SELECT SUM(request) AS total FROM kit_requests where name = '".$person."' and date BETWEEN '".$starting_date."' AND '".$ending_date."'");
        return empty($data) ? 0 : intval($data[0]['total']);
    }

    function get_request_qty($person, $date) {
        $db = new Database();
        $data = $db->select("SELECT * FROM kit_requests WHERE name = '".$person."' AND date = '".$date."'");
        return empty($data) ? 0 : intval($data[0]['request']);
    }

    function get_delivered_qty($person) {
        $db = new Database();
        $data = $db->select("SELECT * FROM kit_delivered WHERE name = '".$person."'");
        return empty($data) ? 0 : intval($data[0]['quantity']);
    }

    function get_total_request($date) {
        $db = new Database();
        $data = $db->select("SELECT SUM(request) AS total FROM kit_requests WHERE date = '".$date."'");
        return empty($data) ? 0 : intval($data[0]['total']);
    }

    function get_total_delivered() {
        $db = new Database();
        $data = $db->select("SELECT SUM(quantity) AS total FROM kit_delivered");
        return empty($data) ? 0 : intval($data[0]['total']);
    }
?>
