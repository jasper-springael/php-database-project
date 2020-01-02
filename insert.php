<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'connection.php';
        include 'index.php';
        var_dump($_POST);
        if (isset($_POST['form_submitted']) && !empty($error)) {
            echo 'Please fill in all the fields!</br>';
            foreach($error as $value) {
                echo $value.'</br>';
            }
        }
    ?>
    <h1> Contact form: </h1>
    <fieldset>
    <form action="insert.php" method="post">
        <label> First name:
            <input type='text' name='first_name' id=''>
        </label>
        <label> Last name:
            <input type='text' name='last_name' id=''>
        </label>
        <label> Username:
            <input type='text' name='username' id=''>
        </label>
        <label> Gender:
            <input type='text' name='gender' id=''>
        </label>
        <label> E-mail:
            <input type='email' name='email' id=''>
        </label>
        <label> Language:
            <input type='text' name='language' id=''>
        </label>
        <label> Avatar:
            <input type='file' name='avatar' id=''>
        </label>
        <label> Video:
            <input type='url' name='video' id=''>
        </label>
        <label> Quote:
            <input type='text' name='quote' id=''>
        </label>
        <label> Author of the quote:
            <input type='text' name='author_quote' id=''>
        </label>
        <label> Created:
            <input type='datetime-local' name='date_time' id=''>
        </label>
        <input type="hidden" name="form_submitted" value="1" />
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>



</body>
</html>

