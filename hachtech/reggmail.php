<?php
ob_start();
if(isset($_POST['contact_reggmail']))
{
	
	
header('Content-Type: text/html; charset=utf-8'); 
			 $email_from = "Registration";
                      $email_to = 'hachtechnologies@gmail.com';
             $email_subject = "Registration for Demo $Message";
			 $headers = 'From: '.$email_from."\r\n";
			$email_message2= "Firstname:".$_POST['firstname']."\r\n Lastname: ".$_POST['lastname']."\r\n Tech:".$_POST['tech']."\r\n OtherTechnology:".$_POST['othertechs']."\r\n Training:".$_POST['training']."\r\n Education :".$_POST['optionss']."\r\n Visa Status:".$_POST['vstatus']."\r\n Email :".$_POST['email']."\r\n Phone:".$_POST['phone']."\r\n City:".$_POST['city']."\r\n State:".$_POST['state']."\r\n ZIP:".$_POST['zip'];
 // 
			 
           'Reply-To: '.$email_from."\r\n" .
 
          
             $sendMail = mail($email_to, $email_subject, $email_message2, $headers);
			 
            if($sendMail)
           {
               echo '<script type="text/javascript">'; 
               echo 'alert("Thanks for Registration With Hach Technologies\n one of my Technical Team will be call you back\n Thank you......");'; 
               echo 'window.location.href =  "http://hachtechnologies.com/#!/registration";';
               echo '</script>';
           }
		   else{
			   
			   
		   }
}
else
{
	 echo '<script type="text/javascript">'; 
               echo 'alert("Please Check Details");'; 
               echo 'window.location.href =  "http://hachtechnologies.com/#!/registration";';
               echo '</script>';
}
?>