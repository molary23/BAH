<?php 
if (isset($_POST['name']) && isset($_POST['phone'])) {
$name = ucwords($_POST['name']);
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$mail = $_POST['message'];
$header  = "MIME-Version: 1.0" . PHP_EOL;
$header .= "Content-type:text/html;charset=UTF-8" . PHP_EOL;	

$msg = $mail;
$msg = str_replace("[N]","\n","$msg");
$msg = str_replace("[n]","\n","$msg");
$msg = nl2br($msg);

$to = "product@bahengineeringconsultant.com";			
$header .= "From:" . $email . PHP_EOL .	"CC: finance@bahengineeringconsultant.com" .PHP_EOL. 'X-Mailer: PHP/' . phpversion();
$mess = '<html>
<head>
</head>
<body>
<body leftmargin="0" rightmargin="0" topmargin="0" marginheight="0" marginheight="0" style="font-family: \'Georgia\', Helvetica, serif;">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="50%" align="left" valign="bottom" bgcolor="#fff" style="padding: 1vw;">
<img src="https://www.bahengineeringconsultant.com/images/bahLogo.png" width="20%" height="auto">
</td>
<td width="50%" align="right" valign="bottom" bgcolor="#fff" style="padding: 1vw;">
<h2>BAH Engineering Consultancy</h2>
</td>
</tr>
<tr>
<td colspan="2">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100%" bgcolor="#f2f2f2" style="padding: 10px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td  width="100%" bgcolor="#fff" style="padding: 20px;">
<div>' .$msg.'</div>
<div> Sender Name: '.$name.'</div>
<div> Sender Number: '.$phone.'</div>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td width="100%" bgcolor="#f2f2f2" style="padding: 0px 10px 10px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td  width="40%" bgcolor="#fff" style="padding: 20px 0px 0px 10px;">
<p>Stay Connected</p>

</td>
<td  width="60%" bgcolor="#fff" style="padding: 10px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center" style="padding: 0px 2.5px;" width="25%"><a href="http://twitter.com/thefilopost"><img src="http://bahengineeringconsultant.com/images/fb.png"></a></td>
<td align="center" style="padding: 0px 2.5px;" width="25%"><a href="//fb.me/BAHEngineeringConsultancy"><img src="http://bahengineeringconsultant.com/images/in.png"></a></td>
<td align="center" style="padding: 0px 2.5px;" width="25%"><a href="http://instagram.com/thefilopost"><img src="http://bahengineeringconsultant.com/images/ig.png"></a></td>
<td align="center" style="padding: 0px 2.5px;" width="25%"><a href="http://twitter.com/thefilopost"><img src="http://bahengineeringconsultant.com/images/tw.png"></a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td width="100%" colspan="2" bgcolor="#fff" style="padding: 2vw 1vw;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="30%" align="center" bgcolor="#fff" ><a href="http://bahengineeringconsultant.com/about" style="text-decoration: none;">About Us</a></td>
<td width="5%"></td>
<td width="30%" align="center" bgcolor="#fff" ><a href="http://bahengineeringconsultant.com/contact" style="text-decoration: none;">Contact Us</a></td>
<td width="5%"></td>
<td width="30%" align="center" bgcolor="#fff" ><a href="http://bahengineeringconsultant.com/repairs" style="text-decoration: none;">Our Services</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>';
$mail = mail($to,$subject,$message,$header);
if (!$mail) {
$response = 0;
}else{
$from = 'BAH Engineering Consultant <'.$to.'>';	
$header .= "From:" . $from . PHP_EOL .  'X-Mailer: PHP/' . phpversion();
$subject = "Thanks for Contacting Us";
$message = '<html>
<head>
</head>
<body>
<body leftmargin="0" rightmargin="0" topmargin="0" marginheight="0" marginheight="0" style="font-family: \'Georgia\', Helvetica, serif;">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="50%" align="left" valign="bottom" bgcolor="#fff" style="padding: 1vw;">
<img src="http://filopost.com/images/emailLogo.png">
</td>
<td width="50%" align="right" valign="bottom" bgcolor="#fff" style="padding: 1vw;">
<h2>BAH Engineering Consultancy</h2>
<p>We are guided by philosophy of excellent services and aims to achieve the highest standard of Engineering support services for clients.</p>	
</td>
</tr>
<tr>
<td colspan="2">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100%" bgcolor="#f2f2f2" style="padding: 10px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td  width="100%" bgcolor="#fff" style="padding: 20px;">
<p>Dear '.$name.', </p>
<p>Thank you for contacting us. We will get back to you ASAP.</p>
<p>Have a great day.</p>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td width="100%" bgcolor="#f2f2f2" style="padding: 0px 10px 10px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td  width="40%" bgcolor="#fff" style="padding: 20px 0px 0px 10px;">
<p>Stay Connected</p>

</td>
<td  width="60%" bgcolor="#fff" style="padding: 10px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center" style="padding: 0px 2.5px;" width="25%"><a href="http://facebook.com/bahengine"><img src="http://bahengineeringconsultant.com/images/fb.png"></a></td>
<td align="center" style="padding: 0px 2.5px;" width="25%"><a href="http://linkedin.com/company/bahengine"><img src="http://bahengineeringconsultant.com/images/in.png"></a></td>
<td align="center" style="padding: 0px 2.5px;" width="25%"><a href="http://instagram.com/bahengine"><img src="http://bahengineeringconsultant.com/images/ig.png"></a></td>
<td align="center" style="padding: 0px 2.5px;" width="25%"><a href="http://twitter.com/bahengine"><img src="http://bahengineeringconsultant.com/images/tw.png"></a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td width="100%" colspan="2" bgcolor="#fff" style="padding: 2vw 1vw;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="30%" align="center" bgcolor="#fff" ><a href="http://bahengineeringconsultant.com/about" style="text-decoration: none;">About Us</a></td>
<td width="5%"></td>
<td width="30%" align="center" bgcolor="#fff" ><a href="http://bahengineeringconsultant.com/contact" style="text-decoration: none;">Contact Us</a></td>
<td width="5%"></td>
<td width="30%" align="center" bgcolor="#fff" ><a href="http://bahengineeringconsultant.com/repairs" style="text-decoration: none;">Our Services</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>';
$reply = mail($email,$subject,$mess,$header);
if(!$reply){
$response = 1;	
}else{
$response = 2;	
}
}
echo json_encode($response);
}
?>