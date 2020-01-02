<?php
    require_once 'connection.php';
    $error=[];
    
    if (isset($_POST['form_submitted'])) {
        checkForm();
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

        $pdo=openConnection();
        $sql="INSERT INTO Student(first_name,last_name,username,gender,email,preflanguage,avatar,video,quote,author_quote,date_time) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$first_name,$last_name,$username,$gender,$email,$preflanguage,$avatar,$video,$quote,$author_quote,$date_time]);
    }


    function checkForm() {
        global $error;
        foreach ($_POST as $key => $value) {
            if (empty($value)) {
                array_push($error,$key);
            }
        }
    }
?>