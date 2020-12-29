<?php
    $mobile = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="src/buttons/buttons.css">
</head>
<body>
    <?php
        include_once 'src/headers/registration/header-reg.php';
    ?>
    <?php
        include_once 'src/main/registration/registration.php';
    ?>
    <?php
        if (!'src/main/registration/registration.php') {
                $m = 1;
                if ($m) {
                    include_once 'src/footer/footerMobile.php';
                }
        }
    ?>
</body>
<script src="src/buttons/button.js"></script>
</html>