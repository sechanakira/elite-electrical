<?php //ob_start();
if(isset($_REQUEST['event']) && $_REQUEST['event']!=''){$event=$_REQUEST['event'];}else{$event='';}
define('SITE_EMAIL', 'test@test.com');
 
    /* recipients */
    $to= SITE_EMAIL;
    /* subject */
    $subject = "Electrician&Repairing";

    /* message */
    $message = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
        <td width="33%"><font color="#f35D14" size="2" face="Tahoma">First Name:</font></td>
        <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['first_name'].'</font></td>
      </tr> 

      <tr>
        <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Last Name:</font></td>
        <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['last_name'].'</font></td>
      </tr>
           
      <tr>
        <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Address :</font></td>
        <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['address'].'</font></td>
      </tr>     
       
       <tr>
        <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Apt/Suit :</font></td>
        <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['apt'].'</font></td>
      </tr>

       <tr>
        <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Phone :</font></td>
        <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['phone'].'</font></td>
      </tr>

       <tr>
        <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Phone :</font></td>
        <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['email'].'</font></td>
      </tr>                
    </table>';    

    /* To send HTML mail, you can set the Content-type header. */
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    /* additional headers */
    $headers .= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
    /* and now mail it */

     
     
  mail($to, $subject, $message, $headers);
  
  echo "<div class='alert alert-email-success'>Thank you, we have received your message and will get back to you shortly.</div>";   
 
?>