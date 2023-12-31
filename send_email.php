<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

$recaptchaResponse = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;

if (isset($_POST)) {
    if (empty($recaptchaResponse)) {
        // reCAPTCHA işaretlenmediğinde uyarı ver
        $alert = array(
            "message" => "reCAPTCHA işaretlenmedi",
            "type" => "danger"
        );
    } else {
        if ($_POST["fullname"] && $_POST["email"] && $_POST["subject"] && $_POST["message"]) {
            // Mail gönderme işlemleri 
            $mail = new PHPMailer();

            try {
                // server ayarları 
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->Host = "ssl://smtp.gmail.com";
                $mail->SMTPAuth = true;
                $mail->Username = "hashus5021@gmail.com";
                $mail->Password = "ibbs rvgj gceh ffav";
                $mail->CharSet = "utf-8";
                $mail->SMTPSecure = "ssl";
                $mail->Port = 465;

                // Alıcı ayarları 
                $mail->addAddress("hashus5021@gmail.com", $_POST["fullname"]);
                $mail->setFrom($_POST["email"], "");

                // Gönderi ayarları 
                $mail->isHTML();
                $mail->Subject = $_POST["subject"];
                $body = "Gönderen Adı: " . $_POST["fullname"] . "<br>";
                $body .= "Gönderen E-posta: " . $_POST["email"] . "<br>";
                $body .= "Mesaj: " . $_POST["message"];

                $mail->Body = $body;

                if ($mail->send()) {
                    $alert = array(
                        "message" => "Mail Başarılı Bir Şekilde Gönderildi",
                        "type" => "success"
                    );
                } else {
                    $alert = array(
                        "message" => "Mail Gönderilmedi",
                        "type" => "danger"
                    );
                }
            } catch (Exception $e) {
                $alert = array(
                    "message" => $e->getMessage(),
                    "type" => "danger"
                );
            }
        } else {
            // boş alan hatası
            $alert = array(
                "message" => "Lütfen Tüm ALANLARI Doldurun",
                "type" => "danger"
            );
        }
    }

    $_SESSION["alert"] = $alert;
    header("Location: index.php#contact");
}
?>
