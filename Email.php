<?php 

function sendEmail($_email){
$flagMailSent = mail($to , $from, $message,$header);
if($flagMailSent == true){
print 'Email sent successfully.';

}else{
print 'Email sending faild.';
}
}

	if (isset($_POST['$_email[]'])) {
		
		
		$_subject= "Enquiry about the class";
        $_to=  "info@mynenisitsolutions.com";
        $_from= "rrksinha11@gmail.com";
        $_cc= "nrkilyardutt@yahhoo.com";
        $_bcc= "Rahman@gmail.com";
        $_phone="7097013587";
        $_Message= "When the next batch is going to start";

     $_email[]= array["$_subject", "$_to","$_from","$_cc", "$_bcc", "$_phone", "$_Message"];

		
		
		
		
		
		
		
		
		
		
		
		
	//	$to = 'info@mynenisitsolutions.com';
	//	$name=$_POST['vname'];
	//	$from= $_POST['vemail'];
	//	$subject=$_POST['sub'];
	//	$message=$_POST['msg'];
$header = "From :$from\r\n";
	$header .="Reply-To:$from\r\n";
		
		
	
sendEmail($_email[]);
			echo '<script language="javascript">';
echo 'alert("Thank you for contact us. we will get back to shortly")';
echo '</script>';
		
		}
		
		
		else{
			
		}

?>
