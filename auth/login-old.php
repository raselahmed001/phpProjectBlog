<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php
        if(isset($_GET['message'])){
            echo $_GET['message'];
        }
        ?>
    </h2>
    <form action="login-check.php" method="post">
        <input type="text"name="username" id="">
        <input type="password"name="password" id="">
        <button type="submit">Login</button>
    </form>
</body>
</html>