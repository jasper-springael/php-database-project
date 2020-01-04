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
        require_once 'index.php';
        var_dump($_POST);
        var_dump($_SESSION);
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
            <input type='text' name='first_name' id='' value= <?php if (!empty($_SESSION)) {echo $_SESSION['first_name'];} ?>>
        </label>
        <label> Last name:
            <input type='text' name='last_name' id='' value= <?php if (!empty($_SESSION)) {echo $_SESSION['last_name'];} ?>>
        </label>
        <label> Username:
            <input type='text' name='username' id='' value= <?php if (!empty($_SESSION)) {echo $_SESSION['username'];} ?>>
        </label>
        <label> Gender:
            <input type='text' name='gender' id='' value= <?php if (!empty($_SESSION)) {echo $_SESSION['gender'];} ?>>
        </label>
        <label> E-mail:
            <input type='email' name='email' id=''value= <?php if (!empty($_SESSION)) {echo $_SESSION['email'];} ?>>
        </label>
        <label> Language:
            <input type='text' name='language' id='' value= <?php if (!empty($_SESSION)) {echo $_SESSION['language'];} ?>>
        </label>
        <label> Avatar:
            <input type='file' name='avatar' id='' value= <?php if (!empty($_SESSION)) {echo $_SESSION['avatar'];} ?>>
        </label>
        <label> Video:
            <input type='url' name='video' id='' value= <?php if (!empty($_SESSION)) {echo $_SESSION['video'];} ?>>
        </label>
        <label> Quote:
            <input type='text' name='quote' id='' value= <?php if (!empty($_SESSION)) {echo $_SESSION['quote'];} ?>>
        </label>
        <label> Author of the quote:
            <input type='text' name='author_quote' id='' value= <?php if (!empty($_SESSION)) {echo $_SESSION['author_quote'];} ?>>
        </label>
        <label> Created:
            <input type='datetime-local' name='date_time' id='' value= <?php if (!empty($_SESSION)) {echo $_SESSION['date_time'];} ?>>
        </label>
        <input type="hidden" name="form_submitted" value="1" />
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>



</body>
</html>

