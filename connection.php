<?php
function openConnection() {
 // Try to figure out what these should be for you
 $dbhost    = "localhost";
 $dbuser    = "test";
 $dbpass    = "test";
 $db        = "Becode";
 $charset = 'utf8mb4';
 
 // Try to understand what happens here 
$pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db.';charset='.$charset, $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 // Why we do this here
 return $pdo;
}

// start of a new session/ form
session_start();
$error=[];
if (isset($_POST['form_submitted'])) {
    
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $username= $_POST['username'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $preflanguage= $_POST['language'];
    $avatar= $_POST['avatar'];
    $video= $_POST['video'];
    $quote= $_POST['quote'];
    $author_quote= $_POST['author_quote'];
    $date_time= $_POST['date_time'];


    checkForm();
    if (empty($error)) {
        $pdo=openConnection();
        $sql="INSERT INTO Student(first_name,last_name,username,gender,email,preflanguage,avatar,video,quote,author_quote,date_time) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$first_name,$last_name,$username,$gender,$email,$preflanguage,$avatar,$video,$quote,$author_quote,$date_time]);
        session_destroy();
        unset($pdo);
    }
}


function checkForm() {
    global $error;
    foreach ($_POST as $key => $value) {
        $_SESSION [$key]=$value;
        if (empty($value)) {
            array_push($error,$key);  
        }
    }
}

?>