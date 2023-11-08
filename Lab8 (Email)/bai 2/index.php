<!DOCTYPE html PUBLIC >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<form action="mail.php" enctype="multipart/form-data" method="POST">
    <table >
        <tr> 
            <td>
                <h1>Email tới bạn</h1>
                <label>Email</label><br>
                <input type="text"  name="email" placeholder="Email"><p>
                <label>Subject</label><br>
                <input type="text"  name="tieude" placeholder="ten"><p>
                <label>Nội dung</label><br>
                <textarea name="content" id="editor"  ><?php if(isset($_POST["content"])) echo ($_POST["content"]) ?></textarea><p>
                <input type="file"  name="file"  ><br>
                <button type="submit" name ="submit">Gửi</button>
            </td>
        </tr>
    </table>
</form>
    <script>
        CKEDITOR.replace('content');
    </script>
</body>
</html>

