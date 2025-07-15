<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project site</title>
    <?php include('./client/commonfile.php') ?>
</head>

<body>
    <?php
    session_start();
    include('./client/header.php');

    $isLoggedIn = isset($_SESSION['users']) && isset($_SESSION['users']['username']);

    if (isset($_GET['signup']) && !$isLoggedIn) {
        include('./client/singup.php'); // Keep your file as "singup.php" if it's intentionally named so
    } else if (isset($_GET['login']) && !$isLoggedIn) {
        include('./client/login.php');
    } else {
        // Show homepage or dashboard if needed
        echo "<h2>Welcome to the site</h2>";
    }
    ?>
</body>

</html>