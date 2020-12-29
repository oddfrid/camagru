<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
        if ($mobile) {
               echo '<link rel="stylesheet" href="src/headers/header-mobile.css">';
               echo '<link rel="stylesheet" href="src/headers/registration/header-reg-mobile.css">';

         } else {
            echo '<link rel="stylesheet" href="src/headers/header-desktop.css">';
            echo '<link rel="stylesheet" href="src/headers/registration/header-reg-desktop.css">';
         }
    ?>
</head>
<body>
    <header class="header">
        <div class="local-time">
            <p>Local time: <span class="localTime"></span></p>
        </div>
    </header>
</body>
<script src="src/headers/registration/getLocalTime.js"></script>
</html>