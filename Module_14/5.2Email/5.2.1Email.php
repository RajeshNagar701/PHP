<?php
//Email code using PHP mailer


if(isset($_REQUEST['send_mail'])){
    require_once('mailer/class.phpmailer.php');

define('SITE_URL', "http://" . $_SERVER['HTTP_HOST'] . "/SiteName/");
//EMAIL FORMATE START
$header = '';
$header .= '<!DOCTYPE html>';
$header .= '<html>';
$header .= '<head>';
$header .= '<meta charset="UTF-8">';
$header .= '<title>Kamet Sports Events</title>';
$header .= '</head>';
$header .= '<body>';
$header .= '<div id=":1re" class="a3s" style="overflow: hidden;"><u></u>';
$header .= '<div style="width:100%;min-height:100%;padding:0;background-color:#ffffff;font-family:Arial,Tahoma,Verdana,sans-serif;font-weight:299px;font-size:13px;text-align:center" bgcolor="#ffffff">';
$header .= '<table style="max-width:810px;border-left:solid 1px #104A9C;border-right:solid 1px #104A9C; border-top:solid 1px #104A9C;" width="100%" cellpadding="0" cellspacing="0">';
$header .= '<tbody>';
$header .= '<tr>';
$header .= '<td style="width:10px;background-color:#EBEBEB" width="10" bgcolor="#D4D1D1">&nbsp;</td>';
$header .= '<td style="background-color:#EBEBEB;padding:0;margin:0" align="left" valign="middle" height="50" bgcolor="#D4D1D1">';
$header .= '<a style="text-decoration:none;outline:none;color:#ffffff;font-size:13px" href="'.SITE_URL.'" target="_blank">';
$header .= '<img class="CToWUd" src="'.SITE_URL.'admin/image/Logo/KLogo.png" alt="kametsportsevent.com" style="border:none" height="45" border="0">';
$header .= '</a>';
$header .= '</td>';
$header .= '<td style="width:10px;background-color:#EBEBEB" width="10" bgcolor="#D4D1D1">&nbsp;</td>';
$header .= '</tr>';
$header .= '</tbody>';
$header .= '</table>';
//EMAIL Body Start
$BodyStart = '';
$BodyStart .= '<table style="max-width:810px;border-left:solid 1px #104A9C;border-right:solid 1px #104A9C" width="100%" cellpadding="0" cellspacing="0">';
$BodyStart .= '<tbody><tr>';
$BodyStart .= '<td style="color:#2c2c2c;line-height:20px;font-weight:300;margin:0 auto;clear:both;background-color:#ffffff;padding:20px 20px 0 20px" align="left" valign="top" bgcolor="#ffffff">';
$BodyStart .= '<p style="padding:0;margin:0;color:#565656;font-size:13px">';
//EMAIL Body Ends
$BodyEnd = '';
$BodyEnd .= '</p>';
$BodyEnd .= '</td>';
$BodyEnd .= '</tr>';
$BodyEnd .= '<tr>';
$BodyEnd .= '<td style="color:#2c2c2c;line-height:20px;font-weight:300;margin:0;clear:both;background-color:#fff;padding:10px 20px 0 20px;font-size:13px" align="center" valign="top" bgcolor="#F9F9F9">';
$BodyEnd .= '</td>';
$BodyEnd .= '</tr>';
$BodyEnd .= '</tbody>';
$BodyEnd .= '</table>';
//EMAIL Footer 
$footer = '';
$footer .= '<table style="max-width:810px;border-left:solid 1px #104A9C;border-right:solid 1px #104A9C;border-bottom:solid 1px #104A9C" width="100%" cellpadding="0" cellspacing="0">';
$footer .= '<tbody>';
$footer .= '<tr>';
$footer .= '<td style="text-align:left;background-color:#FF9800;display:block;margin:0 auto;clear:both;padding:5px 20px" valign="top" bgcolor="">';
$footer .= '<p style="padding:0;margin:0 0 4px 0;font-size:12px;color:#fff"><b>DISCLAIMER</b></p>';
$footer .= '<p style="padding:0;margin:0;font-size:9px;color:#fff;line-height:15px">';
$footer .= 'The information transmitted is intended only for the person or entity to which it is addressed and may contain confidential and/or privileged material which is the intellectual property of Kamet Sports Events. If you are not the intended recipient, or the employee, or agent responsible for delivering the message to the intended recipient and/or if you have received this in error, please contact the Kamet Sports Events or delete the material from the computer or device.';
$footer .= '</p>';
$footer .= '</td>';
$footer .= '</tr>';
$footer .= '<tr>';
$footer .= '<td style="text-align:center;background-color:#FF9800;display:block;margin:0 auto;clear:both;padding:5px 20px" align="center" valign="top" bgcolor="">';
$footer .= '<p style="padding:0;margin:0 0 4px 0">';
$footer .= '<a title="kametsportsevent.com" style="text-decoration:none;color:#104a9c" href="'.SITE_URL.'" target="_blank"><span style="color:#104a9c;font-size:13px">kametsportsevent.com</span></a>';
$footer .= '</p>';
$footer .= '<p style="padding:10px 0 0 0;margin:0;border-top:solid 1px #104A9C;font-size:11px;color:#565656">';
$footer .= '</p>';
$footer .= '</td>';
$footer .= '</tr>';
$footer .= '<tr>';
$footer .= '</tbody></table>';
$footer .= '</td>';
$footer .= '</tr>';
$footer .= '</tbody>';
$footer .= '</table>';
define('MAIL_HEADER', $header);
define('BODY_START', $BodyStart);
define('BODY_FOOTER', $BodyEnd);
define('MAIL_FOOTER', $footer);

//EMAIL FORMATE END




















//$to = "jay.amin.bca@gmail.com";
$to = $_REQUEST['send_to_mail'];
if(isset($_REQUEST['cc_mail']) && $_REQUEST['cc_mail'] != ''){
$cc = $_REQUEST['cc_mail'];
}else{
    $cc='';
}

if(isset($_REQUEST['bcc_mail']) && $_REQUEST['bcc_mail'] != ''){
$bcc = $_REQUEST['bcc_mail'];
}else{
    $bcc='';
}

$subject = $_REQUEST['subject_mail'];











$cc = null;
$bcc = null;
$subject = "Something";
$message =  $_REQUEST['message_mail'];
$alert_msg = "";
$attachment = null;

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = false;
//$mail->do_debug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
//        $mail->Host = "43.225.55.90";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->AddAddress($to);
$mail->Username = "demo.check.ruchi@gmail.com";
$mail->Password = "demo@mail";
$mail->SetFrom("demo.check.ruchi@gmail.com ", "SITE_NAME");
$mail->AddReplyTo("demo.check.ruchi@gmail.com ", "SITE_NAME");
$mail->Subject = $subject;



$mail->SMTPKeepAlive = true;  
$mail->Mailer = "smtp"; 
$mail->CharSet = 'utf-8';  



if ($cc != "") {
    $mail->AddCC($cc);
}
if ($bcc != "") {
    $mail->AddBCC($cc);
}
if ($attachment != '') {
    $mail->AddAttachment($attachment);
}
$mail->MsgHTML($message);
ob_start();
// echo "<pre>";
// print_r($mail);
// $mail->Send();
// exit;
if (!$mail->Send()) {
    
    echo $mail->_mailer->ErrorInfo;
    exit();
    ob_end_clean();

    ob_flush();
    $LogFile =  "localeconv()g.txt";
    file_put_contents($LogFile, PHP_EOL . "TIME:>> " . date('Y-m-d H:i A') . " while sending email to " . $to . " : " . PHP_EOL . "ErrorStatement:>> " . $mail->ErrorInfo . PHP_EOL, FILE_APPEND);
    echo 'Failed to send email. Mailer error: ' . $mail->_mailer->ErrorInfo;
} else {
    if ($alert_msg != "") {
        echo $alert_msg;
    }
}











// $body = '<html>';
// $body .= '<head>';
// $body .= MAIL_HEADER;
// $body .= '<body>';
// $body .= BODY_START;
// $body .= '<div>';
// $body .= '<label>Hello,' . $_REQUEST['send_to_mail'] . ' </label><br><br>';
// $body .= '<span>Please click below link to activate your account.</span><br><br>';
// $body .= '<a style = "background:##8b245e; padding:5px 7px; color:#fff; text-decoration:none;" target = "_blank" href="' . SITE_URL . 'activate?token=' . base64_encode($_REQUEST['send_to_mail'] ) . '">Click here</a><br><br>';
// $body .= BODY_FOOTER;
// $body .= '</div>';
// $body .= '</body>';
// $body .= '</head>';
// $body .= MAIL_FOOTER;

$body = $_REQUEST['message_mail'];

$mail=send_email($_REQUEST['send_to_mail'], '', $bcc, 'Activation', nl2br($body), 'Please check your email.! ', $attachment);
}


?>
<form method="post">
<table>
    <tr>
        <td>TO</td>
        <td><input type="text" name="send_to_mail"></td>
    </tr>
    <tr>
        <td>CC</td>
        <td><input type="text" name="cc_mail"></td>
    </tr>
    <tr>
        <td>BCC</td>
        <td><input type="text" name="bcc_mail"></td>
    </tr>
    <tr>
        <td>Subject</td>
        <td><input type="text" name="subject_mail"></td>
    </tr>
    <tr>
        <td>Message</td>
        <td><input type="text" name="message_mail"></td>
    </tr>
    <tr>
        <td><input type="submit" name="send_mail" value="Send mail"></td>
        <!--<td><input type="text" name="message_mail"></td>-->
    </tr>
</table>
</form>
