<?php
    $page = $_GET['name'] ?? 'track-report';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Webpage Traffic Tracker' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <?= $content ?>
        </div>
    </main>
    <?php if ($page !== 'track-report') { ?>
    <script src="../website_traffic_tracker/public/js/tracker.js"></script>
    <?php } ?>
</body>
</html>

