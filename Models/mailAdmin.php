<?php
    class mailAdmin{
        var $conn=null;
        public function __construct()
        {
            $this->conn = DB::getInstance();
        }

        function sendMail(){   
            require "PHPMailer-master/src/PHPMailer.php"; 
            require "PHPMailer-master/src/SMTP.php"; 
            require 'PHPMailer-master/src/Exception.php'; 
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
            try {
                $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //SMTP servers
                $mail->SMTPAuth = true; // Enable authentication
                $mail->Username = 'maimanhtuong9898@gmail.com'; // SMTP username
                $mail->Password = 'Tuong970410';   // SMTP password
                $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                $mail->Port = 465;  // port to connect to                
                $mail->setFrom('maimanhtuong9898@gmail.com', 'Tên người gửi' ); 
                $mail->addAddress('maituong000@gmail.com', 'TênNgườiNhận'); //mail và tên người nhận  
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = 'Tiêu đề thư';
                $noidungthu = 'Nội dung thư'; 
                $mail->Body = $noidungthu;
                $mail->smtpConnect( array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send();
                echo 'Đã gửi mail xong';
            } catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            }
         }//function GuiMail
    }
?>