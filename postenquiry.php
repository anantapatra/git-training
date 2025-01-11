<?
$fname = addslashes($_POST['fname']);
$lname = addslashes($_POST['fname']);
$email_id = addslashes($_POST['email_id']);
$mobile = addslashes($_POST['mobile']);
$msg = addslashes($_POST['msg']);
if (trim($email_id)!=""){
$message = '
		<html>
		<head>
		<title></title>
		</head>
		<body><center>
		<table width="533"  border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="black">
		  <tr bgcolor=white>
		    <td colspan="2" bgcolor="#E0FDDF" class="text"><font face="Arial" size="2"><strong>Enquiry Form Details:</strong></font></td>
		  </tr>
		  <tr>
		    <td bgcolor="#FFFFFF" class="text" ><font face="Arial" size="2"><strong>Name</strong></font></td>
		    <td bgcolor="#FFFFFF" ><span class="text"><font face="Arial" size="2"><strong>'.$fname.'</strong></span></font></td>
		  </tr>
		    <tr>
		    <td bgcolor="#FFFFFF" class="text" ><font face="Arial" size="2"><strong>Name</strong></font></td>
		    <td bgcolor="#FFFFFF" ><span class="text"><font face="Arial" size="2"><strong>'.$lname.'</strong></span></font></td>
		  </tr>	

		  <tr>
		    <td bgcolor="#FFFFFF" class="text" ><font face="Arial" size="2"><strong>Phone Number</strong></font></td>
		    <td bgcolor="#FFFFFF" ><span class="text"><font face="Arial" size="2"><strong>'.$mobile.'</strong></span></font></td>
		  </tr>
		  	  
		  
		  <tr>
		    <td bgcolor="#FFFFFF" class="text" ><font face="Arial" size="2"><strong>Email ID</strong></font></td>
		    <td bgcolor="#FFFFFF" ><span class="text"><font face="Arial" size="2"><strong>'.$email_id.'</strong></span></font></td>
		  </tr>
		  <tr>
		    <td bgcolor="#FFFFFF" class="text" ><font face="Arial" size="2"><strong>Message</strong></font></td>
		    <td bgcolor="#FFFFFF" ><span class="text"><font face="Arial" size="2"><strong>'.$msg.'</strong></span></font></td>
		  </tr>
			
		</table><br><br>
		
		</body>
		</html>';
//echo $message;


		$username = "Administrator";
		
		$to = 'anantapatra2@gmail.com';
		
		$subject = 'Enquiry From Website Pioneer';

		$frm_email = 'noreply@globalinclusion.com';

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
		/*$headers .= 'To: '.$username.' <'.$to.'>' . "\r\n";
		$headers .= 'From: '.$your_name.' <'.$frm_email.'>' . "\r\n";*/

		// Mail it
		
		if (mail($to, $subject, $message,$headers)) {

		//echo("<p>Message successfully sent!</p>");

		} else {

		//echo("<p>Message delivery failed...</p>");

		}
}
?>
<script>
alert('Thank You, We will contact you shortly.');
window.location.href="index.php";
</script>