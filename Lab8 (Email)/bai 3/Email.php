<?php
          require "../PHPMailer-master/src/PHPMailer.php";  
          require "../PHPMailer-master/src/SMTP.php"; 
          require '../PHPMailer-master/src/Exception.php';
if (isset($_POST)) {
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);  
    try {
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $nguoigui = 'huynhthethuyan@gmail.com';
        $matkhau = 'yitz yxch jfhs dpua';
        $tennguoigui = 'thuy an';
        $mail->Username = $nguoigui; // SMTP username
        $mail->Password = $matkhau;   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom($nguoigui, $tennguoigui);
        $to = $_POST['email'];
        $to_name = "bạn";
		$tieude = $_POST['tieude'];

        $mail->isHTML(true);  
        $mail->Subject = $tieude;
		$noidungthu = ' <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b>Xin chào ' . $to_name . '</b></h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">' . $_POST['content'] . '</p>
                </div>
                </div> ';
        $mail->Body =  $noidungthu;	
        $recipients = "huynhthethuyan12@gmail.com,anhtt.22itb@vku.udn.vn";
        $email_array = explode(",",$recipients);
        foreach($email_array as $email) {
            $to      =  $email;
            $mail->addAddress($to, $to_name); 
        }

		if(isset($_FILES['file']['name'])) {
            $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name']));
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
                    $mail->addAttachment($uploadfile, $_FILES['file']['name']);
        } 
        $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
        if($mail->send()) {
			header("Location:index.php");
		} 
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }	
}


