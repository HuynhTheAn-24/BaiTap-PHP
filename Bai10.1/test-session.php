<?php
    session_start();
?>
<!DOCTYPE >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
    <?php
        echo "Chào bạn ".$_SESSION['name']." có tuổi là:".$_SESSION['age'];
    ?>
    <br />
    <a href="huy-session.php">Huy session</a>
</body>
</html>