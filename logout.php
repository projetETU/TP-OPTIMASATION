<?php
session_start();
//destroy session
session_destroy();
//unset cookies
setcookie('user_login', '', 0, "/");

header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="/js/analytics.js"></script>

</head>
<body>
    
</body>
</html>