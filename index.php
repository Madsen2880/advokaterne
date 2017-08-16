<?php

require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/0b5556c7f9.js"></script>
</head>
<body>
<div class="grid">

    <header>
        <?php
        include_once "includes/header.php";
        ?>
    </header>
<h4 class="htoeren"><?php include "includes/overskrift1.php"; ?></h4>

    <main>
        <?php
        if(isset($_GET['p']) && is_numeric($_GET['p'])){
        require_once $nav->getPage($_GET['p']);
        }
        ?>
    </main>

<footer>

    <?php
    include_once "includes/footer.php";
    ?>


</footer>
</div>
</body>
</html>