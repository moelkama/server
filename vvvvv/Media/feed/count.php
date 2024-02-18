<?php
session_start(); // start session to store the counter value

if(isset($_GET['increment'])) { // check if the increment button is clicked
    //if(isset($_SESSION['counter'])) { // check if the counter variable is set in the session
        $_SESSION['counter']++; // increment the counter
    //}
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Increment Counter Example</title>
</head>
<body>
    <h1>Counter: <?php echo isset($_SESSION['counter']) ? $_SESSION['counter'] : 0; ?></h1>
    <form method="GET">
        <button type="submit" name="increment">Increment Counter</button>
    </form>
</body>
</html>