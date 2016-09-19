<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/john_anthony_template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>John Anthony's - Italian Restaurant, Lounge and Banquet - Beverages &amp; Deserts</title>
<!-- InstanceEndEditable -->

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="includes/johnanthony.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="TopBanner">
  <div class="TopBanner_X">
  	<div class="Logo"></div>
    <div class="Logo_Text">
      <p><a href="#" target="_blank">Blog</a></p>
      <p><a href="#">Reviews</a></p>
      <p><a href="#" target="_blank"><img src="images/soc_fb.gif" width="26" height="26" border="0" /></a><a href="#" target="_blank"><img src="images/soc_tw.gif" width="23" height="26" border="0" /></a></p>
    </div>
  </div>
</div>
<div class="Menu">
  <div class="Menu_X">
  	<ul id="nav">
                <li>
                    <a href="index.html">HOME</a>                </li>            
                <li>
                    <a href="dine_in.html">DINE-IN MENU</a>
                    <ul>
                        <li><a href="dine_in.html#appetizers">APPETIZERS & FINGER FOODS</a></li>            
                        <li><a href="dine_in.html#salads">SOUPS & SALADS</a></li>
                        <li><a href="dine_in.html#sandwiches">SANDWICHES, WRAPS & BURGERS</a></li>
                      <li><a href="dine_in.html#hoagies">HOAGIES & PIZZAS</a></li>
                        <li><a href="dine_in.html#italian">ITALIAN ENTREES & KIDS STUFF</a></li>
                        <li><a href="dine_in.html#american">AMERICAN ENTREES</a></li>
                    </ul>
      </li>
      
      <li>
                    <a href="beverages.html">BEVERAGES & DESERTS</a>
                    <ul>
                        <li><a href="beverages.html#bar">FROM THE BAR</a></li>            
                        <li><a href="beverages.html#beverages">BEVERAGES & DESERTS</a></li>
                    </ul>
      </li>
      
                 
<li>
                    <a href="banquet.html">BANQUET MENU</a>
                    <ul>
                        <li><a href="banquet.html">STANDARD BUFFET</a></li>            
                        <li><a href="banquet.html#banquet2">LIMITED BUFFET</a></li>
                        <li><a href="banquet.html#banquet3">WRAP BUFFET</a></li>
                        <li><a href="banquet.html#banquet4">SALAD BUFFET</a></li>
                        <li><a href="banquet.html#banquet4">NY DELI BUFFET</a></li>
                        <li><a href="banquet.html#banquet5">APPETIZER ADD-ONS</a></li>
                        <li><a href="contract.pdf" target="_blank">CONTRACT</a></li>
        </ul>
                </li>
               
                <li>
                    <a href="contact.php">CONTACT US</a>      </li>
            </ul> 
  </div>
</div>

<div class="Display"><!-- InstanceBeginEditable name="Content Area" -->
     <div class="Display_X">
      <table width="100%" border="0" cellspacing="20" cellpadding="20">
      <tr>
      	<td height="30"><h3 id="bar" >Contact Us</h3></td>
      </tr>
  <tr>
    <td>
      <table width="100%" border="0" cellspacing="8" cellpadding="8">
        <tr>
          <td><h2>Message confirmation</h2>
          
          <p>&nbsp;</p>
          <?php
// Contact subject
$subject=$_POST['subject'];
// Details
$message=$_POST['detail'];

// Mail of sender
$mail_from=$_POST['customer_mail']; 
// From 
$header="from:".$_POST['name']."<$mail_from>";

// Enter your email address
$to ='ginab63@comcast.net'; 

$send_contact=mail($to,$subject,$message,$header);

// Check, if message sent to your email 
// display message "Your message has been sent."
if($send_contact){
echo "Your message has been sent.";
}
else {
echo "ERROR";
}
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>   
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>  
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>                        
              </td>
          </tr>
        </table></td>
    </tr>
</table>
  </div>

  <!-- InstanceEndEditable -->
</div>

<div class="Footer">
  <div class="Footer_X">
  	<ul id="footer_text">
                <li>
                    <a href="index.html">HOME</a>                </li>            
                <li>
                    <a href="dine_in.html">DINE-IN MENU</a>
                    <ul>
                		<li><a href="dine_in.html#appetizers">APPETIZERS</a></li>            
                        <li><a href="dine_in.html#salads">SOUPS & SALADS</a></li>
                        <li><a href="dine_in.html#sandwiches">SANDWICHES & MORE</a></li>
                      	<li><a href="dine_in.html#hoagies">HOAGIES & PIZZAS</a></li>
                        <li><a href="dine_in.html#italian">ITALIAN ENTREES & KIDS STUFF</a></li>
                        <li><a href="dine_in.html#american">AMERICAN ENTREES</a></li>
                    </ul>
      </li>
      
      <li>
                    <a href="beverages.html">BEVERAGES & DESERTS</a>
                    <ul>
                        <li><a href="beverages.html#bar">FROM THE BAR</a></li>            
                        <li><a href="beverages.html#beverages">BEVERAGES & DESERTS</a></li>
                    </ul>
      </li>
      
                 
<li>
                    <a href="banquet.html">BANQUET MENU</a>
                    <ul>
                        <li><a href="banquet.html">STANDARD BUFFET</a></li>            
                        <li><a href="banquet.html#banquet2">LIMITED BUFFET</a></li>
                        <li><a href="banquet.html#banquet3">WRAP BUFFET</a></li>
                        <li><a href="banquet.html#banquet4">SALAD BUFFET</a></li>
                        <li><a href="banquet.html#banquet4">NY DELI BUFFET</a></li>
                        <li><a href="banquet.html#banquet5">APPETIZER ADD-ONS</a></li>
                        <li><a href="contract.pdf" target="_blank">CONTRACT</a></li>
        </ul>
                </li>
               
                
                <li>
                    <a href="contact.php">CONTACT US</a>      </li>
            </ul> 
  </div>
</div>
</body>
<!-- InstanceEnd --></html>
