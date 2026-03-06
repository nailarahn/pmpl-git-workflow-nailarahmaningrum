<?php
// Git Workflow Simulation
// File ini digunakan untuk simulasi perubahan dalam praktikum Git.

$title = "Git Workflow Simulation";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1><?php echo $title; ?></h1>

    <p>Selamat datang di praktikum Git Workflow.</p>

    <p class="time">
        Halaman ini diakses pada: <?php echo date("d M Y - H:i:s"); ?>
    </p>
    
    <button onclick="showMessage()">Klik Saya</button>

    <script src="script.js"></script>
</body>
</html>