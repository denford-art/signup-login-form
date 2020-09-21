<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign up form</title>
</head>
<body>

<div class="container mt-5">
    <?php
    if (isset($_COOKIE['user']) && $_COOKIE['user'] != ''):
        ?>

        <div class="container">
            <p>Hello, <?= $_COOKIE['user'] ?>. To exit click the button</p>
            <a href="exit.php" class="btn btn-warning mt-2">Sign out</a>
        </div>

    <?php else: ?>
    <div class="row">
        <div class="col">
            <h1>SIGN UP</h1>
            <form action="check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Login"><br/>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name"><br/>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"><br/>
                <button class="btn btn-success" type="submit">Sign up</button>
            </form>
        </div>
        <div class="col">
            <h1>LOG IN</h1>
            <form action="auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Login"><br/>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"><br/>
                <button class="btn btn-success" type="submit">Log in</button>
            </form>
        </div>
    </div>
</div>
<?php endif; ?>

</body>
</html>