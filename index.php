<?php
    if (isset($_POST['form_submitted'])) {
        

    }
    function checkForm($field) {
        $nameError='';
        if (!isset($_POST[$field])) {
            $nameError= 'Please fill in all the fields!';
            echo $nameError;
        }
    }
?>