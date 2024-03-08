<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaarow (A.NSFW.I) Online</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
        $(function() {
            $('#meta').load('../template/meta.html');
            $('#freebots').load('../template/freebots.html');
            $('#terms').load('../template/terms.html');
            $('#header').load('../template/header.html');
            $('#footer').load('../template/footer.html');
        });
    </script>
    <div id="meta"></div>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div id="header"></div>
    <h1>log in or make an account!</h1>
    <br>
    <hr>
    <!-- Login Form -->
    <div class="form">
        <h2>Login</h2>
        <form id="loginForm" action="../data/auth.php" method="post">
            <input type="email" id="loginEmail" name="email" placeholder="Email" required><br>
            <input type="password" id="loginPassword" name="password" placeholder="Password" required><br>
            <button id="ajax" type="submit">Login</button>
        </form>
        <br>
        <a href="../pages/register.php" style="color: white; border: 1px green outset">Sign Up</a>
    </div>
    <div id="footer"></div>
</body>

</html>