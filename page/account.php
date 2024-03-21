< ?php session_start(); include '../data/connection.php' ; if ( ! isset($_SESSION[ 'user_id' ]) ) { header("Location:../pages/auth.html"); exit(); } $user_id=$_SESSION[ 'user_id' ]; $user_sql="SELECT * FROM User WHERE id = ?" ; if ( $user_stmt=$conn -> prepare($user_sql)
    ) { $user_stmt -> bind_param("i", $user_id); $user_stmt -> execute(); $user_result = $user_stmt -> get_result(); if ($user_result -> num_rows > 0) { $user = $user_result -> fetch_assoc(); $bot_sql = "SELECT * FROM Bot WHERE user_id = ?"; if (
    $bot_stmt = $conn -> prepare($bot_sql)
    ) { $bot_stmt -> bind_param("i", $user_id); $bot_stmt -> execute(); $bot_result = $bot_stmt -> get_result(); include 'user_profile_template.php'; } else { echo "Error executing bot SQL statement: ".$conn -> error; } } else { echo "User not found."; } $user_stmt -> close(); } else { echo "Error executing user SQL statement: ".$conn -> error; } ? > <! DOCTYPE html>
        < html lang="en">
            < head>
                < meta charset="UTF-8">
                    < meta name="viewport" content="width=device-width, initial-scale=1.0">
                        < title> Spaarow (A.NSFW.I) Online </ title>
                        < script src="https://code.jquery.com/jquery-3.6.0.min.js"> </ script>
                        < script src="../js/script.js"></ script>
                        < script> $(
                            function() { $('#meta').load('../template/meta.html'); $('#terms').load('../template/terms.html'); $('#header').load('../template/header.html'); $('#footer').load('../template/footer.html'); }
                            ); </ script>
                        < link rel="stylesheet" href="../css/styles.css"> </ head>
                        < body>
                            < div id="header"> </ div>
                            < div id="meta"></ div>
                            < div class="container">
                                < h2> Welcome,
                                    < ?php echo htmlspecialchars($user[ 'username' ]); ?></ h2>
                                    < p> Email : < ?php echo htmlspecialchars($user[ 'email' ]); ?></ p>
                                        < p> Account Creation Date : < ?php echo htmlspecialchars($user[ 'created_at' ]); ?></ p>
                                            < h3> Your Bots :</ h3>
                                            < ?php if ($bot_result -> num_rows > 0) { ? > < ul>
                                                    < ?php while ( $bot=$bot_result -> fetch_assoc()
                                                        ) { ? > < li>
                                                            < ?php echo htmlspecialchars($bot[ 'name' ]); ?> - < ?php echo htmlspecialchars($bot[ 'description' ]); ?></ li>
                                                                < ?php } ?> </ ul>
                                                                < ?php } else { ?>
                                                                    < p> No bots created yet.</ p>
                                                                    < ?php } ?> </ div>
                                                                    < div id="footer"></ div>
                                                                </ body>
                                                            </ html>
                                                            < ?php $conn -> close(); ? >