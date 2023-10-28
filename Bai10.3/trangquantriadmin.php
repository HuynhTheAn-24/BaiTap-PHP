<?php
session_start();
?>
<!DOCTYPE html PUBLIC >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>
<body>
    Trang Quan Tri
    <?php
        if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
            echo "Xin chào: ".$_COOKIE['username'];
            echo "<br><a href='logout.php'>Logout</a>";
        }
        else{
            if(isset($_SESSION['username']) and isset($_SESSION['password'])){
            echo "Xin chào: ".$_SESSION['username'];
            echo "<br><a href='logout.php'>Logout</a>";
        }
        else
            echo "<script>alert('Bạn chưa đăng nhập');
            location.href='index.php';</script>";
        }
    ?>
</body>
</html>