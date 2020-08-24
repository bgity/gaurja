<!DOCTYPE html>
<html>
<head>

  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

</body>
</html>
<?php

 // include '../../admin/db_connect.php';

 if (isset($_POST['name']) && !empty($_POST['name'])) {
   
   $userName = $_POST['name'];
   $userEmail =  $_POST['email'];
   $userPhone =  $_POST['phone'];
   $userMessage = $_POST['message'];
   $errorFalg = 0;
   
   if(!preg_match('/^[0-9]{10}+$/',trim($userPhone))){
     $errorFalg = 1;
   }else if(strlen($userPhone) > 10)
     {
      $errorFalg = 1;
     }
     
     if($errorFalg == 1){
     echo "<script type='text/javascript'> window.location='contact.php?error=Please enter correct contact no';</script>";
   }
   if($errorFalg == 0){
        /* $to = 'adiarihant.nidhi.ltd@gmail.com';*/
         $to = 'bhagwanpawar07@gmail.com';
         $subject = 'Enquiry Request for Gau Urja';
         $subject1 = 'Thank you contact us!';
         // $headers = "From: machhindra.mbtb@gmail.com\r\n";
         $headers = "Reply-To: " . strip_tags($userEmail) . "\r\n";
    //$headers .= "CC: machhindra.mbtb@gmail.com\r\n";
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
         /*$message = '<html><body>';
         $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
         $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>".$userName."</td></tr>"; 
     $message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>".$userEmail."</td></tr>";
         $message .= "<tr><td><strong>Contact No:</strong> </td><td>".$userPhone."</td></tr>";
         $message .= "<tr><td><strong>Message :</strong> </td><td>".$userMessage."</td></tr>";
         $message .= "</table>";
         $message .= "</body></html>";*/
         
         




$message.="<html>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<head>
<title></title>

<style type='text/css'>
.ReadMsgBody {width: 100%;}
.ExternalClass {width: 100%;}
.mobile {display: none;overflow: hidden;visibility:hidden;}
strong{font-weight: bold;}

    @media only screen and (max-width: 479px){ /**change to max-device-width after testing**/
        
         td[class='desktop'], table[class='desktop'] {
             display: none !important;
         }
        
         td[class='mobile_only'], table[class='mobile_only'], img[class='mobile_only'], div[class='mobile_only'], tr[class='mobile_only'] {
            display: block !important;
            width: auto !important;
            overflow: visible !important;
            height: auto !important;
            max-height: inherit !important;
            font-size: 15px !important;
            line-height: 21px !important;
            visibility: visible !important;
         }       
         
         img[class='mobile_header'] { 
            width: 320px !important;
            height: 243px !important;
            display: block !important;          
            overflow: visible !important;
            visibility: visible !important;}
         
         td[class='full_width'], table[class='full_width'] {
              width: 320px !important;
         }
        
         td[class='medium_width'], table[class='medium_width'] {
              width: 272px !important;
         }
             
         td[class='intro_text'], table[class='intro_text'] {
            font-size: 14px !important;
            line-height: 20px !important;
         }
        
    }
</style>

</head>

<body bgcolor='#f5f5f5' style='background-color:#f5f5f5; margin:0; padding:0;-webkit-font-smoothing: antialiased;width:100% !important;-webkit-text-size-adjust:none;' topmargin='0'><div style='font-size: 1px; color: #f5f5f5; display: none;'>Short description appears as email content preview.</div>


<!--wrapper table-->
<table width='100%' bgcolor='#f5f5f5' style='background-color:#f5f5f5;' border='0' cellpadding='0' cellspacing='0'>
  <tr>
   <td>
      
      <table class='full_width' align='center' width='650' border='0' cellpadding='0' cellspacing='0' style='padding-top: 12px;'>
        <tr>  
           <td><img alt='Logo' src='http://gauurja.com/images/logo_gau.png' width='320' height='75' border='0' hspace='0' vspace='0' style='display:block; vertical-align:top;'></td>
          
        </tr>
      </table>  

    </td>  
   </tr>
</table> 

<table width='100%' bgcolor='#f5f5f5' style='background-color:#f5f5f5;' border='0' cellpadding='0' cellspacing='0'>
  <tr>
    <td>&nbsp;</td>

    <td class='full_width' width='650' align='center' style='border-left:1px solid #d8d8d8; border-right:1px solid #d8d8d8; border-bottom:1px solid #d8d8d8; border-top:1px solid #d8d8d8;background-color: #ffffff; padding-bottom: 30px;'>
      
    
     
        <table class='medium_width' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'>
         <tr>      
          <td class='desktop' width='67' style='padding-top:18px;'>&nbsp;</td>
          <td style='border-top: 1px solid #d9d9d9; color:#333333; font-family: Helvetica, sans-serif;text-align:left; font-size:14px; line-height:20px; padding-top:18px; padding-bottom:18px;'>
            <strong>About</strong><br>
            My self Shri. Dipak Vasant Tupe, M.D. Gau Urja Health Services Pvt. Ltd, Basically I’m from farmers family!In 2011-12, As I heard about The first Real hero of “Swatantra Bharata” The great devotee Shri. Rajivji Dixit! Suddenly my life had taken drastatic diversion to the field of Health awareness!In between I lost my father in Cancer & wife in Lukemia, I realized the importance of the words by RAJIV DIXIT! The side-effects of chemical farming, A1 milk, adultrated food etc…… <br>
          
          </td>          
         <td class='desktop' width='34' style='border-top: 1px solid #d9d9d9;padding-top:18px;'>&nbsp;</td>
        
         <td class='desktop' width='67' style='padding-top:18px;'>&nbsp;</td>
        </tr>
        </table>
         <table class='medium_width' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'>
         <tr>      
          <td class='desktop' width='67' style='padding-top:18px;'>&nbsp;</td>
          <td style=' font-family: Helvetica, sans-serif;text-align:left; padding-bottom:18px; color: #6f6363;'>
            <strong>Address:</strong><br>
          Address: OPD & Residential Treatment Centre Gau Urja Cancer Research & Panchgavya Natural treatment Centre,Hingane road, Vaduj, Tal. Khatav, Dist. Satara. - 415506
Contact:  9561383219 / 8108400909
Email: gauurjahealthservices@gmail.com <br>
          
          </td>          
         <td class='desktop' width='34' style='border-top: 1px solid #d9d9d9;padding-top:18px;'>&nbsp;</td>
        
         <td class='desktop' width='67' style='padding-top:18px;'>&nbsp;</td>
        </tr>
        </table>   
 
        
 
        
      <!-- social media links -->  
           
      <table class='medium_width' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'>
        <tr>      
          <td class='desktop' width='67' style='padding-top:12px;'>&nbsp;</td> 
          <td align='center' valign='top' style='border-top:1px solid #d9d9d9; padding-top:12px;'>
               
                <table>
                    <tr>
                        <td style='border-top: 1px solid; width: 20%;'>Name :</td>
                        <td style='padding: 2px 20px 0px 0px;  border-top: 1px solid;'>".$userName."</td>
                    </tr>
                    <tr>
                        <td style='border-top: 1px solid; width: 20%;'>Contact :</td>
                        <td style='padding: 2px 20px 0px 0px;  border-top: 1px solid;'>".$userPhone."</td>
                    </tr>
                    <tr>
                        <td style='border-top: 1px solid; width: 20%;'>Email :</td>
                        <td style='padding: 2px 20px 0px 0px;  border-top: 1px solid;'>".$userEmail."</td>
                    </tr>
                    <tr>
                        <td style='border-top: 1px solid; width: 20%;'>Message :</td>
                        <td style='padding: 2px 20px 0px 0px;  border-top: 1px solid;'>".$userMessage."</td>
                    </tr>
                </table>

          </td>
          <td class='desktop' width='67' style='padding-top:12px;'>&nbsp;</td>             
        </tr>
      </table>
      
    </td>
    <td>&nbsp;</td>
  </tr>
</table> <!--/end wrapper-->
  
  
<!-- legal disclaimer -->  
  
<table class='full_width' bgcolor='#f5f5f5' align='center' width='650' border='0' cellpadding='0' cellspacing='0'>
  <tr>
    <td class='desktop' width='22'>&nbsp;</td>
    <td align='center' style='color:#a1a1a1; font-family: Helvetica, sans-serif;text-align:left; font-size:11px; line-height:13px; text-align:left; padding-top:20px; padding-bottom:40px;'>-</td>
    <td class='desktop' width='22'>&nbsp;</td>
  </tr>
</table>

</body>
</html>";



$message1="<html>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<head>
<title>Mobile Responsive Email</title>

<style type='text/css'>
.ReadMsgBody {width: 100%;}
.ExternalClass {width: 100%;}
.mobile {display: none;overflow: hidden;visibility:hidden;}
strong{font-weight: bold;}

    @media only screen and (max-width: 479px){ /**change to max-device-width after testing**/
        
         td[class='desktop'], table[class='desktop'] {
             display: none !important;
         }
        
         td[class='mobile_only'], table[class='mobile_only'], img[class='mobile_only'], div[class='mobile_only'], tr[class='mobile_only'] {
            display: block !important;
            width: auto !important;
            overflow: visible !important;
            height: auto !important;
            max-height: inherit !important;
            font-size: 15px !important;
            line-height: 21px !important;
            visibility: visible !important;
         }       
         
         img[class='mobile_header'] { 
            width: 320px !important;
            height: 243px !important;
            display: block !important;          
            overflow: visible !important;
            visibility: visible !important;}
         
         td[class='full_width'], table[class='full_width'] {
              width: 320px !important;
         }
        
         td[class='medium_width'], table[class='medium_width'] {
              width: 272px !important;
         }
             
         td[class='intro_text'], table[class='intro_text'] {
            font-size: 14px !important;
            line-height: 20px !important;
         }
        
    }
</style>

</head>

<body bgcolor='#f5f5f5' style='background-color:#f5f5f5; margin:0; padding:0;-webkit-font-smoothing: antialiased;width:100% !important;-webkit-text-size-adjust:none;' topmargin='0'><div style='font-size: 1px; color: #f5f5f5; display: none;'>Short description appears as email content preview.</div>


<!--wrapper table-->
<table width='100%' bgcolor='#f5f5f5' style='background-color:#f5f5f5;' border='0' cellpadding='0' cellspacing='0'>
  <tr>
   <td>
      
      <table class='full_width' align='center' width='650' border='0' cellpadding='0' cellspacing='0' style='padding-top: 12px;'>
        <tr>  
           <td><img alt='Logo' src='http://gauurja.com/images/logo_gau.png' width='320' height='75' border='0' hspace='0' vspace='0' style='display:block; vertical-align:top;'></td>
          
        </tr>
      </table>  

    </td>  
   </tr>
</table> 

<table width='100%' bgcolor='#f5f5f5' style='background-color:#f5f5f5;' border='0' cellpadding='0' cellspacing='0'>
  <tr>
    <td>&nbsp;</td>

    <td class='full_width' width='650' align='center' style='border-left:1px solid #d8d8d8; border-right:1px solid #d8d8d8; border-bottom:1px solid #d8d8d8; border-top:1px solid #d8d8d8;background-color: #ffffff; padding-bottom: 30px;'>
      
    
     
        <table class='medium_width' align='center' width='100%' border='0' cellpadding='0' cellspacing='0'>
         <tr>      
          <td class='desktop' width='67' style='padding-top:18px;'>&nbsp;</td>
          <td style='border-top: 1px solid #d9d9d9; color:#333333; font-family: Helvetica, sans-serif;text-align:left; font-size:14px; line-height:20px; padding-top:18px; padding-bottom:18px;'>
            <strong> Thank You for contact us!</strong><hr style='margin-right:85%; border: solid 2px;'>
           Thank you for contact with <strong>Gau Urja</strong>- We're all about providing of Natural Gau Product and Treatment. For more details visit our website.<br>
          
          </td>          
         <td class='desktop' width='34' style='border-top: 1px solid #d9d9d9;padding-top:18px;'></td>
        
         <td class='desktop' width='67' style='padding-top:18px;'></td>
        </tr>
        </table>
        
        <br><br>
         <a href='http://gauurja.com/' target='_blank'><button style='background-color: blue; border: red; padding: 8px; color: #fff;' >View More</button></a>

        <br><br>

         <table class='medium_width' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' sty>
         <tr style='background-color: red; color: #fff;' >      
         
          <td style='font-size: 14px; padding: 15px;'>
            <strong>Address:</strong><br>
          Address:  OPD & Residential Treatment Centre Gau Urja Cancer Research & Panchgavya Natural treatment Centre,Hingane road, Vaduj, Tal. Khatav, Dist. Satara. - 415506 

          </td> 
          <td style='font-size: 14px; padding: 15px; height: 2px;'>
          <strong>Contact:</strong><br>  9561383219 / 8108400909
 
Email: gauurjahealthservices@gmail.com </td>         
        
        
         
        </tr>
        </table>   
 
        
 
        
      <!-- social media links -->  
           
     
      
    </td>
    <td>&nbsp;</td>
  </tr>
</table> <!--/end wrapper-->
  
  

  


</body>
</html>";
/*$dt = date('d-m-Y');
$sql = "INSERT INTO `tbl_inquiry`(`name`, `contact`, `email`, `message`, `site_name`, `cdate`) VALUES ('$userName','$userPhone','$userEmail','$userMessage','Nidhi','$dt')";*/

        
      if (mail($to, $subject, $message, $headers) && mail($userEmail, $subject1, $message1, $headers)){
        /* && mysqli_query($conn, $sql)*/
             echo "<script type='text/javascript'>
         swal({
    title: 'Thank you for contacting us',
    text: 'We will contact you as soon!',
    type: 'success'
}).then(function() {
    window.location = 'index.php';
}); </script>" ;
       
         } else {
            /* echo "<script type='text/javascript'> window.location = 'contact.php?error=Something went wrong with data'; </script>";*/
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
     
 }
 }
 ?>

