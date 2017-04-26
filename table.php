<?php
require_once 'db.php';
$query = $db->query("SELECT * FROM users");
$tableData = $query->fetch_all();
