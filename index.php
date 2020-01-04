<?php
    require_once 'connection.php';
    function showTable() {
        $pdo=openConnection();
        $data=$pdo->query("SELECT * FROM Student")->fetchAll();
        foreach ($data as $row) {
            echo $row['first_name']."<br />";
            echo $row['last_name']."<br />";
        }
        unset($pdo);
    }
    showTable();
    
?>