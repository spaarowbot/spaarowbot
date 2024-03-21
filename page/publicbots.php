<?php
include '../data/connection.php';

// Fetch public bots data from the database
$stmt = $conn->prepare("SELECT * FROM Bot WHERE is_public = 1");
$stmt->execute();
$result = $stmt->get_result();

// Store the fetched data in an array
$publicBots = array();
while ($row = $result->fetch_assoc()) {
    $publicBots[] = $row;
}

$stmt->close();
$conn->close();
?>

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
    <div class="bot-cards-container">
        <?php foreach ($publicBots as $bot) : ?>
            <div class="bot-card">
                <!-- Check and adjust the image path if necessary -->
                <img src="<?php echo $bot['bot_photo']; ?>" alt="Bot Thumbnail" class="bot-thumbnail">
                <div class="bot-info">
                    <h3 class="bot-name"><?php echo $bot['name']; ?></h3>
                    <p class="bot-description"><?php echo $bot['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div id="footer"></div>
</body>
</html>