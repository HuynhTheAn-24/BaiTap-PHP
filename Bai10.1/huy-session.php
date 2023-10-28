<?php
    session_start();
    unset($_SESSION['name']);
?>
<!DOCTYPE >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
    <?php
        echo "chào bạn ".$_SESSION['name']." có tuổi là:".$_SESSION['age'];
    ?>
</body>
</html>