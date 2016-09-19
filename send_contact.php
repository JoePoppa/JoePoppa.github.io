<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/jp_template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Joseph Poppa - Graphic Design - Animation - Interactive Design - Illustration - 3D Modelling</title>
<!-- InstanceEndEditable -->
<script type="text/javascript" src="includes/jquery-1.6.min.js"></script>

<script type="text/javascript" src="includes/cycle_full.js"></script>
<script type="text/javascript"> 
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});

// Tabs & Slideshow:
$j("#ws_tabs div").mouseover(function(){
$j("#ws_yellow_arrow").css({"top" : ($j(this).index()*57.5)+20+"px"}).show();
});
$j("#ws_tabs div").mouseout(function(){
$j("#ws_yellow_arrow").hide();
});
$j("#ws_tabs div").click(function(){
$j("#ws_slideshow").cycle($j(this).index()).cycle("pause");
}); 
</script>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="container">
	<div id="header"></div>
		<div id="menu">   
            <ul id="nav">
                <li>
                    <a href="index.html">HOME</a>
                </li>            
                <li>
                    <a href="portfolio.html">PORTFOLIO</a>
                    <ul>
                        <li><a href="port_int_01.html">INTERFACE DESIGN</a></li>            
                        <li><a href="port_email_01.html">E-MAIL DESIGN</a></li>
                        <li><a href="port_modeling_01.html">3D MODELING & ANIMATION</a></li>
                        <li><a href="port_print_01.html">PRINTED DESIGN</a></li>
                        <li><a href="port_other_01.html">OTHER DESIGN</a></li>
                    </ul>
                </li>
                <li>
                    <a href="designer.html">THE DESIGNER</a>
            
                    <ul>
                        <li><a href="Jwpoppa_2011_resume.doc" target="_blank">MY RESUME</a></li>            
                        <li><a href="http://www.linkedin.com/profile/view?id=4352093&trk=tab_pro" target="_blank">LINKED-IN PROFILE</a></li>
                    </ul>
            
                </li>
                <li>
                    <a href="contact.php">CONTACT ME</a>
                </li>
            </ul>          
  		</div>
        <!--END HEADER-->
        
        <div id="body"> 
        
       	  <div id="leftCol"><!-- InstanceBeginEditable name="Left Column" -->
          
          
          <!--BODY ARTICLES OF THE PAGE BELOW LEFT COLUMN-->
          <h1>Contact</h1>
          <h2>Message confirmation</h2>
          
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
$to ='jwpoppa@gmail.com'; 

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
       	  <!-- InstanceEndEditable --></div>
      <div id="rightCol"><!-- InstanceBeginEditable name="Right Column" -->
      <h2>More About the Designer</h2>
      <p><img src="images/home_me.jpg" alt="Me" width="260" height="140" /></p>
      <p>What better way to research work history and peruse a few references?</p>
      <p><a href="http://www.linkedin.com/profile/view?id=4352093&amp;trk=tab_pro" target="_blank">Visit my Linked-In Profile »</a></p>
      <p>&nbsp;</p>
     
      <!-- InstanceEndEditable --></div>    
          
          
<!--FOOTER-->
          <div id="footer">
          	<ul id="footer_text">
                <li>
                    <a href="index.html">HOME</a>
                </li>            
                <li>
                    <a href="portfolio.html">PORTFOLIO</a>
                    <ul>
                        <li><a href="port_int_01.html">INTERFACE DESIGN</a></li>            
                      <li><a href="port_email_01.html">E-MAIL DESIGN</a></li>
                        <li><a href="port_modeling_01.html">3D MODELING</a></li>
                        <li><a href="port_print_01.html">PRINTED DESIGN</a></li>
                        <li><a href="port_other_01.html">OTHER DESIGN</a></li>
                    </ul>
                </li>
                <li>
                    <a href="designer.html">THE DESIGNER</a>
            
                    <ul>
                        <li><a href="Jwpoppa_2011_resume.doc" target="_blank">MY RESUME</a></li>            
                      <li><a href="http://www.linkedin.com/profile/view?id=4352093&trk=tab_pro" target="_blank">LINKED-IN PROFILE</a></li>
                    </ul>
            
                </li>
                <li>
                    <a href="contact.php">CONTACT ME</a>
                </li>
            </ul>        
          </div>
<!--END FOOTER-->          
          
          
        </div>

</div>

</body>
<!-- InstanceEnd --></html>
